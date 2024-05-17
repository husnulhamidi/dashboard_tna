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
		$column_order = array('id','tahun','nama_kegiatan','nama_penyelenggara','metoda','kategori_pelatihan','kompetensi','tanggal_mulai','tanggal_selesai','lama_kegiatan','bulan','kuartal','nik','nama_karyawan','posisi','direktorat','subdit','jumlah_nik','bp','status_fte','jenis_pelatihan','nomor_sertifikat','jenis_sertifikat','tanggal_awal_berlaku_sertifikat','tanggal_akhir_berlaku_sertifikat','no_ht', 'no_spb','biaya_kegiatan','currency_key','scanan_sertifikat','materi_pelatihan','evaluasi_pelatihan','keterangan');
		$column_search = array('id','tahun','nama_kegiatan','nama_penyelenggara','metoda','kategori_pelatihan','kompetensi','tanggal_mulai','tanggal_selesai','lama_kegiatan','bulan','kuartal','nik','nama_karyawan','posisi','direktorat','subdit','jumlah_nik','bp','status_fte','jenis_pelatihan','nomor_sertifikat','jenis_sertifikat','tanggal_awal_berlaku_sertifikat','tanggal_akhir_berlaku_sertifikat','no_ht', 'no_spb','biaya_kegiatan','currency_key','scanan_sertifikat','materi_pelatihan','evaluasi_pelatihan','keterangan');

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
        
        if($post['filter_bulan'] !== ''){
            $bulan = $this->mapMonthName($post['filter_bulan']);
            $this->db->where('bulan', $bulan);
        }

        if($post['filter_tahun'] !== ''){
            $this->db->where('tahun', $post['filter_tahun']);
        }
		if($post['filter_karyawan'] !== ''){
			$this->db->like('nama_karyawan', $post['filter_karyawan'],'both');
			$this->db->or_like('nik', $post['filter_karyawan'],'both');
		}
		if($post['filter_kuartal'] !== 'all'){
            $this->db->where('kuartal', $post['filter_kuartal']);
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

    private function mapMonthName($monthName){
        $lowercaseMonthName = strtolower($monthName);
        switch($lowercaseMonthName) {
            case 'january':
                return 'Januari';
            case 'february':
                return 'Februari';
            case 'march':
                return 'Maret';
            case 'april':
                return 'April';
            case 'may':
                return 'Mei';
            case 'june':
                return 'Juni';
            case 'july':
                return 'Juli';
            case 'august':
                return 'Agustus';
            case 'september':
                return 'September';
            case 'october':
                return 'Oktober';
            case 'november':
                return 'November';
            case 'december':
                return 'Desember';
            default:
                return $monthName;
        }
    }

    public function cekDataKaryawan($id){
        $this->db->select('nik_tg, nama');
        $this->db->from('m_karyawan');
        $this->db->where('id', $id);
        $query = $this->db->get();

        $result = $query->row();

        return $result;

    }

    public function get_max_id() {
        $this->db->select_max('id');
        $query = $this->db->get('m_tna_report_imported');

        if ($query->num_rows() > 0) {
            return $query->row()->id;
        } else {
            return null;
        }
    }

    public function insertData($data){
        return $this->db->insert($this->table, $data);
		//  $this->db->insert_id();
    }

    public function cekDataPengawalan(){
        // $this->db->select('*');
        // $this->db->from('m_tna_pengawalan');
        // $this->db->where('waktu_pelaksanaan_selesai <', 'NOW()', FALSE);
        // $query = $this->db->get();
        // $result = $query->result(); // atau $query->result_array() untuk mendapatkan array asosiatif

        $this->db->select("
            YEAR(waktu_pelaksanaan_mulai) AS tahun_mulai,
            nama_kegiatan,
            nama_penyelenggara,
            metoda_pembelajaran,
            jenis_pelatihan,
            rt.name AS pelatihan,
            rtk.name AS kompetensi,
            waktu_pelaksanaan_mulai,
            waktu_pelaksanaan_selesai,
            DATEDIFF(waktu_pelaksanaan_selesai, waktu_pelaksanaan_mulai) + 1 AS lama_kegiatan,
            CASE 
                WHEN MONTH(waktu_pelaksanaan_mulai) = 1 THEN 'Januari'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 2 THEN 'Februari'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 3 THEN 'Maret'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 4 THEN 'April'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 5 THEN 'Mei'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 6 THEN 'Juni'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 7 THEN 'Juli'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 8 THEN 'Agustus'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 9 THEN 'September'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 10 THEN 'Oktober'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 11 THEN 'November'
                WHEN MONTH(waktu_pelaksanaan_mulai) = 12 THEN 'Desember'
            END AS bulan,
            QUARTER(waktu_pelaksanaan_mulai) AS kuartal,
            mk.nik_tg AS nik,
            mk.nama AS nama_karyawan,
            rj.nama AS posisi,
            IF(l5 = 2, o5, IF(l4 = 2, o4, IF(l3 = 2, o3, o2))) AS direktorat,
            IF(l5 = 3, o5, IF(l4 = 3, o4, o3)) AS subdit,
            LENGTH(mk.nik_tg) AS jumlah_nik,
            status_karyawan,
            jenis_development,
            mtpd.no_dokumen AS no_sertifikat,
            mtpd.tanggal_berlaku_awal AS tanggal_awal_sertifikat,
            mtpd.tanggal_berlaku_akhir AS tanggal_akhir_sertifikat,
            mtpb.no_ht AS no_ht,
            mtpb.no_spb AS no_spb,
            estimasi_biaya AS biaya_kegiatan,
            QUARTER(waktu_pelaksanaan_mulai) AS bp,
            jenis_development AS jenis_sertifikat,
            jenis_development AS keterangan,
        ");
        $this->db->from('m_tna_pengawalan mtp');
        $this->db->join('m_karyawan mk', 'mtp.m_karyawan_id = mk.id');
        $this->db->join('v_organisasi org', 'mtp.m_organisasi_id = org.id');
        $this->db->join('h_mutasi hm', 'mk.id = hm.m_karyawan_id AND hm.is_aktif = 1');
        $this->db->join('r_tna_kompetensi rtk', 'rtk.id = mtp.r_tna_kompetensi_id');
        $this->db->join('r_jabatan rj', 'rj.id = hm.r_jabatan_id');
        $this->db->join('r_tna_training rt', 'rt.id = mtp.r_tna_traning_id');
        $this->db->join('r_tahapan_usulan tu', 'tu.id = mtp.tahapan_id');
        $this->db->join('m_organisasi mo', 'mo.id = mtp.m_organisasi_id');
        $this->db->join('m_tna_pengawalan_dokumen mtpd', 'mtp.id = mtpd.m_tna_pengawalan_id AND mtpd.tipe = "sertifikat"', 'left');
        $this->db->join('m_tna_pengawalan_pembayaran mtpb', 'mtp.id = mtpb.m_tna_pengawalan_id', 'left');
        $this->db->where('tu.r_jenis_usulan_id', 29);
        $this->db->where('waktu_pelaksanaan_selesai <', 'NOW()', FALSE);
        $this->db->limit(2);
        $query = $this->db->get();
        $result = $query->result(); // atau $query->result_array() untuk mendapatkan array asosiatif
        return $result;

    }

    public function cekDataisExist($namaKegiatan, $waktuMulai, $waktuSelesai, $nik){
        $this->db->select('COUNT(id) as total');
        $this->db->from('m_tna_report_imported');
        $this->db->where('nama_kegiatan', $namaKegiatan);
        $this->db->where('tanggal_mulai', $waktuMulai);
        $this->db->where('tanggal_selesai', $waktuSelesai);
        $this->db->where('nik', $nik);
        $query = $this->db->get();
        $result = $query->row()->total; 
        return (int) $result;
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