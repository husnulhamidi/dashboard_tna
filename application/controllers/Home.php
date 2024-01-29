<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		//error_reporting(0);
		$this->load->library('upload');
		
		
		// coba conflict 5
	}
	
	public function index(){
	
		
		//print_r($user);die;
	
		$data['title'] 				= 'home';
		$data['active_menu'] 		= 'dashboard';
		$data['css'] 				= array(); // css tambahan
		$data['js']					= array(); // js tambahan
		$this->template->load('template','home/dashboard', $data);
	}

}
