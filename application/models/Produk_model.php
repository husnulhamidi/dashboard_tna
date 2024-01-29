<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public $table = 'produk';
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function get_produk_select(){
		$query = $this->db->get($this->table);

		return $query->result();
	}

	function get_nama_produk($id_produk){
		$this->db->select('nama_produk');
		$this->db->where('produk_id', $id_produk);
		$query = $this->db->get($this->table)->row();

		
		return $query->nama_produk;
	}
}

/* End of file produk_model.php */
/* Location: ./application/models/produk_model.php */