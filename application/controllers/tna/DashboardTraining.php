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
			'js/module/dashboard/DashboardTraining.js?random='.date("ymdHis"),
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

	public function export($thn){
		$data['data'] = $this->dashboard->getExportDataKaryawan($thn);
		$this->load->view('tna/dashboard/export', $data);
	}

	public function export2($thn){
		// Load data from model
        $data = $this->dashboard->getExportDataKaryawan($thn);
        
        // Set filename
        $filename = 'list_training_seluruh_karyawan' . date('YmdHis') . '.xls';
        
        // Set headers
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        // Open file pointer
        $fp = fopen('php://output', 'w');

        // Set column headers
        $header = array('No','Nama Karyawan', 'NIK', 'Unit', 'Jumlah Pelatihan');
        fputcsv($fp, $header, "\t");

        // Add data to CSV
        foreach ($data as $key => $val) {
            $row = array(($key+1), $val->nama, $val->nik_tg, $val->nama_organisasi, $val->jumlah_training);
            fputcsv($fp, $row, "\t");
        }

        // Close file pointer
        fclose($fp);
        exit;
	}
}