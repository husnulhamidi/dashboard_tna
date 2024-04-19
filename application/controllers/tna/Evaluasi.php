<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluasi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->helper('custom_helper');

		$this->load->model(array('lokasi_akun_model','UsulanTnaModel','TnaModel','PengawalanModel'));
		$this->load->model('EvaluasiModel');
		// $userData = $this->session->userdata('user');
		// $this->karyawanId = $userData['m_karyawan_id'];
    
	}

    public function index(){
        $data['breadcrumb'] 	= 'Pengawalan > Evaluasi';
        $data['active_menu'] 	= 'evaluasi';
		$data['title'] 			= 'Daftar Pengawalan Evaluasi';
        $data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['kompetensi'] = $this->UsulanTnaModel->get_kompetensi();
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		$data['tahapan_proses'] = $this->PengawalanModel->tahapan_proses();
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
			'js/module/Evaluasi/Evaluasi.js?random='.date("ymdHis"),
			'plugins/daterangepicker/daterangepicker.js',
			'js/custom.js?random='.date("ymdHis"),
		);

		$this->template->load('template','tna/evaluasi/index',$data);
	}

    public function getData(){
		$get = $this->input->get();
		echo $this->EvaluasiModel->getDataEvaluasi($get);
	}

}