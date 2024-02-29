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
		$this->load->model('DashboardModel', 'dashboard');
		$this->load->library('upload');
		
		//$this->sess = unserialize($this->session->userdata('dashboard_tna'));
		// coba conflict 5
	}
	
	public function index(){
		
		if(@$this->input->get('filter_year')!=""){
			$filter_year=$this->input->get('filter_year');
		}else{
			$filter_year=date('Y');
		}
	
		$data['title'] 				= 'home';
		$data['active_menu'] 		= 'dashboard';
		$data['filter_year'] 		= $filter_year;
		$data['base_url'] 			= site_url('tna/home/detail');
		$data['css'] 			= array(
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/module/Dashboard/Dashboard.js?random='.date("ymdHis"),
			'js/custom.js?random='.date("ymdHis"),
		);
		$this->template->load('template','tna/dashboard/dashboard', $data);
	}

	public function getCountDashboard() {
		$thn = $this->input->post('thn');
		$quartal = $this->input->post('quartal');
		$data = $this->dashboard->getCountDashboard($thn, $quartal);
		echo json_encode($data);
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

	public function chartPelatihan(){
		$thn = $this->input->post('thn');
		$quartal = $this->input->post('quartal');
		$data = $this->dashboard->chartPelatihan($thn, $quartal);
		echo json_encode($data);
	}

	public function chartSertifikasi(){
		$thn = $this->input->post('thn');
		$quartal = $this->input->post('quartal');
		$data = $this->dashboard->chartSertifikasi($thn, $quartal);
		echo json_encode($data);
	}

	public function realisasiInternalSharing(){
		$thn = $this->input->post('thn');
		$data = $this->dashboard->realisasiInternalSharing($thn);
		echo json_encode($data);
	}

	public function realisasiPesertaInternalSharing(){
		$thn = $this->input->post('thn');
		$data = $this->dashboard->realisasiPesertaInternalSharing($thn);
		echo json_encode($data);
	}

	public function anggaranTNA(){
		$thn = $this->input->post('thn');
		$data = $this->dashboard->anggaranTNA($thn);
		echo json_encode($data);
	}

	public function summary(){
		$thn = $this->input->post('thn');
		$data = $this->dashboard->summary($thn);
		echo json_encode($data);
	}

	public function detail($type, $quartal, $thn){
		$quartalName = 'Quartal 1';
		if($quartal == '2') $quartalName = 'Quartal 1';
		if($quartal == '3') $quartalName = 'Quartal 2';
		if($quartal == '3') $quartalName = 'Quartal 3';
		$data['title'] 				= 'Detail ' . strtoupper($type) . ' ' . $quartalName;
		$data['breadcrumb'] 		= 'Dashboard > Datail > '. strtoupper($type) . ' > ' . $quartalName;
		$data['active_menu'] 		= 'dashboard';
		$data['base_url'] 			= site_url('tna/home/detail');
		$data['type']				= $type;
		$data['quartal']			= $quartal;
		$data['thn']			= $thn;
		$data['css'] 			= array(
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/module/Dashboard/Dashboard.js?random='.date("ymdHis"),
			'js/custom.js?random='.date("ymdHis"),
		);
		$this->template->load('template','tna/dashboard/detail', $data);
	}

	public function dataDetail(){
		$get = $this->input->get();
		// echo json_encode($get);
		echo $this->dashboard->getDataDetail($get);
	}
	

}
