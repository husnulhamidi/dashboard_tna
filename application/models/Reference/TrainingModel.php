<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->table = 'r_tna_training';
    	$this->id = 'id';

	}

	public function get_data_training($post){
		$column_order = array(null,'a.code','a.name','a.owner','kompetensi');
        $column_search = array('a.code', 'a.name', 'a.type','b.name');

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
		$this->db->select('a.id,a.code,a.name,a.type,b.name as kompetensi')
				 ->from($this->table.' as a')
                 ->join('r_tna_kompetensi as b','b.code=a.r_tna_kompetensi_code','left');
                
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

    function generateCode($prefix){
        
        $check=$this->db->from($this->table)->select('RIGHT(code,4) as last')->where('LEFT(`code`,1)',$prefix)->where('status_code','1')->order_by('code','DESC')->get();
        if($check->num_rows()>0){
            $last =  $check->row()->last+1;
        }else{
            $last = 1;
        }

        $number = str_pad($last, 4, "0", STR_PAD_LEFT); 
		$kode = $prefix.date('y').$number;   
        return $kode;
	}

	function insert_training($data){
		return $this->db->insert($this->table, $data);
	}

	function get_training(){
		return $this->db->from($this->table)->where('status_code','1')->select('id,code,name,owner')->get()->result();
        
	}

	function get_training_byid($id){

        $data = $this->db->select('a.id,a.code,a.name,a.type,a.r_tna_kompetensi_code')
				 ->from($this->table.' as a')
                 ->join('r_tna_kompetensi as b','b.code=a.r_tna_kompetensi_code','left')
                 ->where('a.'.$this->id, $id)
                 ->get($this->table)->row();
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

	function update_training($data, $id){
		$this->db->where($this->id,$id);
		$update = $this->db->update($this->table,$data);

		return $update;		

	}
	function delete_training($id){
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
/* Location: ./application/models/Reference/trainingModel.php */