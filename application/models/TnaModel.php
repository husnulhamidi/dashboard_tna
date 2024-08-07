<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TnaModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'm_tna_pengawalan';
    	$this->id = 'id';

	}

	public function get_tahapan_id($id){
		// $data = $this->db->get('r_tna_kompetensi')->result();
		// return $data;
		$this->db->select('a.id, a.nama, a.urutan');
		$this->db->from('r_tahapan_usulan a');
		$this->db->join('r_jenis_usulan js', 'js.id = a.r_jenis_usulan_id', 'left');
		$this->db->where('a.urutan', $id);
		$this->db->where('js.nama', 'Pengawalan TNA');
		$query = $this->db->get();
		$result = $query->row();
		return $result;
	}

	public function getDataTNA($post){
		$column_order = array('tp.id','rt.name','tp.code_tna','tp.jenis_development','tp.metoda_pembelajaran','tp.jenis_pelatihan','tk.name','tp.nama_penyelenggara','tp.waktu_pelaksanaan','tp.estimasi_biaya');
		$column_search = array('tp.id','rt.name','tp.code_tna','tp.jenis_development','tp.metoda_pembelajaran','tp.jenis_pelatihan','tk.name','tp.nama_penyelenggara','tp.waktu_pelaksanaan','tp.estimasi_biaya');

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

		$this->db->select('tp.id as id, tp.is_urgent,tp.code_tna,tp.objective,tp.justifikasi_pengajuan,tp.waktu_pelaksanaan_mulai,tp.waktu_pelaksanaan_selesai, IFNULL(rt.name,nama_kegiatan) as training, tp.jenis_development, tp.metoda_pembelajaran, tp.jenis_pelatihan, tk.name as kompetensi, tp.nama_penyelenggara, tp.waktu_pelaksanaan, tp.estimasi_biaya, mk.nama as nama_karyawan,mo.nama as nama_organisasi,tp.status_karyawan,direktorat_name,subdit_name,subunit_name,tp.r_tna_kompetensi_name,r_tna_kompetensi_name_tsat,keterangan');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_training_id','left');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id','left');
		$this->db->join('r_tahapan_usulan ru', 'ru.id = tp.tahapan_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id','left');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id','left');
		$this->db->where('ru.urutan = 1');

		if($post['filter_subdit'] !== 'all'){
			$this->db->where('tp.m_organisasi_id', $post['filter_subdit']);
		}
		if($post['filter_kompetensi'] !== 'all'){
			$this->db->where('tp.r_tna_kompetensi_id', $post['filter_kompetensi']);
		}
		if($post['filter_jenis_development'] !== 'all'){
			$this->db->where('tp.jenis_development', $post['filter_jenis_development']);
		}
		if($post['filter_nama_pelatihan'] !== 'all'){
			$this->db->where('tp.r_tna_training_id', $post['filter_nama_pelatihan']);
		}
		if($post['filter_justifikasi'] !== ''){
			$this->db->like('tp.justifikasi_pengajuan', $post['filter_justifikasi'],'both');
		}
		if($post['filter_metoda_pembelajaran'] !== 'all'){
			$this->db->where('tp.metoda_pembelajaran', $post['filter_metoda_pembelajaran']);
		}
		if($post['filter_biaya_min'] !== ''){
			$this->db->where('tp.estimasi_biaya >=', $post['filter_biaya_min']);
		}

		if($post['filter_biaya_max'] !== ''){
			$this->db->where('tp.estimasi_biaya <=', $post['filter_biaya_max']);
		}

		if($post['filter_penyelenggara'] !== ''){
			$this->db->like('tp.nama_penyelenggara', $post['filter_penyelenggara'],'both');
		}
		if($post['filter_karyawan'] !== 'all'){
			$this->db->where('tp.m_karyawan_id', $post['filter_karyawan']);
		}
		
		if($post['filter_status_karyawan'] !== 'all'){
			$this->db->where('tp.status_karyawan', $post['filter_status_karyawan']);
		}

		if($post['filter_waktu_awal']){
            $tgl1 = $this->chageDate($post['filter_waktu_awal']);
            $this->db->where('tp.waktu_pelaksanaan >=',$tgl1);
        }

        if($post['filter_waktu_akhir']){
            $tgl2 = $this->chageDate($post['filter_waktu_akhir']);
            $this->db->where('tp.waktu_pelaksanaan <=',$tgl2);
        }

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
		// return $this->db->insert($this->table, $data);
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function insertDataHistory($data){
		return $this->db->insert('m_tna_pengawalan_riwayat', $data);
	}

	public function get_detail($id){
		$this->db->select('tp.*, 
							rt.name as training,  
							tk.name as kompetensi,
							mk.nama as nama_karyawan,mo.nama as nama_organisasi,tp.status_karyawan');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_training_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id', 'left');
		$this->db->where('tp.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function updateData($data, $id){
		$this->db->where($this->id,$id);
		$update = $this->db->update($this->table,$data);

		return $update;		
	}

	public function delete($id){
        $this->db->where($this->id,$id);
        $delete = $this->db->delete($this->table);


        if($delete){
            $return = array(
                'success'       => true,
                'status_code'   => 200,
                'msg'           => "Data berhasil dihapus.",
                'data'          => array()
            );
        }else{
            $return = array(
                'success'       => false,
                'status_code'   => 500,
                'msg'           => "Data gagal dihapus.",
                'data'          => array()
            );
        }
        return $return;
    }

    public function get_sum_data($r_tna_training_id){
    	$count = $this->db
		    ->from($this->table)
		    ->where('r_tna_training_id', $r_tna_training_id)
		    ->select('count(r_tna_training_id) as count')
		    ->get()
		    ->row();

			return $count->count;
    }

    public function get_code_training($id){
    	return $this->db->from('r_tna_training')->where('id',$id)->select('code')->get()->row();
    }

    public function search_karyawan($search){
    	// $this->db->select('id, nama, nik_tg')
     //         ->from('m_karyawan')
     //         ->like('nama', $search, 'both');

	    // $query = $this->db->get();
	    // return $query->result();
	    $karyawan = $this->db->select('mk.id, mk.nama, mk.nik_tg, j.nama as jabatan_nama')
            ->from('h_mutasi m')
            ->join('m_karyawan mk', 'm.m_karyawan_id = mk.id')
            ->join('r_jabatan j', 'm.r_jabatan_id = j.id')
            ->join('users', 'users.m_karyawan_id = mk.id', 'left')
            ->like('mk.nama', $search,'both')
            ->where('m.is_aktif', 1)
            ->where('mk.is_aktif', 1)
            ->group_by('mk.id')
            ->order_by('mk.nama', 'asc')
            ->get()
            ->result();
        return $karyawan;
    }

	public function getPenyelenggara($id){
		$this->db->select('distinct(tl.id), tl.nama_lembaga, tl.nama_pic, tld.biaya,tld.kapasitas');
		$this->db->from('r_tna_lembaga tl');
		$this->db->join('r_tna_lembaga_detail tld', 'tl.id = tld.r_tna_lembaga_id');
		if($id != 99999)$this->db->where('tld.r_tna_training_id', $id);
		
		// $this->db->where('tl.status_code', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function getSubunit($subdit){
		$this->db->select('id, o5 as name');
        $this->db->from('v_organisasi');
        $this->db->where('l5', 4);
        $this->db->where('i4', $subdit);

        $query = $this->db->get();
        $result = $query->result();

        return $result;
	}

	public function get_lembaga_id($pelatihanId){
		$this->db->select('tld.r_tna_lembaga_id');
		$this->db->from('r_tna_lembaga_detail tld');
		$this->db->where('tld.r_tna_training_id', $pelatihanId);
		$query = $this->db->get();
		return $query->result();
	}

	public function getDataLembagawithotPelatihan($id, $lembagaId){
		$this->db->select('tl.id, tl.nama_lembaga, tl.nama_pic, tld.biaya, tld.kapasitas');
		$this->db->from('r_tna_lembaga tl');
		$this->db->join('r_tna_lembaga_detail tld', 'tl.id = tld.r_tna_lembaga_id');
		$this->db->where('tld.r_tna_training_id !=', $id);
		// $this->db->where('tld.r_tna_lembaga_id !=', $lembagaId);
		// $this->db->where_not_in('tld.r_tna_lembaga_id', $lembagaId);
		$excluded_ids = $lembagaId; // Gantilah dengan array yang sesuai
		if (!empty($excluded_ids)) {
			$this->db->where_not_in('tld.r_tna_lembaga_id', $excluded_ids);
		}
		$this->db->where('tl.status_code', '1');
		$this->db->group_by('tl.id');
		$query = $this->db->get();
		return $query->result();
	}

	public function savePenyelenggara($data){
		$this->db->insert('r_tna_lembaga', $data);
		return $this->db->insert_id();
	}
	public function saveDetailPenyelenggara($data){
		$this->db->insert('r_tna_lembaga_detail', $data);
		return $this->db->insert_id();
	}

	public function checkCodeTraining($filter){
		$this->db->select_max('code');
		$this->db->from('r_tna_training');
		$this->db->like('code', $filter, 'after');
		$query = $this->db->get();

		$result = $query->row();
		return $result ? $result->code : null;
	}

	public function saveTraining($data){
		$this->db->insert('r_tna_training', $data);
		return $this->db->insert_id();
	}

	public function getDetailPenyelenggara($id){
		$this->db->where('id', $id);
		$data = $this->db->get('r_tna_lembaga')->row();
		return $data;
	}

	public function getDataExport($post){
		$this->db->select('tp.id as id, tp.code_tna,tp.objective, rt.name as training, tp.jenis_development, tp.metoda_pembelajaran, tp.jenis_pelatihan, tk.name as kompetensi, tp.nama_penyelenggara, tp.waktu_pelaksanaan, tp.estimasi_biaya, mk.nama as nama_karyawan,mo.nama as nama_organisasi,tp.status_karyawan');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_training_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('r_tahapan_usulan ru', 'ru.id = tp.tahapan_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id');
		$this->db->where('ru.r_jenis_usulan_id = 29 and ru.urutan = 1');

		if($post['filter_subdit'] !== 'all'){
			$this->db->where('tp.m_organisasi_id', $post['filter_subdit']);
		}
		if($post['filter_kompetensi'] !== 'all'){
			$this->db->where('tp.r_tna_kompetensi_id', $post['filter_kompetensi']);
		}
		if($post['filter_jenis_development'] !== 'all'){
			$this->db->where('tp.jenis_development', $post['filter_jenis_development']);
		}
		if($post['filter_nama_pelatihan'] !== 'all'){
			$this->db->where('tp.r_tna_training_id', $post['filter_nama_pelatihan']);
		}
		if($post['filter_justifikasi'] !== ''){
			$this->db->like('tp.justifikasi_pengajuan', $post['filter_justifikasi'],'both');
		}
		if($post['filter_metoda_pembelajaran'] !== 'all'){
			$this->db->where('tp.metoda_pembelajaran', $post['filter_metoda_pembelajaran']);
		}
		if($post['filter_biaya_min'] !== ''){
			$this->db->where('tp.estimasi_biaya >=', $post['filter_biaya_min']);
		}

		if($post['filter_biaya_max'] !== ''){
			$this->db->where('tp.estimasi_biaya <=', $post['filter_biaya_max']);
		}

		if($post['filter_penyelenggara'] !== ''){
			$this->db->like('tp.nama_penyelenggara', $post['filter_penyelenggara'],'both');
		}
		if($post['filter_karyawan'] !== 'all'){
			$this->db->where('tp.m_karyawan_id', $post['filter_karyawan']);
		}
		
		if($post['filter_status_karyawan'] !== 'all'){
			$this->db->where('tp.status_karyawan', $post['filter_status_karyawan']);
		}

		if($post['filter_waktu_awal']){
            $tgl1 = $this->chageDate($post['filter_waktu_awal']);
            $this->db->where('tp.waktu_pelaksanaan >=',$tgl1);
        }

        if($post['filter_waktu_akhir']){
            $tgl2 = $this->chageDate($post['filter_waktu_akhir']);
            $this->db->where('tp.waktu_pelaksanaan <=',$tgl2);
        }

		$query = $this->db->get();
        return $query->result();
	}

	public function get_lembaga(){
		$this->db->where('status_code', '1');
		$this->db->where('nama_lembaga IS NOT NULL', null, false);
		$data = $this->db->get('r_tna_lembaga')->result();
		return $data;
	}

	public function search_lembaga($search){
    	$this->db->select('id, nama_lembaga, nama_pic, telp, website, alamat')
             ->from('r_tna_lembaga')
             ->like('nama_lembaga', $search, 'both');
			//  ->where('status_code', '1');

	    $query = $this->db->get();
	    return $query->result();
	    // $this->db->select('tl.id, tl.nama_lembaga, tl.nama_pic, tld.biaya, tld.kapasitas');
		// $this->db->from('r_tna_lembaga tl');
		// $this->db->join('r_tna_lembaga_detail tld', 'tl.id = tld.r_tna_lembaga_id');
		// $this->db->where('tld.r_tna_training_id', $id);
		// $this->db->where('tl.status_code', '1');
		// $this->db->like('tl.nama_lembaga', $search, 'both');
		// $query = $this->db->get();
		// return $query->result();
    }

	public function get_direktorat(){
		$this->db->select('id, o5');
		$this->db->from('v_organisasi');
		$this->db->where('l5', 2);
		$query = $this->db->get();
		return $query->result();
	}

	public function getCodeKompetensi($id){
		$this->db->select('id, code');
		$this->db->from('r_tna_kompetensi');
		$this->db->where('id', $id);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row();
	}

	public function getDataTraining($code){
		$this->db->select('id, name, code');
		$this->db->from('r_tna_training');
		$this->db->where('r_tna_kompetensi_code', $code);
		$query = $this->db->get();
		return $query->result();
	}

	public function getDataJob($idKompetensi){
		$this->db->select('
				k.name as kompetensi, k.id as kompetensi_id, 
				jr.name as job_role, jr.id as job_role_id, 
				jf.name as job_function, jf.id as job_function_id, 
				jfa.name as job_family, jfa.id as job_family_id
			');
		$this->db->from('r_tna_kompetensi k');
		$this->db->join('r_tna_job_role jr', 'jr.code = k.r_tna_job_role_code');
		$this->db->join('r_tna_job_function jf', 'jf.code = jr.r_tna_job_function_code');
		$this->db->join('r_tna_job_family jfa', 'jfa.code = jf.r_tna_job_family_code');
		$this->db->where('k.id', $idKompetensi);

		$query = $this->db->get();
		return $query->row();;

	}

	public function checkKaryawan($id){
		$this->db->select('id, nama, nik_tg');
		$this->db->from('m_karyawan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}


}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */