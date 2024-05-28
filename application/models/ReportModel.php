<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->table = 'm_tna_pengawalan';
    	$this->id = 'id';

	}

	public function getData($param){
		$column_order = array('jenis_pelatihan','con_kompetensi');
		$column_search = array('jenis_pelatihan','con_kompetensi');

        $draw = $param['draw'];
        $start = $param['start'];
        $length = $param['length'];

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

        if($param['kom']=="Telkomsat"){
            $kompetensi = "kompetensi_tsat";
        }else{
            $kompetensi = "kompetensi";
        }
		$recordsTotal = 0;
        $this->db->start_cache();
        $this->db->select("kategori_pelatihan,kompetensi_tsat as kompe,jenis_kompetensi,CONCAT(kategori_pelatihan,'-',".$kompetensi.") as con_kompetensi")
                ->from("m_tna_report_imported")
                ->where("tahun",$param['thn'])
                ->group_by("con_kompetensi");

		
		IF($param['search']['value']!=""){
			$i = 0;
			foreach ($column_search as $item) // looping awal
			{
				if($param['search']['value']) // jika datatable mengirimkan pencarian dengan metode param
				{
					if($i===0){
						$this->db->group_start(); 
						$this->db->like($item, $param['search']['value']);
					}else{
						$this->db->or_like($item, $param['search']['value']);
					}

					if(count($column_search) - 1 == $i)$this->db->group_end(); 
					
				}
				$i++;
			}
		}
		
		$this->db->stop_cache();
		$x = $this->db->count_all_results();

		if (!empty($param['order'])) {
			$this->db->order_by($column_order[$param['order']['0']['column']], $param['order']['0']['dir']);
		} else {
			$this->db->order_by('id', 'asc');
		}

		$this->db->limit($pageSize, $skip);
		$query = $this->db->get();
		//echo $this->db->last_query();
		$data = $query->result_array();
		$this->db->flush_cache();

		foreach ($data as $i => $rec) {
            //$arr_kom_id = explode(",",$rec['kompetensi_id']);
            $rencana_pl = $this->getSumRencana($param['thn'],"Pelatihan",$rec['con_kompetensi'],$kompetensi );
            $rencana_cert = $this->getSumRencana($param['thn'],"Sertifikasi",$rec['con_kompetensi'],$$kompetensi );
        
            $realisasi_pl = $this->getSumRealisasi($param['thn'],"Pelatihan",$rec['con_kompetensi'],$kompetensi );
            $realisasi_cert = $this->getSumRealisasi($param['thn'],"Sertifikasi",$rec['con_kompetensi'],$kompetensi );
           
            $data[$i]['rencana_pelatihan_q1'] = $rencana_pl['rencana_q1'];
            $data[$i]['rencana_pelatihan_q2'] = $rencana_pl['rencana_q2'];
            $data[$i]['rencana_pelatihan_q3'] = $rencana_pl['rencana_q3'];
            $data[$i]['rencana_pelatihan_q4'] = $rencana_pl['rencana_q4'];
            $data[$i]['rencana_pelatihan_total'] = $rencana_pl['total'];

            $data[$i]['rencana_sertifikasi_q1'] = @$rencana_cert['rencana_q1'];
            $data[$i]['rencana_sertifikasi_q2'] = @$rencana_cert['rencana_q2'];
            $data[$i]['rencana_sertifikasi_q3'] = @$rencana_cert['rencana_q3'];
            $data[$i]['rencana_sertifikasi_q4'] = @$rencana_cert['rencana_q4'];
            $data[$i]['rencana_sertifikasi_total'] = @$rencana_cert['total'];

            $data[$i]['rencana_pelatihan_fte'] = @$rencana_pl['rencana_fte'];
            $data[$i]['rencana_pelatihan_nonfte'] = @$rencana_pl['rencana_nonfte'];
            $data[$i]['rencana_sertifikasi_fte'] = @$rencana_cert['rencana_fte'];
            $data[$i]['rencana_sertifikasi_nonfte'] = @$rencana_cert['rencana_nonfte'];
            $data[$i]['rencana_peserta_total'] = @$rencana_pl['rencana_fte']+@$rencana_pl['rencana_nonfte']+@$rencana_cert['rencana_fte']+@$rencana_cert['rencana_nonfte'];

            $data[$i]['realisasi_pelatihan_q1'] = $realisasi_pl['realisasi_q1'];
            $data[$i]['realisasi_pelatihan_q2'] = $realisasi_pl['realisasi_q2'];
            $data[$i]['realisasi_pelatihan_q3'] = $realisasi_pl['realisasi_q3'];
            $data[$i]['realisasi_pelatihan_q4'] = $realisasi_pl['realisasi_q4'];
            $data[$i]['realisasi_pelatihan_total'] = $realisasi_pl['total'];

            $data[$i]['realisasi_sertifikasi_q1'] = @$realisasi_cert['realisasi_q1'];
            $data[$i]['realisasi_sertifikasi_q2'] = @$realisasi_cert['realisasi_q2'];
            $data[$i]['realisasi_sertifikasi_q3'] = @$realisasi_cert['realisasi_q3'];
            $data[$i]['realisasi_sertifikasi_q4'] = @$realisasi_cert['realisasi_q4'];
            $data[$i]['realisasi_sertifikasi_total'] = @$realisasi_cert['total'];

            $data[$i]['realisasi_pelatihan_fte'] = @$realisasi_pl['realisasi_fte'];
            $data[$i]['realisasi_pelatihan_nonfte'] = @$realisasi_pl['realisasi_nonfte'];
            $data[$i]['realisasi_sertifikasi_fte'] = @$realisasi_cert['realisasi_fte'];
            $data[$i]['realisasi_sertifikasi_nonfte'] = @$realisasi_cert['realisasi_nonfte'];
            $data[$i]['realisasi_peserta_total'] = @$realisasi_pl['realisasi_fte']+@$realisasi_pl['realisasi_nonfte']+@$realisasi_cert['realisasi_fte']+@$realisasi_cert['realisasi_nonfte'];

			//$data[$i]['encrypt_id'] = encrypt_url($rec['id']);
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

    private function getSumRencana($thn,$jenis,$kom,$filter_kom){
        /*$query = $this->db->select(" 
                `p`.`m_karyawan_id` AS `m_karyawan_id`,
                
                COUNT(IF(QUARTER(p.rencana_pelaksanaan_selesai)=1,1,NULL)) as rencana_q1, 
                COUNT(IF(QUARTER(p.rencana_pelaksanaan_selesai)=2,1,NULL)) as rencana_q2, 
                COUNT(IF(QUARTER(p.rencana_pelaksanaan_selesai)=3,1,NULL)) as rencana_q3, 
                COUNT(IF(QUARTER(p.rencana_pelaksanaan_selesai)=4,1,NULL)) as rencana_q4, 
                
                SUM(IF(p.status_karyawan='FTE',1,0)) as rencana_fte,
                SUM(IF(p.status_karyawan='Non FTE',1,0)) as rencana_nonfte,
                count( `p`.`id` ) AS `total`  ")
            ->from(" `m_tna_pengawalan` as `p`")
            ->join("r_tna_kompetensi as kom","kom.id = p.r_tna_kompetensi_id")
            ->where("p.status_code",'1')
            ->where("YEAR(p.rencana_pelaksanaan_selesai)",$thn)
            ->where("p.jenis_development",$jenis)
            ->where_in("p.r_tna_kompetensi_id",$kom_id)
            ->group_by("kom.name")
            ->get();*/

            $query = $this->db->select("  
                COUNT(IF(kuartal='Q1', 1, NULL)) as rencana_q1, 
                COUNT(IF(kuartal='Q2', 1, NULL)) as rencana_q2, 
                COUNT(IF(kuartal='Q3', 1, NULL)) as rencana_q3, 
                COUNT(IF(kuartal='Q4', 1, NULL)) as rencana_q4, 
                
                SUM(IF(status_fte='FTE', 1, 0)) as rencana_fte, 
                SUM(IF(status_fte='NON FTE', 1, 0)) as rencana_nonfte, 
                count( `id` ) AS `total`  ")
            ->from("m_tna_report_imported")
            ->where("is_tna",'1')
            ->where("tahun",$thn)
            ->where("jenis_pelatihan",$jenis)
            ->where("concat(kategori_pelatihan,'-',".$filter_kom.")",$kom)
            ->get();

            if($query->num_rows()>0){
                $data = $query->row_array(); 
            }else{
                $data = array(
                    "rencana_q1"=>0,
                    "rencana_q2"=>0,
                    "rencana_q3"=>0,
                    "rencana_q4"=>0,
                    "rencana_fte"=>0,
                    "rencana_nonfte"=>0,
                    "total"=>0
                );
            }
    
            return $data;
    }

    private function getSumRealisasi($thn,$jenis,$kom,$filter_kom){
        $query = $this->db->select("
        
                    COUNT(IF(kuartal='Q1', 1, NULL)) as realisasi_q1, 
                    COUNT(IF(kuartal='Q2', 1, NULL)) as realisasi_q2, 
                    COUNT(IF(kuartal='Q3', 1, NULL)) as realisasi_q3, 
                    COUNT(IF(kuartal='Q4', 1, NULL)) as realisasi_q4, 
                    
                    SUM(IF(status_fte='FTE', 1, 0)) as realisasi_fte, 
                    SUM(IF(status_fte='NON FTE', 1, 0)) as realisasi_nonfte, 
                    count( `id` ) AS `total` ")
                ->from(" m_tna_report_imported")
                ->where("tahun",$thn)
                ->where("jenis_pelatihan",$jenis)
                ->where("concat(kategori_pelatihan,'-',".$filter_kom.")",$kom)
                ->get();
        if($query->num_rows()>0){
            $data = $query->row_array(); 
        }else{
            $data = array(
                "realisasi_q1"=>0,
                "realisasi_q2"=>0,
                "realisasi_q3"=>0,
                "realisasi_q4"=>0,
                "realisasi_fte"=>0,
                "realisasi_nonfte"=>0,
                "total"=>0
            );
        }

        return $data;
       
    }



    public function getDataReport($thn){
        $query = $this->db->select("tp.id,
                            tp.jenis_pelatihan,
                            GROUP_CONCAT(DISTINCT(tp.r_tna_kompetensi_id)) as kompetensi_id,
                            `tk`.`name` AS `kompetensi`")
                ->from("m_tna_pengawalan as tp")
                ->join("r_tna_kompetensi as kom","kom.id=tp.r_tna_kompetensi_id")
                ->where("YEAR(tp.waktu_pelaksanaan_selesai)",$thn)
                ->or_where("YEAR(tp.rencana_pelaksanaan_selesai)",$thn)
                ->group_by("kom.name")
                ->get()
                ->result();

    }

}

/* End of file bank_model.php */
/* Location: ./application/models/bank_model.php */