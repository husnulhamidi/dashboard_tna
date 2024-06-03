<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require_once (APPPATH. 'vendor/autoload.php');
class InternalSharing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->helper('custom_helper');
		$this->load->model('InternalSharing_Model', 'InternalSharing');
		$this->load->model('Setting_ttd_model', 'settingTTD');
		$this->load->model('PengawalanModel', 'PengawalanModel');
		$this->load->model('UsulanTnaModel', 'UsulanTnaModel');
		//Do your magic here
    
	}

	public function index(){
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

		// echo $this->session->userdata('username');
		
		$this->template->load('template','tna/internal_sharing/index',$data);
	}

	public function getDataAdmin(){
		$userData = $this->session->userdata('user');
		$karyawanId = $userData['m_karyawan_id'];
		$karyawanId = $karyawanId;
		$get = $this->input->get();
		echo $this->InternalSharing->getDataInternalSharing($get, $karyawanId);
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

	public function create(){
        $data = array();
        $data['breadcrumb'] 	= 'Internal Sharing > Tambah';
        $data['active_menu'] 	= 'tna_internal_sharing';
		$data['title'] 			= 'Tambah Internal Sharing';
		$data['action'] 		= 'add';
		$data['action_url'] 	= site_url('tna/InternalSharing/submit');
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
            'plugins/select2/select2.min.css',
            'plugins/datepicker/datepicker3.css',
            'plugins/timepicker/bootstrap-timepicker.css',
            'plugins/timepicker/bootstrap-timepicker.min.css',
			'plugins/daterangepicker/daterangepicker-bs3.css'
        );
		$data['js']				= array(
			'plugins/daterangepicker/moment.js',
			'plugins/daterangepicker/daterangepicker.js',
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
		$data['action_url_generate'] 	= site_url('tna/InternalSharing/generate_sertifikat');
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

	public function generate_sertifikat($id,$ket){
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
		    'format' => 'A4-L',
		    'orientation' => 'L'
		]);

		$data['detail'] = $this->getDetailData($id);
		$data['setting'] = $this->settingTTD->getSetting();
		if($ket == 'all'){
			$data['pemateri'] = $this->InternalSharing->getPemateri($id);
			$data['peserta'] = $this->InternalSharing->getPeserta($id);

		}
		if($ket == 'peserta'){
			$data['pemateri'] = [];
			$data['peserta'] = $this->InternalSharing->getPeserta($id);

		}

		if($ket == 'pemateri'){
			$data['pemateri'] = $this->InternalSharing->getPemateri($id);
			$data['peserta'] = [];

		}
		// echo $data['setting'];
		$data = $this->load->view('tna/internal_sharing/generate_sertifikat', ['data' => $data], TRUE);

		$mpdf->WriteHTML($data);
		$mpdf->Output();
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
		$userData = $this->session->userdata('user');
		$karyawanId = $userData['m_karyawan_id'];
		$karyawanId = $karyawanId;
		$data['detail'] = $this->InternalSharing->getDataDetailEmployee($id,$karyawanId);
		
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
		// echo json_encode($this->input->post());

    	$pecahTgl = explode('-', $this->input->post('tgl'));
		$tmptgl1 = trim($pecahTgl[0]);
		$tmptgl2 = trim($pecahTgl[1]);
		$tgl = explode('/', $tmptgl1);
		$tgl2 = explode('/', $tmptgl2);

		// if($this->input->post('upload_file_materi')){
		// 	$fileName = $this->input->post('upload_file_materi');
		// 	$pathName = './files/upload/internal-sharing/materi';
		// 	// $pathName = './files/upload/tna/materi';
		// 	$allowed_types = '*';
		// 	$upload_file = upload_file($fileName, $pathName, $allowed_types, $this);
		// 	if($upload_file['success'] == false){
		// 	    // die(json_encode($upload_file)); 
		// 		$upload_file = '';
		// 	}
		// }

		// json_encode($upload_file);

    	$data = array(
			'judul_materi' => $this->input->post('judul'),
			'm_organisasi_id' => $this->input->post('direktorat'),
			'm_karyawan_id' => $this->input->post('pemateri'),
			// 'tanggal' => $tgl,
			'tanggal' => $tgl[2].'-'.$tgl[0].'-'.$tgl[1],
			'jam' => $this->input->post('time'),
			'tempat' => $this->input->post('tempat'),
			'biaya' => $this->input->post('biaya'),
			'kuota' => $this->input->post('kuota'),
			'link_zoom' => $this->input->post('linkZoom'),
			'no_urut' => $this->input->post('no_urut'),
			'r_tna_job_family_id' => $this->input->post('jobFamily'),
			'r_tna_job_function_id' => $this->input->post('jobFunc'),
			'r_tna_job_role_id' => $this->input->post('jobRole'),
			'r_tna_kompetensi_id' => $this->input->post('kompetensi'),
			'jenis_pelatihan' => $this->input->post('jenis_pelatihan'),
			'jenis_development'=> $this->input->post('jenis_development'),
			'metod_pembelajaran'=> $this->input->post('metoda'),
			'r_tna_training_id' => $this->input->post('tna'),
			'tanggal_mulai' => $tgl[2].'-'.$tgl[0].'-'.$tgl[1],
			'tanggal_selesai'=> $tgl2[2].'-'.$tgl2[0].'-'.$tgl2[1],
			// 'materi'			=> $upload_file['data'],
		);
		if($this->input->post('id')){
			$data['updated_date'] = date('Y-m-d');
			$action = $this->input->post('id');
			// if($upload_file){
			// 	$data['materi'] = $upload_file['data'];
			// }
			$this->InternalSharing->updateData($data, $this->input->post('id') );
		}else{
			$data['created_date'] = date('Y-m-d');
			// $data['materi'] = $upload_file['data'];
			$action = $this->InternalSharing->insertData($data);

			// insert history
			$this->insertHistory($action,'Buat Internal Sharing');
			
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

    public function getCountDocument($id){
		echo $this->InternalSharing->getCountDocument($id);
    }

    public function getDataDokumentasi($id){
    	echo json_encode($this->InternalSharing->getDataDokumentasi($id));
    }

    public function createOrUpdateDokumentasi(){
    	$data = array(
    		'm_tna_internal_sharing_id' => $this->input->post('trainingId')
    	);
    	$fileDoc = '';
    	if($this->input->post('input-file')){
    		ini_set('MAX_EXECUTION_TIME', 0);
			$config['upload_path'] = './files/upload/dokumentasi';
			$config['allowed_types'] = 'png|jpg|jpeg';
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
				$data['file_dokumentasi'] = $fileDoc;
			}
			$action = $this->InternalSharing->updateDataDokumentasi($data, $this->input->post('id'));
		}else{
			$data['created_date'] = date('Y-m-d');
			$data['file_dokumentasi'] = $fileDoc;
			$action = $this->InternalSharing->insertDataDokumentasi($data);
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

    public function getPeserta($id){
    	$get = $this->input->get();
		echo $this->InternalSharing->getDataPeserta($get,$id);
    }
   
   	public function createOrUpdatePeserta(){
   		$data = array(
    		'm_tna_internal_sharing_id' => $this->input->post('trainingId'),
    		'm_karyawan_id' => $this->input->post('peserta')
    	);
    	if($this->input->post('id')){
			$data['updated_date'] = date('Y-m-d');
			$action = $this->InternalSharing->updateDataPeserta($data, $this->input->post('id'));
		}else{
			$data['created_date'] = date('Y-m-d');
			$action = $this->InternalSharing->insertDataPeserta($data);
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

   	public function deleteData($ket){
   		if($ket == 'peserta'){
   			$data = $this->InternalSharing->delete($this->input->post('id'),'m_tna_internal_sharing_peserta');
   		}
   		if($ket == 'dokumentasi'){
   			$data = $this->InternalSharing->delete($this->input->post('id'),'m_tna_internal_sharing_dokumentasi');
   		}
   		if($ket == 'materi'){
   			$data = $this->InternalSharing->delete($this->input->post('id'),'m_tna_internal_sharing_materi');
   		}
   		if($ket == 'all'){
   			$data = $this->InternalSharing->deleteData($this->input->post('id'));
   		}

   		echo json_encode($data);
   	}

	private function getDetailData($id){
		return $this->InternalSharing->getDataDetail($id);
	}

	public function confirm(){
		$userData = $this->session->userdata('user');
		$karyawanId = $userData['m_karyawan_id'];
		$karyawanId = $karyawanId;
		if($this->input->post('ket') == 'batal'){
			$data = $this->InternalSharing->batal($this->input->post('idSharing'),$karyawanId);
			$this->insertHistory($this->input->post('idSharing'),'Batal internal sharing');
		}
		if($this->input->post('ket') == 'daftar'){
			$saveData = array(
				'm_tna_internal_sharing_id' => $this->input->post('idSharing'),
				'm_karyawan_id' => $karyawanId,
				'created_date' => date('Y-m-d')
			);
			$save = $this->InternalSharing->daftar($saveData);
			$data = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data berhasil di simpan.",
				'data'			=> $save
			);
			$this->insertHistory($this->input->post('idSharing'),'Daftar internal sharing');
		}

		echo json_encode($data);
	}

	public function complate(){
		// echo json_encode($this->input->post());
		$dataInternalSharing = array(
			'is_complete' => 1
		);
		$action = $this->PengawalanModel->updateInternalSharing($dataInternalSharing, $this->input->post('internalSharingId') );
		$this->insertHistory($this->input->post('internalSharingId'),'Internal Sharing complate');
		$return = array(
			'success'		=> true,
			'status_code'	=> 201,
			'msg'			=> "Data berhasil diubah.",
			'data'			=> array()
		);
		echo json_encode($return);
	}

	private function insertHistory($idInternahSahring, $ket){
		$dataHistory = array(
			'm_tna_internal_sharing_id' => $idInternahSahring,
			'keterangan' => $ket,
			'created_date' => date('Y-m-d')
		);
		$this->InternalSharing->insertDataHistory($dataHistory);
	}

	
}

/* End of file InternalSharing.php */
/* Location: ./application/controllers/InternalSharing.php */