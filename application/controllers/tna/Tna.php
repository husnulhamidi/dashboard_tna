<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		//Do your magic here
    
	}

	public function index()
	{
        $data['breadcrumb'] 	= 'List';
        $data['active_menu'] 	= 'tna';
		$data['title'] 			= 'Daftar TNA';
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


		$this->template->load('template','tna/tna/index',$data);
	}



	public function create()
	{
        $data = array();
        $data['breadcrumb'] 	= 'Tambah';
        $data['title'] 			= 'Tambah TNA';
		$data['action'] 		= 'add';
		$data['active_menu'] 	= 'tna';
		$data['action_url'] 	= site_url('tna/anggaran/submit');
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
        );
		$data['js']				= array(	// js tambahan
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
            
        );
		
		$this->template->load('template','tna/tna/form_create_tna', $data);
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


	public function simpan_bank(){
		$data = array(
			'nama_bank' => $this->input->post('name_bank'),
			'alamat1' => $this->input->post('cabang_bank'),
			'alamat2' => $this->input->post('address_bank'),
			'jenis_rekening' => $this->input->post('jenis_rek'),
			'no_rekening' => $this->input->post('norek'),
		);

		if($this->Bank_model->insert_record_bank($data)){

            $this->session->set_flashdata('message', 'Data Berhasil Di Tambahkan');
            $this->session->set_flashdata('status', 'success');
                
        }else{
            $this->session->set_flashdata('message', 'Data Gagal Di Tambahkan');
            $this->session->set_flashdata('status', 'danger');
        }
        redirect('bank/data_bank');
	}

	public function ubah($id_bank=null)
	{
		if($id_bank==null || $id_bank=="" ){
			redirect('bank/data_bank');
		}
		

        $data = array();
        $data['title'] 			= 'Ubah Bank';
		$data['action'] 		= 'edit';
		$data['active_menu'] 	= 'edit_bank';
		$data['action_url'] 	= site_url('bank/save_update/').$id_bank;
		//$data['list_divisi'] 	= $this->Devisi_model->get_data_devisi();
		$data['css'] 			= array();
		$data['js']				= array(	// js tambahan
			'js/jquery.validate.js',
        );
       

		$decrypt_id = decrypt_url($id_bank);

		$bank = $this->Bank_model->get_data_bank_byid($decrypt_id);

		$data['nama_bank'] = $bank->nama_bank;
		$data['cabang'] = $bank->alamat1;
		$data['alamat'] = $bank->alamat2;
		$data['jenis_rekening'] = $bank->jenis_rekening;
		$data['no_rekening'] = $bank->no_rekening;
		

		$this->template->load('template','bank/ubah_bank', $data);
	}

	public function update_bank($id_bank){
	
		if($id_bank==null || $id_bank=="" ){
			redirect('bank/data_bank');
		}

		$decrypt_id = decrypt_url($id_bank);


		
		$data = array(
			'nama_bank' => $this->input->post('name_bank'),
			'alamat1' => $this->input->post('cabang_bank'),
			'alamat2' => $this->input->post('address_bank'),
			'jenis_rekening' => $this->input->post('jenis_rek'),
			'no_rekening' => $this->input->post('norek'),
		);

		if($this->Bank_model->update_data_bank($data, $decrypt_id)){

			$this->session->set_flashdata('message', 'Data Berhasil Di Perbaharui');
            $this->session->set_flashdata('status', 'success');

                
        }else{
            $this->session->set_flashdata('message', 'Data Gagal Di Perbaharui');
            $this->session->set_flashdata('status', 'danger');
        }
        redirect('bank/data_bank');

	}

	public function delete_bank(){
		$decrypt_id = decrypt_url($this->input->post('data'));

		if ($this->Bank_model->delete_bank_byid($decrypt_id) === FALSE){
			$message="Delete invoice gagal!";
			$status=true;
			$rc="0005";
		}else{
			$message="Delete invoice Berhasil";
			$status=false;
			$rc="0000";
		}


		$this->session->set_flashdata('message', $message);
		$this->session->set_flashdata('status', $status);

		$data['rc'] = $rc;
		$data['message'] = $message;

		echo json_encode($data);
	}
}

/* End of file bank.php */
/* Location: ./application/controllers/bank.php */