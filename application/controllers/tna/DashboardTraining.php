<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DashboardTraining extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->model('DashboardTraining_model', 'dashboard');
    
	}

	public function index()
	{
		$data['breadcrumb'] 	= 'Dashboard Training';
        $data['active_menu'] 	= 'dashboard-training';
		$data['title'] 			= 'Dashboard Training';
		// $data['dashboard']		=> $this->dashboard->get_dashboard();
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
			'js/module/Dashboard/DashboardTraining.js?random='.date("ymdHis"),
			'plugins/daterangepicker/daterangepicker.js',
			'js/custom.js?random='.date("ymdHis"),
		);
		$this->template->load('template','tna/dashboard/dashboard_training',$data);
	}

	public function getDataDashboard(){
		$thn = $this->input->post();
		$data = $this->dashboard->getCountDashboard($thn);
		echo json_encode($data);
	}

	public function getDataKaryawanDashboard(){
		$thn = $this->input->post();
		$data = $this->dashboard->getDataKaryawanDashboard($thn);
		echo json_encode($data);
	}

	public function getListDataKaryawan(){
		$get = $this->input->get();
		$data = $this->dashboard->getListDataKaryawan($get);
		echo json_encode($data);

	}
}