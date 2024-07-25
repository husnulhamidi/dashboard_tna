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
							m_tna_training_mandiri.is_approval_admin,
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
	
	public function insertHistory($data){
		$this->db->insert('m_tna_training_mandiri_riwayat', $data);
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

	public function getCountDashboard($idKaryawan){
        // Pelatihan
        $this->db->select('COUNT(*) as Pelatihan');
        $this->db->from('m_tna_pengawalan');
		$this->db->join('r_tahapan_usulan rtu', 'rtu.id = m_tna_pengawalan.tahapan_id', 'left');
        $this->db->where('jenis_development', 'Pelatihan');
        $this->db->where('m_karyawan_id', $idKaryawan);
		$this->db->where('rtu.urutan >', 9);
        $query = $this->db->get();
        $pelatihan_result = $query->row_array();
        $pelatihan_count = $pelatihan_result['Pelatihan'] ?? 0;

        // Sertifikasi
        $this->db->select('COUNT(*) as Sertifikasi');
        $this->db->from('m_tna_pengawalan');
		$this->db->join('r_tahapan_usulan rtu', 'rtu.id = m_tna_pengawalan.tahapan_id', 'left');
        $this->db->where('jenis_development', 'Sertifikasi');
        $this->db->where('m_karyawan_id', $idKaryawan);
		$this->db->where('rtu.urutan >', 9);
        $query = $this->db->get();
        $sertifikasi_result = $query->row_array();
        $sertifikasi_count = $sertifikasi_result['Sertifikasi'] ?? 0;

        // Internal Sharing
        $this->db->select('COUNT(*) as internal_sharing');
        $this->db->from('m_tna_internal_sharing mis');
        $this->db->join('m_tna_internal_sharing_peserta isp','isp.m_tna_internal_sharing_id = mis.id');
        $this->db->where('tanggal <', date('Y-m-d'));
        $this->db->where('isp.m_karyawan_id', $idKaryawan);
        $this->db->group_by('isp.m_karyawan_id');

        $query = $this->db->get();
        $internal_sharing_result = $query->row_array();
        $internal_sharing_count = $internal_sharing_result['internal_sharing'] ?? 0;
        

        return array(
            'Pelatihan' => $pelatihan_count,
            'Sertifikasi' => $sertifikasi_count,
            'internal_sharing' => $internal_sharing_count
        );
	}

	public function detailKaryawan($id){
		$karyawan = $this->db->select('mk.id, mk.nama, mk.nik_tg, mk.inisial, j.id as
						jabatan_id, j.nama as jabatan_nama, j.level, m.m_organisasi_id as org_id, users.id
						as users_id,sk.nama status_karyawan,IF(sk.id IN (2,4,5),"FTE","Non FTE") as
						status_fte')
					->from('h_mutasi m')
					->join('m_karyawan mk', 'm.m_karyawan_id = mk.id')
					->join('r_jabatan j', 'm.r_jabatan_id = j.id')
					->join('r_status_karyawan sk', 'sk.id = mk.r_status_karyawan_id', 'LEFT')
					->join('users', 'users.m_karyawan_id = mk.id', 'left')
					->where('m.m_karyawan_id', $id)
					->where('m.is_aktif', 1)
					->where('mk.is_aktif', 1)
					->group_by('mk.id')
					->order_by('mk.nama', 'asc')
					->get()
					->row();
		return $karyawan;

	}

	public function getKompetensi($jabatan_id, $karyawan_id){
		$jobRole_Utama = $this->db->select('jr.code as job_role_code, jr.name as job_role_utama, kom.code as kompetensi_code, kom.name as nama_kompetensi')
			->from('r_tna_job_role_jabatan jrj')
			->join('r_tna_job_role jr', 'jr.id = jrj.r_tna_job_role_id', 'left')
			->join('r_tna_kompetensi kom', 'kom.r_tna_job_role_code = jr.code', 'left')
			->where('(jrj.r_jabatan_id = '.$jabatan_id.' AND jrj.m_karyawan_id = '.$karyawan_id.') OR jrj.r_jabatan_id ='.$jabatan_id)
			->group_by('kom.id')
			->get()
			->result_array();

		$jobRole_1 = $this->db->select('jr.code as job_role_code, jr.name as job_role_utama, kom.code as kompetensi_code, kom.name as nama_kompetensi')
			->from('r_tna_job_role_jabatan jrj')
			->join('r_tna_job_role jr', 'jr.id = jrj.r_tna_job_role_id_1', 'left')
			->join('r_tna_kompetensi kom', 'kom.r_tna_job_role_code = jr.code', 'left')
			->where('(jrj.r_jabatan_id = '.$jabatan_id.' AND jrj.m_karyawan_id = '.$karyawan_id.') OR jrj.r_jabatan_id ='.$jabatan_id)
			->group_by('kom.id')
			->get()
			->result_array();

		
		$result = array_merge($jobRole_Utama, $jobRole_1);
		return $result;
	}

	public function getTraining($karyawan_id){
		$internalSharing = $this->db->select('mis.judul_materi as training')
							->from('m_tna_internal_sharing mis')
							->join('m_tna_internal_sharing_peserta isp', 'isp.m_tna_internal_sharing_id = mis.id')
							->where('mis.tanggal <=', date('Y-m-d'))
							->where('isp.m_karyawan_id', $karyawan_id)
							->get()
							->result_array();

		$pengawalan = $this->db->select('tr.name as training, tp.jenis_development as kategori')
						->from('m_tna_pengawalan tp')
						->join('r_tahapan_usulan tu', 'tu.id = tp.tahapan_id')
						->join('r_tna_training tr', 'tr.id = tp.r_tna_training_id')
						->where('tu.r_jenis_usulan_id', 29)
						->where('tu.urutan >', 9)
						->where('tp.waktu_pelaksanaan <=', date('Y-m-d'))
						->where('tp.m_karyawan_id', $karyawan_id)
						->get()
						->result_array();
		
		$result = array_merge($internalSharing, $pengawalan);
		return $result;
		// $query = $this->db->get();
		// $result = $query->result();
	}

	public function getRekomendasiTraining($jabatan_id, $karyawan_id){
		$jobRole_Utama = $this->db->select('jr.code as job_role_code, jr.name as job_role_utama, kom.code as kompetensi_code, kom.name as nama_kompetensi, tr.code, tr.name as nama_training, tr.type')
							->from('r_tna_job_role_jabatan as jrj')
							->join('r_tna_job_role as jr', 'jr.id = jrj.r_tna_job_role_id', 'left')
							->join('r_tna_kompetensi as kom', 'kom.r_tna_job_role_code = jr.code', 'left')
							->join('r_tna_training as tr', 'tr.r_tna_kompetensi_code = kom.code', 'left')
							->where('(jrj.r_jabatan_id = 397 AND jrj.m_karyawan_id = '.$karyawan_id.') OR jrj.r_jabatan_id = 397')
							->group_by('tr.id')
							->get()
							->result_array();

		$jobRole_1 = $this->db->select('jr.code as job_role_code, jr.name as job_role_utama, kom.code as kompetensi_code, kom.name as nama_kompetensi, tr.code, tr.name as nama_training, tr.type')
							->from('r_tna_job_role_jabatan as jrj')
							->join('r_tna_job_role as jr', 'jr.id = jrj.r_tna_job_role_id_1', 'left')
							->join('r_tna_kompetensi as kom', 'kom.r_tna_job_role_code = jr.code', 'left')
							->join('r_tna_training as tr', 'tr.r_tna_kompetensi_code = kom.code', 'left')
							->where('(jrj.r_jabatan_id = 397 AND jrj.m_karyawan_id = '.$karyawan_id.') OR jrj.r_jabatan_id =397')
							->group_by('tr.id')
							->get()
							->result_array();
		
		$result = array_merge($jobRole_Utama, $jobRole_1);
		return $result;
	}

	public function getNextTraining($karyawan_id){
		$internalSharing = $this->db->select('mis.judul_materi as training')
							->from('m_tna_internal_sharing mis')
							->join('m_tna_internal_sharing_peserta isp', 'isp.m_tna_internal_sharing_id = mis.id')
							->where('mis.tanggal >=', date('Y-m-d'))
							->where('isp.m_karyawan_id', $karyawan_id)
							->get()
							->result_array();

		$pengawalan = $this->db->select('tr.name as training, tp.jenis_development as kategori')
						->from('m_tna_pengawalan tp')
						->join('r_tahapan_usulan tu', 'tu.id = tp.tahapan_id')
						->join('r_tna_training tr', 'tr.id = tp.r_tna_training_id')
						->where('tu.r_jenis_usulan_id', 29)
						->where('tu.urutan >', 9)
						->where('tp.waktu_pelaksanaan >=', date('Y-m-d'))
						->where('tp.m_karyawan_id', $karyawan_id)
						->get()
						->result_array();
		
		$result = array_merge($internalSharing, $pengawalan);
		return $result;
		// $query = $this->db->get();
		// $result = $query->result();
	}

}