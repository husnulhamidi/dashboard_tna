<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan_model extends CI_Model {

	public  $table = 'pelanggan';
	var $column_order = array(null,'nama_alias','nama_pelanggan','divisi','nama_pic','alamat_surat','alamat_invoice','npwp',null); //set column field database for datatable orderable
    var $column_search = array('nama_alias','nama_pelanggan','divisi','nama_pic','alamat_surat','alamat_invoice','npwp'); //set column field database for datatable searchable 
    var $order = array('nama_alias','nama_pelanggan','divisi','nama_pic','alamat_surat','alamat_invoice','npwp'); // default order

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function get_pelanggan(){
		$data = $this->db->get('pelanggan')->result();
		return $data;
	}
 

	function insert_record($data){
		return $this->db->insert('invoice', $data);
	}
   
    private function _get_datatables_query() {
        
        $this->db->from($this->table);
      
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_GET['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_GET['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_GET['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_GET['order'])) 
        {
            $this->db->order_by($this->column_order[$_GET['order']['0']['column']], $_GET['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_GET['length'] != -1)
            
        $this->db->limit($_GET['length'], $_GET['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        /*$this->db->from($this->table);*/
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    function update_data_pelanggan($data, $id_pelanggan){
        $this->db->where('pelanggan_id', $id_pelanggan);
		return $this->db->update($this->table, $data);
	}

    public function delete($id_pelanggan){
        $this->db->where('pelanggan_id', $id_pelanggan);

        $query = $this->db->delete($this->table);

        return $query;
    }

    public function insert_record_pelanggan($data){
    	$query = $this->db->insert($this->table, $data);

    	return $query;
    }

    public function get_data_pelanggan_byid($id_pelanggan){
    	$this->db->where('pelanggan_id',$id_pelanggan);
    	$query = $this->db->get($this->table);

    	return $query->row();
    }


    function get_pelanggan_select(){
        $this->db->select('pelanggan_id, nama_pelanggan, nama_alias');
        $query = $this->db->get($this->table);

        return $query->result();

    }

   

 

}

/* End of file pelanggan_model.php */
/* Location: ./application/models/pelanggan_model.php */