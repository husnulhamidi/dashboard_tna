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
        $this->db->select('COUNT(tp.id) AS pelatihan, 
                   COUNT(DISTINCT tp.m_karyawan_id) AS peserta, 
                   COUNT(CASE WHEN tp.status_karyawan = "FTE" THEN 1 END) AS status_fte, 
                   COUNT(CASE WHEN tp.status_karyawan = "Non FTE" THEN 1 END) AS status_non_fte');
        $this->db->from('m_tna_pengawalan AS tp');
        $this->db->join('r_tahapan_usulan rtu', 'rtu.id = tp.tahapan_id', 'left');
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
        $this->db->select('COUNT(tp.id) AS sertifikasi, 
                   COUNT(DISTINCT tp.m_karyawan_id) AS peserta, 
                   COUNT(CASE WHEN tp.status_karyawan = "FTE" THEN 1 END) AS status_fte, 
                   COUNT(CASE WHEN tp.status_karyawan = "Non FTE" THEN 1 END) AS status_non_fte');
        $this->db->from('m_tna_pengawalan AS tp');
        $this->db->join('r_tahapan_usulan rtu', 'rtu.id = tp.tahapan_id', 'left');
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

    public function chartPelatihan($thn, $quartal){
        $dateQuartal = $this->quartal($quartal, $thn);
        $this->db->select('COUNT(DISTINCT nama_kegiatan) as rencana_pelatihan');
        $this->db->select('COUNT(DISTINCT tp.m_karyawan_id) as rencana_peserta');
        $this->db->select('COUNT(DISTINCT CASE WHEN tp.waktu_pelaksanaan <= NOW() THEN nama_kegiatan END) AS realisasi_pelatihan', FALSE);
        $this->db->select('COUNT(CASE WHEN tu.urutan > 9 THEN tp.m_karyawan_id END) AS realisasi_peserta', FALSE);
        $this->db->from('m_tna_pengawalan tp');
        $this->db->join('r_tahapan_usulan tu', 'tp.tahapan_id = tu.id');
        $this->db->where('tp.jenis_development', 'Pelatihan');
        $this->db->where('waktu_pelaksanaan >=', $dateQuartal['date1']);
        $this->db->where('waktu_pelaksanaan <=', $dateQuartal['date2']);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function chartSertifikasi($thn, $quartal){
        $dateQuartal = $this->quartal($quartal, $thn);
        $this->db->select('COUNT(DISTINCT nama_kegiatan) as rencana_sertifikasi');
        $this->db->select('COUNT(DISTINCT tp.m_karyawan_id) as rencana_peserta');
        $this->db->select('COUNT(DISTINCT CASE WHEN tp.waktu_pelaksanaan <= NOW() THEN nama_kegiatan END) AS realisasi_sertifikasi', FALSE);
        $this->db->select('COUNT(CASE WHEN tu.urutan > 9 THEN tp.m_karyawan_id END) AS realisasi_peserta', FALSE);
        $this->db->from('m_tna_pengawalan tp');
        $this->db->join('r_tahapan_usulan tu', 'tp.tahapan_id = tu.id');
        $this->db->where('tp.jenis_development', 'Sertifikasi');
        $this->db->where('waktu_pelaksanaan >=', $dateQuartal['date1']);
        $this->db->where('waktu_pelaksanaan <=', $dateQuartal['date2']);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function realisasiInternalSharing($thn){
        $quartals = array();
        $quarters = array(
            array('01-01', '03-31'),
            array('04-01', '06-30'),
            array('07-01', '09-30'),
            array('10-01', '12-31')
        );
        foreach ($quarters as $index => $quarter) {
            $this->db->select('COUNT(id) as total');
            $this->db->from('m_tna_internal_sharing');
            $this->db->where('YEAR(tanggal)', $thn);
            $this->db->where('tanggal <= NOW()');
            $this->db->where('tanggal >=', $thn . '-' . $quarter[0]);
            $this->db->where('tanggal <=', $thn . '-' . $quarter[1]);
            $query = $this->db->get();
            $result = $query->row_array();
            $quartals['quartal' . ($index + 1)] = $result['total'];
        }
        return $quartals;

    }

    public function realisasiPesertaInternalSharing($thn){
        $quartals = array();
        $quarters = array(
            array('01-01', '03-31'),
            array('04-01', '06-30'),
            array('07-01', '09-30'),
            array('10-01', '12-31')
        );
        foreach ($quarters as $index => $quarter) {
            $this->db->select('COUNT(DISTINCT isp.m_karyawan_id) as total_peserta');
            $this->db->select('COUNT(DISTINCT CASE WHEN sk.id IN (2, 4, 5) THEN mk.id END) AS status_fte');
            $this->db->select('COUNT(DISTINCT CASE WHEN sk.id NOT IN (2, 4, 5) THEN 1 END) AS status_non_fte');
            $this->db->from('m_tna_internal_sharing tis');
            $this->db->join('m_tna_internal_sharing_peserta isp', 'tis.id = isp.id');
            $this->db->join('m_karyawan AS mk', 'mk.id = isp.m_karyawan_id', 'left');
            $this->db->join('r_status_karyawan AS sk', 'sk.id = mk.r_status_karyawan_id', 'left');
            $this->db->where('YEAR(tis.tanggal)', $thn);
            $this->db->where('tis.tanggal <= NOW()');
            $this->db->where('tis.tanggal >=', $thn . '-' . $quarter[0]);
            $this->db->where('tis.tanggal <=', $thn . '-' . $quarter[1]);
            $query = $this->db->get();
            $result = $query->row_array();
            $quartals['quartal' . ($index + 1)] = $result;
        }
        return $quartals;

    }

    public function anggaranTNA($thn){
        $this->db->select_sum('nominal');
        $this->db->from('m_tna_anggaran');
        $this->db->where('year', $thn);
        $this->db->where('type', 'TNA');
        $query = $this->db->get();
        $result = $query->row();
        $rencana_anggaran_tna = $result->nominal ?? 0;

        $this->db->select_sum('nominal');
        $this->db->from('m_tna_anggaran');
        $this->db->where('year', $thn);
        $this->db->where('type', 'NON TNA');
        $query = $this->db->get();
        $result = $query->row();
        $rencana_anggaran_non_tna = $result->nominal ?? 0;

        $this->db->select('SUM(IFNULL(pp.nominal, 0)) + SUM(IFNULL(pp.nominal_sppd, 0)) AS total_nominal');
        $this->db->from('m_tna_pengawalan_pembayaran pp');
        $this->db->join('m_tna_pengawalan p', 'p.id = pp.m_tna_pengawalan_id');
        $this->db->where('YEAR(p.waktu_pelaksanaan)', $thn);
        $this->db->where('p.is_tna', '1');
        $query = $this->db->get();
        $result = $query->row();
        $realisasi_anggaran_tna = $result->total_nominal ?? 0;

        $this->db->select('SUM(IFNULL(pp.nominal, 0)) + SUM(IFNULL(pp.nominal_sppd, 0)) AS total_nominal');
        $this->db->from('m_tna_pengawalan_pembayaran pp');
        $this->db->join('m_tna_pengawalan p', 'p.id = pp.m_tna_pengawalan_id');
        $this->db->where('YEAR(p.waktu_pelaksanaan)', $thn);
        $this->db->where('p.is_tna', '0');
        $query = $this->db->get();
        $result = $query->row();
        $realisasi_anggaran_non_tna = $result->total_nominal ?? 0;

        return array (
            'rencana_anggaran_tna' => $rencana_anggaran_tna,
            'rencana_anggaran_non_tna'  => $rencana_anggaran_non_tna,

            'realisasi_anggaran_tna' => $realisasi_anggaran_tna,
            'realisasi_anggaran_non_tna' => $realisasi_anggaran_non_tna,
            
        );
    }

    public function summary($thn) {
        $quartals = array();
        $quarters = array(
            array('01-01', '03-31'),
            array('04-01', '06-30'),
            array('07-01', '09-30'),
            array('10-01', '12-31')
        );
    
        foreach ($quarters as $index => $quarter) {
            $start_date = $thn . '-' . $quarter[0];
            $end_date = $thn . '-' . $quarter[1];
    
            // TNA
            $this->db->select('SUM(IFNULL(pp.nominal, 0)) + SUM(IFNULL(pp.nominal_sppd, 0)) AS total_nominal');
            $this->db->from('m_tna_pengawalan_pembayaran pp');
            $this->db->join('m_tna_pengawalan p', 'p.id = pp.m_tna_pengawalan_id');
            $this->db->where('p.is_tna', '1');
            $this->db->where('p.waktu_pelaksanaan >=', $start_date);
            $this->db->where('p.waktu_pelaksanaan <=', $end_date);
            $query = $this->db->get();
            $result_tna = $query->row();
            
            // Total Biaya
            $this->db->select_sum('biaya');
            $this->db->from('m_tna_internal_sharing');
            $this->db->where('YEAR(tanggal)', $thn);
            $this->db->where('tanggal >=', $start_date);
            $this->db->where('tanggal <=', $end_date);
            $query_biaya = $this->db->get();
            $result_biaya = $query_biaya->row();
            $total_biaya = $result_biaya->biaya ?? 0;
    
            $total_tna = $result_tna->total_nominal + $total_biaya;
            $quartals['tna_quartal' . ($index + 1)] = $total_tna ?? 0;
    
            // Non-TNA
            $this->db->select('SUM(IFNULL(pp.nominal, 0)) + SUM(IFNULL(pp.nominal_sppd, 0)) AS total_nominal');
            $this->db->from('m_tna_pengawalan_pembayaran pp');
            $this->db->join('m_tna_pengawalan p', 'p.id = pp.m_tna_pengawalan_id');
            $this->db->where('p.is_tna', '0');
            $this->db->where('p.waktu_pelaksanaan >=', $start_date);
            $this->db->where('p.waktu_pelaksanaan <=', $end_date);
            $query_non_tna = $this->db->get();
            $result_non_tna = $query_non_tna->row();
            $total_non_tna = $result_non_tna->total_nominal + $total_biaya;
            $quartals['non_tna_quartal' . ($index + 1)] = $total_non_tna ?? 0;
        }
        return $quartals;
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