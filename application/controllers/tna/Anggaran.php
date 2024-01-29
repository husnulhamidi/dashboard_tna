<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		//Do your magic here
		$this->sess = $this->session->userdata('user');
		$this->load->model('AnggaranModel','model');
	}

	public function index()
	{
		$data['active_menu'] 	= 'anggaran';
		$data['title'] 			= 'Daftar Anggaran';
		//$data['bank'] 		 	= $this->Bank_model->get_bank();
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		//$data['css'] 	     	= array('plugins/sweet-alert/sweetalert.css','plugins/select2/select2.min.css'); // css tambahan
		//$data['js']			 	= array('plugins/sweet-alert/sweetalert.min.js','plugins/select2/select2.full.min.js');
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
			'js/module/Anggaran.js',
		);

		$this->template->load('template','tna/anggaran/index',$data);
	}

	public function data()
	{
		$get = $this->input->get();
		echo $this->model->get_data($get);
	}

	public function show()
	{
		$id = $this->input->get('id');
		$data = $this->model->get_data_byid(decrypt_url($id));
		echo json_encode($data);
	}

	public function submit(){
		
		$data = array(
			'nominal' => str_replace('.','',$this->input->post('nominal')),
			'year' => $this->input->post('tahun'),
			'type' => $this->input->post('tipe')
		);
		$AnggaranID = decrypt_url($this->input->post('AnggaranID'));
		$check = $this->model->get_data_byid($AnggaranID);
		if($check['success']===TRUE){
			$data['created_by'] = $this->sess['id'];
			$data['created_date'] = date('Y-m-d');
			$action = $this->model->update($data,$AnggaranID);
		}else{
			$data['updated_by'] = $this->sess['id'];
			$data['updated_date'] = date('Y-m-d');
			$action = $this->model->insert($data);
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
	}


	public function delete(){
		$decrypt_id = decrypt_url($this->input->post('id'));

		$data = $this->model->delete($decrypt_id);

		echo json_encode($data);
	}
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */