<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    private $rules;
    private $message;

    function __construct(){
    	parent::__construct();
    	// if($this->ion_auth->logged_in() != true){
    	// 	redirect('auth/logout');
    	// }

        $this->load->library('upload');
        $this->load->library('excel2');
        //$this->load->library(array('navigation'));
        $this->load->model(array('karyawan_model'));

  	}

	public function index()
	{
        $this->navigation->setSubMenuActive('karyawan_aktif');
		$data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_aktif');
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        $data['title'] = ' Karyawan Aktif';
        $data['icon'] = '<i class="fa fa-users"></i>';
        $data['search'] = '0';               
        $data['karyawan'] = $this->karyawan_model->viewall()->result();

        $data['css'] = array('css/auto-complete.css','plugins/iCheck/all.css');
		$data['js']= array('js/auto-complete.js','plugins/iCheck/icheck.min.js');
        $this->template->load('template','karyawan/index', $data);
	}

    public function nonaktif()
	{
        $this->navigation->setSubMenuActive('karyawan_nonaktif');
		$data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_nonaktif');
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        $data['title'] = ' Karyawan Non Aktif';
        $data['icon'] = '<i class="fa fa-users"></i>';
        $data['search'] = '0';               
        $data['karyawan'] = $this->karyawan_model->viewall()->result();

        $data['css'] = array('css/auto-complete.css','plugins/iCheck/all.css');
		$data['js']= array('js/auto-complete.js','plugins/iCheck/icheck.min.js');
        $this->template->load('template','karyawan/nonaktif', $data);
	}

    public function ajax_karyawan_nonaktif_list() {
        $draw = $this->input->post("draw");
        $start = $this->input->post("start");
        $length = $this->input->post("length");
        $shortColumn = $this->input->post('column['.$this->input->post('order[0][column]').']');
        $sortColumnDir = $this->input->post("order[0][dir]");

        // //Find search
        $nama = $this->input->post("columns[0][search][value]");
        if ($length != null) {
            $pageSize=$length;
        }else{
            $pageSize=0;
        }
        if ($start != null) {
            $skip=$start;
        }else{
            $skip=0;
        }


        $recordsTotal =0;
        $this->db->start_cache();
        $this->db->select('mk.id,mk.idKary,mk.url,mk.nama,mk.nik_tg nik,mk.is_aktif,mk.tgl_masuk,sk.nama nama_status_karyawan, ke.email')->from('m_karyawan mk')
                ->join('r_status_karyawan sk','sk.id=mk.r_status_karyawan_id','left')
                ->join('(SELECT * FROM h_mutasi WHERE is_aktif=1) m','m.m_karyawan_id=mk.id','left')
                ->join('(SELECT * FROM 
                            (SELECT hp . * , rjp.nama 
                            FROM h_pendidikan hp 
                            JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                            ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                            ) x 
                        GROUP BY x.m_karyawan_id) p','p.m_karyawan_id=mk.id','left')
                ->join('(SELECT m_karyawan_id, GROUP_CONCAT(kontak SEPARATOR "<br>") as email FROM h_kontak_karyawan WHERE r_jenis_kontak_id IN (1,2) AND is_aktif = 1 GROUP BY m_karyawan_id ) ke','ke.m_karyawan_id = mk.id','left')
                ->where('mk.is_aktif','0')
                // ->where('m.is_aktif','1')
                ->order_by('mk.tgl_masuk','asc');
        
        if (!($nama =='' or $nama ==null) ) {
            $this->db->like('mk.nama', $nama);
        }
        $this->db->stop_cache();
        $x = $this->db->count_all_results();

        //     //SORT
        //     if (!(string.IsNullOrEmpty(sortColumn) && string.IsNullOrEmpty(sortColumnDir)))
        //     {
        //         v = v.OrderBy(sortColumn + " " + sortColumnDir);
        //     }`1


        $this->db->limit($pageSize, $skip);
        $query = $this->db->get();
        $data = $query->result_array();
        $this->db->flush_cache();

        for ($i=0; $i < count($data) ; $i++) { 
            $data[$i]['id']=encode_url($data[$i]['id']);
            $data[$i]['tgl_masuk'] = TanggalIndo($data[$i]['tgl_masuk']);
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $x,
            "recordsFiltered" => $x,
            "data" => $data,
        );

        //output to json format
        echo json_encode($output);
    }

    public function berhenti()
	{
        $this->navigation->setSubMenuActive('karyawan_berhenti');
		$data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_berhenti');
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        $data['title'] = ' Karyawan Berhenti';
        $data['icon'] = '<i class="fa fa-users"></i>';
        $data['search'] = '0';            
        $data['karyawan'] = $this->karyawan_model->viewall()->result();

        $data['css'] = array('css/auto-complete.css','plugins/iCheck/all.css');
		$data['js']= array('js/auto-complete.js','plugins/iCheck/icheck.min.js');
        $this->template->load('template','karyawan/berhenti', $data);
	}   

    public function ajax_karyawan_berhenti_list()
    {
        $draw = $this->input->post("draw");
        $start = $this->input->post("start");
        $length = $this->input->post("length");
        $shortColumn = $this->input->post('column['.$this->input->post('order[0][column]').']');
        $sortColumnDir = $this->input->post("order[0][dir]");

        // //Find search
        $nama = $this->input->post("columns[0][search][value]");
        if ($length != null) {
            $pageSize=$length;
        }else{
            $pageSize=0;
        }
        if ($start != null) {
            $skip=$start;
        }else{
            $skip=0;
        }


        $recordsTotal =0;
        $this->db->start_cache();
        $this->db->select('mk.id,mk.idKary,mk.url,mk.nama,mk.nik_tg nik,mk.is_aktif,mk.tgl_masuk,sk.nama nama_status_karyawan,hk.no_sk,hk.alasan,hk.tgl_sk,ke.email')->from('m_karyawan mk')
                ->join('r_status_karyawan sk','sk.id=mk.r_status_karyawan_id','left')
                ->join('(SELECT * FROM h_mutasi WHERE is_aktif=1) m','m.m_karyawan_id=mk.id','left')
                ->join('h_lokasi_kerja lk','lk.m_karyawan_id=mk.id','left')
                ->join('(SELECT * FROM 
                            (SELECT hp . * , rjp.nama 
                            FROM h_pendidikan hp 
                            JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                            ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                            ) x 
                        GROUP BY x.m_karyawan_id) p','p.m_karyawan_id=mk.id','left')
                ->join('h_keluar hk','hk.m_karyawan_id=mk.id','LEFT')
                ->join('(SELECT m_karyawan_id, GROUP_CONCAT(kontak SEPARATOR "<br>") as email FROM h_kontak_karyawan WHERE r_jenis_kontak_id IN (1,2) AND is_aktif = 1 GROUP BY m_karyawan_id ) ke','ke.m_karyawan_id = mk.id','left')
                ->where('mk.is_aktif',0)
                ->order_by('mk.tgl_masuk','asc');
        
        if (!($nama =='' or $nama ==null) ) {
            $this->db->like('mk.nama', $nama);
        }
        $this->db->stop_cache();
        $x = $this->db->count_all_results();


        $this->db->limit($pageSize, $skip);
        $query = $this->db->get();
        $data = $query->result_array();
        $this->db->flush_cache();

        for ($i=0; $i < count($data) ; $i++) { 
            $data[$i]['id']=encode_url($data[$i]['id']);
            $data[$i]['tgl_masuk'] = TanggalIndo($data[$i]['tgl_masuk']);
            $data[$i]['tgl_sk'] = TanggalIndo($data[$i]['tgl_sk']);
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $x,
            "recordsFiltered" => $x,
            "data" => $data,
        );

        //output to json format
        echo json_encode($output);
    }

    public function kontrak()
	{
        $this->navigation->setSubMenuActive('karyawan_kontrak');
		$data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_kontrak');
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        $data['title'] = ' Karyawan Kontrak';
        $data['icon'] = '<i class="fa fa-users"></i>';
        $data['search'] = '0';            
        $data['karyawan'] = $this->karyawan_model->viewall()->result();

        $data['css'] = array('css/auto-complete.css','plugins/iCheck/all.css');
		$data['js']= array('js/auto-complete.js','plugins/iCheck/icheck.min.js');
        $this->template->load('template','karyawan/kontrak', $data);
	}   

    public function ajax_karyawan_kontrak_list()
    {
        $draw = $this->input->post("draw");
        $start = $this->input->post("start");
        $length = $this->input->post("length");
        $shortColumn = $this->input->post('column['.$this->input->post('order[0][column]').']');
        $sortColumnDir = $this->input->post("order[0][dir]");

        // //Find search
        $nama = $this->input->post("columns[0][search][value]");
        if ($length != null) {
            $pageSize=$length;
        }else{
            $pageSize=0;
        }
        if ($start != null) {
            $skip=$start;
        }else{
            $skip=0;
        }


        $recordsTotal =0;
        $this->db->start_cache();
        $this->db->select('mk.id,mk.idKary,mk.url,mk.nama,mk.nik_tg nik,mk.is_aktif,mk.tgl_masuk,sk.nama nama_status_karyawan,ke.email')->from('m_karyawan mk')
                ->join('r_status_karyawan sk','sk.id=mk.r_status_karyawan_id','left')
                ->join('(SELECT * FROM h_mutasi WHERE is_aktif=1) m','m.m_karyawan_id=mk.id','left')
                ->join('(SELECT * FROM 
                            (SELECT hp . * , rjp.nama 
                            FROM h_pendidikan hp 
                            JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                            ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                            ) x 
                        GROUP BY x.m_karyawan_id) p','p.m_karyawan_id=mk.id','left')
                ->join('(SELECT m_karyawan_id, GROUP_CONCAT(kontak SEPARATOR "<br>") as email FROM h_kontak_karyawan WHERE r_jenis_kontak_id IN (1,2) AND is_aktif = 1 GROUP BY m_karyawan_id ) ke','ke.m_karyawan_id = mk.id','left')
                ->where('mk.is_aktif','1')
                ->where('mk.r_status_karyawan_id',2)
                ->order_by('mk.tgl_masuk','asc');
        
        if (!($nama =='' or $nama ==null) ) {
            $this->db->like('mk.nama', $nama);
        }
        $this->db->stop_cache();
        $x = $this->db->count_all_results();


        $this->db->limit($pageSize, $skip);
        $query = $this->db->get();
        $data = $query->result_array();
        $this->db->flush_cache();

        for ($i=0; $i < count($data) ; $i++) { 
            $data[$i]['id']=encode_url($data[$i]['id']);
            $data[$i]['tgl_masuk'] = TanggalIndo($data[$i]['tgl_masuk']);
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $x,
            "recordsFiltered" => $x,
            "data" => $data,
        );

        //output to json format
        echo json_encode($output);
    }

    public function outsource()
	{
        $this->navigation->setSubMenuActive('karyawan_outsource');
		$data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_outsource');
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        $data['title'] = ' Karyawan Outsource';
        $data['icon'] = '<i class="fa fa-users"></i>';
        $data['search'] = '0';            
        $data['karyawan'] = $this->karyawan_model->viewall()->result();

        $data['css'] = array('css/auto-complete.css','plugins/iCheck/all.css');
		$data['js']= array('js/auto-complete.js','plugins/iCheck/icheck.min.js');
        $this->template->load('template','karyawan/outsource', $data);
	}   

    public function ajax_karyawan_outsource_list()
    {
        $draw = $this->input->post("draw");
        $start = $this->input->post("start");
        $length = $this->input->post("length");
        $shortColumn = $this->input->post('column['.$this->input->post('order[0][column]').']');
        $sortColumnDir = $this->input->post("order[0][dir]");

        // //Find search
        $nama = $this->input->post("columns[0][search][value]");
        if ($length != null) {
            $pageSize=$length;
        }else{
            $pageSize=0;
        }
        if ($start != null) {
            $skip=$start;
        }else{
            $skip=0;
        }


        $recordsTotal =0;
        $this->db->start_cache();
        $this->db->select('mk.id,mk.idKary,mk.url,mk.nama,mk.nik_tg nik,mk.is_aktif,mk.tgl_masuk,sk.nama nama_status_karyawan,ke.email')->from('m_karyawan mk')
                ->join('r_status_karyawan sk','sk.id=mk.r_status_karyawan_id','left')
                ->join('(SELECT * FROM h_mutasi WHERE is_aktif=1) m','m.m_karyawan_id=mk.id','left')
                ->join('(SELECT * FROM 
                            (SELECT hp . * , rjp.nama 
                            FROM h_pendidikan hp 
                            JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                            ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                            ) x 
                        GROUP BY x.m_karyawan_id) p','p.m_karyawan_id=mk.id','left')
                ->join('(SELECT m_karyawan_id, GROUP_CONCAT(kontak SEPARATOR "<br>") as email FROM h_kontak_karyawan WHERE r_jenis_kontak_id IN (1,2) AND is_aktif = 1 GROUP BY m_karyawan_id ) ke','ke.m_karyawan_id = mk.id','left')
                ->where('mk.is_aktif','1')
                ->where('m.is_aktif','1')
                ->where('mk.r_status_karyawan_id',3)
                ->order_by('mk.tgl_masuk','asc');
        
        if (!($nama =='' or $nama ==null) ) {
            $this->db->like('mk.nama', $nama);
        }
        $this->db->stop_cache();
        $x = $this->db->count_all_results();


        $this->db->limit($pageSize, $skip);
        $query = $this->db->get();
        $data = $query->result_array();
        $this->db->flush_cache();

        for ($i=0; $i < count($data) ; $i++) { 
            $data[$i]['id']=encode_url($data[$i]['id']);
            $data[$i]['tgl_masuk'] = TanggalIndo($data[$i]['tgl_masuk']);
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $x,
            "recordsFiltered" => $x,
            "data" => $data,
        );

        //output to json format
        echo json_encode($output);
    }

    public function tetap()
	{
        $this->navigation->setSubMenuActive('karyawan_tetap');
		$data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_tetap');
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        $data['title'] = ' Karyawan Tetap';
        $data['icon'] = '<i class="fa fa-users"></i>';
        $data['search'] = '0';
        $data['karyawan'] = $this->karyawan_model->viewall()->result();

        $data['css'] = array('css/auto-complete.css','plugins/iCheck/all.css');
		$data['js']= array('js/auto-complete.js','plugins/iCheck/icheck.min.js');
        $this->template->load('template','karyawan/tetap', $data);
	}   

    public function ajax_karyawan_tetap_list()
    {
        $draw = $this->input->post("draw");
        $start = $this->input->post("start");
        $length = $this->input->post("length");
        $shortColumn = $this->input->post('column['.$this->input->post('order[0][column]').']');
        $sortColumnDir = $this->input->post("order[0][dir]");

        // //Find search
        $nama = $this->input->post("columns[0][search][value]");
        if ($length != null) {
            $pageSize=$length;
        }else{
            $pageSize=0;
        }
        if ($start != null) {
            $skip=$start;
        }else{
            $skip=0;
        }


        $recordsTotal =0;
        $this->db->start_cache();
        $this->db->select('mk.id,mk.idKary,mk.url,mk.nama,mk.nik_tg nik,mk.is_aktif,mk.tgl_masuk,sk.nama nama_status_karyawan,ke.email')->from('m_karyawan mk')
                    ->join('r_status_karyawan sk','sk.id=mk.r_status_karyawan_id','left')
                    ->join('(SELECT * FROM h_mutasi WHERE is_aktif=1) m','m.m_karyawan_id=mk.id','left')
                    ->join('(SELECT * FROM 
                                (SELECT hp . * , rjp.nama 
                                FROM h_pendidikan hp 
                                JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                                ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                ) x 
                            GROUP BY x.m_karyawan_id) p','p.m_karyawan_id=mk.id','left')
                    ->join('(SELECT m_karyawan_id, GROUP_CONCAT(kontak SEPARATOR "<br>") as email FROM h_kontak_karyawan WHERE r_jenis_kontak_id IN (1,2) AND is_aktif = 1 GROUP BY m_karyawan_id ) ke','ke.m_karyawan_id = mk.id','left')
                    ->where('mk.is_aktif','1')
                    ->where('m.is_aktif','1')
                    ->where('mk.r_status_karyawan_id',5)
                    ->order_by('mk.tgl_masuk','asc');
        
        if (!($nama =='' or $nama ==null) ) {
            $this->db->like('mk.nama', $nama);
        }
        $this->db->stop_cache();
        $x = $this->db->count_all_results();


        $this->db->limit($pageSize, $skip);
        $query = $this->db->get();
        $data = $query->result_array();
        $this->db->flush_cache();

        for ($i=0; $i < count($data) ; $i++) { 
            $data[$i]['id']=encode_url($data[$i]['id']);
            $data[$i]['tgl_masuk'] = TanggalIndo($data[$i]['tgl_masuk']);
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $x,
            "recordsFiltered" => $x,
            "data" => $data,
        );

        //output to json format
        echo json_encode($output);
    }

    public function mitra()
    {
        $this->navigation->setSubMenuActive('karyawan_mitra');
        $data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_mitra');
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        $data['title'] = ' Karyawan Mitra';
        $data['icon'] = '<i class="fa fa-users"></i>';
        $data['search'] = '0';
        $data['karyawan'] = $this->karyawan_model->viewall()->result();

        $data['css'] = array('css/auto-complete.css','plugins/iCheck/all.css');
        $data['js']= array('js/auto-complete.js','plugins/iCheck/icheck.min.js');
        $this->template->load('template','karyawan/mitra', $data);
    }

    public function ajax_karyawan_mitra_list()
    {
        $draw = $this->input->post("draw");
        $start = $this->input->post("start");
        $length = $this->input->post("length");
        $shortColumn = $this->input->post('column['.$this->input->post('order[0][column]').']');
        $sortColumnDir = $this->input->post("order[0][dir]");

        // //Find search
        $nama = $this->input->post("columns[0][search][value]");
        if ($length != null) {
            $pageSize=$length;
        }else{
            $pageSize=0;
        }
        if ($start != null) {
            $skip=$start;
        }else{
            $skip=0;
        }


        $recordsTotal =0;
        $this->db->start_cache();
        $this->db->select('mk.id,mk.idKary,mk.url,mk.nama,mk.nik_tg nik,mk.is_aktif,mk.tgl_masuk,sk.nama nama_status_karyawan,ke.email')->from('m_karyawan mk')
                    ->join('r_status_karyawan sk','sk.id=mk.r_status_karyawan_id','left')
                    ->join('(SELECT * FROM h_mutasi WHERE is_aktif=1) m','m.m_karyawan_id=mk.id','left')
                    ->join('(SELECT * FROM 
                                (SELECT hp . * , rjp.nama 
                                FROM h_pendidikan hp 
                                JOIN r_jenjang_pendidikan rjp ON rjp.id = hp.r_jenjang_pendidikan_id 
                                ORDER BY hp.m_karyawan_id, hp.tahun_lulus DESC 
                                ) x 
                            GROUP BY x.m_karyawan_id) p','p.m_karyawan_id=mk.id','left')
                    ->join('(SELECT m_karyawan_id, GROUP_CONCAT(kontak SEPARATOR "<br>") as email FROM h_kontak_karyawan WHERE r_jenis_kontak_id IN (1,2) AND is_aktif = 1 GROUP BY m_karyawan_id ) ke','ke.m_karyawan_id = mk.id','left')
                    ->where('mk.is_aktif','1')
                    ->where('mk.r_status_karyawan_id',12)
                    ->order_by('mk.tgl_masuk','asc');
        
        if (!($nama =='' or $nama ==null) ) {
            $this->db->like('mk.nama', $nama);
        }
        $this->db->stop_cache();
        $x = $this->db->count_all_results();


        $this->db->limit($pageSize, $skip);
        $query = $this->db->get();
        // echo $this->db->last_query();
        $data = $query->result_array();
        $this->db->flush_cache();

        for ($i=0; $i < count($data) ; $i++) { 
            $data[$i]['id']=encode_url($data[$i]['id']);
            $data[$i]['tgl_masuk'] = TanggalIndo($data[$i]['tgl_masuk']);
        }

        $output = array(
            "draw" => $draw,
            "recordsTotal" => $x,
            "recordsFiltered" => $x,
            "data" => $data,
        );

        //output to json format
        echo json_encode($output);
    }

    public function create()
    {
        $this->navigation->setSubMenuActive('karyawan_aktif');
		$data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_aktif','create');
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        $data['title'] = 'Tambah karyawan';
        $data['icon'] = '<i class="mega-octicon octicon-person"></i>';

        $data['jenis_kelamin'] = $this->jenis_kelamin_model->viewall()->result();
        $data['agama'] = $this->agama_model->viewall()->result();
        $data['telkom_group'] = $this->referensi_model->get_all_telkom_group()->result();
        $data['status_nikah'] = $this->status_nikah_model->viewall()->result();
        $data['bank'] = $this->bank_model->viewall()->result();
        $data['status_karyawan'] = $this->status_karyawan_model->viewall()->result();
        // jquery validation
        $this->jquery_validation->set_rules($this->rules);
        $this->jquery_validation->set_messages($this->message);
        // plugins
        $data['css'] = array('plugins/iCheck/all.css','plugins/datepicker/datepicker3.css','css/auto-complete.css');
		$data['js']= array('js/jquery.validate.js','js/additional-methods.js','plugins/iCheck/icheck.min.js','plugins/datepicker/bootstrap-datepicker.js','js/auto-complete.js',
        'plugins/input-mask/jquery.inputmask.js','plugins/input-mask/jquery.inputmask.date.extensions.js','plugins/input-mask/jquery.inputmask.extensions.js');
        $this->template->load('template','karyawan/create', $data);
    }

    public function save()
    {
        $data = array(
            'nama' => strtoupper($this->input->post('nama')),
            'inisial' => strtoupper($this->input->post('inisial')),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tpt_lahir' => $this->input->post('tpt_lahir'),
            'alamat_karyawan' => $this->input->post('alamat_karyawan'),
            'npwp' => $this->input->post('npwp'),
            'alamat_npwp' => $this->input->post('alamat_npwp'),
            'tgl_pengangkatan' => $this->input->post('tgl_pengangkatan'),
            'no_rek' => $this->input->post('no_rek'),
            'is_aktif' => 1,
            'r_agama_id' => $this->input->post('r_agama_id'),
            'r_jenis_kelamin_id' => $this->input->post('r_jenis_kelamin_id'),
            'r_status_nikah_id' => $this->input->post('r_status_nikah_id'),
            'r_bank_id' => $this->input->post('r_bank_id'),
            'r_status_karyawan_id' => $this->input->post('r_status_karyawan_id'),
            'r_telkom_group_id' => $this->input->post('r_telkom_group_id'),
            'nik' => $this->input->post('nik'),
            'nik_lama' => $this->input->post('nik_lama'),
            'nik_tg' => $this->input->post('nik_tg'),
            'nik_kontrak' => $this->input->post('nik_kontrak'),
            'idkary' => $this->karyawan_model->get_idkary_lastest() + 1
        );
      
            $id = $this->karyawan_model->save($data);
            $this->session->set_flashdata('status','success');
            $this->session->set_flashdata('message', 'Data karyawan sudah tersimpan');
            redirect('biodata/view'.'/'.encode_url($id));
    }

    public function edit($id)
    {
        $this->navigation->setSubMenuActive('karyawan_aktif');
		$data['navbar'] = $this->navigation->getMenu();
        $this->navigation->setBreadcrumbKaryawan('karyawan_aktif','edit',$id);
        $data['breadcrumb'] = $this->navigation->getBreadcrumb();

        if(empty($id))
        {
            redirect('home');
        }

        $data['title'] = 'Ubah karyawan';
        $data['icon'] = '<i class="mega-octicon octicon-person"></i>';
        $data['karyawan'] = $this->karyawan_model->select_by_id(decode_url($id))->row();
        $data['jenis_kelamin'] = $this->jenis_kelamin_model->viewall()->result();
        $data['telkom_group'] = $this->referensi_model->get_all_telkom_group()->result();
        $data['agama'] = $this->agama_model->viewall()->result();
        $data['status_nikah'] = $this->status_nikah_model->viewall()->result();
        $data['bank'] = $this->bank_model->viewall()->result();
        $data['status_karyawan'] = $this->status_karyawan_model->viewall()->result();
        // jquery validation
        $this->jquery_validation->set_rules($this->rules);
        $this->jquery_validation->set_messages($this->message);
        // plugins
        $data['css'] = array('plugins/iCheck/all.css','plugins/datepicker/datepicker3.css');
		$data['js']= array('js/jquery.validate.js','js/additional-methods.js','plugins/iCheck/icheck.min.js','plugins/datepicker/bootstrap-datepicker.js',
        'plugins/input-mask/jquery.inputmask.js','plugins/input-mask/jquery.inputmask.date.extensions.js','plugins/input-mask/jquery.inputmask.extensions.js');
        $this->template->load('template','karyawan/edit', $data);
    }

    public function update()
    {
        $data = array(
            'id' => decode_url($this->input->post('id')),
            'nama' => strtoupper($this->input->post('nama')),
            'inisial' => strtoupper($this->input->post('inisial')),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tpt_lahir' => $this->input->post('tpt_lahir'),
            'alamat_karyawan' => $this->input->post('alamat_karyawan'),
            'npwp' => $this->input->post('npwp'),
            'alamat_npwp' => $this->input->post('alamat_npwp'),
            'tgl_pengangkatan' => $this->input->post('tgl_pengangkatan'),
            'no_rek' => $this->input->post('no_rek'),
            'is_aktif' => $this->input->post('is_aktif'),
            'is_cuti_besar' => $this->input->post('is_cuti_besar'),
            'r_agama_id' => $this->input->post('r_agama_id'),
            'r_jenis_kelamin_id' => $this->input->post('r_jenis_kelamin_id'),
            'r_status_nikah_id' => $this->input->post('r_status_nikah_id'),
            'r_bank_id' => $this->input->post('r_bank_id'),
            'r_status_karyawan_id' => $this->input->post('r_status_karyawan_id'),
            'r_telkom_group_id' => $this->input->post('r_telkom_group_id'),
            'nik' => $this->input->post('nik'),
            'nik_lama' => $this->input->post('nik_lama'),
            'nik_tg' => $this->input->post('nik_tg'),
            'nik_kontrak' => $this->input->post('nik_kontrak'),
        );
      
        $this->karyawan_model->update($data);
        $this->session->set_flashdata('status','success');
        $this->session->set_flashdata('message', 'Data karyawan telah diubah');
        redirect('biodata/view'.'/'.encode_url($data['id']));
    }

    public function confirm_delete($id)
    {
        redirect('karyawan');
  //       $this->navigation->setSubMenuActive('karyawan_aktif');
		// $data['navbar'] = $this->navigation->getMenu();
  //       $this->navigation->setBreadcrumbKaryawan('karyawan_aktif','delete',$id);
  //       $data['breadcrumb'] = $this->navigation->getBreadcrumb();

  //       if(empty($id))
  //       {
  //           $this->session->set_flashdata('status','danger');
  //           $this->session->set_flashdata('message', 'Data karyawan tidak ditemukan');
  //           redirect('home');
  //       }

  //       $detail = $this->karyawan_model->select_by_id(decode_url($id))->row();
  //       $data['title'] = 'Konfirmasi hapus karyawan';
  //       $data['icon'] = '<i class="mega-octicon octicon-person"></i>';
		// $data['breadcrumb'] = array(
  //           'links' => array(
  //               'Dashboard' => base_url(),
  //               'karyawan' => base_url() . 'karyawan',
  //               'Hapus '.$detail->nama => base_url('karyawan/confirm_delete')."/".$id
  //           ),
		// ); 
  //       $data['karyawan'] = $detail;
  //       $data['css'] = array();
		// $data['js']= array();
  //       $this->template->load('template','karyawan/confirm_delete', $data);
    }

    public function delete()
    {
        redirect('karyawan');
        // $id = $this->input->post('id');
        // if(empty($id))
        // {
        //     $this->session->set_flashdata('status','danger');
        //     $this->session->set_flashdata('message', 'Anda Tidak bisa akses');
        //     redirect('karyawan');
        // }
        // else
        // {
        //     $this->karyawan_model->delete(decode_url($id));
        //     $this->session->set_flashdata('status','success');
        //     $this->session->set_flashdata('message', 'Data karyawan telah dihapus');
        //     redirect('karyawan');   
        // }
    }

    public function ajax_daftar_pencarian_karyawan()
    {
        $keyword = $this->input->post('Pencarian');

        if($keyword != '')
        {
            $result = $this->karyawan_model->pencarian_karyawan($keyword)->result();
        }
        else
        {
            echo null;
            die();
        }
        $data['result'] = $result;
        $this->load->view('pencarian/result',$data);
    }

    public function ajax_autocomplete()
    {
        $term = $this->input->get('q');
        $data = $this->karyawan_model->autocomplete_karyawan($term)->result_array();
        $result = array();
        foreach($data as $key=>$d)
        {
            $result[$key] = $d['nama'];//.' - '.$d['nik'];
        }
        echo json_encode($result);
    }

    public function ajax_search_inisial()
    {
        $term = $this->input->post('inisial');
        $data = $this->karyawan_model->search_inisial_karyawan($term)->row();
        if(!empty($data))
        {
            echo json_encode($data);
        }
        else
        {
            echo json_encode(null);
        }
    }

    public function combobox_ajax_select2()
    {
        $pencarian = $this->input->post("q");

        if(empty($pencarian))
            $pencarian = "";
        return $this->referensi_model->combo_ajax_karyawan($pencarian);
    }
    
    public function combobox_ajax_select2_officer()
    {
        $pencarian = $this->input->post("q");        
        if(empty($pencarian))
            $pencarian = "";
        return $this->referensi_model->combo_ajax_karyawan($pencarian,'officer');
    }

    public function combobox_ajax_select2_hcm()
    {
        $pencarian = $this->input->post("q");        
        if(empty($pencarian))
            $pencarian = "";
        return $this->referensi_model->combo_ajax_karyawan($pencarian,'hcm');
    }

    public function combobox_ajax_select2_hcm_spj()
    {
        $pencarian = $this->input->post("q");        
        if(empty($pencarian))
            $pencarian = "";
        return $this->referensi_model->combo_ajax_karyawan($pencarian,'hcm_spj');
    }

    public function combobox_ajax_select2_encode_url()
    {
        $pencarian = $this->input->post("q");

        if(empty($pencarian))
            $pencarian = "";
        return $this->referensi_model->combo_ajax_karyawan_encode_url($pencarian);
    }

    public function ajax_get_karyawan_by_id($id)
    {
        $id = decode_url($id);
        $tmp=$this->referensi_model->get_ajax_karyawan_by_id($id);
        return $tmp;
    }

    public function ajax_get_level_karyawan()
    {
        $id = $this->input->post('id');
        $level = $this->karyawan_model->viewall_by_id($id)->row();
        echo json_encode($level->level);
    }

    public function ajax_get_karyawan_by_organisasi()
    {
        $id = $this->input->post('id');
        $data = $this->karyawan_model->get_karyawan_by_organisasi($id);
        echo json_encode($data);
    }

    public function ajax_get_karyawan_by_karyawanid()
    {
        $subdit_id = $this->input->post('subdit_id');
        $karyawan_id = $this->input->post('karyawan_id');
        $data = $this->karyawan_model->get_karyawan_by_karyawanid($karyawan_id,$subdit_id);
        echo json_encode($data);
    }

    

    public function get_karyawan_by_organisasi($id)
    {
        $data = $this->karyawan_model->get_karyawan_by_organisasi($id);
        // echo '<pre>';
        // print_r($data);
        $solution = array(429,433,434,438,520,521,522,525,526,662,678,685);
        foreach ($data as $r) {
            if(!empty($r['users_id'])){
                echo $r['users_id'].',';
            }
        }
    }

    public function generate_user_by_karyawan()
    {
        $this->load->model('users_model');

        $karyawan = $this->db->select('*')
        ->from('m_karyawan')
        ->where_in('nama', array('AHMAD HIDAYAH','FERI SUSANTO','ATEP WAHYU','IMAM ARDIANSYAH','BAYU CIPTADI'))
        ->get();
        foreach ($karyawan->result_array() as $rec) {
            $data = array(
                'm_karyawan_id' => $rec['id'],
                'username' => $rec['nik_tg'],
                'password' => '123456',
                'email' => 'tes@tes.com',
                'groups_id' => array(45)
            );
            if($this->users_model->save($data))
            {
                echo 'berhasil, '.$rec['nama'];
                echo '<br>';
            }
            else
            {
                echo 'gagal, '.$rec['nama'].', '.$this->ion_auth->errors();
                echo '<br>';
            }
        }
    }
}
