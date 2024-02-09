<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_ttd_model extends CI_Model {
	public function __construct()
    {
        parent::__construct();
        $this->table = 'r_tna_setting_ttd';
        $this->id = 'id';

    }


    public function getSetting(){
        $data = $this->db->get_where($this->table, ['status_code' => 'active'])->row();
        return $data;
    }
	
   
}

