<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InternalSharing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->model('InternalSharing_Model', 'InternalSharing');
		//Do your magic here
    
	}

	public function index()
	{
        $data['breadcrumb'] 	= 'Internal Sharing Admin';
        $data['active_menu'] 	= 'tna_internal_sharing';
		$data['title'] 			= 'Daftar Internal Sharing Admin';
		$data['action_url_edit'] 	= site_url('tna/InternalSharing/edit');
		$data['action_url_detail'] 	= site_url('tna/InternalSharing/detail');
		$data['action_url_generate'] 	= site_url('tna/InternalSharing/generate_sertifikat');
		$data['action_url_submit'] 	= site_url('tna/InternalSharing/submit');
		$data['action_url_update'] 	= site_url('tna/InternalSharing/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
			'css/custom.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
			'js/custom.js?random='.date("ymdHis"),
		);


		$this->template->load('template','tna/internal_sharing/index',$data);
	}

	public function getDataAdmin(){
		$get = $this->input->get();
		echo $this->InternalSharing->getDataInternalSharing($get);
	}

	public function index2(){
		$data['breadcrumb'] 	= 'Internal Sharing karyawan';
        $data['active_menu'] 	= 'tna_internal_sharing_employee';
		$data['title'] 			= 'Daftar Internal Sharing Karyawan';
		$data['action_url_edit'] 	= site_url('tna/InternalSharing/edit');
		$data['action_url_detail'] 	= site_url('tna/InternalSharing/detail');
		$data['action_url_generate'] 	= site_url('tna/InternalSharing/generate_sertifikat');
		$data['action_url_submit'] 	= site_url('tna/InternalSharing/submit');
		$data['action_url_update'] 	= site_url('tna/InternalSharing/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
			'css/custom.css',
		); // css tambahan
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
			'js/custom.js?random='.date("ymdHis"),
		);


		$this->template->load('template','tna/internal_sharing/index_employee',$data);
	}

	public function create()
	{
        $data = array();
        $data['breadcrumb'] 	= 'Internal Sharing > Tambah';
        $data['active_menu'] 	= 'tna_internal_sharing';
		$data['title'] 			= 'Tambah Internal Sharing';
		$data['action'] 		= 'add';
		$data['action_url'] 	= site_url('tna/InternalSharing/submit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/timepicker/bootstrap-timepicker.css',
            'plugins/timepicker/bootstrap-timepicker.min.css',
        );
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'plugins/timepicker/bootstrap-timepicker.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
        );
		
		$this->template->load('template','tna/internal_sharing/form_internalSharing', $data);
	}

	public function edit($id){
		$data = array();
        $data['breadcrumb'] 	= 'Internal Sharing > Edit';
        $data['active_menu'] 	= 'tna_internal_sharing';
		$data['title'] 			= 'Edit Internal Sharing';
		$data['action'] 		= 'edit';
		$data['action_url'] 	= site_url('tna/InternalSharing/submit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/timepicker/bootstrap-timepicker.css',
            'plugins/timepicker/bootstrap-timepicker.min.css',
        );
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'plugins/timepicker/bootstrap-timepicker.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
        );
		
		$detail = $this->getDetailData($id);
		$data['detail'] = $detail;
		// $data['detail'] = $this->InternalSharing->getDataDetail($id);
		$this->template->load('template','tna/internal_sharing/form_internalSharing', $data);
	}

    public function detail($id)
	{
        $data = array();
        $data['breadcrumb'] 	= 'Internal Sharing > Detail';
		$data['title'] 			= 'Detail Internal Sharing';
		$data['action'] 		= 'detail';
		$data['active_menu'] 	= 'InternalSharing';
		$data['action_url'] 	= site_url('tna/InternalSharing/submit');
		$data['action_url_edit'] 	= site_url('tna/InternalSharing/edit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/timepicker/bootstrap-timepicker.css',
            'plugins/timepicker/bootstrap-timepicker.min.css',
        );
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'plugins/timepicker/bootstrap-timepicker.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
			'js/module/internal-sharing/DetailInternalSharing.js?random='.date("ymdHis"),
        );

        $detail = $this->getDetailData($id);
		$data['detail'] = $detail;
		
		$this->template->load('template','tna/internal_sharing/detail_internalSharing', $data);
	}

	public function generate_sertifikat(){
		$this->load->view('tna/internal_sharing/generate_sertifikat');
	}

	public function detail2($id){
		$data = array();
        $data['breadcrumb'] 	= 'Internal Sharing Karyawan > Detail';
		$data['title'] 			= 'Detail Internal Sharing Karyawan';
		$data['action'] 		= 'detail';
		$data['active_menu'] 	= 'tna_internal_sharing_employee';
		$data['action_url'] 	= site_url('tna/InternalSharing/submit');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/timepicker/bootstrap-timepicker.css',
            'plugins/timepicker/bootstrap-timepicker.min.css',
        );
		$data['js']				= array(
			'plugins/sweet-alert/sweetalert.min.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'plugins/timepicker/bootstrap-timepicker.min.js',
			'js/module/internal-sharing/InternalSharing.js?random='.date("ymdHis"),
        );
        $data['id'] = $id;
		
		$this->template->load('template','tna/internal_sharing/detail_internalSharing_karyawan', $data);
	}

	public function getDataDirektorat(){
        $data = $this->InternalSharing->get_direktorat();
        echo json_encode($data);
    }

    public function getDataPemateri($id){
    	$data = $this->InternalSharing->get_pemateri($id);
    	echo json_encode($data);
    }

    public function getNarasumber(){
		$data = $this->InternalSharing->get_narasumber();
		echo json_encode($data);
    }

    public function createOrUpdate(){
    	$waktu = explode("-", $this->input->post('tgl'));
		$tgl1 = explode("/", $waktu[0]);
		$tgl = $tgl1[2].'-'.$tgl1[0].'-'.$tgl1[1];

    	$data = array(
			'judul_materi' => $this->input->post('judul'),
			'm_organisasi_id' => $this->input->post('direktorat'),
			'm_karyawan_id' => $this->input->post('pemateri'),
			'tanggal' => $tgl,
			'jam' => $this->input->post('time'),
			'tempat' => $this->input->post('tempat'),
			'biaya' => $this->input->post('biaya'),
			'kuota' => $this->input->post('kuota'),
			'link_zoom' => $this->input->post('linkZoom')
		);
		if($this->input->post('id')){
			$data['updated_date'] = date('Y-m-d');
			$action = $this->input->post('id');
			$this->InternalSharing->updateData($data, $this->input->post('id') );
		}else{
			$data['created_date'] = date('Y-m-d');
			$action = $this->InternalSharing->insertData($data);

			// insert history
			$dataHistory = array(
				'm_tna_internal_sharing_id' => $action,
				'keterangan' => 'Buat Internal Sharing',
				'created_date' => date('Y-m-d')
			);
			$this->InternalSharing->insertDataHistory($dataHistory);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> $action
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal di simpan.",
				'data'			=> $action
			);
		}
		
		echo json_encode($return);
    }

    public function getDataMateri($id){
    	// return $this->InternalSharing->getDataMateri($id);
    	$get = $this->input->get();
		echo $this->InternalSharing->getDataMateri($get,$id);
    }

    public function createOrUpdateMateri(){
    	$data = array(
					'm_tna_internal_sharing_id' => $this->input->post('trainingId'),
					'nama_materi' => $this->input->post('judul_materi'),
				);
    	$fileDoc = '';
    	if($this->input->post('input-file')){
    		ini_set('MAX_EXECUTION_TIME', 0);
			$config['upload_path'] = './files/upload/materi';
			$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
			$config['file_name'] = $this->input->post('input-file').'-'.date('ymdHis');
			$this->upload->initialize($config);
			if ($this->upload->do_upload($this->input->post('input-file'))){
				$upload_data  = $this->upload->data();
				$file_extension = $upload_data['file_ext'];
				$fileDoc = $this->input->post('input-file').'-'.date('ymdHis').$file_extension;
			}
    	}

    	if($this->input->post('id')){
			$data['updated_date'] = date('Y-m-d');
			if($fileDoc){
				$data['file_materi'] = $fileDoc;
			}
			$action = $this->InternalSharing->updateDataMateri($data, $this->input->post('id'));
		}else{
			$data['created_date'] = date('Y-m-d');
			$data['file_materi'] = $fileDoc;
			$action = $this->InternalSharing->insertDataMateri($data);
		}

		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> $action
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> 'Data gagal di simpan.',
				'data'			=> array()
			);
		}
		echo json_encode($return);	
    }

    public function getCountDocument(){
		echo $this->InternalSharing->getCountDocument();
    }

    // public function getDataDokumentasi($id){
    // 	echo $this->InternalSharing->getDataDokumentasi();
    // }
   
	private function getDetailData($id){
		return $this->InternalSharing->getDataDetail($id);
		// echo json_encode($data);
	}

	
}

/* End of file InternalSharing.php */
/* Location: ./application/controllers/InternalSharing.php */