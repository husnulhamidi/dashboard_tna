<?php

/**
 * 
 */
class Custom_lib
{
	
	private $CI;

	function __construct() {
	   $this->CI =& get_instance();
	   $this->CI->load->database();
	}

	function new_generate_sp(){
		$data = '/D3.400/HK200/TSAT/';
		return $data;
	}

	function new_generate_no_inv($id_project){
		//2001BJG79001

		$date = date('ym');
		$kode_bank = 'BJG79';
		//$getkode

			$this->CI->db->select('kode_project');
			$this->CI->db->where('project_id', $id_project);
			$get_kode_project = $this->CI->db->get('project')->row();

			$kode_project = preg_replace('/\s+/', '', strtoupper($get_kode_project->kode_project));

			$this->CI->db->select('RIGHT(invoice.no_invoice,3) as kode', FALSE);
			$this->CI->db->order_by('invoice_id','DESC');    
			$this->CI->db->limit(1);    
		  	$query = $this->CI->db->get('invoice');       
		  	if($query->num_rows() <> 0){
		  		//echo "masuk if";
			   //jika kode ternyata sudah ada.      
			   $data = $query->row();      
			   $kode = intval($data->kode) + 1;  
			   //echo $data->no_invoice;  
			}else {      
		  		//echo "masuk else";
				//jika kode belum ada      
				$kode = 1;    
		  	}

		  	//print(str_pad($kode, 3, "0", STR_PAD_LEFT));



		  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
		  $kodejadi = $date.''.$kode_project.''.$kodemax;    
		 // echo $kodejadi;
		  return $kodejadi;
	}

	function new_generate_kode_inv(){
		//2001BJG79001

		$date = date('Y-m/d/h-i-s/');

		//$getkode

			$this->CI->db->select('RIGHT(invoice.kode_invoice,3) as kode', FALSE);
			$this->CI->db->order_by('invoice_id','DESC');    
			$this->CI->db->limit(1);    
		  	$query = $this->CI->db->get('invoice');       
		  	if($query->num_rows() <> 0){
		  		//echo "masuk if";
			   //jika kode ternyata sudah ada.      
			   $data = $query->row();      
			   $kode = intval($data->kode) + 1;  
			   //echo $data->no_invoice;  
			}else {      
		  		//echo "masuk else";
				//jika kode belum ada      
				$kode = 1;    
		  	}

		  	//print(str_pad($kode, 3, "0", STR_PAD_LEFT));

		  	//'INV/'.date('Y-m/d/h-i-s')

		  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); 
		  $kodejadi = 'INV/'.$date.''.$kodemax;    
		 // echo $kodejadi;
		  return $kodejadi;
	}

	public function akumulasi_total_bayar($id_invoice){


		$this->CI->db->select_sum('jml_biaya');
		$this->CI->db->where('invoice_id', $id_invoice);
		$query_plus = $this->CI->db->get('invoice_detail_plus')->row();
		
		$this->CI->db->select('*');
		$this->CI->db->where('invoice_id', $id_invoice);
		$query_minus = $this->CI->db->get('invoice_detail_minus')->result();

		$hitung_nilai_penambahan =0;
        $hitung_nilai_pengurangan =0;
		foreach ($query_minus as $key) {

            if($key->type=="penambahan"){
                $jml_biaya = $key->jumlah*$key->biaya;
                $hitung_nilai_penambahan+=$jml_biaya;
            }else{
                $jml_biaya = $key->jumlah*$key->biaya;
                $hitung_nilai_pengurangan+=$jml_biaya;
            }

        }

        $kalkulasi_detail_min = $hitung_nilai_penambahan - $hitung_nilai_pengurangan;

        if($hitung_nilai_penambahan>0 && $hitung_nilai_pengurangan>0){
            
            $total_biaya = ($query_plus->jml_biaya + $hitung_nilai_penambahan) - $hitung_nilai_pengurangan;
        
        }else if($hitung_nilai_penambahan>0 && $hitung_nilai_pengurangan<=0){

            $total_biaya = ($query_plus->jml_biaya + $hitung_nilai_penambahan);

        }else if($hitung_nilai_penambahan<=0 && $hitung_nilai_pengurangan>0){

            $total_biaya = ($query_plus->jml_biaya - $hitung_nilai_pengurangan);
        
        }else if($hitung_nilai_penambahan==0 && $hitung_nilai_pengurangan==0){

            $total_biaya = ($query_plus->jml_biaya);
        }



        //$total_biaya = $total+$kalkulasi_detail_min;
        $ppn = (10/100)*$total_biaya;
        $biaya_keseluruhan = $total_biaya;
		

		//$total = $query_plus->jml_biaya - $query_minus->jml_biaya;

		$data_update = array(
			'nominal' => $biaya_keseluruhan,
			'terbilang' => terbilang($biaya_keseluruhan)
		);

		//print_r($data_update);
		//exit();
		$this->CI->db->where('invoice_id', $id_invoice);
		$update_nominal_invoice = $this->CI->db->update('invoice',$data_update);

	}

	public function prorate($start, $end,$otc, $biaya,$cpe){
		//$start = "2020-05-20";
		//$end = "2020-06-03";
		//$biaya = 1200000;
		$d1 = strtotime($start);
		$d2 = strtotime($end);

		$date1 = date_create($start);
		$date2 = date_create($end);
		$interval = date_diff($date1, $date2);
		/*echo "Selisih: " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";*/
		
		$i=0;
		$dataDev=array();
		$jml_biaya =0;
		$last=0;
        while ($d1 <= $d2) {
            $i++;
            
            $bln = date('m', $d1);
			$thn = date('Y', $d1);
			$jumlahhari = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);

			if(date('m/Y', $d1)==date('m/Y',strtotime($start))){

				if(date('m/Y', $d1)==date('m/Y',$d2)){
					$day = date('d',$d2);
				}else{
					$day = $jumlahhari;
				}
				
				$tgl1 = new DateTime($thn."-".$bln."-".date('d',$d1));
				$tgl2 = new DateTime($thn."-".$bln."-".$day);

				$selisih 	= $tgl2->diff($tgl1)->days + 1;
				$periode 	= 0;
				$label 		=  "awal";
				$start_date = $thn."-".$bln."-".date('d',$d1);
				$end_date 	= $thn."-".$bln."-".$day;

				$biaya_end 	= ($selisih/$jumlahhari)*$biaya;
				$biaya_end_cpe 	= ($selisih/$jumlahhari)*$cpe;
				$otc 		= $otc;

			}else if(date('m/Y', $d1)==date('m/Y',strtotime($end))){
				$tgl1 		= new DateTime(date('Y-m',$d2)."-01");
				$tgl2 		= new DateTime(date('Y-m-d',$d2));

				$selisih 	= ($tgl2->diff($tgl1)->days)+1;
				$periode 	= 0;
				$label 		=  "akhir";

				$start_date = date('Y-m',$d2)."-01";
				$end_date 	= date('Y-m-d',$d2);

				$biaya_end 		= ($selisih/$jumlahhari)*$biaya;
				$biaya_end_cpe 	= ($selisih/$jumlahhari)*$cpe;
				$last=1;
				$otc=0;

			}else{
				$selisih 	= $jumlahhari;
				$periode 	= 0;
				$label 		=  "tengah";
				$start_date = date('Y-m-', $d1)."01";
				$end_date 	= date('Y-m-', $d1).$jumlahhari;

				$biaya_end = $biaya;
				$biaya_end_cpe = $cpe;
				$otc=0;
			}

            $dataDev[date('m/Y', $d1)]=array(
				'label'						=> $label,
				'bulan'     				=> date('m/Y', $d1),
				//'start_pemakaian'			=> date('Y-m-d', strtotime($start_date.' -1 month')),
				//'end_pemakaian'				=> date('Y-m-d', strtotime($end_date.' -1 month')),
				'start_date'				=> $start_date,
				'end_date'					=> $end_date,
				'total_hari_dlm_bulan'    	=> $jumlahhari,
				'jumlah_hari'				=> $selisih,
				'biaya_otc'					=> $otc,
				'biaya_mtc'					=> $biaya_end,
				'biaya_cpe'					=> $biaya_end_cpe,
				
            );
			
			$jml_biaya = $jml_biaya+$biaya_end;
			
			$d1 = strtotime("+1 month", $d1);
		}
		
		if($interval->d<30 AND date('m/Y',strtotime($start)) != date('m/Y',strtotime($end)) AND $last==0){
			$bln = date('m',$d2);
			$thn = date('Y',$d2);

			$tgl1 = new DateTime(date('Y-m',$d2)."-01");
			$tgl2 = new DateTime(date('Y-m-d',$d2));

			$jumlahhari = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);
			$selisih = ($tgl2->diff($tgl1)->days)+1;
			$periode = 0;
			$label 	=  "akhir add on";
			$start_date = date('Y-m',$d2)."-01";
			$end_date 	= date('Y-m-d',$d2);

			$biaya_end 		= ($selisih/$jumlahhari)*$biaya;
			$biaya_end_cpe 	= ($selisih/$jumlahhari)*$cpe;
			$dataDev[date('m/Y', $d1)]=array(
				'label'						=> $label,
                'bulan'     				=> date('m/Y', $d1),
				'total_hari_dlm_bulan'   	=> $jumlahhari,
				'jumlah_hari'				=> $selisih,
				//'start_pemakaian'			=> date('Y-m-d', strtotime($start_date.' -1 month')),
				//'end_pemakaian'				=> date('Y-m-d', strtotime($end_date.' -1 month')),
				'start_date'				=> $start_date,
				'end_date'					=> $end_date,
				'biaya_otc'					=> $otc,
				'biaya_mtc'					=> $biaya_end,
				'biaya_cpe'					=> $biaya_end_cpe,
				
			);
			$jml_biaya = $jml_biaya+$biaya_end;
		}
		
		//echo number_format($jml_biaya,'0','.',',');
		return $dataDev;
	}

	public function getDateNode($start, $end){
		
		$d1 = strtotime($start);
		$d2 = strtotime($end);

		$date1 = date_create($start);
		$date2 = date_create($end);
		$interval = date_diff($date1, $date2);
		/*echo "Selisih: " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";*/
		
		$i=0;
		$dataDev=array();
		$jml_biaya =0;
		$last=0;
        while ($d1 <= $d2) {
            $i++;
            
            $bln = date('m', $d1);
			$thn = date('Y', $d1);
			$jumlahhari = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);

            $dataDev[]=array(
                'bulan'     				=> date('m/Y', $d1),
            );
			
			$d1 = strtotime("+1 month", $d1);
		}
		
		// if($interval->d<30 AND date('m',strtotime($start)) != date('m',strtotime($end)) AND $last==0){

		// 	$tgl1 = new DateTime($thn."-".$bln."-01");
		// 	$tgl2 = new DateTime($thn."-".$bln."-".date('d',$d2));

		// 	$selisih = $tgl2->diff($tgl1)->days;
		// 	$periode = 0;
		// 	$label 	=  "akhir";
			
		// 	$dataDev[]=array(
        //         'bulan'     				=> date('m/Y', $d1),
		// 	);
			
		// }
		
		//echo number_format($jml_biaya,'0','.',',');
		return $dataDev;
	}

	public function prorate2($start, $end,$otc, $biaya,$cpe){
		//$start = "2020-05-20";
		//$end = "2020-06-03";
		//$biaya = 1200000;
		$d1 = strtotime($start);
		$d2 = strtotime($end);

		$date1 = date_create($start);
		$date2 = date_create($end);
		$interval = date_diff($date1, $date2);
		/*echo "Selisih: " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";*/
		
		$i=0;
		$dataDev=array();
		$jml_biaya =0;
		$last=0;
        while ($d1 <= $d2) {
            $i++;
            
            $bln = date('m', $d1);
			$thn = date('Y', $d1);
			$jumlahhari = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);

			if($bln==date('m',strtotime($start))){

				if($bln==date('m',$d2)){
					$day = date('d',$d2);
				}else{
					$day = $jumlahhari;
				}
				
				$tgl1 = new DateTime($thn."-".$bln."-".date('d',$d1));
				$tgl2 = new DateTime($thn."-".$bln."-".$day);

				$selisih 	= $tgl2->diff($tgl1)->days + 1;
				$periode 	= 0;
				$label 		=  "awal";
				$start_date = $thn."-".$bln."-".date('d',$d1);
				$end_date 	= $thn."-".$bln."-".$day;

				$biaya_end 	= ($selisih/$jumlahhari)*$biaya;
				$biaya_cpe 	= ($selisih/$jumlahhari)*$cpe;
				$otc 		= $otc;

			}else if($bln==date('m',strtotime($end))){
				$tgl1 		= new DateTime(date('Y-m',$d2)."-01");
				$tgl2 		= new DateTime(date('Y-m-d',$d2));

				$selisih 	= $tgl2->diff($tgl1)->days;
				$periode 	= 0;
				$label 		=  "akhir";

				$start_date = date('Y-m',$d2)."-01";
				$end_date 	= date('Y-m-d',$d2);

				$biaya_end 	= ($selisih/$jumlahhari)*$biaya;
				$biaya_cpe 	= ($selisih/$jumlahhari)*$cpe;
				$last=1;
				$otc=0;

			}else{
				$selisih 	= $jumlahhari;
				$periode 	= 0;
				$label 		=  "tengah";
				$start_date = date('Y-m-', $d1)."01";
				$end_date 	= date('Y-m-', $d1).$jumlahhari;

				$biaya_end = $biaya;
				$biaya_cpe = $cpe;
				$otc=0;
			}

            $dataDev[]=array(
				//'label'						=> $label,
				'bulan'     				=> date('m/Y', $d1),
				'start_date'				=> $start_date,
				'end_date'					=> $end_date,
				//'total_hari_dlm_bulan'    	=> $jumlahhari,
				//'jumlah_hari'				=> $selisih,
				'biaya_otc'					=> $otc,
				'biaya_mtc'					=> $biaya_end,
				'biaya_cpe'					=> $biaya_cpe,
				
            );
			
			$jml_biaya = $jml_biaya+$biaya_end;
			
			$d1 = strtotime("+1 month", $d1);
		}
		
		if($interval->d<30 AND date('m',strtotime($start)) != date('m',strtotime($end)) AND $last==0){

			$tgl1 = new DateTime($thn."-".$bln."-01");
			$tgl2 = new DateTime($thn."-".$bln."-".date('d',$d2));

			$selisih = $tgl2->diff($tgl1)->days;
			$periode = 0;
			$label 	=  "akhir";
			$start_date = date('Y-m',$d2)."-01";
			$end_date 	= date('Y-m-d',$d2);

			$biaya_end 	= ($selisih/$jumlahhari)*$biaya;
			$biaya_cpe  = ($selisih/$jumlahhari)*$cpe;
			$dataDev[]=array(
				//'label'						=> $label,
                'bulan'     				=> date('m/Y', $d1),
				//'total_hari_dlm_bulan'    	=> $jumlahhari,
				//'jumlah_hari'				=> $selisih,
				'start_date'				=> $start_date,
				'end_date'					=> $end_date,
				'biaya_otc'					=> $otc,
				'biaya_mtc'					=> $biaya_end,
				'biaya_cpe'					=> $biaya_cpe
				
			);
			$jml_biaya = $jml_biaya+$biaya_end;
		}
		
		//echo number_format($jml_biaya,'0','.',',');
		return $dataDev;
	}

}

