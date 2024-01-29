<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_inv_model extends CI_Model {
	public $table_plus = 'invoice_detail_plus';
	public $table_minus = 'invoice_detail_minus';

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function insert_record_plus($data){
		return $this->db->insert($this->table_plus, $data);
	}

	function insert_record_minus($data){
		return $this->db->insert($this->table_minus, $data);
	}

	public function delete_invoice_plus($id_detail){
        $this->db->where('detail_id', $id_detail);

        $query = $this->db->delete($this->table_plus);

        return $query;
    }
    public function delete_invoice_minus($id_detail){
        $this->db->where('detail_id', $id_detail);

        $query = $this->db->delete($this->table_minus);

        return $query;
    }
	

}

/* End of file detail_inv_model.php */
/* Location: ./application/models/detail_inv_model.php */