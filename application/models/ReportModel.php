<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'm_tna_pengawalan';
    	$this->id = 'id';

	}

	public function getData($post){
		$column_order = array('tp.id','tp.jenis_development','tk.name',);
		$column_search = array('tp.id','tp.jenis_development','tk.name',);

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
        $this->db->select("
            id,
            jenis_development,
            kompetensi,
            MAX(CASE WHEN jenis_development = 'Pelatihan' AND kuartal = 1 AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_pelatihan END) AS realisasi_pelatihan_Q1,
            MAX(CASE WHEN jenis_development = 'Pelatihan' AND kuartal = 1 AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_pelatihan END) AS perencanaan_pelatihan_Q1,
            MAX(CASE WHEN jenis_development = 'Pelatihan' AND kuartal = 2 AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_pelatihan END) AS realisasi_pelatihan_Q2,
            MAX(CASE WHEN jenis_development = 'Pelatihan' AND kuartal = 2 AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_pelatihan END) AS perencanaan_pelatihan_Q2,
            MAX(CASE WHEN jenis_development = 'Pelatihan' AND kuartal = 3 AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_pelatihan END) AS realisasi_pelatihan_Q3,
            MAX(CASE WHEN jenis_development = 'Pelatihan' AND kuartal = 3 AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_pelatihan END) AS perencanaan_pelatihan_Q3,
            MAX(CASE WHEN jenis_development = 'Pelatihan' AND kuartal = 4 AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_pelatihan END) AS realisasi_pelatihan_Q4,
            MAX(CASE WHEN jenis_development = 'Pelatihan' AND kuartal = 4 AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_pelatihan END) AS perencanaan_pelatihan_Q4,
            SUM(CASE WHEN jenis_development = 'Pelatihan' AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_pelatihan END) AS realisasi_total_pelatihan,
            SUM(CASE WHEN jenis_development = 'Pelatihan' AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_pelatihan END) AS perencanaan_total_pelatihan,
            MAX(CASE WHEN jenis_development = 'Sertifikasi' AND kuartal = 1 AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_sertifikasi END) AS realisasi_sertifikasi_Q1,
            MAX(CASE WHEN jenis_development = 'Sertifikasi' AND kuartal = 1 AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_sertifikasi END) AS perencanaan_sertifikasi_Q1,
            MAX(CASE WHEN jenis_development = 'Sertifikasi' AND kuartal = 2 AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_sertifikasi END) AS realisasi_sertifikasi_Q2,
            MAX(CASE WHEN jenis_development = 'Sertifikasi' AND kuartal = 2 AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_sertifikasi END) AS perencanaan_sertifikasi_Q2,
            MAX(CASE WHEN jenis_development = 'Sertifikasi' AND kuartal = 3 AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_sertifikasi END) AS realisasi_sertifikasi_Q3,
            MAX(CASE WHEN jenis_development = 'Sertifikasi' AND kuartal = 3 AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_sertifikasi END) AS perencanaan_sertifikasi_Q3,
            MAX(CASE WHEN jenis_development = 'Sertifikasi' AND kuartal = 4 AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_sertifikasi END) AS realisasi_sertifikasi_Q4,
            MAX(CASE WHEN jenis_development = 'Sertifikasi' AND kuartal = 4 AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_sertifikasi END) AS perencanaan_sertifikasi_Q4,
            SUM(CASE WHEN jenis_development = 'Sertifikasi' AND waktu_pelaksanaan_selesai <= CURRENT_DATE() THEN total_sertifikasi END) AS realisasi_total_sertifikasi,
            SUM(CASE WHEN jenis_development = 'Sertifikasi' AND waktu_pelaksanaan_selesai >= CURRENT_DATE() THEN total_sertifikasi END) AS perencanaan_total_sertifikasi
        ");
        $this->db->from("
            (SELECT
                m_tna_pengawalan.id,
                jenis_development,
                tk.name AS kompetensi,
                YEAR(waktu_pelaksanaan_selesai) AS tahun,
                QUARTER(waktu_pelaksanaan_selesai) AS kuartal,
                waktu_pelaksanaan_selesai,
                SUM(CASE WHEN jenis_development = 'Pelatihan' THEN 1 ELSE 0 END) AS total_pelatihan,
                SUM(CASE WHEN jenis_development = 'Sertifikasi' THEN 1 ELSE 0 END) AS total_sertifikasi
            FROM
                m_tna_pengawalan
            JOIN r_tna_kompetensi tk ON tk.id = m_tna_pengawalan.r_tna_kompetensi_id
            WHERE YEAR(m_tna_pengawalan.waktu_pelaksanaan_selesai) = ".$post['thn']."
            GROUP BY
                jenis_development,
                tk.name,
                YEAR(waktu_pelaksanaan_selesai),
                QUARTER(waktu_pelaksanaan_selesai),
                waktu_pelaksanaan_selesai
            ) AS subquery
        ");
        $this->db->group_by("jenis_development, kompetensi");

		
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
			$this->db->order_by('id', 'asc');
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

    // private function quartal($quartal, $thn){
    //     if($quartal == 1){
    //         $date1 = $thn.'-01-01';
    //         $date2 = $thn.'-03-31';
    //     }
    //     if($quartal == 2){
    //         $date1 = $thn.'-04-01';
    //         $date2 = $thn.'-06-30';
    //     }
    //     if($quartal == 3){
    //         $date1 = $thn.'-07-01';
    //         $date2 = $thn.'-09-30';
    //     }
    //     if($quartal == 4){
    //         $date1 = $thn.'-10-01';
    //         $date2 = $thn.'-12-31';
    //     }

    //     return array(
    //         'date1' => $date1,
    //         'date2' => $date2,
    //     );
    // }

}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */