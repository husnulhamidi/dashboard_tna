<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawalan extends CI_Controller {

	private $karyawanId;
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->helper('custom_helper');

		$this->load->model(array('lokasi_akun_model','UsulanTnaModel','TnaModel','PengawalanModel'));
		$this->load->model('InternalSharing_Model', 'InternalSharing');
		$userData = $this->session->userdata('user');
		$this->karyawanId = $userData['m_karyawan_id'];
    
	}

	public function index($active_tab="all"){
        $data['breadcrumb'] 	= 'Pengawalan > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'tna_pengawalan';
		$data['title'] 			= 'Daftar Pengawalan TNA / NON TNA';
        $data['active_tab'] 	= $active_tab;
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['kompetensi'] = $this->UsulanTnaModel->get_kompetensi();
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		$data['tahapan_proses'] = $this->PengawalanModel->tahapan_proses();
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
			'plugins/daterangepicker/daterangepicker-bs3.css'
		); // css tambahan
		$data['js']				= array(
			'plugins/daterangepicker/moment.js',
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/Pengawalan/Pengawalan.js?random='.date("ymdHis"),
			'plugins/daterangepicker/daterangepicker.js',
		);

        if($active_tab=='verifikasi'){
            $pageindex = 'tna/pengawalan/index_admhcpd';
            //$pageindex = 'tna/pengawalan/index_verifikasi';
        }
        else if($active_tab=='selesai'){
            $pageindex = 'tna/pengawalan/index_selesai';
        }else{
            $pageindex = 'tna/pengawalan/index';
        }

        $data['active_tab'] = $active_tab;
		$this->template->load('template',$pageindex,$data);
	}

	public function getData(){
		$get = $this->input->get();
		echo $this->PengawalanModel->getDataPengawalan($get);
	}

	public function getDataDashboard(){
		echo json_encode($this->PengawalanModel->getDataDashboard());
	}

	public function verifikasi(){
		$urutan = 1;
		$status = 'Tidak';
		$keterangan = 'Reject (' . $this->input->post('keterangan') . ') ';
		if($this->input->post('verifikasi') == 'ya'){
			$urutan = $this->input->post('urutan') + 1;
			$status = 'Ya';
			$keterangan = 'Approve';
		}
		
		$thapanId = $this->TnaModel->get_tahapan_id($urutan);
		update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
		save_history_pengawalan($this->input->post('id'), $thapanId->id, $status,$keterangan, $this->karyawanId);

		$return = array(
			'success'		=> true,
			'status_code'	=> 200,
			'msg'			=> "Data berhasil diubah.",
			'data'			=> array()
		);
		
		echo json_encode($return);
	}

	public function pakta_integritas(){
		if($this->input->post('file-pakta-integritas')){
			$fileName = $this->input->post('file-pakta-integritas');
			$pathName = './files/upload/tna/pakta_integritas';
			$allowed_types = 'pdf';
			$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
			if($upload_file['success'] == false){
			    die(json_encode($upload_file)); 
			}
		}

		$data = array(
			'm_tna_pengawalan_id'	=> $this->input->post('id'),
			'nama_dokumen'			=> $upload_file['data'],
			'tipe'					=> 'pakta integritas',
			'created_by'			=> $this->karyawanId,
			'created_date'			=> date('Y-m-d')
		);
		$action = $this->PengawalanModel->save_dokumen($data);
		if ($action) {
			$urutan = $this->input->post('urutanId') + 1;
			$thapanId = $this->TnaModel->get_tahapan_id($urutan);
			update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
			save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Upload Form Pernyataan Peserta (Form Integritas)', $this->karyawanId);

			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}

		echo json_encode($return);
	}

	public function konfirmasi_jadwal(){
		// save waktu pelaksanaan 
		// $tgl = explode('-', trim($this->input->post('waktu_pelaksanaan')));
		$tgl1 = explode('/', trim($this->input->post('waktu_pelaksanaan_awal')));
		$tgl2 = explode('/', trim($this->input->post('waktu_pelaksanaan_akhir')));
		$data_waktu = array(
			'm_tna_pengawalan_id' 	=> $this->input->post('id'),
			'tanggal_mulai'			=> $tgl1[2].'-'.$tgl1[0].'-'.$tgl1[1],
			'tanggal_selesai'		=> $tgl2[2].'-'.$tgl2[0].'-'.$tgl2[1],
			'created_by'			=> $this->karyawanId,
			'created_date'			=> date('Y-m-d')
		);
		$action = $this->PengawalanModel->save_waktu($data_waktu);
		if($action){
			// update data
			$urutan = $this->input->post('urutanId') + 1;
			$thapanId = $this->TnaModel->get_tahapan_id($urutan);
			update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );

			// save history
			save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Konfirmasi Jadwal', $this->karyawanId);

			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}
		
		echo json_encode($return);
	}

	public function kelengkapan_dokumen(){
		try {
			// form pendaftaran
			$dokumenArray = array();
			if($this->input->post('file-pendaftaran')){
				$fileName = $this->input->post('file-pendaftaran');
				$pathName = './files/upload/tna/kelengkapan_dokumen/form_pendaftaran';
				$allowed_types = '*';
				$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
				if($upload_file['success'] == false){
				    // die(json_encode($upload_file)); 
				    array_push($dokumenArray, '');
				}else{
					array_push($dokumenArray, $upload_file['data']);
				}
				
			}

			// Guarantee latter
			if($this->input->post('file-gurantee')){
				$fileName = $this->input->post('file-gurantee');
				$pathName = './files/upload/tna/kelengkapan_dokumen/guarantee_latter';
				$allowed_types = '*';
				$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
				if($upload_file['success'] == false){
				    // die(json_encode($upload_file)); 
				    array_push($dokumenArray, '');
				}else{
					array_push($dokumenArray, $upload_file['data']);
				}
			}

			// dokumen lainnya
			if($this->input->post('file-lainnya')){
				$fileName = $this->input->post('file-lainnya');
				$pathName = './files/upload/tna/kelengkapan_dokumen/lainnya';
				$allowed_types = '*';
				$upload_file = upload_file($fileName, $pathName, $allowed_types, $this, $this->input->post('dokumen'));
				if($upload_file['success'] == false){
				    // die(json_encode($upload_file)); 
				    array_push($dokumenArray, '');
				}else{
					array_push($dokumenArray, $upload_file['data']);
				}
			}

			$ket = [
				'form peserta',
				'guarantee latter',
				'dokumen lainnya'
			];
			foreach ($dokumenArray as $key => $value) {
				if($value != ''){
					$data = array(
						'm_tna_pengawalan_id'	=> $this->input->post('id'),
						'nama_dokumen'			=> $value,
						'tipe'					=> $ket[$key],
						'created_by'			=> $this->karyawanId,
						'created_date'			=> date('Y-m-d')
					);
					$this->PengawalanModel->save_dokumen($data);
				}
				
			}

			$urutan = $this->input->post('urutanId') + 1;
			$thapanId = $this->TnaModel->get_tahapan_id($urutan);
			update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
			save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Proses Kelengkapan Dokumen', $this->karyawanId);

			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
			echo json_encode($return);
		
		} catch (Exception $e) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
	}

	public function nota_dinas(){
		if($this->input->post('file_dokumen')){
			$fileName = $this->input->post('file_dokumen');
			$pathName = './files/upload/tna/nota_dinas_penugasan';
			$allowed_types = '*';
			$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
			if($upload_file['success'] == false){
			    die(json_encode($upload_file)); 
			}	
		}

		$tgl = explode('/', $this->input->post('tgl_rilis'));
		$data = array(
			'm_tna_pengawalan_id' 	=> $this->input->post('id'),
			'no_nde'				=> $this->input->post('no_nde'),
			'perihal'				=> $this->input->post('perihal'),
			'tanggal_rilis'			=> $tgl[2].'-'.$tgl[0].'-'.$tgl[1],
			'approved_by'			=> $this->input->post('disetujui_oleh'),
			'keterangan'			=> $this->input->post('keterangan'),
			'dokumen'				=> $upload_file['data'],
			'created_by'			=> $this->karyawanId,
			'created_date'			=> date('Y-m-d')
		);
		$action = $this->PengawalanModel->save_nota_dinas($data);

		$data = array(
			'm_tna_pengawalan_id'	=> $this->input->post('id'),
			'nama_dokumen'			=> $upload_file['data'],
			'tipe'					=> 'nota dinas',
			'created_by'			=> $this->karyawanId,
			'created_date'			=> date('Y-m-d')
		);
		$action = $this->PengawalanModel->save_dokumen($data);


		if($action){
			$urutan = $this->input->post('urutanId') + 1;
			$thapanId = $this->TnaModel->get_tahapan_id($urutan);
			update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
			save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Nota Dinas Penugasan', $this->karyawanId);

			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
			
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}

		echo json_encode($return);
	}

	public function pembayaran(){
		
		if($this->input->post('file-bukti-pembayaran')){
			$fileName = $this->input->post('file-bukti-pembayaran');
			$pathName = './files/upload/tna/bukti_pembayaran';
			$allowed_types = '*';
			$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
			if($upload_file['success'] == false){
			    die(json_encode($upload_file)); 
			}
		}

		$tgl_rilis = explode('/', $this->input->post('tgl'));
		$unit = $this->input->post('unit');
		if($this->input->post('unit_tmp') != ''){
			$unit = $this->input->post('unit_tmp');
		}
		$data = array(
			'm_tna_pengawalan_id' 	=> $this->input->post('id'),
			'nominal'				=> $this->input->post('nilai'),
			'tanggal'				=> $tgl_rilis[2].'-'.$tgl_rilis[0].'-'.$tgl_rilis[1],
			'mata_anggaran'			=> $this->input->post('mata_anggaran'),
			'no_mata_anggaran'		=> $this->input->post('nomor_mata_anggaran'),
			'm_organisasi_id'		=> $unit,
			'bukti_pembayaran'		=> $upload_file['data'],
			'is_sppd'				=> $this->input->post('biayasppdp') == 'ya' ? 1 : 0,
			'created_by'			=> $this->karyawanId,
			'created_date'			=> date('Y-m-d')
		);

		

		if($this->input->post('biayasppdp') == 'ya'){
			$sppdpData = $this->input->post('sppdp');
			parse_str($sppdpData, $sppdpArray);

			$tgl_spp = explode('/', $sppdpArray['tgl_pembayaran_sppdp']);

			$data['nominal_sppd']			= $sppdpArray['nilai_sppd'];
			$data['tanggal_sppd']			= $tgl_spp[2].'-'.$tgl_spp[0].'-'.$tgl_spp[1];
			$data['mata_anggaran_sppd']		= $sppdpArray['sppdp_mata_anggaran'];
			$data['no_mata_anggaran_sppd']	= $sppdpArray['sppdp_nomor_mata_anggaran'];
			$data['m_organisasi_id_sppd']	= $sppdpArray['sppdp_unit'];
		}

		// echo json_encode($data);
		
		$action = $this->PengawalanModel->save_pembayaran($data);
		if($action){
			$urutan = $this->input->post('urutanId') + 1;
			$thapanId = $this->TnaModel->get_tahapan_id($urutan);
			update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
			save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Pembayaran', $this->karyawanId);

			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
			
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}

		echo json_encode($return);
	}

	public function upload_serifikat(){
		if($this->input->post('file_sertifikat')){
			$fileName = $this->input->post('file_sertifikat');
			$pathName = './files/upload/tna/sertifikat';
			$allowed_types = '*';
			$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
			if($upload_file['success'] == false){
			    die(json_encode($upload_file)); 
			}	
		}

		$tgl = explode('/', $this->input->post('masa_berlaku_awal'));
		$tgl2 = explode('/', $this->input->post('masa_berlaku_akhir'));
		$data = array(
			'm_tna_pengawalan_id'	=> $this->input->post('id'),
			'nama_dokumen'			=> $upload_file['data'],
			'no_dokumen'			=> $this->input->post('nomor_serifikat'),
			'tipe'					=> 'sertifikat',
			'tanggal_berlaku_awal'	=> $tgl[2].'-'.$tgl[0].'-'.$tgl[1],
			'tanggal_berlaku_akhir'	=> $tgl2[2].'-'.$tgl2[0].'-'.$tgl2[1],
			'created_by'			=> $this->karyawanId,
			'created_date'			=> date('Y-m-d')
		);
		$action = $this->PengawalanModel->save_dokumen($data);
		if($action){
			$urutan = $this->input->post('urutanId') + 1;
			$thapanId = $this->TnaModel->get_tahapan_id($urutan);
			update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
			save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Nota Dinas Penugasan', $this->karyawanId);

			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
			
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}

		echo json_encode($return);
	}

	public function upload_materi(){
		if($this->input->post('upload_file_materi')){
			$fileName = $this->input->post('upload_file_materi');
			$pathName = './files/upload/tna/materi';
			$allowed_types = '*';
			$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
			if($upload_file['success'] == false){
			    die(json_encode($upload_file)); 
			}	
		}

		$data = array(
			'm_tna_pengawalan_id'	=> $this->input->post('id'),
			'nama_materi'			=> $this->input->post('nama_dokumen'),
			'dokumen'				=> $upload_file['data'],
		);
		$action = $this->PengawalanModel->save_materi($data);
		if($action){
			$urutan = $this->input->post('urutanId') + 1;
			$thapanId = $this->TnaModel->get_tahapan_id($urutan);
			update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
			save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Nota Dinas Penugasan', $this->karyawanId);

			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
			
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}

		echo json_encode($return);
	}

	public function internal_sharing(){
		$waktu = explode("-", $this->input->post('tgl'));
		$tgl1 = explode("/", $waktu[0]);
		$tgl = $tgl1[2].'-'.$tgl1[0].'-'.$tgl1[1];

    	$data = array(
    		'biaya' => $this->input->post('biaya'),
    		'kuota' => $this->input->post('kuota'),
			'link_zoom' => $this->input->post('linkZoom'),
			'tempat' => $this->input->post('tempat'),
			'jam' => $this->input->post('waktu'),
			'tanggal' => $tgl,
			'm_tna_pengawalan_id'	=> $this->input->post('id'),
			'judul_materi' => $this->input->post('judul'),
			'm_organisasi_id' => $this->input->post('direktorat'),
			'm_karyawan_id' => $this->input->post('pemateri'),
			'created_by'	=> $this->karyawanId,
			'created_date'	=> date('Y-m-d')
		);

		$action = $this->InternalSharing->insertData($data);
		if($action){
			$dataHistory = array(
				'm_tna_internal_sharing_id' => $action,
				'keterangan' => 'Buat Internal Sharing',
				'created_date' => date('Y-m-d')
			);
			$this->InternalSharing->insertDataHistory($dataHistory);

			$urutan = $this->input->post('urutanId') + 1;
			$thapanId = $this->TnaModel->get_tahapan_id($urutan);
			// update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
			save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Internal Sharing', $this->karyawanId);

			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}
		echo json_encode($return);
	}

	public function evaluasi(){
		// cek dulu ke tabel internal sharing
		$urutan = $this->input->post('urutanId') + 1;
		$thapanId = $this->TnaModel->get_tahapan_id($urutan);
		if($this->input->post('is_complete') == 1){
			update_pengawalan($this->input->post('id'), $thapanId->id, $this->karyawanId );
		}

		save_history_pengawalan($this->input->post('id'), $thapanId->id, 'Ya','Evaluasi', $this->karyawanId);

		$dataEvaluasi = array(
			'is_evalausi' => 1
		);
		$action = $this->PengawalanModel->update_evaluasi($this->input->post('id'), $dataEvaluasi);
		$return = array(
			'success'		=> true,
			'status_code'	=> 201,
			'msg'			=> "Data berhasil diubah.",
			'data'			=> array()
		);	
	}

	public function get_id_organisasi(){
		$data = $this->PengawalanModel->get_id_organisasi($this->input->post('name'));
		echo json_encode($data);
	}

	public function detail($id, $active_tab="riwayat_verifikasi"){
		// echo $active_tab;
		$data['breadcrumb'] 	= 'Pengawalan > Detail > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'tna_pengawalan';
		$data['title'] 			= 'Detail Pengawalan TNA / NON TNA';
        $data['active_tab'] 	= $active_tab;
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['detail'] = $this->PengawalanModel->get_detail($id);
		$data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
			'plugins/daterangepicker/daterangepicker-bs3.css'
		); // css tambahan
		$data['js']				= array(
			'plugins/daterangepicker/moment.js',
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/Pengawalan/Pengawalan.js?random='.date("ymdHis"),
			'plugins/daterangepicker/daterangepicker.js',
		);


		$pageindex = 'tna/pengawalan/detail';


        $data['active_tab'] = $active_tab;
		$this->template->load('template',$pageindex,$data);
	}

	public function riwayat_verifikasi(){
		$get = $this->input->get();
		$data = $this->PengawalanModel->riwayat_verifikasi($get);
		echo json_encode($data);
	}

	public function get_detail_dokumen(){
		$id = $this->input->get('id');
		$data = $this->PengawalanModel->get_detail_dokumen($id);
		echo json_encode($data);
	}

	public function get_detail_pembayaran(){
		$id = $this->input->get('id');
		$data = $this->PengawalanModel->get_detail_pembayaran($id);
		echo json_encode($data);
	}

	public function get_detail_materi(){
		$get = $this->input->get();
		$data = $this->PengawalanModel->get_detail_materi($get);
		echo json_encode($data);
	}

	public function get_detail_intenal_sharing(){
		$id = $this->input->get('id');
		$data = $this->PengawalanModel->get_detail_intenal_sharing($id);
		echo json_encode($data);
	}

	public function get_detail_peserta_intenal_sharing(){
		$get = $this->input->get();
		$data = $this->PengawalanModel->get_detail_peserta_intenal_sharing($get);
		echo json_encode($data);
	}

	public function edit_waktu(){
		// echo json_encode($this->input->post());
		$tgl = explode('/', $this->input->post('waktu_pelaksanaan'));
		$data = array(
			'waktu_pelaksanaan' => $tgl[2].'-'.$tgl[0].'-'.$tgl[1]
		);
		$action = $this->TnaModel->updateData($data, $this->input->post('id_pengawalan'));
		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> $action
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> $action
			);
		}
		echo json_encode($return);
	}

	public function add_peserta(){
		$data = array(
    		'm_tna_internal_sharing_id' => $this->input->post('isId'),
    		'm_karyawan_id' => $this->input->post('peserta'),
    		'created_date'	=> date('Y-m-d'),
    		'created_by'	=> $this->karyawanId
    	);
		$action = $this->InternalSharing->insertDataPeserta($data);
		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> $action
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> 'Data gagal di simpan.',
				'data'			=> array()
			);
		}
		echo json_encode($return);	
	}

	public function edit_internal_sharing(){
		// echo json_encode($this->input->post());
		$waktu = explode("-", $this->input->post('tgl'));
		$tgl1 = explode("/", $waktu[0]);
		$tgl = $tgl1[2].'-'.$tgl1[0].'-'.$tgl1[1];

    	$data = array(
    		'biaya' => $this->input->post('biaya'),
    		'kuota' => $this->input->post('kuota'),
			'link_zoom' => $this->input->post('linkZoom'),
			'tempat' => $this->input->post('tempat'),
			'jam' => $this->input->post('waktu'),
			'tanggal' => $tgl
		);

		$action = $this->PengawalanModel->updateInternalSharing($data, $this->input->post('id'));
		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> $action
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> 'Data gagal di simpan.',
				'data'			=> array()
			);
		}
		echo json_encode($return);
	}

	public function edit_pembayaran(){
		if($this->input->post('file-bukti-pembayaran')){
			$fileName = $this->input->post('file-bukti-pembayaran');
			$pathName = './files/upload/tna/bukti_pembayaran';
			$allowed_types = '*';
			$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
		}

		$tgl_rilis = explode('/', $this->input->post('tgl'));
		$unit = $this->input->post('unit');
		if($this->input->post('unit_tmp') != ''){
			$unit = $this->input->post('unit_tmp');
		}
		$data = array(
			'nominal'				=> $this->input->post('nilai'),
			'tanggal'				=> $tgl_rilis[2].'-'.$tgl_rilis[0].'-'.$tgl_rilis[1],
			'mata_anggaran'			=> $this->input->post('mata_anggaran'),
			'no_mata_anggaran'		=> $this->input->post('nomor_mata_anggaran'),
			'm_organisasi_id'		=> $unit,
			// 'bukti_pembayaran'		=> $upload_file['data'],
			'is_sppd'				=> $this->input->post('biayasppdp') == 'ya' ? 1 : 0,
		);

		if($this->input->post('biayasppdp') == 'ya'){
			$sppdpData = $this->input->post('sppdp');
			parse_str($sppdpData, $sppdpArray);

			$tgl_spp = explode('/', $sppdpArray['tgl_pembayaran_sppdp']);

			$data['nominal_sppd']			= $sppdpArray['nilai_sppd'];
			$data['tanggal_sppd']			= $tgl_spp[2].'-'.$tgl_spp[0].'-'.$tgl_spp[1];
			$data['mata_anggaran_sppd']		= $sppdpArray['sppdp_mata_anggaran'];
			$data['no_mata_anggaran_sppd']	= $sppdpArray['sppdp_nomor_mata_anggaran'];
			$data['m_organisasi_id_sppd']	= $sppdpArray['sppdp_unit'];
		}

		// echo json_encode($data);
		if($upload_file['data']){
			$data['bukti_pembayaran']			= $upload_file['data'];
		}
		
		$action = $this->PengawalanModel->edit_pembayaran($data, $this->input->post('id'));
		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
			
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}

		echo json_encode($return);	
	}

	public function complete_internal_sharing(){
		// echo json_encode($this->input->post());
		// ubah intenal sharing
		$dataInternalSharing = array(
			'is_complete' => 1
		);
		$action = $this->PengawalanModel->updateInternalSharing($dataInternalSharing, $this->input->post('internalSharingId') );
		if($action){
			// cek pengawalan
			$cekData = $this->PengawalanModel->get_detail($this->input->post('pengawalanId'));
			$is_evaluasi = $cekData->is_evaluasi;
			$tahapan_id = $cekData->tahapan_id;
			if($is_evaluasi == 1){
				save_history_pengawalan($this->input->post('pengawalanId'), 190, 'Ya','Selseai', $this->karyawanId);

				update_pengawalan($this->input->post('pengawalanId'), 190, $this->karyawanId );

			}
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> array()
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> array()
			);
		}

		
		echo json_encode($return);
	}

    public function manager($active_tab="all"){
        $data['breadcrumb'] 	= 'Usulan > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'usulan_tna';
		$data['title'] 			= 'Daftar Usulan';
        $data['active_tab'] 	= $active_tab;
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
		);

        if($active_tab=='proses-verifikasi'){
            $pageindex = 'tna/usulan/index_verifikasi';
        }else if($active_tab=='ditolak'){
            $pageindex = 'tna/usulan/index_ditolak';
        }else if($active_tab=='disetujui'){
            $pageindex = 'tna/usulan/index_disetujui';
        }else{
            $pageindex = 'tna/usulan/index';
        }

		$this->template->load('template',$pageindex,$data);
	}


	public function create(){
        $data = array();
        $data['breadcrumb'] 	= 'Usulan > Tambah';
        $data['title'] 			= 'Tambah Usulan';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'usulan_tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
        );
		$data['js']				= array(	// js tambahan
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
            
        );
		
		$this->template->load('template','tna/usulan/form_usulan', $data);
	}

	public function edit(){
        $data = array();
        $data['breadcrumb'] 	= 'Usulan > Edit';
        $data['title'] 			= 'Edit Usulan';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'usulan_tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
        );
		$data['js']				= array(	// js tambahan
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
            
        );
		
		$this->template->load('template','tna/usulan/form_edit_usulan', $data);
	}


	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */