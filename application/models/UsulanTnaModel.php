<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsulanTnaModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		//$this->db = $this->load->database('dbtna', TRUE);
		$this->sesstna = unserialize($this->session->userdata('tna'));
		$this->table = 'm_tna_usulan';
    	$this->id = 'id';

	}

	public function get_data($post){
		$column_order = array('nominal', 'year', 'type');
		$column_search = array('nominal', 'year', 'type');
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
		$this->db->select('us.id,us.kode,us.m_organisasi_id,us.m_karyawan_id,us.r_tna_kompetensi_id,us.r_tna_traning_id,jenis_pelatihan,jenis_development,nama_kegiatan,justifikasi_pengajuan,metoda_pembelajaran,estimasi_biaya,nama_penyelenggara,waktu_pelaksanaan,status_karyawan,tahapan_id,us.is_verifikasi_admin_hcpd,us.is_verifikasi_manager_hcpd,is_verifikasi_avp_hcm,mo.nama as subdit,mk.nama, mk.nik_tg,kom.code as kode_kompetensi,kom.name as kompetensi,tr.code as kode_training,tr.name as training,th.urutan,th.nama as tahapan, us.is_urgent')
				 ->from($this->table." as us")
				 ->join('m_karyawan mk', 'mk.id=us.m_karyawan_id','left')
				 ->join('m_organisasi mo', 'mo.id=us.m_organisasi_id','left')
				 ->join('r_tna_kompetensi kom', 'kom.id=us.r_tna_kompetensi_id','left')
				 ->join('r_tna_training tr', 'tr.id=us.r_tna_traning_id','left')
				 ->join('r_tahapan_usulan th', 'th.id=us.tahapan_id','left')
				 ;

		IF($post['search']['value']!=""){
			$i = 0;
			foreach ($column_search as $item) // looping awal
			{
				if($post['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
				{
					
					if($i===0) // looping awal
					{
						$this->db->group_start(); 
						$this->db->like($item, $post['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $post['search']['value']);
					}

					if(count($column_search) - 1 == $i) 
						$this->db->group_end(); 
					
				}
				$i++;
			}
		}
		if($post['action']=="verifikasi"){
			if(strtolower($this->sess['role']['name'])=='manager unit lini' OR strtolower($this->sess['role']['name'])=='manager unit'){
				$this->db->where("th.urutan",2);
			}else if(strtolower($this->sess['role']['name'])=='admin hcpd' ){
				$this->db->where("th.urutan",3);
			}
			else if(strtolower($this->sess['role']['name'])=='manager hcpd' ){
				$this->db->where("th.urutan",4);
			}
			else if(strtolower($this->sess['role']['name'])=='avp hcm' ){
				$this->db->where("th.urutan",5);
			}
			else if(strtolower($this->sess['role']['name'])=='vp hcm' ){
				$this->db->where("th.urutan",6);
			}else{
				$this->db->where("th.urutan",1);
			}
		}else if($post['action']=="verifikasi-vp-hcm"){
			$this->db->where("th.urutan",6);
		}
		else if($post['action']=="selesai"){
			$this->db->where("th.urutan",7);
		}

		$this->db->where("us.is_rejected",$post['is_rejected']);

		if($post['filter_direktorat'] !== 'all'){
			$this->db->where('us.direktorat_id', $post['filter_direktorat']);
		}
		if($post['filter_subdit'] !== 'all'){
			$this->db->where('us.m_organisasi_id', $post['filter_subdit']);
		}
		if($post['filter_bidang'] !== 'all'){
			$this->db->where('us.m_organisasi_id', $post['filter_bidang']);
		}
		if($post['filter_karyawan'] !== 'all'){
			$this->db->where('us.m_karyawan_id', $post['filter_karyawan']);
		}
		if($post['filter_status_karyawan'] !== 'all'){
			$this->db->where('us.status_karyawan', $post['filter_status_karyawan']);
		}
		if($post['filter_kompetensi'] !== 'all'){
			$this->db->where('us.r_tna_kompetensi_id', $post['filter_kompetensi']);
		}
		if($post['filter_jenis_development'] !== 'all'){
			$this->db->where('us.jenis_development', $post['filter_jenis_development']);
		}
		if($post['filter_nama_pelatihan'] !== 'all'){
			$this->db->where('us.r_tna_traning_id', $post['filter_nama_pelatihan']);
		}
		if($post['filter_justifikasi'] !== ''){
			$this->db->like('us.justifikasi_pengajuan', $post['filter_justifikasi'],'both');
		}
		if($post['filter_metoda_pembelajaran'] !== 'all'){
			$this->db->where('us.metoda_pembelajaran', $post['filter_metoda_pembelajaran']);
		}
		if($post['filter_biaya_min'] !== ''){
			$this->db->where('us.estimasi_biaya >=', $post['filter_biaya_min']);
		}

		if($post['filter_biaya_max'] !== ''){
			$this->db->where('us.estimasi_biaya <=', $post['filter_biaya_max']);
		}

		if($post['filter_penyelenggara'] !== ''){
			$this->db->like('us.nama_penyelenggara', $post['filter_penyelenggara'],'both');
		}
		if($post['filter_tahapan'] !== 'all'){
			$this->db->where('us.status_karyawan', $post['filter_tahapan']);
		}

		$this->db->group_by('us.id');
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
			$total_tahapan=6;
			if($rec['urutan']==1){
				$status_proses = "";
				for ($i=1; $i < 7; $i++) { 
					$status_proses.="<i class='fa fa-circle-o text-muted'></i> ";
				}
			}else{
				$verified = "";
				for ($i=1; $i < $rec['urutan']; $i++) { 
					$verified.="<i class='fa fa-check-circle text-green'></i> ";
				}

				for ($y=$rec['urutan']; $y < 7; $y++) { 
					$verified.="<i class='fa fa-circle-o text-muted'></i> ";
				}

				$status_proses = $verified;
				
			}

			$is_verifikasi="";
			if($post['action']=="verifikasi" AND $rec['urutan']==3 AND $rec['is_verifikasi_admin_hcpd']>0){
				$checkbox_ = "<input type='checkbox' class='item-chechbox' name='is_checkbox_usulan[]' id='".$rec['id']."' value='".$rec['id']."' >";
				if($rec['is_verifikasi_admin_hcpd']=="1"){
					$is_verifikasi="<i class='fa fa-check-circle text-green'></i> ";
				}else if($rec['is_verifikasi_admin_hcpd']=="2"){
					$is_verifikasi="<i class='fa fa-close text-red'></i> ";
				}else{
					$is_verifikasi="";
				}
			}
			else if($post['action']=="verifikasi" AND $rec['urutan']==4 AND $rec['is_verifikasi_manager_hcpd']>0){
				$checkbox_ = "<input type='checkbox' class='item-chechbox' name='is_checkbox_usulan[]' id='".$rec['id']."' value='".$rec['id']."' >";
				if($rec['is_verifikasi_manager_hcpd']=="1"){
					$is_verifikasi="<i class='fa fa-check-circle text-green'></i> ";
				}
				// else if($rec['is_verifikasi_manager_hcpd']=="2"){
				// 	$is_verifikasi="<i class='fa fa-close text-red'></i> ";
				// }
				else{
					$is_verifikasi="";
				}
			}
			else if($post['action']=="verifikasi" AND $rec['urutan']==5 AND $rec['is_verifikasi_avp_hcm']>0){
				$checkbox_ = "<input type='checkbox' class='item-chechbox' name='is_checkbox_usulan[]' id='".$rec['id']."' value='".$rec['id']."' >";
				if($rec['is_verifikasi_avp_hcm']=="1"){
					$is_verifikasi="<i class='fa fa-check-circle text-green'></i> ";
				}
				// else if($rec['is_verifikasi_manager_hcpd']=="2"){
				// 	$is_verifikasi="<i class='fa fa-close text-red'></i> ";
				// }
				else{
					$is_verifikasi="";
				}
			}
			else{
				$checkbox_ = "";
			}

			if($rec['urutan']>1 AND $rec['urutan']<7){
				$nama_tahapan = "Menunggu ".$rec['tahapan'];
			}else{
				$nama_tahapan = $rec['tahapan'];
			}

			

			$data[$key]['estimasi_biaya_rp'] = $rec['estimasi_biaya']?"Rp.".number_format($rec['estimasi_biaya'],0,',','.'):'0';
			$data[$key]['encrypt_id'] = encrypt_url($rec['id']);
			$data[$key]['tahapan_proses'] = $status_proses;
			$data[$key]['nama_tahapan'] = $nama_tahapan;
			$data[$key]['tna_id'] = $rec['kode']?$rec['kode']:$rec['kode_training'].str_pad($rec['id'], 4, "0", STR_PAD_LEFT); 
			$data[$key]['tanggal_pelaksanaan'] = date('d-m-Y',strtotime($rec['waktu_pelaksanaan']));
			$data[$key]['checkbox'] = $is_verifikasi.$checkbox_;

			
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

	public function dokumen_verifikasi($post){
		$column_order = array('download_code');
		$column_search = array('download_code');

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
		$this->db->select('id,download_code,file')
				 ->from("m_tna_usulan_dokumen");

		IF($post['search']['value']!=""){
			$i = 0;
			foreach ($column_search as $item) // looping awal
			{
				if($post['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
				{
					if($i===0) // looping awal
					{
						$this->db->group_start(); 
						$this->db->like($item, $post['search']['value']);
					}
					else
					{
						$this->db->or_like($item, $post['search']['value']);
					}

					if(count($column_search) - 1 == $i) 
						$this->db->group_end(); 
					
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

	function insert($data){
		return $this->db->insert($this->table, $data);
	}

	function insert_batch($data){
		return $this->db->insert_batch($this->table, $data);
	}

	function get_data_byid($id){
		$query = $this->db->select("a.*,u.urutan,u.nama as nama_tahapan")
				->from($this->table." as a")
				->join("r_tahapan_usulan as u","u.id=a.tahapan_id","left")
				->where("a.id", $id)
				->get();

		if($query->num_rows()>0){
			$data = $query->row();
			$data->encrypt_id=encrypt_url($id);
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Berhasi.",
				'data'			=> $data
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 200,
				'msg'			=> "Data tidak ditemukan.",
				'data'			=> array()
			);
        }

		return $return;
	}

	function get_data_byid_bulky($id){
		$query = $this->db->select("a.*,u.urutan,u.nama as nama_tahapan")
				->from($this->table." as a")
				->join("r_tahapan_usulan as u","u.id=a.tahapan_id","left")
				->where_in("a.id", $id)
				->get();

		if($query->num_rows()>0){
			$data = $query->result();
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Berhasi.",
				'data'			=> $data
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 404,
				'msg'			=> "Data tidak ditemukan.",
				'data'			=> array()
			);
        }

		return $return;
	}

	function update($data, $id){
		$this->db->where($this->id,$id);
		$update = $this->db->update($this->table,$data);
		return $update;		
	}

	function update_batch($data, $id){
		$this->db->where_in($this->id,$id);
		$update = $this->db->update($this->table,$data);
		return $update;		
	}
	function update_usulan_by_kode_download($data, $kode){
		$this->db->where("download_code",$kode);
		$update = $this->db->update($this->table,$data);
		return $update;		
	}
	
	function delete($id){
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

    function get_jenis_development(){
		$data = $this->db->get('r_tna_tipe_pelatihan')->result();
		return $data;
	}

    function get_jenis_pelatihan(){
		$data = $this->db->get('r_tna_jenis_pelatihan')->result();
		return $data;
	}

    function get_metoda_pelatihan(){
		$data = $this->db->get('r_tna_metoda_pelatihan')->result();
		return $data;
	}

    // function get_kompetensi($code){
	// 	$data = $this->db->get('r_tna_kompetensi')->result();
	// 	return $data;
	// }

	function get_kompetensi($code= false){
		return $this->db->from('r_tna_kompetensi')->where('status_code','1')->where('r_tna_job_role_code', $code)->select('id,code,r_tna_job_role_code,name')->get()->result();
	}

	function get_training(){
		$data = $this->db->get('r_tna_training')->result();
		return $data;
	}

	function get_tahapan_id($urutan,$jenis_tahapan){
		$data = $this->db->select("u.id as r_tahapan_usulan_id,u.urutan,t.id as r_jenis_usulan_id, t.nama")
				->from('r_tahapan_usulan as u')
				->join("r_jenis_usulan as t","t.id=u.r_jenis_usulan_id","left")
				->where("u.urutan",$urutan)
				->where("t.nama",$jenis_tahapan)
				->get();
		if($data->num_rows()>0){
			return $data->row_array();
		}else{
			return array();
		}
	}

	
	function insert_h_usulan($r_jenis_usulan_id,$m_karyawan_id){
		$data = array(
			"tgl_pengajuan" =>date("Y-m-d H:i:s"),
			"r_jenis_usulan_id" => $r_jenis_usulan_id,
			"m_karyawan_id" =>$m_karyawan_id
		);
		$this->db->insert("h_usulan", $data);
		 return $this->db->insert_id();
	}

	function insert_h_riwayat_usulan($data){
		return $this->db->insert("h_riwayat_usulan_tna", $data);
	}

	public function get_data_dashlet($urutan){
		$tahapan = $this->get_tahapan_id($urutan,"Usulan TNA");
		$query = $this->db->select("COUNT(id) as total")
				->from('m_tna_usulan')
				->where("is_rejected",0)
				->where("tahapan_id",$tahapan['r_tahapan_usulan_id'])
				->get();
		if($query->num_rows()>0){
			$data = $query->row()->total;
		}else{
			$data = 0;
		}
		return $data;
	}
	
	public function grouping_usulan($kode){
		$query = $this->db->select('GROUP_CONCAT(us.id) usulan_id')
				 ->from($this->table." as us")
				 ->join('r_tahapan_usulan th', 'th.id=us.tahapan_id','left')
				 ->where("th.urutan",6)
				 ->get();
		if($query->num_rows()>0){
			$return = $query->row()->usulan_id;
			$arr_id = explode(",",$query->row()->usulan_id);
			$data = array(
				"download_code" => $kode
			);
			$this->update_batch($data,$arr_id);

		}else{
			$return = "";
		}
		return $return;
	}
	public function download_usulan($kode_generate){
		$query = $this->db->select('us.id,us.kode,us.m_organisasi_id,us.m_karyawan_id,us.r_tna_kompetensi_id,us.r_tna_traning_id,jenis_pelatihan,jenis_development,nama_kegiatan,justifikasi_pengajuan,us.objective,metoda_pembelajaran,estimasi_biaya,nama_penyelenggara,waktu_pelaksanaan,status_karyawan,tahapan_id,us.is_verifikasi_admin_hcpd,us.is_verifikasi_manager_hcpd,is_verifikasi_avp_hcm,mo.nama as subdit,mk.nama, mk.nik_tg,kom.code as kode_kompetensi,kom.name as kompetensi,tr.code as kode_training,tr.name as training,th.urutan,th.nama as tahapan')
				 ->from($this->table." as us")
				 ->join('m_karyawan mk', 'mk.id=us.m_karyawan_id','left')
				 ->join('m_organisasi mo', 'mo.id=us.m_organisasi_id','left')
				 ->join('r_tna_kompetensi kom', 'kom.id=us.r_tna_kompetensi_id','left')
				 ->join('r_tna_training tr', 'tr.id=us.r_tna_traning_id','left')
				 ->join('r_tahapan_usulan th', 'th.id=us.tahapan_id','left')
				 ->where("us.download_code",$kode_generate)
				 ->where("th.urutan",6)
				 ->get()
				 ->result();
			return $query;


	}

	function insert_verifikasi_vp($data){
		return $this->db->insert('m_tna_usulan_dokumen', $data);
	}

	public function check_usulan_by_kode_download($kode){
		$query = $this->db->from($this->table)
					->where("download_code",$kode)
					->get();
		if($query->num_rows()>0){
			$return = "true";
		}else{
			$return = "false";
		}
		return $return;
	}

	public function get_riwayat_usulan($id){
		$query = $this->db->select("us.*,mk.nama as nama_karyawan")
					->from("h_riwayat_usulan_tna as us")
					->join("m_karyawan mk","mk.id=us.m_karyawan_id")
					->where("m_tna_usulan_id",$id)
					->get();
		if($query->num_rows()>0){
			$return = $query->result();
		}else{
			$return = array();
		}
		return $return;
	}

	function insert_m_tna($data){
		return $this->db->insert("m_tna_pengawalan", $data);
	}


}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */