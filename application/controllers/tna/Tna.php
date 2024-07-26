<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tna extends CI_Controller {

	private $karyawanId;

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->helper('custom_helper');
		$this->load->model(array('lokasi_akun_model','UsulanTnaModel','TnaModel'));
		$this->load->model('Reference/LembagaModel','lembagaModel');
		$this->load->model('Justifikasi_model', 'justifikasi');
		
		$userData = $this->session->userdata('user');
		$this->karyawanId = $userData['m_karyawan_id'];
    
	}

	public function index(){
        $data['breadcrumb'] 	= 'List TNA';
        $data['active_menu'] 	= 'tna_tna';
		$data['title'] 			= 'Daftar TNA';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['kompetensi'] = $this->UsulanTnaModel->get_kompetensi();
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		$data['tahapan_id'] = $this->TnaModel->get_tahapan_id(1);
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
			'js/module/tna/tna.js?random='.date("ymdHis"),
			'js/custom.js='.date("ymdHis"),
		);


		$this->template->load('template','tna/tna/index',$data);
	}

	public function getData(){
		$get = $this->input->get();
		echo $this->TnaModel->getDataTNA($get);
	}

	public function create(){
        $data = array();
        $data['breadcrumb'] 	= 'Tambah';
        $data['title'] 			= 'Tambah TNA';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'tna_tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
		$data['sess'] 			= $this->session->userdata('session');
		$data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['kompetensi'] = $this->UsulanTnaModel->get_kompetensi();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		$data['tahapan_id'] = $this->TnaModel->get_tahapan_id(1);
		$data['lembaga'] = $this->TnaModel->get_lembaga();
		$data['direktorat'] = $this->TnaModel->get_direktorat();
		// echo json_encode($data['direktorat']);
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
            'plugins/sweet-alert/sweetalert.css',
			'plugins/daterangepicker/daterangepicker-bs3.css'
        );
		$data['js']				= array(	// js tambahan
			'plugins/daterangepicker/moment.js',
			'plugins/daterangepicker/daterangepicker.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/tna/tna.js?random='.date("ymdHis"),
			'plugins/sweet-alert/sweetalert.min.js', 
            
        );
		
		$this->template->load('template','tna/tna/form_create_tna', $data);
	}

	public function edit($id){
        $data = array();
        $data['breadcrumb'] 	= 'Edit';
        $data['title'] 			= 'Edit TNA';
		$data['action'] 		= 'edit';
		$data['active_menu'] 	= 'tna_tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
		$data['detail']			= $this->TnaModel->get_detail($id);
		$data['sess'] 			= $this->session->userdata('session');
		$data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['kompetensi'] = $this->UsulanTnaModel->get_kompetensi();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		$data['tahapan_id'] = $this->TnaModel->get_tahapan_id(1);
		$data['direktorat'] = $this->TnaModel->get_direktorat();
		// $data['tahapan_id'] = $this->UsulanTnaModel->get_tahapan_id(2,"Usulan TNA");
		$data['id']				= $id;
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
            'plugins/sweet-alert/sweetalert.css',
			'plugins/daterangepicker/daterangepicker-bs3.css'
        );
		$data['js']				= array(	// js tambahan
			'plugins/daterangepicker/moment.js',
			'plugins/daterangepicker/daterangepicker.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/tna/tna.js?random='.date("ymdHis"),
			'plugins/sweet-alert/sweetalert.min.js', 
            
        );
		
		$this->template->load('template','tna/tna/form_create_tna', $data);
	}

	public function detail($id){
        $data = array();
        $data['breadcrumb'] 	= 'Detail';
        $data['title'] 			= 'Detail TNA';
		$data['action'] 		= 'detail';
		$data['active_menu'] 	= 'tna_tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
		$data['detail']			= $this->TnaModel->get_detail($id);
		$data['id']				= $id;
		// echo $data['detail'];
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
        );
		$data['js']				= array(	// js tambahan
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
            
        );
		
		$this->template->load('template','tna/tna/detail_tna', $data);
	}

	public function submit(){
		// echo json_encode($this->input->post());

		$getNamaPenyelenggara = $this->lembagaModel->get_lembaga_byid($this->input->post('penyelenggara'));
		if($this->input->post('new_penyelenggara')){
			$penyelenggara = $this->input->post('new_penyelenggara');
		}else{
			$penyelenggara = $getNamaPenyelenggara['data']->nama_lembaga;
		}

		$pecahTgl = explode('-', $this->input->post('waktu_pelaksanaan'));
		$tmptgl1 = trim($pecahTgl[0]);
		$tmptgl2 = trim($pecahTgl[1]);
		$tgl = explode('/', $tmptgl1);
		$tgl2 = explode('/', $tmptgl2);

		$getNamaPenyelenggara = $this->lembagaModel->get_lembaga_byid($this->input->post('penyelenggara'));
		$penyelenggara = $getNamaPenyelenggara['data']->nama_lembaga;
		
		// $penyelenggara = $this->input->post('new_penyelenggara') ?? $this->input->post('penyelenggara');
		$exp = explode('|', $this->input->post('tna'));
		$data = array(	
			'r_tna_kompetensi_id' => $this->input->post('kompetensi'),
			'r_tna_training_id' => $exp[0],
			'jenis_pelatihan' => $this->input->post('jenis_pelatihan'),
			'jenis_development' =>	$this->input->post('jenis_development'),	
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			'justifikasi_pengajuan' =>	$this->input->post('justifikasi'),
			'metoda_pembelajaran' => $this->input->post('metoda'),
			'estimasi_biaya' => str_replace(".", "", $this->input->post('estimasi_biaya')),
			'nama_penyelenggara' => $penyelenggara,
			'waktu_pelaksanaan_mulai' => $tgl[2].'-'.$tgl[0].'-'.$tgl[1],
			'waktu_pelaksanaan_selesai' => $tgl2[2].'-'.$tgl2[0].'-'.$tgl2[1],
			'tahapan_id' => $this->input->post('tahapan_id'),
			'objective' => $this->input->post('objective'),
			'code_tna' => $this->input->post('code_tna'),
			'is_tna' => $this->input->post('is_tna'),
			'is_urgent' => $this->input->post('is_urgent'),
		);

		if($this->input->post('jenis_development') == 'Sertifikasi'){
			$data['jenis_sertifikasi'] ='Nasional';
			if($this->input->post('jenis_sertifikasi')){
				$data['jenis_sertifikasi'] =$this->input->post('jenis_sertifikasi');
			}
		}

		// echo json_encode($data);
		if($this->input->post('id')){
			$data['updated_date'] = date('Y-m-d');
			$data['updated_by'] = $this->karyawanId;
			$data['m_karyawan_id'] = $this->input->post('karyawan')[0];
			$data['m_organisasi_id'] = $this->input->post('subdit')[0];
			$data['status_karyawan'] = $this->input->post('status_fte')[0];
			$data['verifikator_id_1'] = $this->input->post('verifikator_id_1')[0];
			$data['direktorat_id'] = $this->input->post('direktorat')[0];
			
			$action = $this->TnaModel->updateData($data, $this->input->post('id'));
		}else{

			$data['created_date'] = date('Y-m-d');
			$data['created_by'] = $this->karyawanId;
			// foreach ($this->input->post('karyawan') as $key => $value) {
			// 	if($value){
			// 		$data['m_karyawan_id'] = $value;
			// 		$data['m_organisasi_id'] = $this->input->post('subdit')[$key];
			// 		$data['status_karyawan'] = $this->input->post('status_fte')[$key];
			// 		$data['verifikator_id_1'] = $this->input->post('verifikator_id_1')[$key];
			// 		$data['direktorat_id'] = $this->input->post('direktorat')[$key];

			// 		// $action = $this->TnaModel->insertData($data);
			// 	}	
			// }
			foreach ($this->input->post('newKaryawan') as $key => $value) {
				$nama_karyawan = $value;
				$nik = $this->input->post('newNik')[$key];
				$status_karyawan = $this->input->post('status_karyawan')[$key];
				$m_karyawan_id = '';
				if($value == null){
					$status_karyawan = $this->input->post('status_fte')[$key];
					// cek karyawan
					$checkKaryawan = $this->TnaModel->checkKaryawan($this->input->post('karyawan')[$key]);
					$nama_karyawan = $checkKaryawan->nama;
					$nik = $checkKaryawan->nik_tg;
					$m_karyawan_id = $this->input->post('karyawan')[$key];
				}

				$jabatan = $this->input->post('jabatan')[$key];

				// direktorat
				$direktorat = explode('#',$this->input->post('direktorat')[$key]);
				$direktorat_id = $direktorat[0];
				$direktorat_name = $direktorat[1];

				// subdit
				$subdit = explode('#',$this->input->post('subdit')[$key]);
				$subdit_id = $subdit[0];
				$m_organisasi_id = $subdit[0];
				$subdit_name = $subdit[1];

				// subunit
				$subunit = explode('#',$this->input->post('subunit')[$key]);
				$subunit_id = $subunit[0];
				$m_organisasi_id = $subunit[0];
				$subunit_name = $subunit[1];

				//cek verifikator 
				$checkVerifikator = $this->TnaModel->checkKaryawan($this->input->post('verifikator_id_1')[$key]);
				$verifikator_id_1 = $this->input->post('verifikator_id_1')[$key];
				$verifikator_nik = $checkVerifikator->nama;
				$verifikator_name = $checkVerifikator->nik_tg;
				
				$data['direktorat_id'] = $direktorat_id;
				$data['direktorat_name'] = $direktorat_name;
				$data['m_organisasi_id'] = $m_organisasi_id;
				$data['subdit_id'] = $subdit_id;
				$data['subdit_name'] = $subdit_name;
				$data['subunit_id'] = $subunit_id;
				$data['subunit_name'] = $subunit_name;
				$data['m_karyawan_id'] = $m_karyawan_id;
				$data['nik'] = $nik;
				$data['nama_karyawan'] = $nama_karyawan;
				$data['jabatan'] = $jabatan;
				$data['verifikator_id_1'] = $verifikator_id_1;
				$data['verifikator_nik'] = $verifikator_nik;
				$data['verifikator_name'] = $verifikator_name;

				$action = $this->TnaModel->insertData($data);
				
			}
			
			
			// save_history_pengawalan($action, $this->input->post('tahapan_id'), 'Ya','Pembuatan TNA',$this->karyawanId);
		}

		echo json_encode($data);
		

		
		// $return = array(
		// 	'success'		=> true,
		// 	'status_code'	=> 201,
		// 	'msg'			=> "Data berhasil di simpan.",
		// 	'data'			=> array()
		// );
		
		// echo json_encode($return);
	}

	public function submit_lembaga(){
		// echo json_encode($this->input->post());
		if($this->input->post('keterangan') == 'dropDown'){
			$dataDetail = array(
				'r_tna_lembaga_id'		=> $this->input->post('select_lembaga'),
				'r_tna_training_id'		=> $this->input->post('r_tna_training_id'),
				'nama_pelatihan'		=> $this->input->post('nama_pelatihan'),
				'jenis_pelatihan'		=> $this->input->post('jenis_pelatihan'),
				'metoda'				=> $this->input->post('metoda'),
				'biaya'					=> $this->input->post('biaya'), 
				'kapasitas'				=> $this->input->post('kapasitas'),
				'created_date'			=> date('Y-m-d'),
				'created_by'			=> $this->karyawanId
				
			);

			$this->TnaModel->saveDetailPenyelenggara($dataDetail);
			$getDetail = $this->TnaModel->getDetailPenyelenggara($this->input->post('select_lembaga'));
			$return = $getDetail->nama_lembaga;

			$return = array(
				'id' => $this->input->post('select_lembaga'),
				'nama_lembaga' => $getDetail->nama_lembaga
			);
		}else{
			$dataPenyelenggara = array(
				'nama_lembaga' 	=> $this->input->post('new_penyelenggara'),
				'nama_pic'		=> $this->input->post('pic'),
				'telp'			=> $this->input->post('telp'),
				'website'		=> $this->input->post('website'),
				'alamat'		=> $this->input->post('alamat'),
				'created_date'	=> date('Y-m-d'),
				'created_by'	=> $this->karyawanId

			);
			$savePenyelenggara = $this->TnaModel->savePenyelenggara($dataPenyelenggara);
			$dataDetail = array(
				'r_tna_lembaga_id'		=> $savePenyelenggara,
				'r_tna_training_id'		=> $this->input->post('r_tna_training_id'),
				'nama_pelatihan'		=> $this->input->post('nama_pelatihan'),
				'jenis_pelatihan'		=> $this->input->post('jenis_pelatihan'),
				'metoda'				=> $this->input->post('metoda'),
				'biaya'					=> $this->input->post('biaya'), 
				'kapasitas'				=> $this->input->post('kapasitas'),
				'created_date'			=> date('Y-m-d'),
				'created_by'			=> $this->karyawanId
			);

			$this->TnaModel->saveDetailPenyelenggara($dataDetail);
			// $return = $this->input->post('new_penyelenggara');
			$return = array(
				'id' => $savePenyelenggara,
				'nama_lembaga' => $this->input->post('new_penyelenggara')
			);
		}

		echo json_encode($return);
	}

	public function submit_training(){
		$data = $this->input->post();
		// cari kode kompetensi
		$codeKomp = $this->TnaModel->getCodeKompetensi($this->input->post('komp'));
		$pre = 'S';
		if($this->input->post('type') == 'Pelatihan') $pre = 'P';

		$filter = $pre.date('y');
		$cekCode = $this->TnaModel->checkCodeTraining($filter);

		$filter = $pre . date('y');
		$cekCode = $this->TnaModel->checkCodeTraining($filter);

		if ($cekCode) {
			$prefix = substr($cekCode, 0, 3);
			$number = (int)substr($cekCode, 3);
			$newNumber = str_pad($number + 1, 4, '0', STR_PAD_LEFT);
			$newCode = $prefix . $newNumber;
		} else {
			$newCode = $filter . '0001';
		}

		$dataTraining = array(
			'r_tna_kompetensi_code' => $codeKomp->code,
			'code'                  => $newCode,
			'name'                  => $this->input->post('new_training'),
			'type'                  => $this->input->post('type'),
		);
		$savePenyelenggara = $this->TnaModel->saveTraining($dataTraining);
		$return = array(
			'id'			=> $savePenyelenggara,
			'name'			=> $this->input->post('new_training'),
			'code'			=> $newCode
		);
		echo json_encode($return);
	}

	public function delete(){
		$data = $this->TnaModel->delete($this->input->post('id'));
		echo json_encode($data);
	}

	public function get_sum_data(){
		$data = $this->TnaModel->get_sum_data($this->input->post('r_tna_training_id'));
		echo json_encode($data);

	}

	public function get_code_training(){
		$data = $this->TnaModel->get_code_training($this->input->post('id'));
		echo json_encode($data);
	}

	public function proses_tna(){
		$get_tahapan_id = $this->TnaModel->get_tahapan_id(2);
		$data = array(
			'tahapan_id' => $get_tahapan_id->id,
			'updated_date' => date('Y-m-d'),
			'updated_by' => $this->karyawanId
		);

		$action = $this->TnaModel->updateData($data, $this->input->post('id'));

		save_history_pengawalan($this->input->post('id'), $get_tahapan_id->id, 'Ya','Proses/Usulkan TNA', $this->karyawanId);

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil diproses.",
				'data'			=> $action
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diproses.",
				'data'			=> $action
			);
		}
		
		echo json_encode($return);
	}

	public function get_karyawan(){
		$search = $this->input->get('searchTerm');
		$data = $this->TnaModel->search_karyawan($search);

		$result = array();
		foreach ($data as $key => $value) {
			$text = $value->nik_tg . ' | ' . $value->nama . ' | ' . $value->jabatan_nama;
			$result[] = array("id" => $value->id,"text"=>$text);
		}
		echo json_encode($result);
	}

	public function getPenyelenggara(){
		$id = $this->input->post('pelatihanId');
		$data = $this->TnaModel->getPenyelenggara($id);
		echo json_encode($data);
	}

	public function getSubunit(){
		$subdit = $this->input->post('subdit');
		$data = $this->TnaModel->getSubunit($subdit);
		echo json_encode($data);
	}

	public function getDataLembagawithotPelatihan(){
		$pelatihanId = $this->input->post('pelatihanId');
		
		$detail = $this->TnaModel->get_lembaga_id($pelatihanId);
		$lembagaId = [];
		foreach ($detail as $key => $value) {
			$lembagaId[] = $value->r_tna_lembaga_id;
		}

		$data = $this->TnaModel->getDataLembagawithotPelatihan($pelatihanId, $lembagaId);
		echo json_encode($data);
	}

	public function exportExcel(){
		// $get = $tis->
		$post = $this->input->post();
		$data = $this->TnaModel->getDataExport($post);
		$filename = 'daftar_tna' . date('YmdHis') . '.xls';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

		$fp = fopen('php://output', 'w');
		$header = array('No','ID TNA', 'Sub Unit/unit', 'Nama Karyawan', 'Status Karyawan', 'Nama Pelatihan', 'Objective', 'Jenis Development', 'Matoda Pembelajaran', 'Jenis Pelatihan/Sertifikasi', 'Kompetensi', 'Nama Penyelenggara', 'Waktu Pelaksanaan', 'Estimasi Biaya');
        fputcsv($fp, $header, "\t");
		foreach ($data as $key => $val) {
			// Membersihkan nilai data dari karakter newline
			$code_tna = str_replace("\n", "", $val->code_tna);
			$nama_organisasi = str_replace("\n", "", $val->nama_organisasi);
			$nama_karyawan = str_replace("\n", "", $val->nama_karyawan);
			$status_karyawan = str_replace("\n", "", $val->status_karyawan);
			$training = str_replace("\n", "", $val->training);
			$objective = str_replace("\n", "", $val->objective);
			$jenis_development = str_replace("\n", "", $val->jenis_development);
			$metoda_pembelajaran = str_replace("\n", "", $val->metoda_pembelajaran);
			$jenis_pelatihan = str_replace("\n", "", $val->jenis_pelatihan);
			$kompetensi = str_replace("\n", "", $val->kompetensi);
			$nama_penyelenggara = str_replace("\n", "", $val->nama_penyelenggara);
			$waktu_pelaksanaan = date('d M Y', strtotime(str_replace("\n", "", $val->waktu_pelaksanaan)));
			$estimasi_biaya = str_replace("\n", "", $val->estimasi_biaya);
		
			// Membuat baris data CSV
			$row = array(
				($key+1), 
				$code_tna, 
				$nama_organisasi, 
				$nama_karyawan, 
				$status_karyawan,
				$training,
				$objective,
				$jenis_development,
				$metoda_pembelajaran,
				$jenis_pelatihan,
				$kompetensi,
				$nama_penyelenggara,
				$waktu_pelaksanaan,
				$estimasi_biaya
			);
		
			// Menulis baris data CSV ke file
			fputcsv($fp, $row, "\t");
		}
		
		fclose($fp);
        exit;
	}

	public function get_lembaga(){
		$search = $this->input->get('searchTerm');
		$data = $this->TnaModel->search_lembaga($search);

		$result = array();
		foreach ($data as $key => $value) {
			// $text = $value->nik_tg . ' | ' . $value->nama . ' | ' . $value->jabatan_nama;
			// $result[] = array("id" => $value->id,"text"=>$value->nama_lembaga);
			$result[] = array(
				"id" 			=> $value->id,
				"nama_lembaga" 	=> $value->nama_lembaga,
				"nama_pic" 		=> $value->nama_pic,
				"telp"	 		=> $value->telp,
				"website" 		=> $value->website,
				"alamat" 		=> $value->alamat,
			);
		}
		echo json_encode($result);
	}

	public function getkompetensi($idJobRole){
		// $search = $this->input->get('searchTerm');
		// $data = $this->TnaModel->search_lembaga($search);
		$codeRole = $this->justifikasi->get_code_jobRole($idJobRole);
		$data = $this->UsulanTnaModel->get_kompetensi($codeRole->code);

		$result = array();
		foreach ($data as $key => $value) {
			$result[] = array(
				"id" 			=> $value->id,
				"code" 			=> $value->code,
				"job_role" 		=> $value->r_tna_job_role_code,
				"kompetensi"	=> $value->name,
			);
		}
		echo json_encode($result);
	}

	public function getDataTraining(){
		$kompetensiId = $this->input->post('kompetensiId');
		$code = $this->TnaModel->getCodeKompetensi($kompetensiId);
		$trainig = $this->TnaModel->getDataTraining($code->code);
		echo json_encode($trainig);
	}

	public function getDataJob($idKompetensi){
		$data = $this->TnaModel->getDataJob($idKompetensi);
		echo json_encode($data);
	}
	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */