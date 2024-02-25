<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrainingMandiri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->model('Training_Mandiri_model', 'trainingMandiri');
    
	}

	public function index(){
        $data['breadcrumb'] 	= 'Usulan > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'usulan_tna';
		$data['title'] 			= 'Daftar Usulan';
        $data['active_tab'] 	= $active_tab;
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
		);

		$this->template->load('template',$pageindex,$data);
	}

    public function list(){
        $data['breadcrumb'] 	= 'Training Mandiri';
        $data['active_menu'] 	= 'training-mandiri';
		$data['title'] 			= 'List Training Mandiri';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/TrainingMandiri.js?random='.date("ymdHis"),
			'js/custom.js?random='.date("ymdHis"),
		);


		$this->template->load('template','tna/karyawan/index_training_mandiri',$data);
	}

	public function getDataTrainingMandiri(){
		$get = $this->input->get();
		echo $this->trainingMandiri->getDataTrainingMandiri($get);
	}

    public function listhcpd(){
        $data['breadcrumb'] 	= 'Training Mandiri Admin';
        $data['active_menu'] 	= 'training-mandiri-hcpd';
		$data['title'] 			= 'List Training Mandiri Admin';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			'js/jquery.validate.js',
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/TrainingMandiri.js?random='.date("ymdHis"),
			'js/custom.js?random='.date("ymdHis"),
		);
		$this->template->load('template','tna/karyawan/index_training_mandiri_hcpd',$data);
	}

    public function profile($id=""){
        $data['breadcrumb'] 	= 'Profile Training Karyawan';
        $data['active_menu'] 	= 'dashboard-training';
		$data['title'] 			= '';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['getCountDashboard']  = $this->trainingMandiri->getCountDashboard($id);
		$data['detailKaryawan']  = $this->trainingMandiri->detailKaryawan($id);
		// echo json_encode($data['detailKaryawan']);
		$data['id']					= $id;
		$data['css'] 				= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']					= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
		);


		$this->template->load('template','tna/karyawan/profile_training_personal',$data);
	}

	public function getKompetensi(){
		// echo json_encode($this->input->post());
		$data = $this->trainingMandiri->getKompetensi($this->input->post('jabatan_id'),$this->input->post('karyawan_id'));
		echo json_encode($data);
	}

	public function getTraining(){
		$data = $this->trainingMandiri->getTraining($this->input->post('karyawan_id'));
		echo json_encode($data);
	}
	
	public function getRekomendasiTraining(){
		$data = $this->trainingMandiri->getRekomendasiTraining($this->input->post('jabatan_id'),$this->input->post('karyawan_id'));
		echo json_encode($data);
	}

	public function getNextTraining(){
		$data = $this->trainingMandiri->getNextTraining($this->input->post('karyawan_id'));
		echo json_encode($data);
	}

	public function profile_all_karyawan($id=""){
        $data['breadcrumb'] 	= 'Profile Training Karyawan';
        $data['active_menu'] 	= 'dashboard-training';
		$data['title'] 			= '';
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
		);


		$this->template->load('template','tna/karyawan/profile_training_karyawan',$data);
	}


	public function create()
	{
        $data = array();
        $data['breadcrumb'] 	= 'Training Mandiri > Tambah';
        $data['title'] 			= 'Tambah Training Mandiri';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'training-mandiri';
		$data['action_url'] 	= site_url('tna/trainingMandiri/submit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/daterangepicker/daterangepicker-bs3.css'
        );
		$data['js']				= array(	// js tambahan
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/daterangepicker/moment.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'plugins/daterangepicker/daterangepicker.js',
			'js/module/TrainingMandiri.js?random='.date("ymdHis"),

        );
		
		$this->template->load('template','tna/karyawan/form_training_mandiri', $data);
	}

	public function edit($id)
	{
        $data = array();
        $data['breadcrumb'] 	= 'Training Mandiri > Edit';
        $data['title'] 			= 'Edit Training Mandiri';
		$data['action'] 		= 'edit';
		$data['active_menu'] 	= 'training-mandiri';
		$data['action_url'] 	= site_url('tna/trainingMandiri/submit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/daterangepicker/daterangepicker-bs3.css',
            'css/custom.js?random='.date("ymdHis"),
        );
		$data['js']				= array(	// js tambahan
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/daterangepicker/moment.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'plugins/daterangepicker/daterangepicker.js',
			'js/module/TrainingMandiri.js?random='.date("ymdHis"),
			'js/custom.js?random='.date("ymdHis"),
        );

        // $data['detail'];
        $data['detail'] = $this->trainingMandiri->getDetailTrainingMandiri($id);
        
		$this->template->load('template','tna/karyawan/form_training_mandiri', $data);
	}

	public function createOrUpdate(){
		// echo json_encode($this->input->post()); 

		ini_set('MAX_EXECUTION_TIME', 0);
		// $data =array();
		$config['upload_path'] = './files/upload/training-mandiri';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$config['file_name'] = $this->input->post('input-file').'-'.date('ymdHis');
		$this->upload->initialize($config);

		$fileDoc = '';
		if ($this->upload->do_upload($this->input->post('input-file'))){
			$upload_data  = $this->upload->data();
			$file_extension = $upload_data['file_ext'];
			$fileDoc = $this->input->post('input-file').'-'.date('ymdHis').$file_extension;
		}

		$waktu = explode("-", $this->input->post('waktu_pelaksanaan'));
		$tgl1 = explode("/", $waktu[0]);
		$tglMulai = $tgl1[2].'-'.$tgl1[0].'-'.$tgl1[1];

		$tgl2 = explode("/", $waktu[1]);
		$tglSelesai = $tgl2[2].'-'.$tgl2[0].'-'.$tgl2[1];
		$data = array(
			'm_karyawan_id' => $this->input->post('userId'),
			'r_tna_kompetensi_id' => $this->input->post('kompetensi'),
			'r_tna_training_id' => $this->input->post('pelatihan'),
			'metoda_pembelajaran' => $this->input->post('metodePembelajaran'),
			'kategori_pelatihan'  => $this->input->post('ketegoriPelatihan'),
			'nama_penyelenggara' => $this->input->post('penyelenggara'),
			'biaya' => $this->input->post('biaya'),
			'tanggal_mulai' => str_replace(" ", "", $tglMulai),
			'tanggal_selesai' => str_replace(" ", "", $tglSelesai),
			'justifikasi_pelatihan'=> $this->input->post('justifikasi')
		);
		if($this->input->post('id')){
			$data['updated_date'] = date('Y-m-d');
			if($fileDoc){
				$data['document'] = $fileDoc;
			}
			$action = $this->trainingMandiri->updateData($data, $this->input->post('id'));
		}else{
			$data['created_date'] = date('Y-m-d');
			$data['document'] = $fileDoc;
			$action = $this->trainingMandiri->insertData($data);
		}
		// echo json_encode($action);
		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> $data
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> $data
			);
		}
		
		echo json_encode($return);
	}

	public function delete_training_mandiri(){
		$data = $this->trainingMandiri->delete_training_mandiri($this->input->post('id'));
		echo json_encode($data);
	}

	public function verifikasi(){
		$data = array(
			'alasan_rejected' => $this->input->post('verifikasi'),
			'status_approval' => $this->input->post('verifikasi')
		);
		$action = $this->trainingMandiri->verifikasi($data, $this->input->post('id'));
		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
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


	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */