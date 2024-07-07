<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackModel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->table = 'm_tna_internal_sharing';
    	$this->id = 'id';
    }

   

}

/* End of file FeedbackMModel.php */
/* Location: ./application/models/internalSharing.php */