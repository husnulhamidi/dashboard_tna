<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devisi_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
    }

    public function get_data_devisi(){
    	$query = $this->db->get('groups');
    	return $query->result();
    }

}

/* End of file devisi_model.php */
/* Location: ./application/models/devisi_model.php */