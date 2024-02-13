<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// if(!$this->session->userdata('user')){
		// 	redirect('auth/login');
		// }
		// if ($this->ion_auth->logged_in() != true) {
        //     Redirect(baseapplicationhcm, false);
        // }

		//$this->sess = unserialize($this->session->userdata('tna'));
		//$this->sessi = $this->session->userdata('session');
		
		$this->load->model(array(
            'lokasi_akun_model',
			'UsulanTnaModel'
            
        ));
    
	}

	public function index($active_tab="all")
	{
        $data['breadcrumb'] 	= 'Usulan > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'Usulan TNA';
		$data['title'] 			= 'Daftar Usulan';
        $data['active_tab'] 	= $active_tab;
		$data['action_url_submit'] 	= site_url('tna/anggaran/submit');
		$data['action_url_update'] 	= site_url('tna/anggaran/update');
		$data['sess'] 			= $this->session->userdata('session');
		$data['subdit'] = $this->lokasi_akun_model->viewall_subdit()->result();
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
			'js/module/usulan/listTNA.js?random='.date("ymdHis"),
			'js/module/usulan/UsulanTNA.js?random='.date("ymdHis"),
			'js/module/usulan/verifikasi.js?random='.date("ymdHis"),
		);

        if($active_tab=='proses-verifikasi'){
            $pageindex = 'tna/usulan/index_proses_verifikasi';
        }
        else if($active_tab=='verifikasi'){
			if(strtolower($this->sess['role']['name'])=='Admin Unit' OR strtolower($this->sess['role']['name'])=='manager unit lini' OR strtolower($this->sess['role']['name'])=='manager unit'){
				$pageindex = 'tna/usulan/index_verifikasi';
			}else{
				//$pageindex = 'tna/usulan/index_verifikasi_admhcpd';
				$pageindex = 'tna/usulan/index_verifikasi';
			}
            
        }
        else if($active_tab=='ditolak'){
            $pageindex = 'tna/usulan/index_ditolak';
        }else if($active_tab=='disetujui'){
            $pageindex = 'tna/usulan/index_disetujui';
        }else{
            $pageindex = 'tna/usulan/index';
        }

		$this->template->load('template',$pageindex,$data);
	}

    public function manager($active_tab="all")
	{
        $data['breadcrumb'] 	= 'Usulan > '.ucwords(str_replace("-"," ",$active_tab));
        $data['active_menu'] 	= 'Usulan TNA';
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

	public function list_data()
	{
		$get = $this->input->get();
		echo $this->UsulanTnaModel->get_data($get);
	}


	public function create()
	{
        $data = array();
        $data['breadcrumb'] 	= 'Usulan > Tambah';
        $data['title'] 			= 'Tambah Usulan';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'Usulan TNA';
		$data['submit_url'] 	= site_url('tna/usulan/submit');
		$data['sess'] 			= $this->session->userdata('session');
		$data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['kompetensi'] = $this->UsulanTnaModel->get_kompetensi();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		
		//echo json_encode($data);die;
		$data['css'] 			= array(
			'plugins/sweet-alert/sweetalert.css',
			'plugins/select2/select2.min.css',
			'plugins/datepicker/datepicker3.css',
        );
		$data['js']				= array(	// js tambahan
			'plugins/sweet-alert/sweetalert.min.js',
			'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/usulan/UsulanTNA.js?random='.date("ymdHis"),
            
        );
		
		$this->template->load('template','tna/usulan/form_usulan', $data);
	}

	public function edit()
	{
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

	
	public function submit(){

		try {
			$data = array(
				'm_organisasi_id'	=> $this->input->post('subdit'),
				'm_karyawan_id'	=> $this->input->post('karyawan'),
				'jenis_pelatihan' => $this->input->post('jenis_pelatihan'),
				'r_tna_kompetensi_id' => $this->input->post('kompetensi'),
				'jenis_development' => $this->input->post('jenis_development'),

				'r_tna_traning_id' => $this->input->post('tna'),
				'nama_kegiatan' => $this->input->post('nama_kegiatan'),
				'justifikasi_pengajuan' => $this->input->post('justifikasi'),

				'metoda_pembelajaran' => $this->input->post('metoda'),
				'estimasi_biaya' => preg_replace("/[,\s]/", '', $this->input->post('estimasi_biaya')),
				'nama_penyelenggara' => $this->input->post('penyelenggara'),
				'waktu_pelaksanaan' => $this->input->post('waktu_pelaksanaan'),
				'status_karyawan' => $this->input->post('status_fte')
				
			);
			$usulan_id = decrypt_url($this->input->post('usulan_id'));
			$check = $this->UsulanTnaModel->get_data_byid($usulan_id);
			if($check['success']===TRUE){
				$data['updated_by'] = $this->ion_auth->user()->row()->id;
				$data['updated_date'] = date('Y-m-d');
				$action = $this->UsulanTnaModel->update($data,$usulan_id);
			}else{
				$data['tahapan_id'] =170;
				$data['created_by'] = $this->ion_auth->user()->row()->id;
				$data['created_date'] = date('Y-m-d');
				$action = $this->UsulanTnaModel->insert($data);
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
		} catch (\Throwable $th) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
		
		
	}

	public function submit_usulkan(){
		try {
			$usulan_id = decrypt_url($this->input->post('usulan_id'));
			$check = $this->UsulanTnaModel->get_data_byid($usulan_id);
			$tahapan = $this->UsulanTnaModel->get_tahapan_id(2,"Usulan TNA");
			$data =array(
				"tahapan_id"=>@$tahapan['r_tahapan_usulan_id']
			);
			$update = $this->UsulanTnaModel->update($data,$usulan_id);
			if($update){
				$h_usualan_id = $this->UsulanTnaModel->insert_h_usulan($tahapan['r_jenis_usulan_id'],$this->sessi['biodata_detail']->id);
				$data = array(
					"tgl" =>date("Y-m-d H:i:s"),
					"keterangan" =>"Usulkan TNA",
					"h_usulan_id" =>$h_usualan_id,
					"r_tahapan_usulan_id" =>@$tahapan['r_tahapan_usulan_id'],
					"m_karyawan_id" =>$this->sessi['biodata_detail']->id
				);
				$this->UsulanTnaModel->insert_h_riwayat_usulan($data);

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

		} catch (\Throwable $th) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
	}

	public function submit_verifikasi(){
		try {
			$usulan_id = decrypt_url($this->input->post('verifikasi_usulan_id'));
			$check = $this->UsulanTnaModel->get_data_byid($usulan_id);
			$urutan = $check['data']->urutan+1;
			$tahapan = $this->UsulanTnaModel->get_tahapan_id($urutan,"Usulan TNA");
			//echo json_encode($tahapan);die;
			$data =array(
				"tahapan_id"=>@$tahapan['r_tahapan_usulan_id']
			);
			$update = $this->UsulanTnaModel->update($data,$usulan_id);
			if($update){
				$h_usualan_id = $this->UsulanTnaModel->insert_h_usulan($tahapan['r_jenis_usulan_id'],$this->sessi['biodata_detail']->id);
				$data = array(
					"tgl" =>date("Y-m-d H:i:s"),
					"keterangan" =>$this->input->post('keterangan'),
					"h_usulan_id" =>$h_usualan_id,
					"r_tahapan_usulan_id" =>@$tahapan['r_tahapan_usulan_id'],
					"m_karyawan_id" =>$this->sessi['biodata_detail']->id
				);
				$this->UsulanTnaModel->insert_h_riwayat_usulan($data);

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

		} catch (\Throwable $th) {
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> $th->getMessage(),
				'data'			=> array()
			);
		
			echo json_encode($return);
		}
	}


	
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */