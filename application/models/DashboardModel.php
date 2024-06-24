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
            $quartals['internal_sharing' . ($index + 1)] = $total_biaya ?? 0;
            
    
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


            // Internal Sharing
            // $this->db->select('SUM(IFNULL(tis.biaya, 0)) AS total_nominal');
            // $this->db->from('m_tna_internal_sharing tis');
            // // $this->db->join('m_tna_pengawalan p', 'p.id = pp.m_tna_pengawalan_id');
            // // $this->db->where('p.is_tna', '0');
            // $this->db->where('tis.tanggal >=', $start_date);
            // $this->db->where('tis.tanggal <=', $end_date);
            // $internal_sharing = $this->db->get();
            // $result_internal_sharing = $internal_sharing->row();
            // $total_internal_sharing = $result_internal_sharing->total_nominal;
            // $quartals['internal_sharing' . ($index + 1)] = $total_internal_sharing ?? 0;
        }
        return $quartals;
    }

    public function getDataDetail($post){
        $dateQuartal = $this->quartal($post['quartal'], $post['thn']);
        $type = 0;
        if($post['type'] == 'tna'){
            $type = 1;
        }
		$column_order = array('tp.id', 'tp.code_tna', 'mk.nama', 'mo.nama', 'tp.status_karyawan', 'rt.name', 'tp.nama_penyelenggara', 'tp.waktu_pelaksanaan', 'tu.nama', 'tu.urutan');
		$column_search = array('tp.id', 'tp.code_tna', 'mk.nama', 'mo.nama', 'tp.status_karyawan', 'rt.name', 'tp.nama_penyelenggara', 'tp.waktu_pelaksanaan', 'tu.nama', 'tu.urutan');

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
                    mo.nama AS nama_organisasi, 
                    tp.status_karyawan, 
                    rt.name AS pelatihan, 
                    tp.nama_penyelenggara, 
                    tp.waktu_pelaksanaan, 
                    tu.nama AS status, 
                    tu.urutan');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_traning_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('r_tahapan_usulan tu', 'tu.id = tp.tahapan_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id');
		$this->db->join('m_tna_internal_sharing mis', 'mis.m_tna_pengawalan_id = tp.id', 'left');
		$this->db->where('tu.r_jenis_usulan_id', 29);
        $this->db->where('tp.is_tna', strval($type));
        $this->db->where('tp.waktu_pelaksanaan >=', $dateQuartal['date1']);
        $this->db->where('tp.waktu_pelaksanaan <=', $dateQuartal['date2']);

		
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
			$total_tahapan=13;
			if($rec['urutan']==1){
				$status_proses = "";
				for ($i=1; $i < 14; $i++) { 
					$status_proses.="<i class='fa fa-circle-o text-muted'></i> ";
				}
			}else{
				$verified = "";
				for ($i=1; $i < $rec['urutan']; $i++) { 
					$verified.="<i class='fa fa-check-circle text-green'></i> ";
				}

				for ($x=$rec['urutan']; $x < 14; $x++) { 
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

    public function getDataDetailInternalSharing($post){
        $dateQuartal = $this->quartal($post['quartal'], $post['thn']);
        $column_order = array('mti.id','mti.judul_materi','mk.nama','mo.nama','mti.jam','mti.tanggal','mti.tempat','mti.biaya','mti.kuota','jr.name as job_role', 'jr.id as job_role_id','jf.name as job_function', 'jf.id as job_function_id', 'jfa.name as job_family', 'jfa.id as job_family_id');
		$column_search = array('mti.id','mti.judul_materi','mk.nama','mo.nama','mti.jam','mti.tanggal','mti.tempat','mti.biaya','mti.kuota','jr.name as job_role', 'jr.id as job_role_id','jf.name as job_function', 'jf.id as job_function_id', 'jfa.name as job_family', 'jfa.id as job_family_id');

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
                   mk.nama AS narasumber,mk.id AS idNarasumber,
                   mo.nama AS organisasi,
                   k.name as kompetensi, k.id as kompetensi_id, 
                   jr.name as job_role, jr.id as job_role_id, 
                   jf.name as job_function, jf.id as job_function_id, 
                   jfa.name as job_family, jfa.id as job_family_id,
                   COUNT(isp.m_tna_internal_sharing_id) AS jumlah_peserta');
        $this->db->from('m_tna_internal_sharing as mti');
        $this->db->join('m_karyawan as mk', 'mti.m_karyawan_id = mk.id');
        $this->db->join('m_organisasi as mo', 'mti.m_organisasi_id = mo.id');
        $this->db->join('m_tna_internal_sharing_peserta isp', 'isp.m_tna_internal_sharing_id = mti.id', 'left');
        $this->db->join('r_tna_job_family jfa', 'jfa.id = mti.r_tna_job_family_id', 'left');
        $this->db->join('r_tna_job_function jf', 'jf.id = mti.r_tna_job_function_id', 'left');
        $this->db->join('r_tna_job_role jr', 'jr.id = mti.r_tna_job_role_id', 'left');
        $this->db->join('r_tna_kompetensi k', 'k.id = mti.r_tna_kompetensi_id', 'left');
        $this->db->where('mti.tanggal >=', $dateQuartal['date1']);
        $this->db->where('mti.tanggal <=', $dateQuartal['date2']);

        
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

    public function getListTNAUrgent($post){
        // $dateQuartal = $this->quartal($quartal, $thn);
        $thn = $post['thn'];
        $quartal = $post['quartal'];
        if($quartal != "All"){
            $dateQuartal = $this->quartal($quartal, $thn);
        }
        
        $column_order = array('tp.id', 'tp.code_tna', 'mk.nama','mo.nama', 'rt.name','tp.jenis_development','tk.name', 'tp.waktu_pelaksanaan');
		$column_search = array('tp.id', 'tp.code_tna', 'mk.nama','mo.nama', 'rt.name','tp.jenis_development','tk.name', 'tp.waktu_pelaksanaan');

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
                    mo.nama AS nama_organisasi, 
                    rt.name AS pelatihan,
                    tp.jenis_development,
                    tk.name AS kompetensi, 
                    tp.waktu_pelaksanaan');
		$this->db->from('m_tna_pengawalan tp');
		$this->db->join('r_tna_training rt', 'rt.id = tp.r_tna_traning_id');
		$this->db->join('r_tna_kompetensi tk', 'tk.id = tp.r_tna_kompetensi_id');
		$this->db->join('r_tahapan_usulan tu', 'tu.id = tp.tahapan_id');
		$this->db->join('m_karyawan mk', 'mk.id = tp.m_karyawan_id');
		$this->db->join('m_organisasi mo', 'mo.id = tp.m_organisasi_id');
		$this->db->where('tu.r_jenis_usulan_id', 29);
		$this->db->where('tp.is_urgent', 1);

        if($quartal != "All"){
            $this->db->where('tp.waktu_pelaksanaan >=', $dateQuartal['date1']);
            $this->db->where('tp.waktu_pelaksanaan <=', $dateQuartal['date2']);
        }else{
            $this->db->where('YEAR(tp.waktu_pelaksanaan)', $thn);
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

    public function getListSertifikat($post){
       
        $thn = $post['thn'];
        $jenis = 'INTL';
        if($post['jenis'] == 'Nasional'){
            $jenis = 'NASL';
        }
        

        //INTL = Inernasional
        //NASL = Nasional
        
        
        $column_order = array('id','nama_kegiatan', 'nama_karyawan', 'subdit', 'tanggal_awal_berlaku_sertifikat', 'tanggal_akhir_berlaku_sertifikat', 'nomor_sertifikat', 'nama_penyelenggara');
        $column_search = array('id','nama_kegiatan', 'nama_karyawan', 'subdit', 'tanggal_awal_berlaku_sertifikat', 'tanggal_akhir_berlaku_sertifikat', 'nomor_sertifikat', 'nama_penyelenggara');


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

		$this->db->select('id,nama_kegiatan, nama_karyawan, subdit, tanggal_awal_berlaku_sertifikat, tanggal_akhir_berlaku_sertifikat, nomor_sertifikat, nama_penyelenggara');
		$this->db->from('m_tna_report_imported');
		
		$this->db->where('tahun', $thn);
		$this->db->where('jenis_sertifikat', $jenis);

		
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

    public function export_sertificate($thn, $jenis){
        $jenis_sertifikat = 'INTL';
        if($jenis == 'Nasional'){
            $jenis_sertifikat = 'NASL';
        }
        $query = $this->db->select('nama_kegiatan, nama_karyawan, subdit, tanggal_awal_berlaku_sertifikat, tanggal_akhir_berlaku_sertifikat, nomor_sertifikat, nama_penyelenggara')
            ->from('m_tna_report_imported')
            ->where('tahun', $thn)
            ->where('jenis_sertifikat', $jenis_sertifikat)
            ->get();

        return $query->result();
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