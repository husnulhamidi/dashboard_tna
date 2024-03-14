<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if(!$this->session->userdata('user')){
		// 	redirect('auth/login');
		// }
		// if ($this->ion_auth->logged_in() != true) {
        //     Redirect(baseapplicationhcm, false);
        // }

		//$this->sess = unserialize($this->session->userdata('tna'));
		//$this->sessi = $this->session->userdata('session');
		
		$this->load->model(array(
            'lokasi_akun_model',
			'UsulanTnaModel',
			'TnaModel'
            
        ));
		$this->load->model('Reference/LembagaModel','lembagaModel');
    
	}

	public function index($active_tab="all")
	{
		$data['breadcrumb'] 	= 'Usulan > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'Usulan TNA';
		$data['title'] 			= 'Daftar Usulan';
        $data['active_tab'] 	= $active_tab;
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['role'] 			= strtolower($this->sess['role']['name']);
		$data['sess'] 			= $this->session->userdata('session');
		$data['subdit'] = $this->lokasi_akun_model->viewall_subdit()->result();
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
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/usulan/listTNA.js?random='.date("ymdHis"),
			'js/module/usulan/UsulanTNA.js?random='.date("ymdHis"),
			'js/module/usulan/verifikasi.js?random='.date("ymdHis"),
		);

        if($active_tab=='proses-verifikasi'){
            $pageindex = 'tna/usulan/index_proses_verifikasi';
        }
        else if($active_tab=='verifikasi'){
			if(strtolower($this->sess['role']['name'])=='Admin Unit' OR strtolower($this->sess['role']['name'])=='manager unit lini' OR strtolower($this->sess['role']['name'])=='manager unit'){
				$pageindex = 'tna/usulan/index_verifikasi';
			}else{
				//$pageindex = 'tna/usulan/index_verifikasi_admhcpd';
				$pageindex = 'tna/usulan/index_verifikasi';
			}
            
        }
		else if($active_tab=='verifikasi-vp-hcm'){
			$pageindex = 'tna/usulan/index_verifikasi_vp_hcm';
        }
        else if($active_tab=='ditolak'){
            $pageindex = 'tna/usulan/index_ditolak';
        }else if($active_tab=='disetujui'){
            $pageindex = 'tna/usulan/index_disetujui';
        }
		else if($active_tab=='dokumen'){
            $pageindex = 'tna/usulan/index_dokumen_verifikasi_vphcm';
        }
		else{
            $pageindex = 'tna/usulan/index';
        }

		$this->template->load('template',$pageindex,$data);
	}

    public function manager($active_tab="all")
	{
        $data['breadcrumb'] 	= 'Usulan > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'Usulan TNA';
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

	public function list_data()
	{
		$get = $this->input->get();
		echo $this->UsulanTnaModel->get_data($get);
	}

	public function dokumen_verifikasi()
	{
		$get = $this->input->get();
		echo $this->UsulanTnaModel->dokumen_verifikasi($get);
	}

	


	public function create()
	{
        $data = array();
        $data['breadcrumb'] 	= 'Usulan > Tambah';
        $data['title'] 			= 'Tambah Usulan';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'Usulan TNA';
		$data['submit_url'] 	= site_url('tna/usulan/submit');
		$data['sess'] 			= $this->session->userdata('session');
		$data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['kompetensi'] = $this->UsulanTnaModel->get_kompetensi();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		$data['lembaga'] = $this->TnaModel->get_lembaga();
		$data['direktorat'] = $this->TnaModel->get_direktorat();
		
		//echo json_encode($data);die;
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
        );
		$data['js']				= array(	// js tambahan
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/usulan/UsulanTNA.js?random='.date("ymdHis"),
            
        );
		
		$this->template->load('template','tna/usulan/form_usulan', $data);
	}

	public function edit()
	{
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

	
	public function submit(){

		try {
			// $data = array(
			// 	'm_organisasi_id'	=> $this->input->post('subdit'),
			// 	'm_karyawan_id'	=> $this->input->post('karyawan'),
			// 	'jenis_pelatihan' => $this->input->post('jenis_pelatihan'),
			// 	'r_tna_kompetensi_id' => $this->input->post('kompetensi'),
			// 	'jenis_development' => $this->input->post('jenis_development'),

			// 	'r_tna_traning_id' => $this->input->post('tna'),
			// 	'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			// 	'justifikasi_pengajuan' => $this->input->post('justifikasi'),

			// 	'metoda_pembelajaran' => $this->input->post('metoda'),
			// 	'estimasi_biaya' => preg_replace("/[,\s]/", '', $this->input->post('estimasi_biaya')),
			// 	'nama_penyelenggara' => $this->input->post('penyelenggara'),
			// 	'waktu_pelaksanaan' => $this->input->post('waktu_pelaksanaan'),
			// 	'status_karyawan' => $this->input->post('status_fte')
				
			// );
			if($this->input->post('new_penyelenggara')){
				$penyelenggara = $this->input->post('new_penyelenggara');
			}else{
				$getNamaPenyelenggara = $this->lembagaModel->get_lembaga_byid($this->input->post('penyelenggara'));
				$penyelenggara = $getNamaPenyelenggara['data']->nama_lembaga;
			}
			// $penyelenggara = $this->input->post('new_penyelenggara') ?? $this->input->post('penyelenggara');
			$data = array();
			$i=0;
			$no=1;
			foreach ($this->input->post('karyawan') as $key => $val) {
				$no = str_pad($no, 2, "0", STR_PAD_LEFT); 
				$code = $this->input->post('tna_code').rand(10,100).$no;
				$data[] = array(
					'm_organisasi_id'	=> $this->input->post('subdit')[$i],
					'm_karyawan_id'	=> $val,
					'jenis_pelatihan' => $this->input->post('jenis_pelatihan'),
					'r_tna_kompetensi_id' => $this->input->post('kompetensi'),
					'jenis_development' => $this->input->post('jenis_development'),
	
					'r_tna_traning_id' => $this->input->post('tna_id'),
					'nama_kegiatan' => $this->input->post('nama_kegiatan'),
					'justifikasi_pengajuan' => $this->input->post('justifikasi'),
	
					'metoda_pembelajaran' => $this->input->post('metoda'),
					'estimasi_biaya' => preg_replace("/[,\s]/", '', $this->input->post('estimasi_biaya')),
					// 'nama_penyelenggara' => $this->input->post('penyelenggara'),
					'nama_penyelenggara' => $penyelenggara,
					'waktu_pelaksanaan' => $this->input->post('waktu_pelaksanaan'),
					'status_karyawan' => $this->input->post('status_fte')[$i],
					'direktorat_id' => $this->input->post('direktorat')[$i],
					'tahapan_id' => 170,
					'created_by' => $this->ion_auth->user()->row()->id,
					'created_date' =>  date('Y-m-d'),
					'kode'			  => $code
					
				);
				$i++;$no++;
			}
			
			$action = $this->UsulanTnaModel->insert_batch($data);
			
	
			if($action){
				$return = array(
					'success'		=> true,
					'status_code'	=> 200,
					'msg'			=> "Data berhasil di simpan.",
					'data'			=> array()
				);
				  
			}else{
				$return = array(
					'success'		=> false,
					'status_code'	=> 500,
					'msg'			=> "Data gagal di simpan.",
					'data'			=> array()
				);
			}
			echo json_encode($return);
		} catch (\Throwable $th) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
		
		
	}

	public function submit_edit(){

		try {
			$data = array(
				'm_organisasi_id'	=> $this->input->post('subdit'),
				'm_karyawan_id'	=> $this->input->post('karyawan'),
				'jenis_pelatihan' => $this->input->post('jenis_pelatihan'),
				'r_tna_kompetensi_id' => $this->input->post('kompetensi'),
				'jenis_development' => $this->input->post('jenis_development'),

				'r_tna_traning_id' => $this->input->post('tna'),
				'nama_kegiatan' => $this->input->post('nama_kegiatan'),
				'justifikasi_pengajuan' => $this->input->post('justifikasi'),

				'metoda_pembelajaran' => $this->input->post('metoda'),
				'estimasi_biaya' => preg_replace("/[,\s]/", '', $this->input->post('estimasi_biaya')),
				'nama_penyelenggara' => $this->input->post('penyelenggara'),
				'waktu_pelaksanaan' => $this->input->post('waktu_pelaksanaan'),
				'status_karyawan' => $this->input->post('status_fte')
				
			);
			

			$usulan_id = decrypt_url($this->input->post('usulan_id'));
			$check = $this->UsulanTnaModel->get_data_byid($usulan_id);
			if($check['success']===TRUE){
				$data['updated_by'] = $this->ion_auth->user()->row()->id;
				$data['updated_date'] = date('Y-m-d');
				$action = $this->UsulanTnaModel->update($data,$usulan_id);
			}else{
				$tahapan = $this->UsulanTnaModel->get_tahapan_id(1,"Usulan TNA");
				$data['tahapan_id'] =@$tahapan['r_tahapan_usulan_id'];
				$data['created_by'] = $this->ion_auth->user()->row()->id;
				$data['created_date'] = date('Y-m-d');
				$action = $this->UsulanTnaModel->insert($data);
			}
	
			if($action){
				$return = array(
					'success'		=> true,
					'status_code'	=> 200,
					'msg'			=> "Data berhasil di simpan.",
					'data'			=> array()
				);
				  
			}else{
				$return = array(
					'success'		=> false,
					'status_code'	=> 500,
					'msg'			=> "Data gagal di simpan.",
					'data'			=> array()
				);
			}
			echo json_encode($return);
		} catch (\Throwable $th) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
		
		
	}

	public function submit_usulkan(){
		try {
			$usulan_id = decrypt_url($this->input->post('usulan_id'));
			$check = $this->UsulanTnaModel->get_data_byid($usulan_id);
			//$tahapan = $this->UsulanTnaModel->get_tahapan_id(2,"Usulan TNA");
			$tahapanNext = $this->UsulanTnaModel->get_tahapan_id(2,"Usulan TNA");
			$data =array(
				"tahapan_id"=>@$tahapanNext['r_tahapan_usulan_id']
			);
			$update = $this->UsulanTnaModel->update($data,$usulan_id);
			if($update){
				//$h_usualan_id = $this->UsulanTnaModel->insert_h_usulan($tahapan['r_jenis_usulan_id'],$this->sessi['biodata_detail']->id);
				$data = array(
					"m_tna_usulan_id" => $usulan_id,
					"tanggal" =>date("Y-m-d H:i:s"),
					"aksi" =>"Mengusulkan TNA",
					"status_verifikasi" =>"1",
					"keterangan" =>"",
					//"h_usulan_id" =>$h_usualan_id,
					"r_tahapan_usulan_id" =>$check['data']->tahapan_id,
					"m_karyawan_id" =>$this->sessi['biodata_detail']->id
				);
				$this->UsulanTnaModel->insert_h_riwayat_usulan($data);

				$return = array(
					'success'		=> true,
					'status_code'	=> 200,
					'msg'			=> "Data berhasil di simpan.",
					'data'			=> array()
				);
			}else{
				$return = array(
					'success'		=> false,
					'status_code'	=> 500,
					'msg'			=> "Data gagal di simpan.",
					'data'			=> array()
				);
			}

			echo json_encode($return);

		} catch (\Throwable $th) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
	}

	public function submit_verifikasi(){
		try {
			$usulan_id = decrypt_url($this->input->post('verifikasi_usulan_id'));
			$check = $this->UsulanTnaModel->get_data_byid($usulan_id);
			$is_verifikasi = $this->input->post('is_verifikasi');
			
			if((int)$check['data']->urutan==3 OR (int) $check['data']->urutan==4 OR (int) $check['data']->urutan==5){
				//echo "admin";die;
				// verifikasi admin hcpd , mgr .hcpd
				$tahapan_id = $check['data']->tahapan_id;
				if($check['data']->urutan==3){
					$data =array(
						"is_verifikasi_admin_hcpd" =>$is_verifikasi
					);
				}else if($check['data']->urutan==4){
					$data =array(
						"is_verifikasi_manager_hcpd" =>$is_verifikasi
					);
					if((int)$is_verifikasi==2){
						$data['is_rejected']=1;
					}
				}
				else if($check['data']->urutan==5){
					$data =array(
						"is_verifikasi_avp_hcm" =>$is_verifikasi
					);
					if((int)$is_verifikasi==2){
						$data['is_rejected']=1;
					}
				}
				
				$update = $this->UsulanTnaModel->update($data,$usulan_id);

				$data = array(
					"m_tna_usulan_id" 	=> $usulan_id,
					"tanggal" 			=>date("Y-m-d H:i:s"),
					"aksi" 				=>$check['data']->nama_tahapan,
					"status_verifikasi" =>$this->input->post('is_verifikasi'),
					"keterangan" 		=>$this->input->post('keterangan'),
					//"h_usulan_id" =>$h_usualan_id,
					"r_tahapan_usulan_id" =>$tahapan_id,
					"m_karyawan_id" 	=>$this->sessi['biodata_detail']->id
				);
				$this->UsulanTnaModel->insert_h_riwayat_usulan($data);

				$return = array(
					'success'		=> true,
					'status_code'	=> 200,
					'msg'			=> "Data berhasil di simpan.",
					'data'			=> array()
				);
			}else{
				// verifikasi manager lini
				if($is_verifikasi==1){
					$urutan = (int) $check['data']->urutan+1;
					$tahapan = $this->UsulanTnaModel->get_tahapan_id($urutan,"Usulan TNA");
					$tahapan_id = @$tahapan['r_tahapan_usulan_id'];
				}else{
					
					$urutan = $check['data']->urutan-1;
					$tahapan = $this->UsulanTnaModel->get_tahapan_id($urutan,"Usulan TNA");
					$tahapan_id = @$tahapan['r_tahapan_usulan_id'];
				}
				$data =array(
					"tahapan_id"=>$tahapan_id
				);
				$update = $this->UsulanTnaModel->update($data,$usulan_id);
				if($update){
					
					$data = array(
						"m_tna_usulan_id" 	=> $usulan_id,
						"tanggal" 			=>date("Y-m-d H:i:s"),
						"aksi" 				=>$check['data']->nama_tahapan,
						"status_verifikasi" =>$this->input->post('is_verifikasi'),
						"keterangan" 		=>$this->input->post('keterangan'),
						//"h_usulan_id" =>$h_usualan_id,
						"r_tahapan_usulan_id" =>$tahapan_id,
						"m_karyawan_id" 	=>$this->sessi['biodata_detail']->id
					);
					$this->UsulanTnaModel->insert_h_riwayat_usulan($data);

					$return = array(
						'success'		=> true,
						'status_code'	=> 200,
						'msg'			=> "Data berhasil di simpan.",
						'data'			=> array()
					);
				}else{
					$return = array(
						'success'		=> false,
						'status_code'	=> 500,
						'msg'			=> "Data gagal di simpan.",
						'data'			=> array()
					);
				}
			}
			

			echo json_encode($return);

		} catch (\Throwable $th) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
	}

	public function submit_verifikasi_bulky(){
		try {
			$is_checked = $this->input->post('is_checked');
			$arr_usulan_id = explode(",",$is_checked);
			
			$dataUsulan = $this->UsulanTnaModel->get_data_byid_bulky($arr_usulan_id);
			
				$urutan = (int) $dataUsulan['data'][0]->urutan+1;
				$tahapan = $this->UsulanTnaModel->get_tahapan_id($urutan,"Usulan TNA");
				$tahapan_id = @$tahapan['r_tahapan_usulan_id'];
				
				$data =array(
					"tahapan_id"=>$tahapan_id
				);
				$update = $this->UsulanTnaModel->update_batch($data,$arr_usulan_id);
				if($update){

					if($dataUsulan['success']){
						foreach ($dataUsulan['data'] as $key => $val) {
							# code...
							$data = array(
								"m_tna_usulan_id" 	=> $val->id,
								"tanggal" 			=>date("Y-m-d H:i:s"),
								"aksi" 				=>"Submit usulan TNA",
								"status_verifikasi" =>1,
								"keterangan" 		=>"",
								"r_tahapan_usulan_id" =>$tahapan_id,
								"m_karyawan_id" 	=>$this->sessi['biodata_detail']->id
							);
							$this->UsulanTnaModel->insert_h_riwayat_usulan($data);
						}
					}
					
					$return = array(
						'success'		=> true,
						'status_code'	=> 200,
						'msg'			=> "Data berhasil di simpan.",
						'data'			=> array()
					);
				}else{
					$return = array(
						'success'		=> false,
						'status_code'	=> 500,
						'msg'			=> "Data gagal di simpan.",
						'data'			=> array()
					);
				}
			
			
			echo json_encode($return);

		} catch (\Throwable $th) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
	}

	public function get_dashlet(){
		$urutan = $this->input->get("urutan");
		$data = $this->UsulanTnaModel->get_data_dashlet($urutan);
		echo json_encode($data);
	}

	public function download_usulan(){
		error_reporting(0);
		$mpdf = new mPDF([
			'mode' => 'utf-8',
    		'format' => 'A4-L',
    		'default_font' => 'Times New Roman'
		]);
		$month =date("m");
		$randomChars = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 5);
		if($month>=1 AND $month<=3){
			$q="Q1";
		}else if($month>=4 AND $month<=6){
			$q="Q2";
		}
		else if($month>=7 AND $month<=9){
			$q="Q3";
		}else{
			$q="Q4";
		}
		
		$generate_code = date("dm").$q."-".$randomChars;
		$usulan_id = $this->UsulanTnaModel->grouping_usulan($generate_code);
		$data = array(
			"usulan" => $this->UsulanTnaModel->download_usulan($generate_code)
		);

		$html = $this->load->view('tna/usulan/view_download_usulan',$data,true);
		//$mpdf->SetHTMLFooter($generate_code);
		$mpdf->SetHTMLFooter('| {PAGENO} of {nbpg} | '.date("d/m/Y H:i:s").' | '.$generate_code);
		//$mpdf->AddPage();
		$mpdf->AddPage('L','','','','',3,0,3,3);
		$mpdf->WriteHTML($html);
		$mpdf->Output();

	}

	public function upload_verifikasi_vp(){
		ini_set('memory_limit',-1);
        ini_set('MAX_EXECUTION_TIME', 0);

		$this->db->trans_start(); 
		$this->db->trans_strict(FALSE); 
		try {
			
			//code...
			$check = $this->UsulanTnaModel->check_usulan_by_kode_download($this->input->post('kode_download'));
			if($check=="false"){
				$return = array(
					'success'		=> false,
					'status_code'	=> 500,
					'msg'			=> "kode download tidak ditemukan!.",
					'data'			=> array()
				);
			
				echo json_encode($return);
				return false;
			}

			$data =array();
			$path = "files/upload/verifikasi_vp";
			$config['upload_path'] = './'.$path;
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = '20000';
			$input = $this->input->post('input-file-pdf');
			
			$new_name = time().'_'.$_FILES[$input]['name'];
			$config['file_name'] = $new_name;

			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload($this->input->post('input-file-pdf'))){
				
				$return = array(
					'success'		=> false,
					'status_code'	=> 500,
					'msg'			=> $this->upload->display_errors(),
					'data'			=> array()
				);
				echo json_encode($return);
				return false;

			} else {
				$filepatch = "files/upload/verifikasi_vp/".$new_name;
				$dataVerif = array(
					"download_code" => strtoupper($this->input->post('kode_download')),
					"file"			=> $filepatch,
					"created_date"	=> date("Y-m-d H:i:s"),
					"created_by"	=> $this->ion_auth->user()->row()->id
				);
				$verif = $this->UsulanTnaModel->insert_verifikasi_vp($dataVerif);

				if($verif){
					$tahapan = $this->UsulanTnaModel->get_tahapan_id(7,"Usulan TNA");
					$tahapan_id = @$tahapan['r_tahapan_usulan_id'];
					
					$data =array(
						"tahapan_id"=>$tahapan_id
					);
					$daftarUsulan = $this->UsulanTnaModel->download_usulan($this->input->post('kode_download'));
					$update = $this->UsulanTnaModel->update_usulan_by_kode_download($data,$this->input->post('kode_download'));
					if($update){
						
						foreach ($daftarUsulan as $key => $us) {
							# code...
							$data = array(
								"m_tna_usulan_id" 	=> $us->id,
								"tanggal" 			=> date("Y-m-d H:i:s"),
								"aksi" 				=> $us->tahapan,
								"status_verifikasi" => 1,
								"keterangan" 		=> "",
								"r_tahapan_usulan_id" => $tahapan_id,
								"m_karyawan_id" 	=> $this->sessi['biodata_detail']->id
							);
							$this->UsulanTnaModel->insert_h_riwayat_usulan($data);

							$tahapanTna = $this->UsulanTnaModel->get_tahapan_id(1,"Pengawalan TNA");

							$data = array(
								'm_organisasi_id'		=> $us->m_organisasi_id,
								'm_karyawan_id'			=> $us->m_karyawan_id,
								'status_karyawan'		=> $us->status_karyawan,	
								'r_tna_kompetensi_id' 	=> $us->r_tna_kompetensi_id,
								'r_tna_traning_id' 		=> $us->r_tna_traning_id,
								'jenis_pelatihan' 		=> $us->jenis_pelatihan,
								'jenis_development' 	=> $us->jenis_development,	
								'nama_kegiatan' 		=> $us->nama_kegiatan,
								'justifikasi_pengajuan' => $us->justifikasi_pengajuan,
								'metoda_pembelajaran' 	=> $us->metoda_pembelajaran,
								'estimasi_biaya' 		=> $us->estimasi_biaya,
								'nama_penyelenggara' 	=> $us->nama_penyelenggara,
								'waktu_pelaksanaan' 	=> $us->waktu_pelaksanaan,
								'tahapan_id' 			=> $tahapanTna['r_tahapan_usulan_id'],
								'objective' 			=> $us->objective,
								'code_tna' 				=> $us->kode,
								'created_date' 			=> date('Y-m-d'),
								'created_by' 			=> $this->ion_auth->user()->row()->id
							);
							$this->UsulanTnaModel->insert_m_tna($data);
						}
					}
					
				}
				$this->db->trans_complete();
				if ($this->db->trans_status() === FALSE) {
					# Something went wrong.
					$this->db->trans_rollback();
					$return = array(
						'success'		=> false,
						'status_code'	=> 500,
						'code'			=> 3,
						'msg'			=> "terjadi kesalahan database, silahkan diulangi kembali.",
						'data'			=> array()
					);
				} 
				else {
					$this->db->trans_commit();
					$return = array(
						'success'		=> true,
						'status_code'	=> 200,
						'code'			=> 3,
						'msg'			=> "Data berhasil di simpan.",
						'data'			=> array()
					);
				}
				
			}
			echo json_encode($return);
		} catch (\Throwable $th) {
			//throw $th;
			$this->db->trans_rollback();
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
		
	}
	public function riwayat($id)
	{
		$result = $this->UsulanTnaModel->get_riwayat_usulan(decrypt_url($id));

		$data['icon'] 		= '<i class="fa  fa-file-text-o"></i>';
		$data['title'] 		= '<b>Riwayat Usulan TNA</b>';
		$data['riwayat'] 	= $result;

		$this->load->view('tna/usulan/modal_riwayat', $data);
	}

	private function send_notification_email($kontak, $h_order_id)
	{
		$data = $this->InstalasiModel->get_email_data($h_order_id);
		if (!empty($kontak)) {
			$to = array();
			$to_real = array();
			$bcc = array();
			$bcc[] = 'wendy.maxalmina@telkomsat.co.id';
			//$bcc[] = 'nul.hamidi@gmail.com';
			// if($spb->status_proses == '10'){
			// 	$bcc[] = 'nugroho.wibisono@telkomsat.co.id';
			// 	$bcc[] = 'wuwuh.nugroho@telkomsat.co.id';
			// }

			foreach ($kontak as $rec) {
				if ($rec->email != "") {
					$to[] = trim($rec->email);
				}
			}
			// $to[] = 'wendy.maxalmina@telkomsat.co.id';

			if (!empty($to)) {
				$to = array_unique($to);


				// log to
				$implodeTo = implode(', ', $to);
				log_message('error', 'Kirim email verifikasi [3EASy Notifikasi] Request Instalasi' . $data[0]['order_number'] . ' to ' . $implodeTo);

				$this->load->library('email');
				$config = array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://mail.telkomsat.co.id',
					'smtp_port' => 465,
					'smtp_user' => '3easy', // change it to yours
					'smtp_pass' => '3Easytelkom$at', // change it to yours
					'mailtype' => 'html',
					'charset' => 'iso-8859-1',
					'wordwrap' => TRUE
				);

				$this->email->initialize($config);
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->from('3easy@telkomsat.co.id'); // change it to yours
				$this->email->to($to); // change it to yours
				//$this->email->to('nul.hamidi@gmail.com');// change it to yours
				$this->email->bcc($bcc); // change it to yours
				$this->email->subject('[3EASy Notifikasi] Request Instalasi No : ' . $data[0]['order_number']);
				$body = $this->load->view('request_instalasi/viewmail', $data[0], TRUE);
				$this->email->message($body);

				$this->load->library('encrypt');

				if ($this->email->send()) {
					log_message('error', 'Kirim email perubahan berhasil [3EASy Notifikasi] Request Instalasi ' . $data[0]['order_number'] . ' to ' . $implodeTo);
				} else {
					log_message('error', 'Kirim email perubahan gagal [3EASy Notifikasi] Request Instalasi ' . $data[0]['order_number'] . ' to ' . $implodeTo);
					log_message('error', $this->email->print_debugger());
				}
			} else {
				log_message('error', 'Kirim email perubahan tidak ada list email [3EASy Notifikasi] Request Instalasi ' . $data[0]['order_number']);
			}
		} else {
			log_message('error', 'Kirim email perubahan tidak ada list karyawan [3EASy Notifikasi] Request Instalasi ' . $data[0]['order_number']);
		}
	}


	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */