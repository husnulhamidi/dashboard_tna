<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImportExcel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if(!$this->session->userdata('user')){
		// 	redirect('auth/login');
		// }
		//Do your magic here
		$this->load->model('Reference/JobFamilyModel','jobfamily');
		$this->load->model('Reference/JobFunctionModel','jobfunction');
		$this->load->model('Reference/JobRoleModel','jobrole');
		$this->load->model('Reference/KompetensiModel','kompetensi');
		$this->load->model('Reference/TrainingModel','training');
		$this->load->model('Reference/LembagaModel','lembaga');
		$this->load->model('TnaModel','tna');
	}

    public function import_excel_jobfamily(){
        error_reporting(0);
		ini_set('memory_limit',-1);
        ini_set('MAX_EXECUTION_TIME', 0);

		$data =array();
		$config['upload_path'] = './files/upload/excel';
		$config['allowed_types'] = 'xls|xlsx|xls|csv';
		$config['max_size'] = '20000';
		$input = $this->input->post('input-file-excel');
		//print_r($_FILES[$input]);
		$new_name = time().'_'.$_FILES[$input]['name'];
		$config['file_name'] = $new_name;

		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload($this->input->post('input-file-excel'))){
        	
            $json = array(
				'code' => '0005',
				'message' => $this->upload->display_errors(),
				
			);
        
        } else {
        	
            $upload_data  = $this->upload->data();
			$file = $upload_data['full_path'];
			require_once APPPATH.'third_party/PHPExcel_/PHPExcel.php';
			
			$excelreader = new PHPExcel_Reader_Excel2007();
			$loadexcel = $excelreader->load($file); 
			$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

			//cek jika ada sudah ada di db & excel
			$duplicate = array();
			$x= 1;
			foreach($sheet as $row){
				if($x>1){
					$duplicate[] = $row['B'];
				}
				$x++;
			}

			$this->db->select('id, code,name');
			$this->db->from('r_tna_job_family');
			$this->db->where_in('code',$duplicate);
			$pengecekan = $this->db->get()->result();
            //echo json_encode($pengecekan);die;

			if(count($pengecekan)>0){
				//unlink("/files/upload/excel/".$new_name);

				$output_data_duplicate = array();
				$nomor = 1;
				$start_array = 0;
				foreach ($pengecekan as $value) {
					//if($value->code==$duplicate[$start_array]){
						$output_data_duplicate[] = array(
							'no' => $nomor,
							'kode_duplicate' => $value->code,
                            'name_duplicate' => $value->name,
						);
					//}
					$nomor++;
					$start_array++;
				}

				$json = array(
					'rc' => '0008',
					'message' => 'Terdapat Duplicate Data Job Family!',
					'data' => $output_data_duplicate
				);
			}else{
			
				$this->db->trans_start();
					$no = 1;
					foreach($sheet as $row){
							//remove header
						if($no >1){
                            list($numeric,$name)=explode(' ',$row['C']);
							$data= array(
								'code' 	        => $row['B'], 
                                'code_numeric' 	=> $numeric, 
								'name' 		    => $row['C'], 
							   	'objid' 	    => $row['D'], 
                                'is_import' 	=> '1', 
							);

							$this->jobfamily->insert_jobfamily($data);

						}
						$no++;
					}
				

					$this->db->trans_complete();
					if($this->db->trans_status() === FALSE){
						$json = array(
							'rc' => '0001',
							'message' => 'Terjadi kesalahan Database & File!',
						);
					}else{

						unlink("./files/upload/excel/".$new_name);
						$json = array(
							'rc' => '0000',
							'message' => 'Data berhasil diimport',
						);
					}

				}

        }

		
    	echo json_encode(array($json));
	}

    //=======================================================================================================================================
    //

	public function import_excel_jobfunction(){
        error_reporting(0);
		ini_set('memory_limit',-1);
        ini_set('MAX_EXECUTION_TIME', 0);

		$data =array();
		$config['upload_path'] = './files/upload/excel';
		$config['allowed_types'] = 'xls|xlsx|xls|csv';
		$config['max_size'] = '20000';
		$input = $this->input->post('input-file-excel');
		//print_r($_FILES[$input]);
		$new_name = time().'_'.$_FILES[$input]['name'];
		$config['file_name'] = $new_name;

		//exit();
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload($this->input->post('input-file-excel'))){
        	
            /*$data = array('error' => $this->upload->display_errors());*/
            $json = array(
				'code' => '0005',
				'message' => $this->upload->display_errors(),
				
			);
        
        } else {
        	
            $upload_data  = $this->upload->data();

			$file = $upload_data['full_path'];

			require_once APPPATH.'third_party/PHPExcel_/PHPExcel.php';
			
			$excelreader = new PHPExcel_Reader_Excel2007();
			$loadexcel = $excelreader->load($file); 
			$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

			//cek jika ada sudah ada di db & excel
			$duplicate = array();
			$x= 1;
			foreach($sheet as $row){
				if($x>1){
					$duplicate[] = $row['B'];
				}
				$x++;
			}

			$this->db->select('id, code,name');
			$this->db->from('r_tna_job_function');
			$this->db->where_in('code',$duplicate);
			$pengecekan = $this->db->get()->result();
            //echo json_encode($pengecekan);die;

			if(count($pengecekan)>0){
				//unlink("./files/upload/excel/".$new_name);

				$output_data_duplicate = array();
				$nomor = 1;
				$start_array = 0;
				foreach ($pengecekan as $value) {
					//if($value->code==$duplicate[$start_array]){
						$output_data_duplicate[] = array(
							'no' => $nomor,
							'kode_duplicate' => $value->code,
                            'name_duplicate' => $value->name,
						);
					//}
					$nomor++;
					$start_array++;
				}

				$json = array(
					'rc' => '0008',
					'message' => 'Terdapat Duplicate Data Job Function!',
					'data' => $output_data_duplicate
				);
			}else{
			
				$this->db->trans_start();
					$no = 1;
					foreach($sheet as $row){
							//remove header
						if($no >1){
                            list($numeric,$name)=explode(' ',$row['C']);
							$data= array(
                                'r_tna_job_family_code' 	    => $row['E'], 
								'code' 	        => $row['B'], 
                                'code_numeric' 	=> $numeric, 
								'name' 		    => $row['C'], 
							   	'objid' 	    => $row['D'], 
                                'is_import' 	=> '1', 
							);

							$this->jobfunction->insert_jobfunction($data);

						}
						$no++;
					}
				

					$this->db->trans_complete();
					if($this->db->trans_status() === FALSE){
						$json = array(
							'rc' => '0001',
							'message' => 'Terjadi kesalahan Database & File!',
						);
					}else{

						unlink("./files/upload/excel/".$new_name);
						$json = array(
							'rc' => '0000',
							'message' => 'Data berhasil diimport',
						);
					}

				}

        }

		
    	echo json_encode(array($json));
	}

     //=======================================================================================================================================
    //

	public function import_excel_jobrole(){
        //error_reporting(0);
		ini_set('memory_limit',-1);
        ini_set('MAX_EXECUTION_TIME', 0);

		$data =array();
		$config['upload_path'] = './files/upload/excel';
		$config['allowed_types'] = 'xls|xlsx|xls|csv';
		$config['max_size'] = '20000';
		$input = $this->input->post('input-file-excel');
		
		$new_name = time().'_'.$_FILES[$input]['name'];
		$config['file_name'] = $new_name;

		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload($this->input->post('input-file-excel'))){
        	
            $json = array(
				'code' => '0005',
				'message' => $this->upload->display_errors(),
			);
        
        } else {
        	
            $upload_data  = $this->upload->data();
			$file = $upload_data['full_path'];
			require_once APPPATH.'third_party/PHPExcel_/PHPExcel.php';
			
			$excelreader = new PHPExcel_Reader_Excel2007();
			$loadexcel = $excelreader->load($file); 
			$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

			//cek jika ada sudah ada di db & excel
			$duplicate = array();
			$x= 1;
			foreach($sheet as $row){
				if($x>1){
					$duplicate[] = $row['B'];
				}
				$x++;
			}

			$this->db->select('id, code,name');
			$this->db->from('r_tna_job_function');
			$this->db->where_in('code',$duplicate);
			$pengecekan = $this->db->get()->result();

			if(count($pengecekan)>0){
				//unlink("/files/upload/excel/".$new_name);

				$output_data_duplicate = array();
				$nomor = 1;
				$start_array = 0;
				foreach ($pengecekan as $value) {
					//if($value->code==$duplicate[$start_array]){
						$output_data_duplicate[] = array(
							'no' => $nomor,
							'kode_duplicate' => $value->code,
                            'name_duplicate' => $value->name,
						);
					//}
					$nomor++;
					$start_array++;
				}

				$json = array(
					'rc' => '0008',
					'message' => 'Terdapat Duplicate Data Job Role!',
					'data' => $output_data_duplicate
				);
			}else{
			
				$this->db->trans_start();
					$no = 1;
					foreach($sheet as $row){
							//remove header
						if($no >1){
                            list($numeric,$name)=explode(' ',$row['C']);
                            list($jfarm,$jfun,$jrol)=explode('.',$numeric);
							$data= array(
                                'r_tna_job_function_code' 	    => $row['F'], 
                                'r_tna_job_function_code_numeric'=> $jfarm.'.'.$jfun, 
                                'code_numeric' 	=> $numeric, 
								'code' 	        => $row['B'], 
								'name' 		    => $row['C'], 
                                'long_name'     => $row['D'], 
							   	'objid' 	    => $row['E'], 
                                'is_import' 	=> '1', 
							);

							$this->jobrole->insert_jobrole($data);

						}
						$no++;
					}
				

					$this->db->trans_complete();
					if($this->db->trans_status() === FALSE){
						$json = array(
							'rc' => '0001',
							'message' => 'Terjadi kesalahan Database & File!',
						);
					}else{

						unlink("./files/upload/excel/".$new_name);
						$json = array(
							'rc' => '0000',
							'message' => 'Data berhasil diimport',
						);
					}

				}

        }
    	echo json_encode(array($json));
	}

    //=====================================================================================================================================

    public function import_excel_kompetensi(){
        //error_reporting(0);
		ini_set('memory_limit',-1);
        ini_set('MAX_EXECUTION_TIME', 0);

		$data =array();
		$config['upload_path'] = './files/upload/excel';
		$config['allowed_types'] = 'xls|xlsx|xls|csv';
		$config['max_size'] = '20000';
		$input = $this->input->post('input-file-excel');
		
		$new_name = time().'_'.$_FILES[$input]['name'];
		$config['file_name'] = $new_name;

		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload($this->input->post('input-file-excel'))){
        	
            $json = array(
				'code' => '0005',
				'message' => $this->upload->display_errors(),
			);
        
        } else {
        	
            $upload_data  = $this->upload->data();
			$file = $upload_data['full_path'];
			require_once APPPATH.'third_party/PHPExcel_/PHPExcel.php';
			
			$excelreader = new PHPExcel_Reader_Excel2007();
			$loadexcel = $excelreader->load($file); 
			$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

			//cek jika ada sudah ada di db & excel
			$duplicate = array();
			$x= 1;
			foreach($sheet as $row){
				if($x>1){
					$duplicate[] = $row['B'];
				}
				$x++;
			}

			$this->db->select('id, code,name');
			$this->db->from('r_tna_kompetensi');
			$this->db->where_in('code',$duplicate);
			$pengecekan = $this->db->get()->result();

			if(count($pengecekan)>0){
				//unlink("/files/upload/excel/".$new_name);

				$output_data_duplicate = array();
				$nomor = 1;
				$start_array = 0;
				foreach ($pengecekan as $value) {
					//if($value->code==$duplicate[$start_array]){
						$output_data_duplicate[] = array(
							'no' => $nomor,
							'kode_duplicate' => $value->code,
                            'name_duplicate' => $value->name,
						);
					//}
					$nomor++;
					$start_array++;
				}

				$json = array(
					'rc' => '0008',
					'message' => 'Terdapat Duplicate Data Kompetensi!',
					'data' => $output_data_duplicate
				);
			}else{
			
				$this->db->trans_start();
					$no = 1;
					foreach($sheet as $row){
							//remove header
						if($no >1){
							$data= array(
                                'r_tna_job_role_code' 	    => $row['B'], 
								'Helper' 	        => $row['C'], 
								'name' 		    => $row['D'], 
							   	'code' 	        => $row['E'], 
                                'owner' 	    => $row['F'], 
                                'is_import' 	=> '1', 
							);

							$this->kompetensi->insert_kompetensi($data);

						}
						$no++;
					}
				

					$this->db->trans_complete();
					if($this->db->trans_status() === FALSE){
						$json = array(
							'rc' => '0001',
							'message' => 'Terjadi kesalahan Database & File!',
						);
					}else{

						unlink("./files/upload/excel/".$new_name);
						$json = array(
							'rc' => '0000',
							'message' => 'Data berhasil diimport',
						);
					}

				}

        }
    	echo json_encode(array($json));
	}

	public function import_excel_tna(){

		ini_set('memory_limit',-1);
		ini_set('MAX_EXECUTION_TIME', 0);
	
		$data =array();
		$config['upload_path'] = './files/upload/excel';
		$config['allowed_types'] = 'xls|xlsx|csv';
		$config['max_size'] = '20000';
		$input = $this->input->post('input-file-excel');
		
		$new_name = time().'_'.$_FILES[$input]['name'];
		$config['file_name'] = $new_name;
	
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload($this->input->post('input-file-excel'))){
			$json = array(
				'code' => '0005',
				'message' => $this->upload->display_errors(),
			);
		
		} else {
			
			$upload_data  = $this->upload->data();
			$file = $upload_data['full_path'];
			require_once APPPATH.'third_party/PHPExcel_/PHPExcel.php';
			
			$excelreader = new PHPExcel_Reader_Excel2007();
			$loadexcel = $excelreader->load($file); 
			$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	
			$this->db->trans_start();
			$no = 1;
			$update_count = true;
			$tmp_count = '';
			foreach($sheet as $row){
				// cek organisasi
				$this->db->select('id, nama');
				$this->db->from('m_organisasi');
				$this->db->where('nama',$row['B']);
				$orgId = $this->db->get()->row();

				// cek karyawan 
				$this->db->select('id, nik_tg');
				$this->db->from('m_karyawan');
				$this->db->where('nik_tg',$row['C']);
				$karyawanId = $this->db->get()->row();

				// cek atasan 
				$this->db->select('id, nik_tg');
				$this->db->from('m_karyawan');
				$this->db->where('nik_tg',$row['F']);
				$verifikatorId = $this->db->get()->row();

				// cek kompetensi
				$this->db->select('id, code');
				$this->db->from('r_tna_kompetensi');
				$this->db->where('code',$row['O']);
				$kompId = $this->db->get()->row();
				
				// cek training
				$this->db->select('id, code');
				$this->db->from('r_tna_training');
				$this->db->where('code',$row['I']);
				$trainingId = $this->db->get()->row();

				// tahapanId
				$tahapanId = $this->tna->get_tahapan_id(1);

				// is_tna
				$is_tna = 0;
				if($row['S'] == 'TNA')$is_tna = 1;

				// code tna
				$this->db->select('count(r_tna_traning_id) as count');
				$this->db->from('m_tna_pengawalan');
				$this->db->where('r_tna_traning_id', $trainingId->id);
				$query = $this->db->get();
				$countTraining = $query->row();

				// $count = $countTraining;
				if($update_count == true){
					$count = $countTraining + 1;
				}else{
					$count = $tmp_count;
				}

				if($count < 1000){
					$count = '000'.$count;
				}elseif($count < 100){
					$count = '00'.$count;
				}else{
					$count = '0'.$count;
				}
				$code_tna = $row['I'].$count;

				if($no >1){
					$data= array(
						'm_organisasi_id'		=> $orgId->id,
						'm_karyawan_id'			=> $karyawanId->id,
						'status_karyawan'		=> $row['E'],	
						'r_tna_kompetensi_id' 	=> $kompId->id,
						'r_tna_traning_id' 		=> $trainingId->id,
						'jenis_pelatihan' 		=> $row['N'],
						'jenis_development' 	=> $row['K'],	
						'nama_kegiatan' 		=> $row['H'],
						// 'justifikasi_pengajuan' =>	$this->input->post('justifikasi'),
						'metoda_pembelajaran' 	=> $row['M'],
						// 'estimasi_biaya' 		=> $row['R'],
						'estimasi_biaya' 		=> str_replace(".", "", $row['R']),
						'nama_penyelenggara' 	=> $row['P'],
						'waktu_pelaksanaan' 	=> $row['Q'],
						'tahapan_id' 			=> $tahapanId->id,
						// 'objective' 			=> $this->input->post('objective'),
						'code_tna' 				=> $code_tna,
						'is_tna' 				=> $is_tna,
						'verifikator_id_1'		=> $verifikatorId,
					);
					// echo json_encode(array($data));
					$this->tna->insertData($data);
					$update_count = false;
					$tmp_count = $count;

	
				}
				$no++;
			}
		
	
			$this->db->trans_complete();
			if($this->db->trans_status() === FALSE){
				$json = array(
					'rc' => '0001',
					'message' => 'Terjadi kesalahan Database & File!',
				);
			}else{
	
				unlink("./files/upload/excel/".$new_name);
				$json = array(
					'rc' => '0000',
					'message' => 'Data berhasil diimport',
				);
			}
	
		}
		echo json_encode(array($json));
	}


}

/* End of file exportexcel.php */
/* Location: ./application/controllers/tna/exportexcel.php */