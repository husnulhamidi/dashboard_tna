<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporting extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		// $this->load->helper('custom_helper');
		$this->load->helper('custom_helper');
		$this->load->model(array('lokasi_akun_model','UsulanTnaModel','TnaModel'));
		$this->load->model('Reference/LembagaModel','lembagaModel');
		$this->load->model('Justifikasi_model', 'justifikasi');
		$this->load->model('ReportingModel','reportingModel');
	}

    public function index(){
        $data['breadcrumb'] 	= 'List Reporting';
        $data['active_menu'] 	= 'reporting';
		$data['title'] 			= 'Reporting TNA';
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
			'js/module/reporting/reporting.js?random='.date("ymdHis"),
			'js/custom.js='.date("ymdHis"),
		);


		$this->template->load('template','tna/reporting/index',$data);
	}

    public function getData(){
        $get = $this->input->get();
		echo $this->reportingModel->getData($get);
    }

	public function create(){
		$data['breadcrumb'] 	= 'Create Reporting';
        $data['active_menu'] 	= 'reporting';
		$data['title'] 			= 'Tambah Reporting TNA';
		$data['subdit'] 		= $this->lokasi_akun_model->viewall_subdit()->result();
		$data['jenis_pelatihan'] = $this->UsulanTnaModel->get_jenis_pelatihan();
		$data['jenis_development'] = $this->UsulanTnaModel->get_jenis_development();
		$data['metoda'] = $this->UsulanTnaModel->get_metoda_pelatihan();
		$data['kompetensi'] = $this->UsulanTnaModel->get_kompetensi();
		$data['tna'] = $this->UsulanTnaModel->get_training();
		$data['tahapan_id'] = $this->TnaModel->get_tahapan_id(1);
		$data['lembaga'] = $this->TnaModel->get_lembaga();
		$data['direktorat'] = $this->TnaModel->get_direktorat();
		$data['css'] 			= array(
            'plugins/select2/select2.min.css',
            'plugins/sweet-alert/sweetalert.css',
			'plugins/daterangepicker/daterangepicker-bs3.css'
        );
		$data['js']				= array(
			'plugins/daterangepicker/moment.js',
			'plugins/daterangepicker/daterangepicker.js',
			'js/jquery.validate.js',
            'plugins/select2/select2.full.min.js',
			'plugins/datepicker/bootstrap-datepicker.js',
			'js/jquery.validate.js',
			'plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js',
			'js/module/reporting/reporting.js?random='.date("ymdHis"),
			'js/custom.js='.date("ymdHis"),
			'plugins/sweet-alert/sweetalert.min.js', 
		);


		$this->template->load('template','tna/reporting/form_reporting',$data);
	}
	
	public function submit(){
		$post = $this->input->post();
		$pecahTgl = explode('-', $this->input->post('waktu_pelaksanaan'));
		$tmptgl1 = trim($pecahTgl[0]);
		$tmptgl2 = trim($pecahTgl[1]);
		$tgl = explode('/', $tmptgl1);
		$tgl2 = explode('/', $tmptgl2);

		$tanggal_mulai = $tgl[2].'-'.$tgl[0].'-'.$tgl[1];
		$tanggal_selesai = $tgl2[2].'-'.$tgl2[0].'-'.$tgl2[1];
		$lama_kegiatan = strtotime($tanggal_selesai) - strtotime($tanggal_mulai);

		
		$tgl_mulai ='';
		$tgl_selesai ='';
		if($this->input->post('jenis_development') !== 'Pelatihan'){
			$pecahTglSertifikat = explode('-', $this->input->post('waktu_sertifikasi'));
			$tmptglMulai = trim($pecahTglSertifikat[0]);
			$tmptglSelesai = trim($pecahTglSertifikat[1]);
			$tmp_tgl_mulai = explode('/', $tmptglMulai);
			$tmp_tgl_selesai = explode('/', $tmptglSelesai);


			$tgl_mulai = $tmp_tgl_mulai[2].'-'.$tmp_tgl_mulai[0].'-'.$tmp_tgl_mulai[1];
			$tgl_selesai = $tmp_tgl_selesai[2].'-'.$tmp_tgl_selesai[0].'-'.$tmp_tgl_selesai[1];	
		}
		
		$direktorat =  explode('|', $this->input->post('direktorat'));
		$subdit =  explode('|', $this->input->post('subdit'));
		$cekDataKaryawan = $this->reportingModel->cekDataKaryawan($this->input->post('karyawan'));
		// echo json_encode($cekDataKaryawan->nama);
		$id = $this->reportingModel->get_max_id();
		$data = array(
			'id'			=> $id+1,
			'tahun'				=>$tgl[2],
			'nama_kegiatan' => $this->input->post('nama_kegiatan'),
			'nama_penyelenggara' => $this->input->post('penyelenggara'),
			'metoda' => $this->input->post('metoda'),
			'kategori_pelatihan' => $this->input->post('jenis_pelatihan'),
			'kompetensi' => $this->input->post('kompetensi'),
			'tanggal_mulai' => $tanggal_mulai,
			'tanggal_selesai' => $tanggal_selesai,
			'lama_kegiatan' => ($lama_kegiatan / 60 / 60 / 24)+1,
			'bulan' => $this->MonthName($tgl[0]),
			'kuartal' => $this->cekKuartal($tgl[0]),
			'nik' => $cekDataKaryawan->nik_tg,
			'nama_karyawan' => $cekDataKaryawan->nama,
			'posisi' => $this->input->post('jabatan'),
			'direktorat' => $direktorat[1],
			'subdit' => $subdit[1],
			'jumlah_nik' => strlen($cekDataKaryawan->nik_tg),
			'bp' => $this->input->post('bp'),
			'status_fte' => $this->input->post('status_fte'),
			'jenis_pelatihan' =>	$this->input->post('jenis_development'),
			'nomor_sertifikat' => $this->input->post('nomor_sertifikasi'),
			'jenis_sertifikat' => $this->input->post('jenis_sertifikasi'),
			'tanggal_awal_berlaku_sertifikat' => $tgl_mulai,
			'tanggal_akhir_berlaku_sertifikat' => $tgl_selesai,
			'no_ht' => $this->input->post('no_ht'),
			'no_spb' => $this->input->post('no_spb'),
			'biaya_kegiatan' => str_replace(".", "", $this->input->post('estimasi_biaya')),
			'currency_key' => $this->input->post('curren_key'),
			'keterangan' => $this->input->post('keterangan'),
		);

		$save = $this->reportingModel->insertData($data);
		if($save){
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


		// json_encode($post);
		echo json_encode($return);
	}

	public function generate(){
		ini_set('memory_limit', -1);
		ini_set('MAX_EXECUTION_TIME', 0);
		$cekDataPengawalan = $this->reportingModel->cekDataPengawalan();
		// loop
		$count = 0;
		foreach($cekDataPengawalan as $key){
			$id = $this->reportingModel->get_max_id();
			// // check data duplicate
			$cekDataisExist = $this->reportingModel->cekDataisExist($key->nama_kegiatan, $key->waktu_pelaksanaan_mulai, $key->waktu_pelaksanaan_selesai,  $key->nik);
			if ($cekDataisExist == 0) {
				$count = $count + 1;
				$data = array(
					'id'			=> $id+1,
					'tahun'				=> $key->tahun_mulai,
					'nama_kegiatan' => $key->nama_kegiatan,
					'nama_penyelenggara' => $key->nama_penyelenggara,
					'metoda' => $key->metoda_pembelajaran,
					'kategori_pelatihan' => $key->pelatihan,
					'kompetensi' => $key->kompetensi,
					'tanggal_mulai' => $key->waktu_pelaksanaan_mulai,
					'tanggal_selesai' => $key->waktu_pelaksanaan_selesai,
					'lama_kegiatan' => $key->lama_kegiatan,
					'bulan' => $key->bulan,
					'kuartal' => $this->cekKuartal($key->kuartal),
					'nik' => $key->nik,
					'nama_karyawan' => $key->nama_karyawan,
					'posisi' => $key->posisi,
					'direktorat' => $key->direktorat,
					'subdit' => $key->subdit,
					'jumlah_nik' => $key->jumlah_nik,
					// 'bp' => $key->bp,
					'status_fte' => $key->status_karyawan,
					'jenis_pelatihan' =>	$key->jenis_development,
					'nomor_sertifikat' => $key->no_sertifikat,
					// 'jenis_sertifikat' => $key->jenis_sertifikat,
					'tanggal_awal_berlaku_sertifikat' => $key->tanggal_awal_sertifikat,
					'tanggal_akhir_berlaku_sertifikat' => $key->tanggal_akhir_sertifikat,
					'no_ht' => $key->no_ht,
					'no_spb' => $key->no_spb,
					'biaya_kegiatan' => $key->biaya_kegiatan,
					'currency_key' => 'IDR',
					// 'keterangan' => $cekDataPengawalan->nama_kegiatan,
				);
				$save = $this->reportingModel->insertData($data);	
			}
		}
		
		if($count > 0){
			$return = array(
				'success'		=> true,
				'status_code'	=> 201,
				'msg'			=> "Data yang ter generate adalah " . $count . " Data",
				'data'			=> array()
			);
		}else{
			$return = array(
				'success'		=> false,
				'status_code'	=> 500,
				'msg'			=> "Tidak ada data yang di generate !",
				'data'			=> array()
			);
		}
		
		
		echo json_encode($return);
	}

	private function cekKuartal($bulan){
		if ($bulan >= 1 && $bulan <= 3) {
			$kuartal = 'Q1';
		} elseif ($bulan >= 4 && $bulan <= 6) {
			$kuartal = 'Q2';
		} elseif ($bulan >= 7 && $bulan <= 9) {
			$kuartal = 'Q3';
		} else {
			$kuartal = 'Q4';
		}

		return $kuartal;
	}

	private function MonthName($month){
        // $lowercaseMonthName = strtolower($monthName);
        switch($month) {
            case '01':
                return 'Januari';
            case '02':
                return 'Februari';
            case '03':
                return 'Maret';
            case '04':
                return 'April';
            case '05':
                return 'Mei';
            case '06':
                return 'Juni';
            case '07':
                return 'Juli';
            case '08':
                return 'Agustus';
            case '09':
                return 'September';
            case '10':
                return 'Oktober';
            case '11':
                return 'November';
            default:
                return 'Desember';
        }
    }

}