<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobRoleModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
		$this->table = 'r_tna_job_role';
    	$this->id = 'id';

	}

	public function get_data_jobrole($post){
		$column_order = array(null,'a.code','a.name','a.objid','job_function');
        $column_search = array('a.code', 'a.name', 'a.objid','b.name');

        $draw = $post['draw'];
        $start = $post['start'];
        $length = $post['length'];

        if ($length != null) {
            $pageSize = $length;
        } else {
            $pageSize = 0;
        }
        if ($start != null) {
            $skip = $start;
        } else {
            $skip = 0;
        }
		$recordsTotal = 0;
        $this->db->start_cache();
		$this->db->select('a.id,a.code,a.name,a.long_name,a.objid,b.name as job_function')
				 ->from($this->table.' as a')
                 ->join('r_tna_job_function as b','b.code=a.r_tna_job_function_code','left');

        IF($post['search']['value']!=""){
            $i = 0;
            foreach ($column_search as $item) // looping awal
            {
                if($post['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
                {
                    if($i===0) // looping awal
                    {
                        $this->db->group_start(); 
                        $this->db->like($item, $post['search']['value']);
                    }
                    else
                    {
                        $this->db->or_like($item, $post['search']['value']);
                    }

                    if(count($column_search) - 1 == $i) 
                        $this->db->group_end(); 
                    
                }
                $i++;
            }
        }
		$this->db->group_by('a.id');
		$this->db->stop_cache();
		$x = $this->db->count_all_results();

		if (!empty($post['order'])) {
			$this->db->order_by($column_order[$post['order']['0']['column']], $post['order']['0']['dir']);
		} else {
			$this->db->order_by('id', 'desc');
		}

		$this->db->limit($pageSize, $skip);
		$query = $this->db->get();
		//echo $this->db->last_query();
		$data = $query->result_array();
		$this->db->flush_cache();

		foreach ($data as $i => $rec) {
			$data[$i]['encrypt_id'] = encrypt_url($rec['id']);
			# code...
		}
		$output = array(
            "draw" => $draw,
            "recordsTotal" => $x,
            "recordsFiltered" => $x,
            "data" => $data,
        );
        //print_r($output);exit;
        //output to json format
        echo json_encode($output);
		exit();
	}

	function insert_jobrole($data){
		return $this->db->insert($this->table, $data);
	}

	function get_jobrole(){
		return $this->db->from($this->table)->where('status_code','1')->select('id,code,name')->get()->result();
	}

	function get_jobrole_byid($id){
		$this->db->where($this->id, $id);
		$data = $this->db->get($this->table)->row();

		if(!empty($data)){
			$data->encrypt_id=encrypt_url($id);
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Berhasi.",
				'data'			=> $data
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 200,
				'msg'			=> "Data tidak ditemukan.",
				'data'			=> array()
			);
        }

		return $return;
	}

	function update_jobrole($data, $id){
		$this->db->where($this->id,$id);
		$update = $this->db->update($this->table,$data);

		return $update;		

	}
	function delete_jobrole($id){
		$this->db->where($this->id,$id);
		$delete = $this->db->delete($this->table);
		if($delete){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Hapus data berhasi.",
				'data'			=> array()
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 200,
				'msg'			=> "Hapus data gagal.",
				'data'			=> array()
			);
		}
		return $return;		
	}


}

/* End of file bank_model.php */
/* Location: ./application/models/Reference/jobroleModel.php */