<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require_once (APPPATH. 'vendor/autoload.php');
class Feedback extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('FeedbackModel');
    
	}

	public function index(){
       
		$data['action_url_submit'] 	= site_url('tna/internalsharing/submit');

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
			
		);
		
		$this->template->load('template_feedback','tna/feedback/index',$data);
	}


	
}

/* End of file Feedback.php */
/* Location: ./application/controllers/InternalSharing.php */