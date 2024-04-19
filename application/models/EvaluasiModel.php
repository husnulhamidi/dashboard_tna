<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EvaluasiModel extends CI_Model {


	public function getDataEvaluasi($post){
		$column_order = array('tp.id','tu.nama','tp.code_tna','mk.nama','mo.nama','tp.status_karyawan','tk.name','tp.jenis_development','rt.name','tp.justifikasi_pengajuan','tp.metoda_pembelajaran','tp.estimasi_biaya','tp.nama_penyelenggara','tp.waktu_pelaksanaan');
		$column_search = array('tp.id','tu.nama','tp.code_tna','mk.nama','mo.nama','tp.status_karyawan','tk.name','tp.jenis_development','rt.name','tp.justifikasi_pengajuan','tp.metoda_pembelajaran','tp.estimasi_biaya','tp.nama_penyelenggara','tp.waktu_pelaksanaan');

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

		$this->db->select('tp.id AS id, 
                    tp.code_tna AS id_tna, 
                    mk.nama AS nama_karyawan,
                    mk.id AS id_karyawan, 
                    mo.nama AS nama_organisasi, 
                    mo.id AS id_organisasi, 
                    tp.status_karyawan, 
                    tk.name AS kompetensi, 
                    tp.jenis_development, 
                    rt.name AS pelatihan, 
                    tp.justifikasi_pengajuan, 
                    tp.metoda_pembelajaran, 
                    tp.estimasi_biaya, 
                    tp.nama_penyelenggara, 
                    tp.waktu_pelaksanaan, 
                    tu.nama AS status, 
                    tp.objective, 
                    tp.jenis_pelatihan, 
                    tp.tahapan_id, 
                    tu.urutan, 
                    mk.nik_tg, 
                    tp.is_evaluasi,
                    mis.is_complete,
                    tp.jenis_development,
                    tp.waktu_pelaksanaan_mulai,
                    tp.waktu_pelaksanaan_selesai,
					tp.is_submit_evaluasi,
                    mis.id as internal_sharing');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_traning_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('r_tahapan_usulan tu', 'tu.id = tp.tahapan_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id');
		$this->db->join('m_tna_internal_sharing mis', 'mis.m_tna_pengawalan_id = tp.id', 'left');
		$this->db->where('tu.r_jenis_usulan_id', 29);
		$this->db->where('tp.is_submit_evaluasi', 1);

		// if($post['tabs'] == 'all'){
		// 	$this->db->where('tu.urutan <>', 1);
		// }
		// if($post['tabs'] == 'verifikasi'){
		// 	$this->db->where('tu.urutan <>', 1);
		// }
		// if($post['tabs'] == 'finish'){
		// 	$this->db->where('tu.urutan', 14);
		// }
		
		// if($post['tabs'] == 'evaluasi'){
		// 	$this->db->where('NOW() >= DATE_ADD(tp.waktu_pelaksanaan_selesai, INTERVAL 180 DAY)', NULL, FALSE);
		// }
		

		if($post['filter_peserta'] !== 'all'){
			$this->db->like('mk.nama', $post['filter_peserta'],'both');
		}
		if($post['filter_unit'] !== 'all'){
			$this->db->where('mo.id', $post['filter_unit']);
		}
		if($post['filter_pelatihan'] !== 'all'){
			$this->db->like('rt.name', $post['filter_pelatihan'],'both');
		}
		if($post['filter_penyelenggara'] !== ''){
			$this->db->like('tp.nama_penyelenggara', $post['filter_penyelenggara'],'both');
		}
		if($post['filter_kompetensi'] !== 'all'){
			$this->db->where('tp.r_tna_kompetensi_id', $post['filter_kompetensi']);
		}
		if($post['filter_development'] !== 'all'){
			$this->db->where('tp.jenis_development', $post['filter_development']);
		}
		if($post['filter_pembelajaran'] !== 'all'){
			$this->db->where('tp.metoda_pembelajaran', $post['filter_pembelajaran']);
		}
		if($post['filter_biaya_min'] !== ''){
			$this->db->where('tp.estimasi_biaya >=', $post['filter_biaya_min']);
		}

		if($post['filter_biaya_max'] !== ''){
			$this->db->where('tp.estimasi_biaya <=', $post['filter_biaya_max']);
		}

		if($post['filter_tgl_mulai']){
            $tgl1 = $this->chageDate($post['filter_tgl_mulai']);
            $this->db->where('tp.waktu_pelaksanaan >=',$tgl1);
        }

        if($post['filter_tgl_selesai']){
            $tgl2 = $this->chageDate($post['filter_tgl_selesai']);
            $this->db->where('tp.waktu_pelaksanaan <=',$tgl2);
        }

        if($post['filter_tahapan'] !== 'all'){
			$this->db->where('tp.tahapan_id', $post['filter_tahapan']);
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