<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		// if(!$this->session->userdata('user')){
		// 	redirect('auth/login');
		// }
		// if ($this->ion_auth->logged_in() != true) {
        //     Redirect(baseapplicationhcm, false);
        // }
		//error_reporting(0);
		$this->load->library('upload');
		
		//$this->sess = unserialize($this->session->userdata('dashboard_tna'));
		// coba conflict 5
	}
	
	public function index(){
		
		//echo json_encode($this->ion_auth->user()->row()->id);die;
		//echo json_encode($this->sess);die;
		//echo json_encode($this->session->userdata('session'));die;
		//print_r($user);die;
		
		//print_r($user);die;
		if(@$this->input->get('filter_year')!=""){
			$filter_year=$this->input->get('filter_year');
		}else{
			$filter_year=date('Y');
		}
	
		$data['title'] 				= 'home';
		$data['active_menu'] 		= 'Dashboard';
		$data['filter_year'] 		= $filter_year;
		$data['css'] 				= array(); // css tambahan
		$data['js']					= array(); // js tambahan
		$data['css'] 			= array(
			
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			
			'plugins/datepicker/bootstrap-datepicker.js',
		);
		$this->template->load('template','tna/dashboard/dashboard', $data);
	}

	public function index1(){
	
		
		//print_r($user);die;
		if(@$this->input->get('filter_year')!=""){
			$filter_year=$this->input->get('filter_year');
		}else{
			$filter_year=date('Y');
		}
	
		$data['title'] 				= 'home';
		$data['active_menu'] 		= 'Dashboard';
		$data['filter_year'] 		= $filter_year;
		$data['css'] 				= array(); // css tambahan
		$data['js']					= array(); // js tambahan
		$data['css'] 			= array(
			
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			
			'plugins/datepicker/bootstrap-datepicker.js',
		);
		$this->template->load('template','tna/dashboard/dashboard1', $data);
	}

	public function dashboard_training(){
		$data['breadcrumb'] 		= 'Dashboard Training';
		$data['title'] 				= 'Daftar Pencapaian Training Karyawan';
		$data['active_menu'] 		= 'dashboard-training';
		$data['css'] 			= array(
			
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			
			'plugins/datepicker/bootstrap-datepicker.js',
		);
		$this->template->load('template','tna/dashboard/dashboard_training', $data);
	}
	

}
