<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibraryMateriModel extends CI_Model {

	public function getDataLibraryMateri($post){
		$column_order = array('tpm.id','tp.nama_kegiatan','tk.name as kompetensi','tp.nama_penyelenggara','tp.waktu_pelaksanaan','tp.jenis_development','tpm.dokumen');
		$column_search = array('tpm.id','tp.nama_kegiatan','tk.name as kompetensi','tp.nama_penyelenggara','tp.waktu_pelaksanaan','tp.jenis_development','tpm.dokumen');

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

		$this->db->select('tpm.id, tp.nama_kegiatan, tk.name as kompetensi, tp.nama_penyelenggara, tp.waktu_pelaksanaan, tp.jenis_development, tpm.dokumen');
        $this->db->from('m_tna_pengawalan_materi as tpm');
        $this->db->join('m_tna_pengawalan as tp', 'tp.id = tpm.m_tna_pengawalan_id');
        $this->db->join('r_tna_kompetensi as tk', 'tp.r_tna_kompetensi_id = tk.id');

        if($post['filter_nama_pelatihan']){
            $this->db->like('tp.nama_kegiatan',$post['filter_nama_pelatihan'],'both');
        }
        if($post['filter_kompetensi']){
            $this->db->like('tk.name',$post['filter_kompetensi'],'both');
        }
        if($post['filter_penyelenggara']){
            $this->db->like('tp.nama_penyelenggara',$post['filter_penyelenggara'],'both');
        }
        if($post['thn_tr']){
            $this->db->like('tp.waktu_pelaksanaan',$post['thn_tr'], 'after');
        }
        if($post['filter_development'] != 'all'){
            $this->db->like('tp.jenis_development',$post['filter_development'],'both');
        }
		
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

}