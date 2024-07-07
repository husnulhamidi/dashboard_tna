<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require_once (APPPATH. 'vendor/autoload.php');
class Feedback extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('FeedbackModel');
		$this->load->model('InternalSharing_Model', 'InternalSharing');
    
	}

	public function index($id)
	{
    //    echo json_encode($id);
		$data['id']				= $id;
	   	$data['title'] 			= 'FORM UMPAN BALIK (FEEDBACK)';
		$data['active_menu'] 	= 'feedback';
		$data['url_submit'] 	= '/dashboard_tna/internalsharing/feedback/simpan/data';
	   	$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
			'css/custom.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			// 'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
			'js/module/feedback/feedback.js?random='.date("ymdHis"),
			'js/custom.js?random='.date("ymdHis"),
		);
		$this->template->load('template','tna/feedback/index',$data);
	}

	public function submit(){
		// echo json_encode($this->input->post());

		$userData = $this->session->userdata('user');
		$karyawanId = $userData['m_karyawan_id'];
		$karyawanId = $karyawanId;
		//insert table m_tna_feedback
		$dataFeedback = array(
			'source_type' => $this->input->post('source_type'),
			'source_id' => $this->input->post('source_id'),
			'nama_karyawan' => $this->input->post('nama'),
			'nik' => $this->input->post('nik'),
			'subdit' => $this->input->post('subdit'),
			'skor_materi' => $this->input->post('skor_materi'),
			'skor_narasumber' => $this->input->post('skor_narasumber'),
			'manfaat_yg_diperoleh' => $this->input->post('manfaat'),
			'kritik_saran' => $this->input->post('kritik_saran'),
			'created_by' => $karyawanId,
			'created_date' => date('Y-m-d')
		);
		$saveFeedback = $this->InternalSharing->insertFeedback($dataFeedback);
		if($saveFeedback){
			$this->saveFeedbackPenilaian($saveFeedback, 'pertanyaan_materi', 'Materi');
			$this->saveFeedbackPenilaian($saveFeedback, 'pertanyaan_narasumber', 'Narasumber');
		}

		$return = array(
			'success'		=> true,
			'status_code'	=> 201,
			'msg'			=> "Data berhasil diubah.",
			'data'			=> array()
		);	
		echo json_encode($return);
	}

	private function saveFeedbackPenilaian($feedbackId, $pertanyaanKey, $group) {
		foreach ($this->input->post($pertanyaanKey) as $key => $value) {
			$skor = 'radio_' . $group . '_' . ($key + 1);
			$dataPenilaian = array(
				'm_tna_feedback_id' => $feedbackId,
				'pertanyaan' => $value,
				'nilai_skor' => $this->input->post($skor)
			);
			$this->InternalSharing->insertFeedbackPenilaian($dataPenilaian);
		}
	}

	public function getFeedback($id){
    	$get = $this->input->get();
		echo $this->FeedbackModel->getFeedback($get,$id);
    }


	
}

/* End of file Feedback.php */
/* Location: ./application/controllers/InternalSharing.php */