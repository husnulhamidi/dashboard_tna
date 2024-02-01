<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Justifikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		//Do your magic here
		$this->load->model('Justifikasi_model', 'justifikasi');
		// $this->load->model('Reference/JobFamilyModel','jobfamily');
	}

	public function index()
	{
        $data['breadcrumb'] 	= 'Justifikasi';
        $data['active_menu'] 	= 'tna_justifikasi';
		$data['title'] 			= 'Daftar Justifikasi';
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
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/Justifikasi.js',
		);


		$this->template->load('template','tna/justifikasi/index',$data);
	}

	public function getData(){
		$get = $this->input->get();
		echo $this->justifikasi->getDataJustifikasi($get);
	}

    public function detail($id)
	{

        $data['breadcrumb'] 	= 'Justifikasi > Detail';
        $data['active_menu'] 	= 'tna_justifikasi';
		$data['title'] 			= 'Detail Justifikasi';
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
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/DetailJustifikasi.js',
		);
		$data['id'] = $id;
		$data['detail'] = $this->justifikasi->getDetailJustifikasi($id);
		// echo $data;
		// echo $data;

		$this->template->load('template','tna/justifikasi/detail_justifikasi',$data);
	}

	public function getDataKompetensi($id){
		$get = $this->input->get();
		echo $this->justifikasi->getDataKompetensi($get, $id);
	}

	public function getDataTraining($id){
		echo $this->justifikasi->getDataTraining($id);
	}

	public function getJobFamily(){
		$data = $this->justifikasi->get_jobfamily();
		echo json_encode($data);
	}

	public function getDataDropdown($string){
		if($string == 'jobFamily'){
			$data = $this->justifikasi->get_jobfamily();
		}
		if($string == 'jobFunc'){
			$data = $this->justifikasi->get_jobfunc();
		}
		if($string == 'jobRole'){
			$data = $this->justifikasi->get_jobrole();
		}
		if($string == 'kompetensi'){
			$data = $this->justifikasi->get_kompetensi();
		}

		echo json_encode($data);
	}

	public function create()
	{
        $data = array();
        $data['breadcrumb'] 	= 'Justifikasi > Tambah';
        $data['title'] 			= 'Tambah Justifikasi';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'tna_justifikasi';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
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
			'js/module/Justifikasi.js', 
			'plugins/sweet-alert/sweetalert.min.js',        
        );
		
		$this->template->load('template','tna/justifikasi/form_create_justifikasi', $data);
	}

	public function submit(){
		$data = array(
			'justifikasi' => $this->input->post('justifikasi'),
			'deskripsi' => $this->input->post('deskripsi')
		);

		if($this->input->post('id')){
			$action = $this->input->post('id');
			$this->justifikasi->updateData($data, $this->input->post('id') );
		}else{
			$action = $this->justifikasi->insertData($data);
		}
		
		$return = array(
			'success'		=> true,
			'status_code'	=> 200,
			'msg'			=> "Data berhasil di simpan.",
			'data'			=> $action
		);
		echo json_encode($return);
	}

	public function edit($id)
	{
        $data = array();
        $data['breadcrumb'] 	= 'Justifikasi > Edit';
        $data['title'] 			= 'Edit Justifikasi';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'tna_justifikasi';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
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
			'js/module/Justifikasi.js', 
			'plugins/sweet-alert/sweetalert.min.js',        
        );
		$data['detail'] = $this->justifikasi->getDetailJustifikasi($id);
		$this->template->load('template','tna/justifikasi/form_create_justifikasi', $data);
	}

	public function delete_justifikasi(){
		$data = $this->justifikasi->delete_justifikasi($this->input->post('id'));
		echo json_encode($data);
	}


	public function simpan_kompetensi()
	{
		if($this->input->post('addNew')){
			$idJobRole = $this->input->post('jobRole');
			if($idJobRole) $getCodeRole = $this->justifikasi->getCodeRole($idJobRole);
			$input = array(
				'code' => $this->input->post('kode'),
				'name' => $this->input->post('name'),
				'r_tna_job_role_code' => $idJobRole ? $getCodeRole->code : '',
				'owner' => 'Telkomsat'
			);
			$kompetensiId = $this->justifikasi->createDataKompetensi($input);

			$data = array(
				'm_tna_justifikasi_rjbp_id' => $this->input->post('justifikasiId'),
				'r_tna_job_family_id' => $this->input->post('jobFamily'),
				'r_tna_job_function_id' => $this->input->post('jobFunc'),
				'r_tna_job_role_id' => $this->input->post('jobRole'),
				'r_tna_kompentensi_id' => $kompetensiId,
			);
		}else{
			$data = array(
				'm_tna_justifikasi_rjbp_id' => $this->input->post('justifikasiId'),
				'r_tna_job_family_id' => $this->input->post('jobFamily'),
				'r_tna_job_function_id' => $this->input->post('jobFunc'),
				'r_tna_job_role_id' => $this->input->post('jobRole'),
				'r_tna_kompentensi_id' => $this->input->post('kompetensi'),
			);
		}
		
		// echo $this->input->post('kompetensiId');
		$action;
		if($this->input->post('kompetensiId')){
			$action = $this->justifikasi->updateDataKompetensi($data,$this->input->post('kompetensiId'));
		}else{
			$action = $this->justifikasi->insertDataKompetensi($data);	
		}
		
		$return = array(
			'success'		=> true,
			'status_code'	=> 200,
			'msg'			=> "Data berhasil di simpan.",
			'data'			=> $action
		);
		echo json_encode($return);
	}

	public function delete_kompetensi(){
		$data = $this->justifikasi->delete_kompetensi($this->input->post('id'));
		echo json_encode($data);
	}

	public function simpan_training(){
		// cari code kompetensi dulu
		$getCodeKompetensi = $this->justifikasi->getCodeKompetensi($this->input->post('idKompetensi'));
		$data = array(
				'r_tna_kompetensi_code' => $getCodeKompetensi->code,
				'name' => $this->input->post('name'),
				'type' => $this->input->post('type'),
		);
		if($this->input->post('idTraining')){
			$action = $this->justifikasi->updateDataTraining($data,$this->input->post('idTraining'));
		}else{
			$action = $this->justifikasi->insertDataTraining($data);	
		}
		
		$return = array(
			'success'		=> true,
			'status_code'	=> 200,
			'msg'			=> "Data berhasil di simpan.",
			'data'			=> $action
		);
		echo json_encode($return);
	}

	public function delete_training(){
		$data = $this->justifikasi->delete_training($this->input->post('id'));
		echo json_encode($data);
	}

	// public function simpan_bank(){
	// 	$data = array(
	// 		'nama_bank' => $this->input->post('name_bank'),
	// 		'alamat1' => $this->input->post('cabang_bank'),
	// 		'alamat2' => $this->input->post('address_bank'),
	// 		'jenis_rekening' => $this->input->post('jenis_rek'),
	// 		'no_rekening' => $this->input->post('norek'),
	// 	);

	// 	if($this->Bank_model->insert_record_bank($data)){

 //            $this->session->set_flashdata('message', 'Data Berhasil Di Tambahkan');
 //            $this->session->set_flashdata('status', 'success');
                
 //        }else{
 //            $this->session->set_flashdata('message', 'Data Gagal Di Tambahkan');
 //            $this->session->set_flashdata('status', 'danger');
 //        }
 //        redirect('bank/data_bank');
	// }

	// public function ubah($id_bank=null)
	// {
	// 	if($id_bank==null || $id_bank=="" ){
	// 		redirect('bank/data_bank');
	// 	}
		

 //        $data = array();
 //        $data['title'] 			= 'Ubah Bank';
	// 	$data['action'] 		= 'edit';
	// 	$data['active_menu'] 	= 'edit_bank';
	// 	$data['action_url'] 	= site_url('bank/save_update/').$id_bank;
	// 	//$data['list_divisi'] 	= $this->Devisi_model->get_data_devisi();
	// 	$data['css'] 			= array();
	// 	$data['js']				= array(	// js tambahan
	// 		'js/jquery.validate.js',
 //        );
       

	// 	$decrypt_id = decrypt_url($id_bank);

	// 	$bank = $this->Bank_model->get_data_bank_byid($decrypt_id);

	// 	$data['nama_bank'] = $bank->nama_bank;
	// 	$data['cabang'] = $bank->alamat1;
	// 	$data['alamat'] = $bank->alamat2;
	// 	$data['jenis_rekening'] = $bank->jenis_rekening;
	// 	$data['no_rekening'] = $bank->no_rekening;
		

	// 	$this->template->load('template','bank/ubah_bank', $data);
	// }

	// public function update_bank($id_bank){
	
	// 	if($id_bank==null || $id_bank=="" ){
	// 		redirect('bank/data_bank');
	// 	}

	// 	$decrypt_id = decrypt_url($id_bank);


		
	// 	$data = array(
	// 		'nama_bank' => $this->input->post('name_bank'),
	// 		'alamat1' => $this->input->post('cabang_bank'),
	// 		'alamat2' => $this->input->post('address_bank'),
	// 		'jenis_rekening' => $this->input->post('jenis_rek'),
	// 		'no_rekening' => $this->input->post('norek'),
	// 	);

	// 	if($this->Bank_model->update_data_bank($data, $decrypt_id)){

	// 		$this->session->set_flashdata('message', 'Data Berhasil Di Perbaharui');
 //            $this->session->set_flashdata('status', 'success');

                
 //        }else{
 //            $this->session->set_flashdata('message', 'Data Gagal Di Perbaharui');
 //            $this->session->set_flashdata('status', 'danger');
 //        }
 //        redirect('bank/data_bank');

	// }

	// public function delete_bank(){
	// 	$decrypt_id = decrypt_url($this->input->post('data'));

	// 	if ($this->Bank_model->delete_bank_byid($decrypt_id) === FALSE){
	// 		$message="Delete invoice gagal!";
	// 		$status=true;
	// 		$rc="0005";
	// 	}else{
	// 		$message="Delete invoice Berhasil";
	// 		$status=false;
	// 		$rc="0000";
	// 	}


	// 	$this->session->set_flashdata('message', $message);
	// 	$this->session->set_flashdata('status', $status);

	// 	$data['rc'] = $rc;
	// 	$data['message'] = $message;

	// 	echo json_encode($data);
	// }
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */