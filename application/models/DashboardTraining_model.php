<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardTraining_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->table_pengawalan = 'm_tna_pengawalan';
		$this->table_internalSahring = 'm_tna_internal_sharing';
	}

	public function getCountDashboard($thn){
        // Pelatihan
        $this->db->select('COUNT(*) as Pelatihan');
        $this->db->from('m_tna_pengawalan mtp');
        $this->db->join('r_tahapan_usulan rtu', 'rtu.id = mtp.tahapan_id', 'left');
        $this->db->where('mtp.jenis_development', 'Pelatihan');
        $this->db->where('YEAR(mtp.waktu_pelaksanaan)', $thn['thn']);
        $this->db->where('rtu.urutan >', 9);
        $query = $this->db->get();
        $pelatihan_result = $query->row_array();
        $pelatihan_count = $pelatihan_result['Pelatihan'] ?? 0;
        // $pelatihan_count = $pelatihan_result['Pelatihan'];

        // Sertifikasi
        $this->db->select('COUNT(*) as Sertifikasi');
        $this->db->from('m_tna_pengawalan mtp');
        $this->db->join('r_tahapan_usulan rtu', 'rtu.id = mtp.tahapan_id', 'left');
        $this->db->where('mtp.jenis_development', 'Sertifikasi');
        $this->db->where('YEAR(mtp.waktu_pelaksanaan)', $thn['thn']);
        $this->db->where('rtu.urutan >', 9);
        $query = $this->db->get();
        $sertifikasi_result = $query->row_array();
        $sertifikasi_count = $sertifikasi_result['Sertifikasi'] ?? 0;

        // Internal Sharing
        $this->db->select('COUNT(*) as internal_sharing');
        $this->db->from('m_tna_internal_sharing mis');
        $this->db->where('tanggal <', date('Y-m-d'));
        $this->db->where('YEAR(tanggal)', $thn['thn']);
        $query = $this->db->get();
        $internal_sharing_result = $query->row_array();
        $internal_sharing_count = $internal_sharing_result['internal_sharing'] ?? 0;


        return array(
            'Pelatihan' => $pelatihan_count,
            'Sertifikasi' => $sertifikasi_count,
            'internal_sharing' => $internal_sharing_count
        );
	}

	public function getDataKaryawanDashboard($thn){
		// $query = $this->db->select('mk.id, tis.judul_materi, mk.id, mk.nik_tg, mk.nama, mk.url, mo.nama as nama_organisasi, COUNT(mk.nama) as jumlah_training, mk.r_jenis_kelamin_id as jenis_kelamin')
  //           ->from('m_tna_internal_sharing_peserta isp')
  //           ->join('m_tna_internal_sharing tis', 'tis.id = isp.m_tna_internal_sharing_id')
  //           ->join('m_karyawan mk', 'mk.id = isp.m_karyawan_id')
  //           ->join('h_mutasi hm', 'hm.m_karyawan_id = mk.id')
  //           ->join('m_organisasi mo', 'mo.id = hm.m_organisasi_id')
  //           ->where('hm.is_aktif', 1)
  //           ->where('YEAR(tanggal)', $thn['thn'])
  //           ->group_by('mk.nama')
  //           ->order_by('jumlah_training', 'DESC')
  //           ->limit(10)
  //           ->get()
  //           ->result();
        $this->db->select('mk.id, mk.nama,mk.url, mk.nik_tg, mo.nama AS nama_organisasi, COUNT(DISTINCT mshp.m_tna_internal_sharing_id) + COUNT(DISTINCT mtp.r_tna_traning_id) AS jumlah_training,mk.r_jenis_kelamin_id as jenis_kelamin');
        $this->db->from('m_karyawan mk');
        $this->db->join('h_mutasi hm', 'mk.id = hm.m_karyawan_id');
        $this->db->join('m_organisasi mo', 'hm.m_organisasi_id = mo.id');
        $this->db->join('m_tna_internal_sharing_peserta mshp', 'mk.id = mshp.m_karyawan_id', 'left');
        $this->db->join('m_tna_internal_sharing mts', 'mts.id = mshp.m_tna_internal_sharing_id', 'left');
        $this->db->join('m_tna_pengawalan mtp', 'mk.id = mtp.m_karyawan_id', 'left');
        $this->db->join('r_tahapan_usulan rtu', 'rtu.id = mtp.tahapan_id', 'left');
        $this->db->where('hm.is_aktif', 1);
        // $this->db->where('rtu.urutan',14);
        // $this->db->where('YEAR(mts.tanggal)', $thn['thn']);
        // $this->db->or_where('YEAR(mtp.waktu_pelaksanaan)', $thn['thn']);
        $this->db->where('YEAR(mts.tanggal)', $thn['thn']);
        $this->db->or_where('YEAR(mtp.waktu_pelaksanaan)', $thn['thn']);
        $this->db->where('rtu.urutan >', 9);
        $this->db->group_by('mk.nama');
        $this->db->order_by('jumlah_training','DESC');
        $this->db->limit(10);
        
        $query = $this->db->get()->result();
        return $query;
	}

	public function getListDataKaryawan($post){
	    $column_order = array('mk.id');
		$column_search = array('mk.id');

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

        $this->db->select('mk.id, mk.nama,mk.url, mk.nik_tg, mo.nama AS nama_organisasi, COUNT(DISTINCT mshp.m_tna_internal_sharing_id) + COUNT(DISTINCT mtp.r_tna_traning_id) AS jumlah_training,mk.r_jenis_kelamin_id as jenis_kelamin');
        $this->db->from('m_karyawan mk');
        $this->db->join('h_mutasi hm', 'mk.id = hm.m_karyawan_id');
        $this->db->join('m_organisasi mo', 'hm.m_organisasi_id = mo.id');
        $this->db->join('m_tna_internal_sharing_peserta mshp', 'mk.id = mshp.m_karyawan_id', 'left');
        $this->db->join('m_tna_internal_sharing mts', 'mts.id = mshp.m_tna_internal_sharing_id', 'left');
        $this->db->join('m_tna_pengawalan mtp', 'mk.id = mtp.m_karyawan_id', 'left');
        $this->db->join('r_tahapan_usulan rtu', 'rtu.id = mtp.tahapan_id', 'left');
        $this->db->where('hm.is_aktif', 1);
        // $this->db->where('YEAR(mts.tanggal)', 2024);
        // $this->db->or_where('YEAR(mtp.waktu_pelaksanaan)', 2024);
        $this->db->where('YEAR(mts.tanggal)', $post['thn']);
        $this->db->or_where('YEAR(mtp.waktu_pelaksanaan)', $post['thn']);
        $this->db->where('rtu.urutan >', 9);
        $this->db->group_by('mk.nama');

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
			$this->db->order_by('jumlah_training', 'desc');
		}

		$this->db->limit($pageSize, $skip);
		$query = $this->db->get();
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
        echo json_encode($output);
		exit();
	}

}