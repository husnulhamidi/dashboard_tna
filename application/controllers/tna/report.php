<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if ($this->ion_auth->logged_in() != true) {
        //     Redirect(baseapplicationportal, false);
        // }
		//Do your magic here

		$this->load->model('ReportModel');
	}

	public function index($date="")
	{
        if($date!=""){
            $filter_year = $date;
        }else{
            $filter_year = date('Y');
        }
		$data['active_menu'] 	= 'Report';
        $data['breadcrumb'] 	= 'Report';
		$data['title'] 			= 'Report Perencanaaan Vs Realisasi';
        $data['filter_year']    = $filter_year;
		$data['action_url_submit'] 	= "";
		$data['action_url_update'] 	= "";
		$data['css'] 			= array(
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/report/report.js?random='.date("ymdHis"),
		);

		$this->template->load('template','tna/report/index',$data);
	}

	public function getData(){
		$get = $this->input->get();
		echo $this->ReportModel->getData($get);
	}
	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */