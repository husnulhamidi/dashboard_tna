<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternalSharing_Model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->table = 'm_tna_internal_sharing';
    	$this->id = 'id';
    }

    public function getDataInternalSharing($post, $karyawanId){
    	$column_order = array('mti.id','mti.judul_materi','mk.nama','mo.nama','mti.jam','mti.tanggal','mti.tempat','mti.biaya','mti.kuota','jr.name', 'jr.id','jf.name', 'jf.id', 'jfa.name', 'jfa.id');
		$column_search = array('mti.id','mti.judul_materi','mk.nama','mo.nama','mti.jam','mti.tanggal','mti.tempat','mti.biaya','mti.kuota','jr.name', 'jr.id','jf.name', 'jf.id', 'jfa.name', 'jfa.id');

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


        $this->db->select('mti.id, mti.judul_materi, mti.tanggal, mti.jam,mti.materi,
                   mti.tempat, mti.biaya, mti.kuota, mti.link_zoom, mti.r_tna_training_id,
                   mk.nama AS narasumber,mk.id AS idNarasumber,mti.tanggal_mulai,mti.tanggal_selesai,
                   mo.nama AS organisasi,
                   k.name as kompetensi, k.id as kompetensi_id, 
                   jr.name as job_role, jr.id as job_role_id, 
                   jf.name as job_function, jf.id as job_function_id, 
                   jfa.name as job_family, jfa.id as job_family_id,
                   COUNT(isp.m_tna_internal_sharing_id) AS jumlah_peserta,
                   SUM(CASE WHEN isp.m_karyawan_id = '.$karyawanId.' THEN 1 ELSE 0 END) AS jumlah_ikut');
        $this->db->from('m_tna_internal_sharing as mti');
        $this->db->join('m_karyawan as mk', 'mti.m_karyawan_id = mk.id');
        $this->db->join('m_organisasi as mo', 'mti.m_organisasi_id = mo.id');
        $this->db->join('m_tna_internal_sharing_peserta isp', 'isp.m_tna_internal_sharing_id = mti.id', 'left');
        $this->db->join('r_tna_job_family jfa', 'jfa.id = mti.r_tna_job_family_id', 'left');
        $this->db->join('r_tna_job_function jf', 'jf.id = mti.r_tna_job_function_id', 'left');
        $this->db->join('r_tna_job_role jr', 'jr.id = mti.r_tna_job_role_id', 'left');
        $this->db->join('r_tna_kompetensi k', 'k.id = mti.r_tna_kompetensi_id', 'left');
        if($post['filter_materi']){
            $this->db->like('mti.judul_materi',$post['filter_materi'],'both');
        }
        if($post['filter_narasumber']){
            $this->db->where('mk.id',$post['filter_narasumber']);
        }
        if($post['filter_tgl_mulai']){
            $tgl1 = $this->chageDate($post['filter_tgl_mulai']);
            $this->db->where('mti.tanggal >=',$tgl1);
        }
        if($post['filter_tgl_selesai']){
            $tgl2 = $this->chageDate($post['filter_tgl_selesai']);
            $this->db->where('mti.tanggal <=',$tgl2);
        }
        if($post['filter_biaya_min']){
            $this->db->where('mti.biaya >=',$post['filter_biaya_min']);
        }
        if($post['filter_biaya_max']){
            $this->db->where('mti.biaya <=',$post['filter_biaya_max']);
        }
        $this->db->group_by('mti.id, mti.judul_materi, mti.tanggal, mti.jam,
                             mti.tempat, mti.biaya, mti.kuota, mti.link_zoom, mti.r_tna_training_id,
                             mk.nama, mo.nama');
				 

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

    private function chageDate($date){
        $tgl = explode('/', $date);
        return $tgl[2].'-'.$tgl[0].'-'.$tgl[1];
    }

    public function get_direktorat(){
    	return $this->db->from('m_organisasi')->where('level',3)->where('is_aktif','1')->select('id,inisial,nama')->get()->result();
    }

    public function get_pemateri($id){
    	$data = $this->db->select('mk.id, mk.nama')
                ->from('m_organisasi as mo')
                ->join('h_mutasi as hm', 'hm.m_organisasi_id = mo.id')
                ->join('m_karyawan as mk', 'hm.m_karyawan_id = mk.id AND hm.is_aktif = 1')
                ->where('mo.id', $id)
                ->get()
                ->result();
		return $data;
    }

    public function get_narasumber(){
    	return $this->db->from('m_karyawan')->where('is_aktif','1')->select('id,inisial,nama')->get()->result();
    }

    public function insertData($data){
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
    }

    public function insertDataHistory($data){
    	$this->db->insert('h_tna_internal_sharing_riwayat', $data);
		return $this->db->insert_id();
    }

    public function updateData($data, $id){
		$this->db->where('id',$id);
		$update = $this->db->update($this->table,$data);

		return $update;	
    }

    public function getDataDetail($id){
		$data = $this->db->select('mti.id,mti.judul_materi,mti.tanggal,mti.jam,mti.r_tna_job_family_id,mti.r_tna_job_function_id,mti.r_tna_job_role_id, mti.r_tna_kompetensi_id,
        				  mti.tempat,mti.biaya,mti.kuota, mti.link_zoom,mti.r_tna_training_id,mti.m_organisasi_id,mti.m_karyawan_id,
        				   mk.nama as narasumber,
        				   mo.nama as organisasi,
                           mti.is_complete,mti.no_urut,
                           mk.nik_tg
        	')
        ->from('m_tna_internal_sharing as mti')
        ->join('m_karyawan as mk','mti.m_karyawan_id = mk.id')
        ->join('m_organisasi as mo','mti.m_organisasi_id = mo.id')
        ->where('mti.id', $id)
        ->get()
        ->row();
        return $data;
    }

     public function getDataDetailEmployee($id, $karyawanId){
       $data = $this->db->select('mti.id, mti.judul_materi, mti.tanggal, mti.jam,
                   mti.tempat, mti.biaya, mti.kuota, mti.link_zoom, mti.r_tna_training_id,
                   mk.nama AS narasumber,
                   mo.nama AS organisasi,
                   COUNT(isp.m_tna_internal_sharing_id) AS jumlah_peserta,
                   SUM(CASE WHEN isp.m_karyawan_id = '.$karyawanId.' THEN 1 ELSE 0 END) AS jumlah_ikut')
                ->from('m_tna_internal_sharing as mti')
                ->join('m_karyawan as mk', 'mti.m_karyawan_id = mk.id')
                ->join('m_organisasi as mo', 'mti.m_organisasi_id = mo.id')
                ->join('m_tna_internal_sharing_peserta isp', 'isp.m_tna_internal_sharing_id = mti.id', 'left')
                ->where('mti.id', $id)
                ->group_by('mti.id, mti.judul_materi, mti.tanggal, mti.jam,
                             mti.tempat, mti.biaya, mti.kuota, mti.link_zoom, mti.r_tna_training_id,
                             mk.nama, mo.nama')
                ->get()
                ->row();

        return $data;
    }

    public function getDataMateri($post, $id){
    	$column_order = array('judul_materi');
		$column_search = array('judul_materi');

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

        $this->db->from('m_tna_internal_sharing_materi');
        $this->db->where('m_tna_internal_sharing_id',$id);

				 

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

    public function insertDataMateri($data){
		$this->db->insert('m_tna_internal_sharing_materi', $data);
		return $this->db->insert_id();
    }

    public function updateDataMateri($data, $id){
    	$this->db->where('id',$id);
		$update = $this->db->update('m_tna_internal_sharing_materi',$data);

		return $update;	
    }

    public function getCountDocument($id){
    	$this->db->from('m_tna_internal_sharing_dokumentasi');
        $query = $this->db->where('m_tna_internal_sharing_id', $id);
		$query = $this->db->get();
		$count = $query->num_rows();

		return $count;
    }

    public function getDataDokumentasi($id){
    	return $this->db->from('m_tna_internal_sharing_dokumentasi')->where('m_tna_internal_sharing_id',$id)->select('id,file_dokumentasi')->get()->result();
    }

    public function insertDataDokumentasi($data){
        $this->db->insert('m_tna_internal_sharing_dokumentasi', $data);
        return $this->db->insert_id();
    }

    public function updateDataDokumentasi($data, $id){
        $this->db->where('id',$id);
        $update = $this->db->update('m_tna_internal_sharing_dokumentasi',$data);

        return $update; 
    }

    public function getDataPeserta($post, $id){
        $column_order = array('judul_materi');
        $column_search = array('judul_materi');

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

        // $this->db->select('misp.');
        // $this->db->from('m_tna_internal_sharing_peserta misp');
        // $this->db->where('misp.m_tna_internal_sharing_id',$id);
        $this->db->select('tis.id, mk.nama, j.nama as jabatan, mo.nama as subunit, IF(sk.id IN (2,4,5),"FTE","Non FTE") as status_fte,isp.id as idPeserta, mk.id as m_karywan_id')
         ->from('m_tna_internal_sharing_peserta as isp')
         ->join('m_karyawan mk', 'mk.id = isp.m_karyawan_id')
         ->join('m_tna_internal_sharing tis', 'tis.id = isp.m_tna_internal_sharing_id')
         ->join('h_mutasi hm', 'hm.m_karyawan_id = mk.id')
         ->join('r_jabatan j', 'j.id = hm.r_jabatan_id','left')
         ->join('m_organisasi mo', 'mo.id = hm.m_organisasi_id')
         ->join('r_status_karyawan sk', 'sk.id = mk.r_status_karyawan_id', 'left')
         ->where('tis.id', $id)
         ->group_by('mk.nama');
         // ->get();

                 

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

    public function insertDataPeserta($data){
        $this->db->insert('m_tna_internal_sharing_peserta', $data);
        return $this->db->insert_id();
    }

    public function updateDataPeserta($data, $id){
        $this->db->where('id',$id);
        $update = $this->db->update('m_tna_internal_sharing_peserta',$data);

        return $update;
    }

    public function delete($id,$table){
        $this->db->where($this->id,$id);
        $delete = $this->db->delete($table);

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

    public function deleteData($id){
        // delete peserta
        $this->db->where('m_tna_internal_sharing_id',$id);
        $delete = $this->db->delete('m_tna_internal_sharing_peserta');

        // delete dokumentasi
        $this->db->where('m_tna_internal_sharing_id',$id);
        $delete = $this->db->delete('m_tna_internal_sharing_dokumentasi');

        // delete materi
        $this->db->where('m_tna_internal_sharing_id',$id);
        $delete = $this->db->delete('m_tna_internal_sharing_materi');

        // delete internal sharing
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

    public function batal($id, $karyawanId){
        $this->db->where('m_tna_internal_sharing_id',$id)->where('m_karyawan_id', $karyawanId);
        $delete = $this->db->delete('m_tna_internal_sharing_peserta');
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

    public function daftar($data){
        $this->db->insert('m_tna_internal_sharing_peserta', $data);
        return $this->db->insert_id();
    }

    public function getPeserta($id){
        $data = $this->db->select('mk.nama, mk.nik_tg')
                ->from('m_tna_internal_sharing_peserta as isp')
                ->join('m_karyawan mk','mk.id = isp.m_karyawan_id')
                ->where('isp.m_tna_internal_sharing_id', $id)
                ->get()
                ->result();
        return $data;
    }

    public function getPemateri($id){
        $data = $this->db->select('mk.nama, mk.nik_tg')
                ->from('m_tna_internal_sharing as is')
                ->join('m_karyawan mk','mk.id = is.m_karyawan_id')
                ->where('is.id', $id)
                ->get()
                ->result();
        return $data;
    }

    public function getDataFeedback($group){
        $data = $this->db->select('*')
                ->from('r_tna_feedback_pertanyaan')
                ->where('group', $group)
                ->where('status_code', '1')
                ->get()
                ->result();
        return $data;
    }
    public function getDataFeedbackAdmin($group, $id, $karyawanId, $source){
        $this->db->select('
            f.source_id,
            f.source_karyawan_id,
            f.skor_materi,
            f.skor_narasumber,
            f.manfaat_yg_diperoleh,
            f.kritik_saran,
            p.pertanyaan,
            p.group,
            p.nilai_skor1,
            p.nilai_skor2,
            p.nilai_skor3,
            p.nilai_skor4,
            p.nilai_skor5,
            pen.nilai_skor
        ');
        $this->db->from('m_tna_feedback AS f');
        $this->db->join('m_tna_feedback_penilaian AS pen', 'f.id = pen.m_tna_feedback_id', 'left');
        $this->db->join('r_tna_feedback_pertanyaan AS p', 'pen.pertanyaan = p.pertanyaan', 'left');
        $this->db->where('f.source_karyawan_id', $karyawanId);
        $this->db->where('f.source_id', $id);
        $this->db->where('f.source_type', $source);
        $this->db->where('f.source_type', $source);
        $this->db->where('p.group', $group);
        
        $query = $this->db->get();
        return $query->result();
    }

    public function insertFeedback($data){
        $this->db->insert('m_tna_feedback', $data);
        return $this->db->insert_id();
    }

    public function insertFeedbackPenilaian($data){
        $this->db->insert('m_tna_feedback_penilaian', $data);
        return $this->db->insert_id();
    }

}

/* End of file internalSharing.php */
/* Location: ./application/models/internalSharing.php */