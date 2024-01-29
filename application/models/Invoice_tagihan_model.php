<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice_tagihan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public $table = "invoice_tagihan";

	public function save_invoice_tagihan($data){
		$query = $this->db->insert($this->table, $data);

		return $query;

	}

	public function delete_invoice_tagihan($inv_tag_id){
		$this->db->where('invoice_tag_id', $inv_tag_id);
		$query = $this->db->delete($this->table);

		return $query;

	}
	

}

/* End of file invoice_tagihan.php */
/* Location: ./application/models/invoice_tagihan.php */