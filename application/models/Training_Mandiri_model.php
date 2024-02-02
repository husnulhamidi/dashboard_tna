<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Training_Mandiri_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
		$this->table = 'm_tna_training_mandiri';
    	$this->id = 'id';

	}

	public function getDataTrainingMandiri($post){
		$column_order = array('karyawan','kompetensi','pelatihan','kategori_pelatihan','metode_pelatihan');
		$column_search = array('karyawan','kompetensi','pelatihan','kategori_pelatihan','metode_pelatihan');

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
		$this->db->select('	mk.nama as karyawan,
	   						komp.name as kompetensi,
       						training.name as pelatihan,
       						m_tna_training_mandiri.kategori_pelatihan, 
       						m_tna_training_mandiri.metoda_pembelajaran,
       						m_tna_training_mandiri.alasan_rejected, m_tna_training_mandiri.nama_penyelenggara, m_tna_training_mandiri.biaya, m_tna_training_mandiri.tanggal_mulai, m_tna_training_mandiri.tanggal_selesai, m_tna_training_mandiri.justifikasi_pelatihan,m_tna_training_mandiri.id,m_tna_training_mandiri.status_approval,
       						hm.is_aktif,
       						mo.nama as unit
                        ');
        $this->db->from($this->table);
        $this->db->join('m_karyawan as mk','m_tna_training_mandiri.m_karyawan_id=mk.id');
        $this->db->join('r_tna_kompetensi as komp', 'm_tna_training_mandiri.r_tna_kompetensi_id=komp.id');
        $this->db->join('r_tna_training as training','m_tna_training_mandiri.r_tna_training_id = training.id');
        $this->db->join('h_mutasi as hm', 'hm.m_karyawan_id=mk.id AND hm.is_aktif = 1','left');
        $this->db->join('m_organisasi as mo', 'mo.id=hm.m_organisasi_id','left');
        // $this->db->where('hm.is_aktif', '1');
				 

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

	public function insertData($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function getDetailTrainingMandiri($id){
		$this->db->where($this->id, $id);
		$data = $this->db->get($this->table)->row();
		return $data;
	}

	public function updateData($data, $id){
		$this->db->where('id',$id);
		$update = $this->db->update($this->table,$data);
		return $update;
	}

	public function verifikasi($data, $id){
		$this->db->where('id',$id);
		$update = $this->db->update($this->table,$data);
		return $update;
	}

	public function delete_training_mandiri($id){
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