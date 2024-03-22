<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportingModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'm_tna_report_imported';
    	$this->id = 'id';

	}

	public function getData($post){
		$column_order = array('id','tahun','nama_kegiatan','nama_penyelenggara','metoda','kategori_pelatihan','kompetensi','tanggal_mulai','tanggal_selesai','lama_kegiatan','bulan','kuartal','nik','nama_karyawan','posisi','direktorat','subdit','jumlah_nik','bp','status_fte','jenis_pelatihan','nomo_sertifikat','jenis_sertifikat','tanggal_awal_berlaku_sertifikat','tanggal_akhir_berlaku_sertifikat','no_ht', 'no_spb','biaya_kegiatan','currency_key','scanan_sertifikat','materi_pelatihan','evaluasi_pelatihan','keterangan');
		$column_search = array('id','tahun','nama_kegiatan','nama_penyelenggara','metoda','kategori_pelatihan','kompetensi','tanggal_mulai','tanggal_selesai','lama_kegiatan','bulan','kuartal','nik','nama_karyawan','posisi','direktorat','subdit','jumlah_nik','bp','status_fte','jenis_pelatihan','nomo_sertifikat','jenis_sertifikat','tanggal_awal_berlaku_sertifikat','tanggal_akhir_berlaku_sertifikat','no_ht', 'no_spb','biaya_kegiatan','currency_key','scanan_sertifikat','materi_pelatihan','evaluasi_pelatihan','keterangan');

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

		$this->db->select('*');
		$this->db->from('m_tna_report_imported tri');
        $this->db->where('YEAR(tanggal_mulai)', $post['filter_tahun']);
        $this->db->where('YEAR(tanggal_selesai)', $post['filter_tahun']);

		if($post['filter_karyawan'] !== ''){
			$this->db->like('nama_karyawan', $post['filter_karyawan'],'both');
			$this->db->or_like('nik', $post['filter_karyawan'],'both');
		}
		if($post['filter_kuartal'] !== 'all'){
            $thn = $post['filter_tahun'];
            $quartal = $post['filter_kuartal'];
            $dateQuartal = $this->quartal($quartal, $thn);
			$this->db->where('tanggal_mulai >=', $dateQuartal['date1']);
            $this->db->where('tanggal_selesai <=', $dateQuartal['date2']);
		}
		if($post['filter_kategori_pelatihan'] !== ''){
			$this->db->like('kategori_pelatihan', $post['filter_kategori_pelatihan'], 'both');
		}
        if($post['filter_jenis_sertifikat'] !== ''){
			$this->db->like('jenis_sertifikat', $post['filter_jenis_sertifikat'], 'both');
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

    private function quartal($quartal, $thn){
        if($quartal == 1){
            $date1 = $thn.'-01-01';
            $date2 = $thn.'-03-31';
        }
        if($quartal == 2){
            $date1 = $thn.'-04-01';
            $date2 = $thn.'-06-30';
        }
        if($quartal == 3){
            $date1 = $thn.'-07-01';
            $date2 = $thn.'-09-30';
        }
        if($quartal == 4){
            $date1 = $thn.'-10-01';
            $date2 = $thn.'-12-31';
        }

        return array(
            'date1' => $date1,
            'date2' => $date2,
        );
    }

}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */