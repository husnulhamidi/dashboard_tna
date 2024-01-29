<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Node_model extends CI_Model {

	public  $table = 'node';
	var $column_order = array('node.nama_deskripsi','produk.nama_produk','node.speed','node.tgl_tagih','node.tgl_off','node.otc','node.mrc','node.cpe',null); //set column field database for datatable orderable
    var $column_search = array('produk.nama_produk','node.nama_deskripsi','node.speed','node.tgl_tagih','node.tgl_off','node.otc','node.mrc','node.cpe'); //set column field database for datatable searchable 
    var $order = array('node.nama_deskripsi','produk.nama_produk'); // default order

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

   
    private function _get_datatables_query($id_project) {
        $this->db->select('project.project_id, produk.nama_produk as produk, node.*');
        $this->db->from($this->table);
        $this->db->join('project','node.project_id = project.project_id','inner');
        $this->db->join('produk','produk.produk_id = node.produk_id','inner');
        $this->db->where('project.project_id',$id_project);
      
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
 
    function get_datatables($id_project)
    {
        $this->_get_datatables_query($id_project);
        if($_GET['length'] != -1)
            
        $this->db->limit($_GET['length'], $_GET['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($id_project)
    {
        $this->_get_datatables_query($id_project);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all($id_project)
    {
        /*$this->db->from($this->table);*/
        $this->db->select('project.project_id,produk.nama_produk as produk, node.*');
        $this->db->from($this->table);
        $this->db->join('project','node.project_id = project.project_id','inner');
        $this->db->join('produk','produk.produk_id = node.produk_id','inner');
        $this->db->where('project.project_id',$id_project);
        return $this->db->count_all_results();
    }

    public function insert_record_node($data){
        $query = $this->db->insert($this->table, $data);

        return $query;
    }

     public function delete_node_byid($id_node){
        $this->db->where('node_id', $id_node);

        $query = $this->db->delete($this->table);

        return $query;
    }


    function update_data_node($data, $id_node){
        $this->db->where('node_id', $id_node);
		return $this->db->update($this->table, $data);
    }  
    function get_node_by_projectID($id_project){
        $this->db->where('project_id',$id_project);
		return $this->db->get('node')->result();
    }
    
    function getTglTagihNode($project_id){
        $sql = "SELECT min(tgl_tagih) tgl_tagih, max(tgl_off) tgl_off FROM node WHERE project_id=?";
        $query = $this->db->query($sql,array($project_id));
        return $query->row();
    }

    function simpan_generate_tagihan_batch($data, $project_id){
        $this->db->trans_begin();

            //$this->db->where('project_id', $project_id);
            //$this->db->delete('tagihan');

            $this->db->insert_batch('tagihan', $data);

        if ($this->db->trans_status() === FALSE)
        {
                $this->db->trans_rollback();
                return false;
        }
        else
        {
                $this->db->trans_commit();
                return true;
        }

    }

    function insert_node($data){
        $query = $this->db->insert($this->table,$data);
        return $query;
    }

 

}

/* End of file node_model.php */
/* Location: ./application/models/node_model.php */