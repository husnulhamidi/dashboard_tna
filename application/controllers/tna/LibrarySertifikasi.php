<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibrarySertifikasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->helper('custom_helper');
		$this->load->model('LibrarySertifikasiModel');
	}

	public function index(){
		$data['active_menu'] 	= 'library_sertifikat';
		$data['title'] 			= 'Daftar Sertifikat';
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
			'js/module/LibrarySertifikasi/LibrarySertifikasi.js?random='.date("ymdHis"),
		);

		$this->template->load('template','tna/library_sertifikat/index',$data);
	}

	public function getData(){
		$get = $this->input->get();
		echo $this->LibrarySertifikasiModel->getDataLibrarySertifikasi($get);
	}
	
}
