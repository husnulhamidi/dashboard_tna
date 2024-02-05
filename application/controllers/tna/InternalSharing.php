<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternalSharing extends CI_Controller {

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
        $data['breadcrumb'] 	= 'Internal Sharing';
        $data['active_menu'] 	= 'tna_internal_sharing';
		$data['title'] 			= 'Daftar Internal Sharing';
		$data['action_url_edit'] 	= site_url('tna/InternalSharing/edit');
		$data['action_url_detail'] 	= site_url('tna/InternalSharing/detail');
		$data['action_url_generate'] 	= site_url('tna/InternalSharing/generate_sertifikat');
		$data['action_url_submit'] 	= site_url('tna/InternalSharing/submit');
		$data['action_url_update'] 	= site_url('tna/InternalSharing/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
			'css/custom.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
		);


		$this->template->load('template','tna/internal_sharing/index',$data);
	}

	public function create()
	{
        $data = array();
        $data['breadcrumb'] 	= 'Internal Sharing > Tambah';
		$data['title'] 			= 'Tambah Internal Sharing';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'InternalSharing';
		$data['action_url'] 	= site_url('tna/InternalSharing/submit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/timepicker/bootstrap-timepicker.css',
            'plugins/timepicker/bootstrap-timepicker.min.css',
        );
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'plugins/timepicker/bootstrap-timepicker.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
        );
		
		$this->template->load('template','tna/internal_sharing/form_internalSharing', $data);
	}

	public function edit($id){
		$data = array();
        $data['breadcrumb'] 	= 'Internal Sharing > Edit';
		$data['title'] 			= 'Edit Internal Sharing';
		$data['action'] 		= 'edit';
		$data['active_menu'] 	= 'InternalSharing';
		$data['action_url'] 	= site_url('tna/InternalSharing/submit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/timepicker/bootstrap-timepicker.css',
            'plugins/timepicker/bootstrap-timepicker.min.css',
        );
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'plugins/timepicker/bootstrap-timepicker.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
        );
		
		$this->template->load('template','tna/internal_sharing/form_internalSharing', $data);
	}


    public function detail($id)
	{
        $data = array();
        $data['breadcrumb'] 	= 'Internal Sharing > Detail';
		$data['title'] 			= 'Detail Internal Sharing';
		$data['action'] 		= 'detail';
		$data['active_menu'] 	= 'InternalSharing';
		$data['action_url'] 	= site_url('tna/InternalSharing/submit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/timepicker/bootstrap-timepicker.css',
            'plugins/timepicker/bootstrap-timepicker.min.css',
        );
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'plugins/timepicker/bootstrap-timepicker.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
        );
		
		$this->template->load('template','tna/internal_sharing/detail_internalSharing', $data);
	}

	public function generate_sertifikat(){
		$this->load->view('tna/internal_sharing/generate_sertifikat');
	}

	

	
}

/* End of file InternalSharing.php */
/* Location: ./application/controllers/InternalSharing.php */