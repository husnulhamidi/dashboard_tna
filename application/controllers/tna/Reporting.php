<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporting extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		// $this->load->helper('custom_helper');
		$this->load->model('ReportingModel','reportingModel');
	}

    public function index(){
        $data['breadcrumb'] 	= 'List Reporting';
        $data['active_menu'] 	= 'reporting';
		$data['title'] 			= 'Reporting TNA';
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
			'js/module/reporting/reporting.js?random='.date("ymdHis"),
			'js/custom.js='.date("ymdHis"),
		);


		$this->template->load('template','tna/reporting/index',$data);
	}

    public function getData(){
        $get = $this->input->get();
		echo $this->reportingModel->getData($get);
    }

}