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
		$this->db->select('us.id,us.m_organisasi_id,us.m_karyawan_id,us.r_tna_kompetensi_id,us.r_tna_traning_id,jenis_pelatihan,jenis_development,nama_kegiatan,justifikasi_pengajuan,metoda_pembelajaran,estimasi_biaya,nama_penyelenggara,waktu_pelaksanaan,status_karyawan,tahapan_id,mo.nama as subdit,mk.nama, mk.nik_tg,kom.code as kode_kompetensi,kom.name as kompetensi,tr.code as kode_training,tr.name as training,th.urutan,th.nama as tahapan')
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

		if(@$post['action']=="verifikasi"){
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

				for ($x=$rec['urutan']; $x < 7; $x++) { 
					$verified.="<i class='fa fa-circle-o text-muted'></i> ";
				}

				$status_proses = $verified;
				
			}

			$data[$key]['estimasi_biaya_rp'] = $rec['estimasi_biaya']?"Rp.".number_format($rec['estimasi_biaya'],0,',','.'):'0';
			$data[$key]['encrypt_id'] = encrypt_url($rec['id']);
			$data[$key]['tahapan_proses'] = $status_proses;
			$data[$key]['nama_tahapan'] = str_replace('Menunggu','',$rec['tahapan']);
			$data[$key]['tna_id'] = $rec['kode_training'].str_pad($rec['id'], 4, "0", STR_PAD_LEFT); 
			$data[$key]['tanggal_pelaksanaan'] = date('d-m-Y',strtotime($rec['waktu_pelaksanaan']));; 

			
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

	function get_data_byid($id){
		$query = $this->db->select("a.*,u.urutan")
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

	function update($data, $id){
		$this->db->where($this->id,$id);
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

    function get_kompetensi(){
		$data = $this->db->get('r_tna_kompetensi')->result();
		return $data;
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
		return $this->db->insert("h_riwayat_usulan", $data);
	}


}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */