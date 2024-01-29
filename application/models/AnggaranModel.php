<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggaranModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->tna = $this->load->database('default', TRUE);
		$this->table = 'm_tna_anggaran';
    	$this->id = 'id';

	}

	public function get_data($post){
		//echo $post['search']['value'];die;
		$column_order = array('nominal', 'year', 'type');
		$column_search = array('nominal', 'year', 'type');
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
        $this->tna->start_cache();
		$this->tna->select('id,nominal,year,type')
				 ->from('m_tna_anggaran');

		IF($post['search']['value']!=""){
			$i = 0;
			foreach ($column_search as $item) // looping awal
			{
				if($post['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
				{
					
					if($i===0) // looping awal
					{
						$this->tna->group_start(); 
						$this->tna->like($item, $post['search']['value']);
					}
					else
					{
						$this->tna->or_like($item, $post['search']['value']);
					}
	
					if(count($column_search) - 1 == $i) 
						$this->tna->group_end(); 
					
				}
				$i++;
			}
		}

		$this->tna->stop_cache();
		$x = $this->tna->count_all_results();

		if (!empty($post['order'])) {
			$this->tna->order_by($column_order[$post['order']['0']['column']], $post['order']['0']['dir']);
		} else {
			$this->tna->order_by('id', 'desc');
		}

		$this->tna->limit($pageSize, $skip);
		$query = $this->tna->get();
		//echo $this->tna->last_query();
		$data = $query->result_array();
		$this->tna->flush_cache();

		foreach ($data as $i => $rec) {
			$data[$i]['nominal'] = $rec['nominal']?number_format($rec['nominal'],0,',','.'):'0';
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

	function insert($data){
		return $this->tna->insert($this->table, $data);
	}

	function get_data_byid($id){
		$this->tna->where($this->id, $id);
		$data = $this->tna->get($this->table)->row();

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

	function update($data, $id){
		$this->tna->where($this->id,$id);
		$update = $this->tna->update($this->table,$data);

		return $update;		

	}
	function delete($id){
		$this->tna->where($this->id,$id);
		$delete = $this->tna->delete($this->table);
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
/* Location: ./application/models/bank_model.php */