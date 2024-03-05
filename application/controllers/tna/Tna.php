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
		// echo $data['tahapan_id'];
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
            'plugins/sweet-alert/sweetalert.css',
        );
		$data['js']				= array(	// js tambahan
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
		// $data['tahapan_id'] = $this->UsulanTnaModel->get_tahapan_id(2,"Usulan TNA");
		$data['id']				= $id;
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
            'plugins/sweet-alert/sweetalert.css',
        );
		$data['js']				= array(	// js tambahan
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
		$penyelenggara = $this->input->post('new_penyelenggara') ?? $this->input->post('penyelenggara');
		$tgl = explode('-', $this->input->post('waktu_pelaksanaan'));
		$data = array(
			// 'm_organisasi_id'	=> $this->input->post('subdit'),
			// 'm_karyawan_id'	=> $this->input->post('karyawan'),
			// 'status_karyawan'	=> $this->input->post('status_fte'),	
			'r_tna_kompetensi_id' => $this->input->post('kompetensi'),
			'r_tna_traning_id' => $this->input->post('tna'),
			'jenis_pelatihan' => $this->input->post('jenis_pelatihan'),
			'jenis_development' =>	$this->input->post('jenis_development'),	
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			'justifikasi_pengajuan' =>	$this->input->post('justifikasi'),
			'metoda_pembelajaran' => $this->input->post('metoda'),
			'estimasi_biaya' => str_replace(".", "", $this->input->post('estimasi_biaya')),
			'nama_penyelenggara' => $penyelenggara,
			'waktu_pelaksanaan' => $tgl[2].'-'.$tgl[1].'-'.$tgl[0],
			'tahapan_id' => $this->input->post('tahapan_id'),
			'objective' => $this->input->post('objective'),
			'code_tna' => $this->input->post('code_tna'),
			'is_tna' => $this->input->post('is_tna'),
		);

		if($this->input->post('jenis_development') == 'Sertifikasi'){
			$data['jenis_sertifikasi'] ='Nasional';
			if($this->input->post('jenis_sertifikasi')){
				$data['jenis_sertifikasi'] =$this->input->post('jenis_sertifikasi');
			}
		}

		
		if($this->input->post('id')){
			$data['updated_date'] = date('Y-m-d');
			$data['updated_by'] = $this->karyawanId;
			$data['m_karyawan_id'] = $this->input->post('karyawan')[0];
			$data['m_organisasi_id'] = $this->input->post('subdit')[0];
			$data['status_karyawan'] = $this->input->post('status_fte')[0];
			$data['verifikator_id_1'] = $this->input->post('verifikator_id_1')[0];
			
			$action = $this->TnaModel->updateData($data, $this->input->post('id'));
		}else{

			$data['created_date'] = date('Y-m-d');
			$data['created_by'] = $this->karyawanId;
			foreach ($this->input->post('karyawan') as $key => $value) {
				if($value){
					$data['m_karyawan_id'] = $value;
					$data['m_organisasi_id'] = $this->input->post('subdit')[$key];
					$data['status_karyawan'] = $this->input->post('status_fte')[$key];
					$data['verifikator_id_1'] = $this->input->post('verifikator_id_1')[$key];

					$action = $this->TnaModel->insertData($data);
				}	
			}
			
			// $this->saveHistory($dataHistory);
			save_history_pengawalan($action, $this->input->post('tahapan_id'), 'Ya','Pembuatan TNA',$this->karyawanId);
		}
		

		if($this->input->post('new_penyelenggara')){
			$dataPenyelenggara = array(
				'nama_lembaga' 	=> $this->input->post('new_penyelenggara'),
				'nama_pic'		=> $this->input->post('pic'),
				'telp'			=> $this->input->post('telp'),
				'website'		=> $this->input->post('website'),
				'alamat'		=> $this->input->post('alamat'),

			);
			$savePenyelenggara = $this->TnaModel->savePenyelenggara($dataPenyelenggara);

			$dataDetail = array(
				'r_tna_lembaga_id'		=> $savePenyelenggara,
				'r_tna_training_id'		=> $this->input->post('tna'),
				'nama_pelatihan'		=> $this->input->post('new_penyelenggara'),
				'jenis_pelatihan'		=> $this->input->post('jenis_pelatihan'),
				'metoda'				=> $this->input->post('metoda'),
				'biaya'					=> $this->input->post('biaya'), 
				'kapasitas'				=> $this->input->post('kapasitas')
			);

			$this->TnaModel->saveDetailPenyelenggara($dataDetail);
		}
		
		
		$return = array(
			'success'		=> true,
			'status_code'	=> 201,
			'msg'			=> "Data berhasil di simpan.",
			'data'			=> array()
		);
		
		echo json_encode($return);
	}

	public function delete(){
		$data = $this->TnaModel->delete($this->input->post('id'));
		echo json_encode($data);
	}

	public function get_sum_data(){
		$data = $this->TnaModel->get_sum_data($this->input->post('r_tna_traning_id'));
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
	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */