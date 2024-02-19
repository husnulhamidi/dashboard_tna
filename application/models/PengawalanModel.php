<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengawalanModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'm_tna_pengawalan';
    	$this->id = 'id';

	}

	public function getDataPengawalan($post){
		$column_order = array('id,training,code_tna,jenis_development,metoda_pembelajaran,jenis_pelatihan,kompetensi,nama_penyelenggara,waktu_pelaksanaan,estimasi_biaya');
		$column_search = array('id,training,code_tna,jenis_development,metoda_pembelajaran,jenis_pelatihan,kompetensi,nama_penyelenggara,waktu_pelaksanaan,estimasi_biaya');

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

		$this->db->select('tp.id AS id, tp.code_tna AS id_tna, mk.nama AS nama_karyawan,mk.id AS id_karyawan, mo.nama AS nama_organisasi, mo.id AS id_organisasi, tp.status_karyawan, tk.name AS kompetensi, tp.jenis_development, rt.name AS pelatihan, tp.justifikasi_pengajuan, tp.metoda_pembelajaran, tp.estimasi_biaya, tp.nama_penyelenggara, tp.waktu_pelaksanaan, tu.nama AS status, tp.objective, tp.jenis_pelatihan,tp.tahapan_id,tu.urutan, mk.nik_tg');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_traning_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('r_tahapan_usulan tu', 'tu.id = tp.tahapan_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id');
		$this->db->where('tu.r_jenis_usulan_id', 29);
		$this->db->where('tu.urutan <>', 1);

		// if($post['filter_subdit'] !== 'all'){
		// 	$this->db->where('tp.m_organisasi_id', $post['filter_subdit']);
		// }
		// if($post['filter_kompetensi'] !== 'all'){
		// 	$this->db->where('tp.r_tna_kompetensi_id', $post['filter_kompetensi']);
		// }
		// if($post['filter_jenis_development'] !== 'all'){
		// 	$this->db->where('tp.jenis_development', $post['filter_jenis_development']);
		// }
		// if($post['filter_nama_pelatihan'] !== 'all'){
		// 	$this->db->where('tp.r_tna_traning_id', $post['filter_nama_pelatihan']);
		// }
		// if($post['filter_justifikasi'] !== ''){
		// 	$this->db->like('tp.justifikasi_pengajuan', $post['filter_justifikasi'],'both');
		// }
		// if($post['filter_metoda_pembelajaran'] !== 'all'){
		// 	$this->db->where('tp.metoda_pembelajaran', $post['filter_metoda_pembelajaran']);
		// }
		// if($post['filter_biaya_min'] !== ''){
		// 	$this->db->where('tp.estimasi_biaya >=', $post['filter_biaya_min']);
		// }

		// if($post['filter_biaya_max'] !== ''){
		// 	$this->db->where('tp.estimasi_biaya <=', $post['filter_biaya_max']);
		// }

		// if($post['filter_penyelenggara'] !== ''){
		// 	$this->db->like('tp.nama_penyelenggara', $post['filter_penyelenggara'],'both');
		// }
		// if($post['filter_karyawan'] !== 'all'){
		// 	$this->db->where('tp.m_karyawan_id', $post['filter_karyawan']);
		// }
		
		// if($post['filter_status_karyawan'] !== 'all'){
		// 	$this->db->where('tp.status_karyawan', $post['filter_status_karyawan']);
		// }

		// if($post['filter_waktu_awal']){
  //           $tgl1 = $this->chageDate($post['filter_waktu_awal']);
  //           $this->db->where('tp.waktu_pelaksanaan >=',$tgl1);
  //       }

  //       if($post['filter_waktu_akhir']){
  //           $tgl2 = $this->chageDate($post['filter_waktu_akhir']);
  //           $this->db->where('tp.waktu_pelaksanaan <=',$tgl2);
  //       }

		// $query = $this->db->get();
		// $result = $query->result();
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
		foreach ($data as $key => $rec) {
			$total_tahapan=12;
			if($rec['urutan']==1){
				$status_proses = "";
				for ($i=1; $i < 13; $i++) { 
					$status_proses.="<i class='fa fa-circle-o text-muted'></i> ";
				}
			}else{
				$verified = "";
				for ($i=1; $i < $rec['urutan']-1; $i++) { 
					$verified.="<i class='fa fa-check-circle text-green'></i> ";
				}

				for ($x=$rec['urutan']-1; $x < 13; $x++) { 
					$verified.="<i class='fa fa-circle-o text-muted'></i> ";
				}

				$status_proses = $verified;
				
			}
			$data[$key]['tahapan_proses'] = $status_proses;
		}

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

	public function getDataDashboard(){
		$this->db->select('COUNT(CASE WHEN tu.nama = "Verifikasi Mgr.Lini" THEN 1 END) AS mgrLini');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Verifikasi Manager HCPD" THEN 1 END) AS mgrHCPD');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Verifikasi AVP HCM" THEN 1 END) AS appHCM');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Form Pernyataan Peserta" THEN 1 END) AS pernyataan_peserta');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Jadwal Pelaksanaan (Konfirmasi Kuota)" THEN 1 END) AS rekomfirmasi_kuota');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Kelengkapan Dokumen" THEN 1 END) AS kelengkapan_dokumen');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Nota Dinas Penugasan" THEN 1 END) AS nota_dinas_penugasan');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Pembayaran" THEN 1 END) AS pembayaran');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Upload Sertifikat" THEN 1 END) AS sertifikat');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Upload Materi" THEN 1 END) AS materi');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Internal Sharing" THEN 1 END) AS internal_sharing');
		$this->db->select('COUNT(CASE WHEN tu.nama = "Evaluasi" THEN 1 END) AS evalusi');


		$this->db->from('m_tna_pengawalan as tp');
		$this->db->join('r_tahapan_usulan as tu', 'tu.id = tp.tahapan_id');
		$this->db->where('tu.r_jenis_usulan_id', 29);
		$this->db->where('tu.is_aktif', 1);
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function get_id_organisasi($nama){
		return $this->db->from('m_organisasi')->like('nama',$nama,'both')->select('id,nama')->get()->row();
	}

	public function save_waktu($data){
		return $this->db->insert('m_tna_pengawalan_waktu_pelaksanaan', $data);
	}

	public function save_dokumen($data){
		return $this->db->insert('m_tna_pengawalan_dokumen', $data);
	}

	public function save_nota_dinas($data){
		return $this->db->insert('m_tna_pengawalan_nota_dinas', $data);
	}

	public function save_pembayaran($data){
		return $this->db->insert('m_tna_pengawalan_pembayaran', $data);
	}
	public function save_materi($data){
		return $this->db->insert('m_tna_pengawalan_materi', $data);
	}

	public function get_detail($id){
		$this->db->select('tp.*, 
							rt.name as training,  
							tk.name as kompetensi,
							mk.nama as nama_karyawan,mo.nama as nama_organisasi,tp.status_karyawan');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_traning_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id');
		$this->db->where('tp.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	

}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */