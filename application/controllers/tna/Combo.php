<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Combo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if ($this->ion_auth->logged_in() != true) {
        //     Redirect(baseapplicationhcm, false);
        // }
		//$this->sess = unserialize($this->session->userdata('dashboard_tna'));
		//Do your magic here
		//$this->load->model(array('Referenece/JobFamilyModel','jobroleModel','JobRoleModel','KompetensiModel'));
		$this->load->model('Reference/ComboModel');
	}

	
	public function job_family(){
		//$data = $this->ComboModel->delete_jobrole($decrypt_id);

		//echo json_encode($data);
	}

    public function job_function(){
		$data = $this->ComboModel->job_function($this->input->get());

		echo $data;
	}

    public function job_role(){
		$data = $this->ComboModel->job_role($this->input->get());

		echo $data;
	}

    public function kompetensi(){
		$data = $this->ComboModel->kompetensi($this->input->get());

		echo $data;
	}

}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */