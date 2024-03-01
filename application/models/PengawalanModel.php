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
                    mis.id as internal_sharing');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_traning_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('r_tahapan_usulan tu', 'tu.id = tp.tahapan_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id');
		$this->db->join('m_tna_internal_sharing mis', 'mis.m_tna_pengawalan_id = tp.id', 'left');
		$this->db->where('tu.r_jenis_usulan_id', 29);

		if($post['tabs'] == 'all'){
			$this->db->where('tu.urutan <>', 1);
		}
		if($post['tabs'] == 'verifikasi'){
			$this->db->where('tu.urutan <>', 1);
		}
		if($post['tabs'] == 'finish'){
			$this->db->where('tu.urutan', 14);
		}
		

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
		$this->db->select('COUNT(CASE WHEN tu.nama = "Draft" THEN 1 END) AS draft');
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
		$this->db->select('COUNT(CASE WHEN tu.nama = "Selesai" THEN 1 END) AS selesai');


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

	public function update_evaluasi($id, $data){
		$this->db->where($this->id,$id);
		$update = $this->db->update($this->table,$data);
		return $update;	
	}

	public function get_detail($id){
		$this->db->select('tp.*, 
							rt.name as training,  
							tk.name as kompetensi,
							mk.nama as nama_karyawan,
							mk.nik_tg as nik,
							mo.nama as nama_organisasi,
							mis.is_complete,
                    		mis.id as internal_sharing,
                    		tu.urutan');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_traning_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id');
		$this->db->join('m_tna_internal_sharing mis', 'mis.m_tna_pengawalan_id = tp.id', 'left');
		$this->db->join('r_tahapan_usulan tu', 'tu.id = tp.tahapan_id');
		$this->db->where('tp.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function riwayat_verifikasi($post){
		$column_order = array('tp.id','mk.nama','j.nama','tpr.keterangan','tpr.status','tpr.created_date');
		$column_search = array('tp.id','mk.nama','j.nama','tpr.keterangan','tpr.status','tpr.created_date');

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

		$this->db->select('tp.id,mk.nama as verifikator, j.nama as jabatan, tpr.keterangan, tpr.status, tpr.created_date');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('m_tna_pengawalan_riwayat tpr', 'tp.id = tpr.m_tna_pengawalan_id');
		$this->db->join('m_karyawan mk', 'mk.id = tpr.created_by');
		$this->db->join('h_mutasi hm', 'hm.m_karyawan_id = mk.id');
		$this->db->join('r_jabatan j', 'j.id = hm.r_jabatan_id');
		$this->db->where('tp.id', $post['id']);
				
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

	public function get_detail_dokumen($id){
		$this->db->select('pd.nama_dokumen, pd.tipe');
		$this->db->from('m_tna_pengawalan p');
		$this->db->join('m_tna_pengawalan_dokumen pd', 'p.id = pd.m_tna_pengawalan_id');
		$this->db->where('p.id', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_detail_pembayaran($id){
		$this->db->select('pp.*, mo.nama as unit, mo2.nama as unit_sppdp');
		$this->db->from('m_tna_pengawalan p');
		$this->db->join('m_tna_pengawalan_pembayaran pp', 'p.id = pp.m_tna_pengawalan_id');
		$this->db->join('m_organisasi mo','mo.id = pp.m_organisasi_id');
		$this->db->join('m_organisasi mo2','mo2.id = pp.m_organisasi_id_sppd','left');
		$this->db->where('p.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_detail_materi($post){
		$column_order = array('tp.id','pm.nama_materi','pm.dokumen');
		$column_search = array('tp.id','pm.nama_materi','pm.dokumen');

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

		$this->db->select('tp.id,pm.nama_materi,pm.dokumen');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('m_tna_pengawalan_materi pm', 'tp.id = pm.m_tna_pengawalan_id');
		$this->db->where('tp.id', $post['id']);
				
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

	public function get_detail_intenal_sharing($id){
		$this->db->select('p.id,
							is.id as id_internal_sharing,
							is.judul_materi,
							mk.nik_tg,
							mk.nama,
							is.tanggal,
							is.jam,
							is.tempat,
							is.kuota,
							is.link_zoom,
							is.biaya');
		$this->db->from('m_tna_pengawalan p');
		$this->db->join('m_tna_internal_sharing is', 'p.id = is.m_tna_pengawalan_id','left');
		$this->db->join('m_karyawan mk','mk.id = is.m_karyawan_id');
		$this->db->where('p.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_detail_peserta_intenal_sharing($post){
		$column_order = array('is.id');
		$column_search = array('is.id');

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

		// $this->db->select('is.id,mk.nik_tg,mk.nama');
		// $this->db->from('m_tna_internal_sharing is');
		// $this->db->join('m_tna_internal_sharing_peserta isp', 'is.id = isp.m_tna_internal_sharing_id');
		// $this->db->join('m_karyawan mk', 'mk.id = isp.m_karyawan_id');
		// // $this->db->join('m_organisasi mo', 'mo.id = is.m_organisasi_id');
		// $this->db->join('h_mutasi hm', 'hm.m_karyawan_id = mk.id');
		// $this->db->join('r_status_karyawan sk', 'sk.id = mk.r_status_karyawan_id', 'left');
		// $this->db->where('tp.id', $post['id']);
		$this->db->select('tis.id, 
							mk.nik_tg, 
							mk.nama, 
							mo.nama as subunit, 
							IF(sk.id IN (2,4,5),"FTE","Non FTE") as status_fte,
							isp.id as idPeserta')
         ->from('m_tna_internal_sharing_peserta as isp')
         ->join('m_karyawan mk', 'mk.id = isp.m_karyawan_id')
         ->join('m_tna_internal_sharing tis', 'tis.id = isp.m_tna_internal_sharing_id')
         ->join('h_mutasi hm', 'hm.m_karyawan_id = mk.id')
         // ->join('r_jabatan j', 'j.id = hm.r_jabatan_id')
         ->join('m_organisasi mo', 'mo.id = hm.m_organisasi_id')
         ->join('r_status_karyawan sk', 'sk.id = mk.r_status_karyawan_id', 'left')
         ->where('tis.id', $post['id']);
				
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

	public function getDataInternalSharing($id){
		return $this->db->from('m_tna_internal_sharing')->where('m_tna_pengawalan_id', $id)->get()->row();
	}

	public function tahapan_proses(){
		$data = $this->db->where('r_jenis_usulan_id', 29)->get('r_tahapan_usulan')->result();
		return $data;
	}

	public function updateInternalSharing($data, $id){
		$this->db->where('id',$id);
		$update = $this->db->update('m_tna_internal_sharing',$data);
		return $update;	
	}

	public function edit_pembayaran($data, $id){
		// return $this->db->insert('m_tna_pengawalan_pembayaran', $data);
		$this->db->where('id',$id);
		$update = $this->db->update('m_tna_pengawalan_pembayaran',$data);
		return $update;	
	}

	public function getDataEvaluasi(){
		$query = $this->db->get('r_tna_pertanyaan_evaluasi');
		return $query->result();
	}

	public function save_pengawalan_evaluasi($data){
		$this->db->insert('m_tna_pengawalan_evaluasi', $data);
		return $this->db->insert_id();
	}

	public function save_pengawalan_evaluasi_penilaian($data){
		$this->db->insert('m_tna_pengawalan_evaluasi_penilaian', $data);
		return $this->db->insert_id();
	}

	public function getDataDetailEvaluasi($pengawalan_id){
		$this->db->select('rpe.id, rpe.group, rpe.pertanyaan, rpe.nilai_skor1, rpe.nilai_skor2, rpe.nilai_skor3, rpe.nilai_skor4, rpe.nilai_skor5, pep.nilai_skor, pe.label_skor, pe.komentar');
		$this->db->from('r_tna_pertanyaan_evaluasi rpe');
		$this->db->join('m_tna_pengawalan_evaluasi_penilaian pep', 'rpe.pertanyaan = pep.pertanyaan', 'left');
		$this->db->join('m_tna_pengawalan_evaluasi pe', 'pep.m_tna_pengawalan_evaluasi_id = pe.id', 'left');
		$this->db->where('pe.m_tna_pengawalan_id', $pengawalan_id);
		$this->db->or_where('pe.id IS NULL');
		$query = $this->db->get();
		return $result = $query->result();
	}

	

}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */