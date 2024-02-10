<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		//Do your magic here
    
	}

	public function index()
	{
        $data['breadcrumb'] 	= 'List TNA';
        $data['active_menu'] 	= 'tna_tna';
		$data['title'] 			= 'Daftar TNA';
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
			'js/module/tna/tna.js?random='.date("ymdHis"),
		);


		$this->template->load('template','tna/tna/index',$data);
	}

	public function create()
	{
        $data = array();
        $data['breadcrumb'] 	= 'Tambah';
        $data['title'] 			= 'Tambah TNA';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
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
		
		$this->template->load('template','tna/tna/form_create_tna', $data);
	}

	public function edit($id)
	{
        $data = array();
        $data['breadcrumb'] 	= 'Edit';
        $data['title'] 			= 'Edit TNA';
		$data['action'] 		= 'edit';
		$data['active_menu'] 	= 'tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
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
		
		$this->template->load('template','tna/tna/form_create_tna', $data);
	}

	public function detail($id)
	{
        $data = array();
        $data['breadcrumb'] 	= 'Detail';
        $data['title'] 			= 'Detail TNA';
		$data['action'] 		= 'detail';
		$data['active_menu'] 	= 'tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
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


	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */