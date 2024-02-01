<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Justifikasi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		
		$this->table = 'm_tna_justifikasi_rjbp';
    	$this->id = 'id';

	}

	public function getDataJustifikasi($post){
		$column_order = array('justifikasi','deskripsi','jumlah_kopetensi','jumlah_tarining');
		$column_search = array('justifikasi','deskripsi','jumlah_kopetensi','jumlah_tarining');

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
		$this->db->select('m_tna_justifikasi_rjbp.id,
                            m_tna_justifikasi_rjbp.justifikasi,
                            m_tna_justifikasi_rjbp.deskripsi,
                            count(DISTINCT(juskom.r_tna_kompentensi_id)) as jumlah_kopetensi,
                            count(training.r_tna_kompetensi_code) as jumlah_tarining
                        ');
        $this->db->from($this->table);
        $this->db->join('m_tna_justifikasi_rjbp_kompetensi as juskom','m_tna_justifikasi_rjbp.id=juskom.m_tna_justifikasi_rjbp_id', 'left');
        $this->db->join('r_tna_kompetensi as kompetensi', 'kompetensi.id=juskom.r_tna_kompentensi_id', 'left');
        $this->db->join('r_tna_training as training','training.r_tna_kompetensi_code = kompetensi.code', 'left');
        $this->db->group_by('juskom.m_tna_justifikasi_rjbp_id,m_tna_justifikasi_rjbp.id');
				 

		IF($post['search']['value']!=""){
			$i = 0;
			foreach ($column_search as $item) // looping awal
			{
				if($post['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
				{
					if($i===0){
						$this->db->group_start(); 
						$this->db->like($item, $post['search']['value']);
					}else{
						$this->db->or_like($item, $post['search']['value']);
					}

					if(count($column_search) - 1 == $i)$this->db->group_end(); 
					
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

	function insertData($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	function updateData($data, $id){
		$this->db->where('id',$id);
		$update = $this->db->update($this->table,$data);
		return $update;	
	}

	function get_jobfamily(){
		return $this->db->from('r_tna_job_family')->where('status_code','1')->select('id,code,name,code_numeric')->get()->result();
	}

	function get_jobfunc(){
		return $this->db->from('r_tna_job_function')->where('status_code','1')->select('id,code,name,code_numeric')->get()->result();
	}

	function get_jobrole(){
		return $this->db->from('r_tna_job_role')->where('status_code','1')->select('id,code,name,code_numeric')->get()->result();
	}

	function get_kompetensi(){
		return $this->db->from('r_tna_kompetensi')->where('status_code','1')->select('id,code,name')->get()->result();
	}


	function getDataKompetensi($post, $id){
		$column_order = array('name','code','helper','r_tna_job_role_code');
		$column_search = array('name','code','helper','r_tna_job_role_code');

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
		// $this->db->select('a.id as idKompetensi,
		// 					b.id,b.name as kompetensi,
		// 					e.name as job_family, e.id as id_job_family,
		// 					d.name as job_function, d.id as id_job_function,
		// 					c.name as job_role, c.id as id_job_role');
  //       $this->db->from('m_tna_justifikasi_rjbp_kompetensi as a');
  //       $this->db->join('r_tna_kompetensi as b','a.r_tna_kompentensi_id = b.id');
  //       $this->db->join('r_tna_job_role as c','b.r_tna_job_role_code = c.code','left');
  //       $this->db->join('r_tna_job_function as d','c.r_tna_job_function_code = d.code','left');
  //       $this->db->join('r_tna_job_family as e','d.r_tna_job_family_code = e.code','left');
  //       $this->db->where('a.m_tna_justifikasi_rjbp_id',$id);
        $this->db->select('a.id as idKompetensi,
							b.id,b.name as kompetensi,
							e.name as job_family, e.id as id_job_family,
							d.name as job_function, d.id as id_job_function,
							c.name as job_role, c.id as id_job_role');
        $this->db->from('m_tna_justifikasi_rjbp_kompetensi as a');
        $this->db->join('r_tna_kompetensi as b','a.r_tna_kompentensi_id = b.id');
        $this->db->join('r_tna_job_role as c','a.r_tna_job_role_id = c.id','left');
        $this->db->join('r_tna_job_function as d','a.r_tna_job_function_id = d.id','left');
        $this->db->join('r_tna_job_family as e','a.r_tna_job_family_id = e.id','left');
        $this->db->where('a.m_tna_justifikasi_rjbp_id',$id);
				 

		IF($post['search']['value']!=""){
			$i = 0;
			foreach ($column_search as $item) // looping awal
			{
				if($post['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
				{
					if($i===0){
						$this->db->group_start(); 
						$this->db->like($item, $post['search']['value']);
					}else{
						$this->db->or_like($item, $post['search']['value']);
					}

					if(count($column_search) - 1 == $i)$this->db->group_end(); 
					
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

	function getDataTraining($id){

		$this->db->select('b.name, b.id, b.type');
        $this->db->from('r_tna_kompetensi as a');
        $this->db->join('r_tna_training as b','a.code=b.r_tna_kompetensi_code');
        $this->db->where('a.id', $id);

        $query = $this->db->get();
		$data = $query->result_array();

        $output = $data;
        echo json_encode($output);
		exit();
	}

	function getDetailJustifikasi($id){
		$this->db->where($this->id, $id);
		$data = $this->db->get($this->table)->row();
		return $data;
	}

	function getCodeRole($id){
		$this->db->where('id', $id);
		$data = $this->db->get('r_tna_job_role')->row();
		return $data;
	}

	function getCodeKompetensi($id){
		$this->db->where('id', $id);
		$data = $this->db->get('r_tna_kompetensi')->row();
		return $data;
	}

	function createDataKompetensi($data){
		$this->db->insert('r_tna_kompetensi', $data);
		return $this->db->insert_id();
	}

	function insertDataKompetensi($data){
		$this->db->insert('m_tna_justifikasi_rjbp_kompetensi', $data);
		return $this->db->insert_id();
	}

	function updateDataKompetensi($data, $id){
		$this->db->where('id',$id);
		$update = $this->db->update('m_tna_justifikasi_rjbp_kompetensi',$data);

		return $update;		
	}

	function insertDataTraining($data){
		$this->db->insert('r_tna_training', $data);
		return $this->db->insert_id();
	}

	function updateDataTraining($data, $id){
		$this->db->where('id',$id);
		$update = $this->db->update('r_tna_training',$data);

		return $update;		
	}

	function delete_justifikasi($id){
		// delete relasi
		$this->db->where('m_tna_justifikasi_rjbp_id', $id);
		$this->db->delete('m_tna_justifikasi_rjbp_kompetensi');

		// delete tabel
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

	function delete_kompetensi($id){
		// delete relasi
		$this->db->where('r_tna_kompentensi_id', $id);
		$delete = $this->db->delete('m_tna_justifikasi_rjbp_kompetensi');

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

	function delete_training($id){
		$this->db->where('id', $id);
		$delete = $this->db->delete('r_tna_training');

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
	
	// function update_jobfamily($data, $id){
		// $this->db->where($this->id,$id);
		// $update = $this->db->update($this->table,$data);

		// return $update;		

	// }
	// function delete_jobfamily($id){
	// 	$this->db->where($this->id,$id);
	// 	$delete = $this->db->delete($this->table);
		// if($delete){
		// 	$return = array(
		// 		'success'		=> true,
		// 		'status_code'	=> 200,
		// 		'msg'			=> "Hapus data berhasi.",
		// 		'data'			=> array()
		// 	);
		// }else{
		// 	$return = array(
		// 		'success'		=> false,
		// 		'status_code'	=> 200,
		// 		'msg'			=> "Hapus data gagal.",
		// 		'data'			=> array()
		// 	);
		// }
		// return $return;		
	// }


}

/* End of file bank_model.php */
/* Location: ./application/models/Reference/JobFamilyModel.php */