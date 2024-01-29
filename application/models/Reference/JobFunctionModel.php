<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobFunctionModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	
		$this->table = 'r_tna_job_function';
    	$this->id = 'id';

	}

	public function get_data_jobfunction($post){
		$column_order = array(null,'jf.code','jf.name','jf.objid','job_family');
        $column_search = array('jf.code', 'jf.name', 'jf.objid','jfam.name');

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
		$this->db->select('jf.id,jf.code,jf.name,jf.objid,jfam.name as job_family')
				 ->from($this->table.' as jf')
                 ->join('r_tna_job_family as jfam','jfam.code=jf.r_tna_job_family_code','left');

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

	function insert_jobfunction($data){
		return $this->db->insert($this->table, $data);
	}

	function get_jobfunction(){
		return $this->db->from($this->table)->where('status_code','1')->select('id,code,name')->get()->result();
	}

	function get_jobfunction_byid($id){
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

	function update_jobfunction($data, $id){
		$this->db->where($this->id,$id);
		$update = $this->db->update($this->table,$data);

		return $update;		

	}
	function delete_jobfunction($id){
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
/* Location: ./application/models/Reference/jobfunctionModel.php */