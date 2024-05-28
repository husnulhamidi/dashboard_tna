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

	public function exportExcel(){
		$post = $this->input->post();
		$data = $this->ReportModel->getDataExport($post);
		$filename = 'report_rencana_vs_realisasi' . date('YmdHis') . '.xls';
		
		header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');
		$fp = fopen('php://output', 'w');
		// $header = array(
		// 	'No.', 
		// 	'JENIS PELATIHAN / SERTIFIKASI', 
		// 	'KOMPETENSI', 
		// 	'Pelatihan Q1 (Perencanaan - '. $post['thn'] .')', 
		// 	'Pelatihan Q2 (Perencanaan - '. $post['thn'] .')', 
		// 	'Pelatihan Q3 (Perencanaan - '. $post['thn'] .')', 
		// 	'Pelatihan Q4 (Perencanaan - '. $post['thn'] .')', 
		// 	'Total Pelatihan (Perencanaan - '. $post['thn'] .')', 
		// 	'Sertifikasi Q1 (Perencanaan - '. $post['thn'] .')', 
		// 	'Sertifikasi Q2 (Perencanaan - '. $post['thn'] .')', 
		// 	'Sertifikasi Q3 (Perencanaan - '. $post['thn'] .')', 
		// 	'Sertifikasi Q4 (Perencanaan - '. $post['thn'] .')', 
		// 	'Total Sertifikasi (Perencanaan - '. $post['thn'] .')', 
		// 	'Peserta Pelatihan FTE (Perencanaan - '. $post['thn'] .')', 
		// 	'Peserta Pelatihan NON FTE (Perencanaan - '. $post['thn'] .')', 
		// 	'Peserta Sertifikasi FTE (Perencanaan - '. $post['thn'] .')', 
		// 	'Peserta Sertifikasi NON FTE (Perencanaan - '. $post['thn'] .')', 
		// 	'Total Peserta (Perencanaan - '. $post['thn'] .')', 
		// 	'Pelatihan Q1 (Realisasi - ' . $post['thn'] . ')', 
		// 	'Pelatihan Q2 (Realisasi - ' . $post['thn'] . ')', 
		// 	'Pelatihan Q3 (Realisasi - ' . $post['thn'] . ')', 
		// 	'Pelatihan Q4 (Realisasi - ' . $post['thn'] . ')', 
		// 	'Total Pelatihan (Realisasi - ' . $post['thn'] . ')', 
		// 	'Sertifikasi Q1 (Realisasi - ' . $post['thn'] . ')', 
		// 	'Sertifikasi Q2 (Realisasi - ' . $post['thn'] . ')', 
		// 	'Sertifikasi Q3 (Realisasi - ' . $post['thn'] . ')', 
		// 	'Sertifikasi Q4 (Realisasi - ' . $post['thn'] . ')', 
		// 	'Total Sertifikasi (Realisasi - ' . $post['thn'] . ')', 
		// 	'Peserta Pelatihan FTE (Realisasi - ' . $post['thn'] . ')', 
		// 	'Peserta Pelatihan NON FTE (Realisasi - ' . $post['thn'] . ')', 
		// 	'Peserta Sertifikasi FTE (Realisasi - ' . $post['thn'] . ')', 
		// 	'Peserta Sertifikasi NON FTE (Realisasi - ' . $post['thn'] . ')', 
		// 	'Total Peserta (Realisasi - ' . $post['thn'] . ')'
		// );
		// Baris pertama header
		$header1 = array(
			'No.', 
			'JENIS PELATIHAN / SERTIFIKASI', 
			'KOMPETENSI', 
			'PERENCANAAN - ' . $post['thn'], '', '', '', '', '', '', '', '', '', '', '', '', 
			'REALISASI - ' . $post['thn'], '', '', '', '', '', '', '', '', '', '', '', ''
		);
		fputcsv($fp, $header1, "\t");

		// Baris kedua header
		$header2 = array(
			'', '', '', 
			'Pelatihan', '', '', '', 
			'Total Pelatihan', 
			'Sertifikasi', '', '', '', 
			'Total Sertifikasi', 
			'Peserta Pelatihan', '', 
			'Peserta Sertifikasi', '', 
			'Total Peserta', 
			'Pelatihan', '', '', '', 
			'Total Pelatihan', 
			'Sertifikasi', '', '', '', 
			'Total Sertifikasi', 
			'Peserta Pelatihan', '', 
			'Peserta Sertifikasi', '', 
			'Total Peserta'
		);
		fputcsv($fp, $header2, "\t");

		// Baris ketiga header
		$header3 = array(
			'', '', '', 
			'Q1', 'Q2', 'Q3', 'Q4', 
			'', 
			'Q1', 'Q2', 'Q3', 'Q4', 
			'', 
			'FTE', 'NON FTE', 
			'FTE', 'NON FTE', 
			'', 
			'Q1', 'Q2', 'Q3', 'Q4', 
			'', 
			'Q1', 'Q2', 'Q3', 'Q4', 
			'', 
			'FTE', 'NON FTE', 
			'FTE', 'NON FTE', 
			''
		);
		fputcsv($fp, $header3, "\t");

		// fputcsv($fp, $header, "\t");
		foreach ($data as $key => $val) {		
			// Membuat baris data CSV
			$row = array(
				($key+1), 
				$val['kategori_pelatihan'], 
				$val['kompe'], 
				$val['rencana_pelatihan_q1'], 
				$val['rencana_pelatihan_q2'], 
				$val['rencana_pelatihan_q3'], 
				$val['rencana_pelatihan_q4'], 
				$val['rencana_pelatihan_total'],
				
				$val['rencana_sertifikasi_q1'], 
				$val['rencana_sertifikasi_q2'], 
				$val['rencana_sertifikasi_q3'], 
				$val['rencana_sertifikasi_q4'], 
				$val['rencana_sertifikasi_total'], 

				$val['rencana_pelatihan_fte'], 
				$val['rencana_pelatihan_nonfte'], 
				$val['rencana_sertifikasi_fte'], 
				$val['rencana_sertifikasi_nonfte'], 
				$val['rencana_peserta_total'], 

				$val['realisasi_pelatihan_q1'], 
				$val['realisasi_pelatihan_q2'], 
				$val['realisasi_pelatihan_q3'], 
				$val['realisasi_pelatihan_q4'], 
				$val['realisasi_pelatihan_total'],

				$val['realisasi_sertifikasi_q1'], 
				$val['realisasi_sertifikasi_q2'], 
				$val['realisasi_sertifikasi_q3'], 
				$val['realisasi_sertifikasi_q4'], 
				$val['realisasi_sertifikasi_total'], 
				
				$val['realisasi_pelatihan_fte'], 
				$val['realisasi_pelatihan_nonfte'], 
				$val['realisasi_sertifikasi_fte'], 
				$val['realisasi_sertifikasi_nonfte'], 
				$val['realisasi_peserta_total'], 
				
			);
		
			// Menulis baris data CSV ke file
			fputcsv($fp, $row, "\t");
		}
		

		fclose($fp);
        exit;
	}
	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */