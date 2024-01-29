<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {

	public  $table = 'project';
	var $column_order = array(null,'pelanggan.nama_alias','pelanggan.nama_pelanggan','project.no_wo','project.nama_project',null); //set column field database for datatable orderable
    var $column_search = array('pelanggan.nama_alias','pelanggan.nama_pelanggan','project.no_wo','project.nama_project'); //set column field database for datatable searchable 
    var $order = array('pelanggan.nama_pelanggan','project.no_wo','project.nama_project'); // default order

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

   
    private function _get_datatables_query() {
        
		$this->db->select('pelanggan.pelanggan_id,pelanggan.nama_alias, pelanggan.nama_pelanggan, project.*');
        $this->db->from($this->table);
		$this->db->join('pelanggan','pelanggan.pelanggan_id = project.pelanggan_id','inner');
      
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
        $this->db->select('pelanggan.pelanggan_id, pelanggan.nama_pelanggan, project.*');
        $this->db->from($this->table);
		$this->db->join('pelanggan','pelanggan.pelanggan_id = project.pelanggan_id','inner');
        return $this->db->count_all_results();
    }

    function get_project(){
		$this->db->select('pelanggan.pelanggan_id, pelanggan.nama_pelanggan,pelanggan.nama_alias, project.*');
		$this->db->from($this->table);
		$this->db->join('pelanggan','pelanggan.pelanggan_id = project.pelanggan_id','inner');
		$data = $this->db->get();

		return $data->result();
	}

    function insert_record_project($data){
        $query = $this->db->insert($this->table, $data);
        return $query;
    }

    function delete_project_byid($id_project){
        $this->db->where('project_id', $id_project);
        $query = $this->db->delete($this->table);

        return $query;
    }

    function get_data_project_byid($project_id){
        $this->db->where('project_id', $project_id);
        $query = $this->db->get($this->table);

        return $query->row();
    }
    function update_data_project($data, $project_id){
        $this->db->where('project_id', $project_id);
        $query = $this->db->update($this->table, $data);

        return $query;
    }
    function insert_project($data)
    {
        $query = $this->db->insert('project', $data);
        return $query;
    }

    function getJumlahNode($project_id){
        $sql="SELECT count(node_id) jumlah_node FROM node WHERE project_id=?";
        $query = $this->db->query($sql,array($project_id));
        return $query->row();
    }
}

/* End of file project_model.php */
/* Location: ./application/models/project_model.php */