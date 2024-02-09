<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SettingTTD extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->model('Setting_ttd_model', 'settingTTD');
		//Do your magic here
    
	}

	public function index()
	{
        $data['breadcrumb'] 	= 'Setting TTD';
        $data['active_menu'] 	= 'tna_setting_ttd';
		$data['title'] 			= 'Setting TTD';
		$data['action_url_submit'] 	= site_url('tna/SettingTTD/submit');
		$data['action_url_update'] 	= site_url('tna/SettingTTD/update');
		$data['action_url_delete'] 	= site_url('tna/SettingTTD/delete');
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

		$data['setting'] = $this->settingTTD->getSetting();
		// echo $data['setting'];
		// echo $data['setting'];
		$this->template->load('template','tna/setting_ttd/index',$data);
	}

	public function getDataDropdown(){
		$data = $this->settingTTD->get_nama();
		echo json_encode($data);
	}

	public function submit(){

		ini_set('MAX_EXECUTION_TIME', 0);
		// $data =array();
		$config['upload_path'] = './files/sertificate';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$config['file_name'] = $this->input->post('input-file').'-'.date('ymdHis');
		$this->upload->initialize($config);

		$fileDoc = '';
		if ($this->upload->do_upload($this->input->post('input-file'))){
			$upload_data  = $this->upload->data();
			$file_extension = $upload_data['file_ext'];
			$fileDoc = $this->input->post('input-file').'-'.date('ymdHis').$file_extension;
		}

		$data = array(
			'nama_ttd' => $this->input->post('tmpName'),
			'jabatan_ttd' => $this->input->post('jabatan')
		);
		$ket = $this->input->post('ket');
		if($ket == 'Tambah'){
			$data['scan_ttd'] = $fileDoc;
			$action = $this->settingTTD->insertData($data);
		}else{
			if($fileDoc){
				$data['scan_ttd'] = $fileDoc;
			}
			$action = $this->settingTTD->updateData($data, $this->input->post('id'));
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> $data
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> $data
			);
		}
		
		echo json_encode($return);
	}

	public function delete(){
		$data = $this->settingTTD->delete();
		echo json_encode($data);
	}

	
}
