<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

	public function getCountDashboard($thn, $quartal){
        // return $thn;
        $dateQuartal = $quartal;
        if($quartal != 'All'){
            $dateQuartal = $this->quartal($quartal, $thn);
        }
        // return $dateQuartal;
        // Pelatihan
        $this->db->select('COUNT(DISTINCT tp.nama_kegiatan) AS pelatihan, 
                   COUNT(DISTINCT mk.nama) AS peserta, 
                   COUNT(DISTINCT CASE WHEN sk.id IN (2, 4, 5) THEN mk.id END) AS status_fte, 
                   COUNT(DISTINCT CASE WHEN sk.id NOT IN (2, 4, 5) THEN mk.id END) AS status_non_fte');
        $this->db->from('m_tna_pengawalan AS tp');
        $this->db->join('r_tahapan_usulan rtu', 'rtu.id = tp.tahapan_id', 'left');
        $this->db->join('m_karyawan AS mk', 'mk.id = tp.m_karyawan_id');
        $this->db->join('r_status_karyawan AS sk', 'sk.id = mk.r_status_karyawan_id', 'left');
        $this->db->where('YEAR(tp.waktu_pelaksanaan)', $thn);
        $this->db->where('rtu.urutan >', 9);
        $this->db->where('tp.jenis_development', 'Pelatihan');
        if($quartal != 'All'){
            $this->db->where('tp.waktu_pelaksanaan >=', $dateQuartal['date1']);
            $this->db->where('tp.waktu_pelaksanaan <=', $dateQuartal['date2']);
        }
        $query = $this->db->get();
        $pelatihan_result = $query->row_array();

        // Sertifikasi
        $this->db->select('COUNT(DISTINCT tp.nama_kegiatan) AS sertifikasi, 
                COUNT(DISTINCT mk.nama) AS peserta, 
                COUNT(DISTINCT CASE WHEN sk.id IN (2, 4, 5) THEN mk.id END) AS status_fte, 
                COUNT(DISTINCT CASE WHEN sk.id NOT IN (2, 4, 5) THEN mk.id END) AS status_non_fte');
        $this->db->from('m_tna_pengawalan AS tp');
        $this->db->join('r_tahapan_usulan rtu', 'rtu.id = tp.tahapan_id', 'left');
        $this->db->join('m_karyawan AS mk', 'mk.id = tp.m_karyawan_id');
        $this->db->join('r_status_karyawan AS sk', 'sk.id = mk.r_status_karyawan_id', 'left');
        $this->db->where('YEAR(tp.waktu_pelaksanaan)', $thn);
        $this->db->where('rtu.urutan >', 9);
        $this->db->where('tp.jenis_development', 'Sertifikasi');
        if($quartal != 'All'){
            $this->db->where('tp.waktu_pelaksanaan >=', $dateQuartal['date1']);
            $this->db->where('tp.waktu_pelaksanaan <=', $dateQuartal['date2']);
        }
        $query = $this->db->get();
        $sertifikasi_result = $query->row_array();
       

        // Internal Sharing
        $this->db->select('COUNT(*) as rencana,
                   SUM(CASE WHEN tanggal <= NOW() THEN 1 ELSE 0 END) AS realisasi,
                   SUM(CASE WHEN tanggal > NOW() THEN 1 ELSE 0 END) AS todo');
        $this->db->from('m_tna_internal_sharing');
        $this->db->where('YEAR(tanggal)', $thn);
        if($quartal != 'All'){
            $this->db->where('tanggal >=', $dateQuartal['date1']);
            $this->db->where('tanggal <=', $dateQuartal['date2']);
        }
        $query = $this->db->get();
        $internal_sharing_result = $query->row_array();


        return array(
            'Pelatihan' => $pelatihan_result,
            'Sertifikasi' => $sertifikasi_result,
            'internal_sharing' => $internal_sharing_result
        );
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