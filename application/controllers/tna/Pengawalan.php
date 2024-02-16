<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengawalan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->model(array('lokasi_akun_model','UsulanTnaModel','TnaModel','PengawalanModel'));
		//Do your magic here
    
	}

	public function index($active_tab="all"){
        $data['breadcrumb'] 	= 'Pengawalan > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'tna_pengawalan';
		$data['title'] 			= 'Daftar Pengawalan TNA / NON TNA';
        $data['active_tab'] 	= $active_tab;
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
			'plugins/daterangepicker/daterangepicker-bs3.css'
		); // css tambahan
		$data['js']				= array(
			'plugins/daterangepicker/moment.js',
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/Pengawalan/Pengawalan.js?random='.date("ymdHis"),
			'plugins/daterangepicker/daterangepicker.js',
		);

        if($active_tab=='verifikasi'){
            $pageindex = 'tna/pengawalan/index_admhcpd';
            //$pageindex = 'tna/pengawalan/index_verifikasi';
        }
        else if($active_tab=='selesai'){
            $pageindex = 'tna/pengawalan/index_selesai';
        }else{
            $pageindex = 'tna/pengawalan/index';
        }

        $data['active_tab'] = $active_tab;
		$this->template->load('template',$pageindex,$data);
	}

	public function getData(){
		$get = $this->input->get();
		echo $this->PengawalanModel->getDataPengawalan($get);
	}

	public function getDataDashboard(){
		echo json_encode($this->PengawalanModel->getDataDashboard());
	}

	public function verifikasi(){
		$urutan = 1;
		if($this->input->post('verifikasi') == 'ya'){
			$urutan = $this->input->post('urutan') + 1;
		}
		
		$thapanId = $this->TnaModel->get_tahapan_id($urutan);
		$data = array(
			'tahapan_id' => $thapanId->id
		);
		$action = $this->TnaModel->updateData($data, $this->input->post('id'));
		if($action){
			$return = array(
				'success'		=> true,
				'status_code'	=> 200,
				'msg'			=> "Data berhasil diubah.",
				'data'			=> $action
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Data gagal diubah.",
				'data'			=> $action
			);
		}
		
		echo json_encode($return);
	}

	public function detail($id, $active_tab="riwayat_verifikasi"){
		// echo $active_tab;
		$data['breadcrumb'] 	= 'Pengawalan > Detail > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'tna_pengawalan';
		$data['title'] 			= 'Detail Pengawalan TNA / NON TNA';
        $data['active_tab'] 	= $active_tab;
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
			'plugins/daterangepicker/daterangepicker-bs3.css'
		); // css tambahan
		$data['js']				= array(
			'plugins/daterangepicker/moment.js',
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/Pengawalan/Pengawalan.js?random='.date("ymdHis"),
			'plugins/daterangepicker/daterangepicker.js',
		);


		$pageindex = 'tna/pengawalan/detail';


        $data['active_tab'] = $active_tab;
		$this->template->load('template',$pageindex,$data);
	}

    public function manager($active_tab="all"){
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

        if($active_tab=='proses-verifikasi'){
            $pageindex = 'tna/usulan/index_verifikasi';
        }else if($active_tab=='ditolak'){
            $pageindex = 'tna/usulan/index_ditolak';
        }else if($active_tab=='disetujui'){
            $pageindex = 'tna/usulan/index_disetujui';
        }else{
            $pageindex = 'tna/usulan/index';
        }

		$this->template->load('template',$pageindex,$data);
	}


	public function create(){
        $data = array();
        $data['breadcrumb'] 	= 'Usulan > Tambah';
        $data['title'] 			= 'Tambah Usulan';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'usulan_tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
        );
		$data['js']				= array(	// js tambahan
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
            
        );
		
		$this->template->load('template','tna/usulan/form_usulan', $data);
	}

	public function edit(){
        $data = array();
        $data['breadcrumb'] 	= 'Usulan > Edit';
        $data['title'] 			= 'Edit Usulan';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'usulan_tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
        );
		$data['js']				= array(	// js tambahan
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
            
        );
		
		$this->template->load('template','tna/usulan/form_edit_usulan', $data);
	}


	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */