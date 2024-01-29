<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reference extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if ($this->ion_auth->logged_in() != true) {
        //     Redirect(baseapplicationhcm, false);
        // }
		$this->sess = unserialize($this->session->userdata('dashboard_tna'));
		//Do your magic here
		//$this->load->model(array('Referenece/JobFamilyModel','jobroleModel','JobRoleModel','KompetensiModel'));
		$this->load->model('Reference/JobFamilyModel','jobfamily');
		$this->load->model('Reference/JobFunctionModel','jobfunction');
		$this->load->model('Reference/JobRoleModel','jobrole');
		$this->load->model('Reference/KompetensiModel','kompetensi');
		$this->load->model('Reference/TrainingModel','training');
		$this->load->model('Reference/LembagaModel','lembaga');
	}

	// fungsi job functin
    //======================================================================================================================
	public function job_family()
	{
		$data['breadcrumb'] 	= 'Reference > Job Family';
        $data['active_menu'] 	= 'Katalog';
		$data['active_sub_menu'] 	= 'Job Family';
		$data['title'] 			= 'Daftar Job Family';
		$data['title_import'] 		= 'Job Family';
		$data['kode'] 				= 'Kode Job Family';
		$data['url_submit_import'] 	= site_url('tna/referensi/job-family/import');
		$data['url_download_template'] 	= base_url('files/upload/excel/template_job_family.xlsx');
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/reference/JobFamily.js',
		);

		$this->template->load('template','tna/job_family/index',$data);
	}

	public function data_jobfamily()
	{
		$get = $this->input->get();
		echo $this->jobfamily->get_data_jobfamily($get);
	}

	public function show_jobfamily()
	{
		$id = $this->input->get('id');
		$data = $this->jobfamily->get_jobfamily_byid(decrypt_url($id));
		echo json_encode($data);
	}

	public function submit_jobfamily(){		
		$data = array(
			'code' => str_replace('.','',$this->input->post('kode')),
			'name' => $this->input->post('job_family'),
			'objid' => $this->input->post('objid')
		);
		$id = decrypt_url($this->input->post('JobFamilyID'));
		$check = $this->jobfamily->get_jobfamily_byid($id);
		if($check['success']===TRUE){
			
			$data['updated_by'] = $this->ion_auth->user()->row()->id;
			$data['updated_date'] = date('Y-m-d');
			$action = $this->jobfamily->update_jobfamily($data,$id);
		}else{
			$data['created_by'] = $this->ion_auth->user()->row()->id;
			$data['created_date'] = date('Y-m-d');
			$action = $this->jobfamily->insert_jobfamily($data);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> array()
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> array()
			);
        }
        echo json_encode($return);
	}


	public function delete_jobfamily(){
		$decrypt_id = decrypt_url($this->input->post('id'));

		$data = $this->jobfamily->delete_jobfamily($decrypt_id);

		echo json_encode($data);
	}
	

	// fungsi job functin
    //======================================================================================================================
	public function job_function()
	{
		$data['breadcrumb'] 		= 'Reference > Job Function';
		$data['active_menu'] 		= 'Katalog';
		$data['active_sub_menu'] 	= 'Job Function';
		$data['title'] 				= 'Daftar Job Function';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['job_family']			= $this->jobfamily->get_jobfamily();
		$data['title_import'] 		= 'Job Function';
		$data['kode'] 				= 'Kode Job Function';
		$data['url_submit_import'] 	= site_url('tna/referensi/job-function/import');
		$data['url_download_template'] 	= base_url('files/upload/excel/template_job_function.xlsx');
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/reference/JobFunction.js',
		);

		$this->template->load('template','tna/job_function/index',$data);
	}

	public function data_jobfunction()
	{
		$get = $this->input->get();
		echo $this->jobfunction->get_data_jobfunction($get);
	}

	public function show_jobfunction()
	{
		$id = $this->input->get('id');
		$data = $this->jobfunction->get_jobfunction_byid(decrypt_url($id));
		echo json_encode($data);
	}

	public function submit_jobfunction(){		
		$data = array(
			'r_tna_job_family_code' => $this->input->post('job_family_code'),
			'code' => str_replace('.','',$this->input->post('kode')),
			'name' => $this->input->post('job_function'),
			'objid' => $this->input->post('objid')
		);
		$id = decrypt_url($this->input->post('jobfunctionID'));
		$check = $this->jobfunction->get_jobfunction_byid($id);
		if($check['success']===TRUE){
			$data['updated_by'] = $this->ion_auth->user()->row()->id;
			$data['updated_date'] = date('Y-m-d');
			$action = $this->jobfunction->update_jobfunction($data,$id);
		}else{
			
			$data['created_by'] = $this->ion_auth->user()->row()->id;
			$data['created_date'] = date('Y-m-d');
			$action = $this->jobfunction->insert_jobfunction($data);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> array()
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> array()
			);
        }
        echo json_encode($return);
	}


	public function delete_jobfunction(){
		$decrypt_id = decrypt_url($this->input->post('id'));

		$data = $this->jobfunction->delete_jobfunction($decrypt_id);

		echo json_encode($data);
	}

	// fungsi Job Rol
    //======================================================================================================================
	public function job_role()
	{
		$data['breadcrumb'] 	= 'Reference > Job Role';
		$data['active_menu'] 	= 'Katalog';
		$data['active_sub_menu'] 	= 'Job Role';
		$data['title'] 			= 'Daftar Job Role';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['job_function']		= $this->jobfunction->get_jobfunction();
		$data['title_import'] 		= 'Job Role';
		$data['kode'] 				= 'Kode Job Role';
		$data['url_submit_import'] 	= site_url('tna/referensi/job-role/import');
		$data['url_download_template'] 	= base_url('files/upload/excel/template_job_role.xlsx');
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/reference/JobRole.js',
		);

		$this->template->load('template','tna/job_role/index',$data);
	}

	public function data_jobrole()
	{
		$get = $this->input->get();
		echo $this->jobrole->get_data_jobrole($get);
	}

	public function show_jobrole()
	{
		$id = $this->input->get('id');
		$data = $this->jobrole->get_jobrole_byid(decrypt_url($id));
		echo json_encode($data);
	}

	public function submit_jobrole(){		
		$data = array(
			'r_tna_job_function_code' => $this->input->post('job_function_code'),
			'code' => str_replace('.','',$this->input->post('kode')),
			'name' => $this->input->post('job_role'),
			'long_name' => $this->input->post('long_name'),
			'objid' => $this->input->post('objid'),
		);
		$id = decrypt_url($this->input->post('jobroleID'));
		$check = $this->jobrole->get_jobrole_byid($id);
		if($check['success']===TRUE){
			$data['updated_by'] = $this->ion_auth->user()->row()->id;
			$data['updated_date'] = date('Y-m-d');
			$action = $this->jobrole->update_jobrole($data,$id);
		}else{
			$data['created_by'] = $this->ion_auth->user()->row()->id;
			$data['created_date'] = date('Y-m-d');
			$action = $this->jobrole->insert_jobrole($data);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> array()
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> array()
			);
        }
        echo json_encode($return);
	}


	public function delete_jobrole(){
		$decrypt_id = decrypt_url($this->input->post('id'));

		$data = $this->jobrole->delete_jobrole($decrypt_id);

		echo json_encode($data);
	}

    // fungsi kompetensi
    //======================================================================================================================
	public function kompetensi()
	{
		$data['breadcrumb'] 	= 'Reference > Kompetensi';
		$data['active_menu'] 	= 'Katalog';
		$data['active_sub_menu'] 	= 'Kompetensi';
		$data['title'] 			= 'Daftar Kompetensi';
		$data['job_family']		=$this->jobfamily->get_jobfamily();
		$data['title_import'] 		= 'Kompetensi';
		$data['kode'] 				= 'Kode Kompetensi';
		$data['url_submit_import'] 	= site_url('tna/referensi/kompetensi/import');
		$data['url_download_template'] 	= base_url('files/upload/excel/template_kompetensi.xlsx');
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/reference/ComboGeneral.js',
			'js/module/reference/Kompetensi.js',
		);

		$this->template->load('template','tna/kompetensi/index',$data);
	}

    public function kompetensi_detail()
	{
		$data['breadcrumb'] 	= 'Reference > Kompetensi > Detail';
        $data['active_menu'] 	= 'reference';
		$data['title'] 			= 'Detail Kompetensi';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
		);

		$this->template->load('template','tna/kompetensi/detail_kompetensi',$data);
	}

	public function data_kompetensi()
	{
		$get = $this->input->get();
		echo $this->kompetensi->get_data_kompetensi($get);
	}

	public function show_kompetensi()
	{
		$id = $this->input->get('id');
		$data = $this->kompetensi->get_kompetensi_byid(decrypt_url($id));
		echo json_encode($data);
	}

	public function submit_kompetensi(){		
		$data = array(
			'r_tna_job_role_code' => $this->input->post('job_role'),
			'code' => str_replace('.','',$this->input->post('kode_kompetensi')),
			'name' => $this->input->post('kompetensi'),
			'owner' => $this->input->post('owner'),
		);
		$id = decrypt_url($this->input->post('KompetensiID'));
		$check = $this->kompetensi->get_kompetensi_byid($id);
		if($check['success']===TRUE){
			$data['updated_by'] = $this->ion_auth->user()->row()->id;
			$data['updated_date'] = date('Y-m-d');
			$action = $this->kompetensi->update_kompetensi($data,$id);
		}else{
			$data['created_by'] = $this->ion_auth->user()->row()->id;
			$data['created_date'] = date('Y-m-d');
			$action = $this->kompetensi->insert_kompetensi($data);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> array()
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> array()
			);
        }
        echo json_encode($return);
	}


	public function delete_kompetensi(){
		$decrypt_id = decrypt_url($this->input->post('id'));

		$data = $this->kompetensi->delete_kompetensi($decrypt_id);

		echo json_encode($data);
	}

	//================================================================================================================================
	// training

    public function training()
	{
		$data['breadcrumb'] 	= 'Reference > Pelatihan';
		$data['active_menu'] 	= 'Katalog';
		$data['active_sub_menu'] 	= 'Training';
		$data['title'] 			= 'Daftar Training';
		//$data['kompetensi'] 	= $this->kompetensi->get_kompetensi;
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/reference/ComboGeneral.js',
			'js/module/reference/Training.js',
		);

		$this->template->load('template','tna/training/index',$data);
	}

	public function data_training()
	{
		$get = $this->input->get();
		echo $this->training->get_data_training($get);
	}

	public function show_training()
	{
		$id = $this->input->get('id');
		$data = $this->training->get_training_byid(decrypt_url($id));
		echo json_encode($data);
	}

	public function submit_training(){	
		$kategori = $this->input->post('kategori');	
		$pre = substr($kategori,0,1);
		$data = array(
			'r_tna_kompetensi_code' => $this->input->post('kompetensi'),
			'name' => $this->input->post('training'),
			'type' => $kategori
		);
		$id = decrypt_url($this->input->post('TrainingID'));
		$check = $this->training->get_training_byid($id);
		if($check['success']===TRUE){
			$data['updated_by'] = $this->ion_auth->user()->row()->id;
			$data['updated_date'] = date('Y-m-d');
			$action = $this->training->update_training($data,$id);
		}else{
			
			$data['code'] = $this->training->generateCode($pre);
			$data['created_by'] = $this->ion_auth->user()->row()->id;
			$data['created_date'] = date('Y-m-d');
			$action = $this->training->insert_training($data);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> array()
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> array()
			);
        }
        echo json_encode($return);
	}


	public function delete_training(){
		$decrypt_id = decrypt_url($this->input->post('id'));

		$data = $this->training->delete_training($decrypt_id);

		echo json_encode($data);
	}

	//==============================================================================================================================
	// Kompetensi jabatan

	public function kompetensi_jabatan()
	{
		$data['breadcrumb'] 	= 'Reference > Kompetensi Jabatan';
        $data['active_menu'] 	= 'Katalog';
		$data['active_sub_menu'] 	= 'Kompetensi Jabatan';
		$data['title'] 			= 'Daftar Jabatan';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
		);

		$this->template->load('template','tna/kompetensi_jabatan/index',$data);
	}

	//====================================================================================================================================
	// lembaga

	public function lembaga()
	{
		$data['breadcrumb'] 	= 'Reference > Lembaga Pelatihan';
        $data['active_menu'] 	= 'Katalog';
		$data['active_sub_menu'] 	= 'Lembaga';
		$data['title'] 			= 'Lembaga Pelatihan / Sertifikasi';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/reference/Lembaga.js',
		);

		$this->template->load('template','tna/lembaga/index',$data);
	}

	public function data_lembaga()
	{
		$get = $this->input->get();
		echo $this->lembaga->get_data_lembaga($get);
	}

	public function show_lembaga()
	{
		$id = $this->input->get('id');
		$data = $this->lembaga->get_lembaga_byid(decrypt_url($id));
		echo json_encode($data);
	}

	public function submit_lembaga(){	
		$data = array(
			'nama_lembaga' 	=> $this->input->post('nama_lembaga'),
			'nama_pic' 		=> $this->input->post('pic'),
			'telp' 			=> $this->input->post('telp'),
			'website' 		=> $this->input->post('website'),
			'alamat' 		=> $this->input->post('alamat'),
		);
		$id = decrypt_url($this->input->post('LembagaID'));
		$check = $this->lembaga->get_lembaga_byid($id);
		if($check['success']===TRUE){
			$data['updated_by'] = $this->ion_auth->user()->row()->id;
			$data['updated_date'] = date('Y-m-d');
			$action = $this->lembaga->update_lembaga($data,$id);
		}else{
			
			$data['created_by'] = $this->ion_auth->user()->row()->id;
			$data['created_date'] = date('Y-m-d');
			$action = $this->lembaga->insert_lembaga($data);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> array()
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> array()
			);
        }
        echo json_encode($return);
	}


	public function delete_lembaga(){
		$decrypt_id = decrypt_url($this->input->post('id'));

		$data = $this->lembaga->delete_lembaga($decrypt_id);

		echo json_encode($data);
	}

	public function detail_lembaga($encode_id="")
	{
		$id = decrypt_url($encode_id);
		$data['breadcrumb'] 	= 'Reference > Detail Lembaga Pelatihan';
        $data['active_menu'] 	= 'reference';
		$data['title'] 			= 'Lembaga Pelatihan / Sertifikasi';
		$data['lembaga']		= $this->lembaga->get_lembaga_byid($id);
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/reference/Lembaga_detail.js',
		);

		$this->template->load('template','tna/lembaga/detail_lembaga',$data);
	}

	public function detail_lembaga_data()
	{
		$get = $this->input->get();
		echo $this->lembaga->get_data_detail_lembaga($get);
	}

	public function detail_lembaga_show()
	{
		$id = $this->input->get('id');
		$data = $this->lembaga->get_detail_lembaga_byid(decrypt_url($id));
		echo json_encode($data);
	}

	public function detail_lembaga_submit(){	
		$data = array(
			'r_tna_lembaga_id' 	=> $this->input->post('lembaga_id'),
			'nama_pelatihan' 	=> $this->input->post('nama_pelatihan'),
			'jenis_pelatihan' 	=> $this->input->post('jenis_pelatihan'),
			'metoda' 			=> $this->input->post('metoda'),
			'kapasitas' 		=> $this->input->post('kapasitas'),
			'biaya' 			=> str_replace('.','',$this->input->post('biaya')),
		);
		$id = decrypt_url($this->input->post('detail_id'));
		$check = $this->lembaga->get_detail_lembaga_byid($id);
		if($check['success']===TRUE){
			$data['updated_by'] = $this->ion_auth->user()->row()->id;
			$data['updated_date'] = date('Y-m-d');
			$action = $this->lembaga->update_detail_lembaga($data,$id);
		}else{
			
			$data['created_by'] = $this->ion_auth->user()->row()->id;
			$data['created_date'] = date('Y-m-d');
			$action = $this->lembaga->insert_detail_lembaga($data);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> array()
			);
              
        }else{
            $return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> array()
			);
        }
        echo json_encode($return);
	}


	public function detail_lembaga_delete(){
		$decrypt_id = decrypt_url($this->input->post('id'));

		$data = $this->lembaga->delete_detail_lembaga($decrypt_id);

		echo json_encode($data);
	}

	

}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */