<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LibrarySertifikasiModel extends CI_Model {

	public function getDataLibrarySertifikasi($post){
		$column_order = array(
			'tpd.id',
			'tp.nama_kegiatan as nama_sertifikat',
			'IFNULL(tp.nama_karyawan,mk.nama) as nama_karyawan',
			'IFNULL(tp.subdit_name,mo.nama) as subdit',
			'tpd.tanggal_berlaku_awal',
			'tpd.tanggal_berlaku_akhir',
			'tpd.no_dokumen as nomor_sertifikat',
			'tp.nama_penyelenggara'
		);
		
		$column_search = array(
			'tpd.id',
			'tp.nama_kegiatan as nama_sertifikat',
			'IFNULL(tp.nama_karyawan,mk.nama) as nama_karyawan',
			'IFNULL(tp.subdit_name,mo.nama) as subdit',
			'tpd.tanggal_berlaku_awal',
			'tpd.tanggal_berlaku_akhir',
			'tpd.no_dokumen as nomor_sertifikat',
			'tp.nama_penyelenggara'
		);

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

		$this->db->select('
						tpd.id,
						tp.nama_kegiatan as nama_sertifikat,
						IFNULL(tp.nama_karyawan, mk.nama) as nama_karyawan,
						IFNULL(tp.subdit_name, mo.nama) as subdit,
						tpd.tanggal_berlaku_awal,
						tpd.tanggal_berlaku_akhir,
						tpd.no_dokumen as nomor_sertifikat,
						tp.nama_penyelenggara,
						tpd.nama_dokumen as dokumen
					');
		$this->db->from('m_tna_pengawalan as tp');
		$this->db->join('m_tna_pengawalan_dokumen as tpd', 'tp.id = tpd.m_tna_pengawalan_id');
		$this->db->join('m_karyawan as mk', 'tp.m_karyawan_id = mk.id', 'left');
		$this->db->join('m_organisasi as mo', 'tp.m_organisasi_id = mo.id', 'left');
		$this->db->where('tpd.tipe', 'Sertifikat');
		
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