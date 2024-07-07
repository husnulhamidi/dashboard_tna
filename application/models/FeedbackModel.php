<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FeedbackModel extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->table = 'm_tna_internal_sharing';
    	$this->id = 'id';
    }

    public function getFeedback($post, $id){
        $column_order = array('id','nama_karyawan', 'nik', 'subdit', 'skor_materi', 'skor_narasumber', 'manfaat_yg_diperoleh', 'kritik_saran');
        $column_search = array('id','nama_karyawan', 'nik', 'subdit', 'skor_materi', 'skor_narasumber', 'manfaat_yg_diperoleh', 'kritik_saran');

        $draw = $post['draw'];
        $start = $post['start'];
        $length = $post['length'];

        if ($length != null) {
            $pageSize = $length;
        } else {
            $pageSize = 0;
        }
        if ($start != null) {
            $skip = $start;
        } else {
            $skip = 0;
        }
        $recordsTotal = 0;
        $this->db->start_cache();

        $this->db->select('id,nama_karyawan, nik, subdit, skor_materi, skor_narasumber, manfaat_yg_diperoleh, kritik_saran')
         ->from('m_tna_feedback as isp')
         ->where('source_id', $id);
        IF($post['search']['value']!=""){
            $i = 0;
            foreach ($column_search as $item) // looping awal
            {
                if($post['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
                {
                    if($i===0){
                        $this->db->group_start(); 
                        $this->db->like($item, $post['search']['value']);
                    }else{
                        $this->db->or_like($item, $post['search']['value']);
                    }

                    if(count($column_search) - 1 == $i)$this->db->group_end(); 
                    
                }
                $i++;
            }
        }
        
        $this->db->stop_cache();
        $x = $this->db->count_all_results();

        if (!empty($post['order'])) {
            $this->db->order_by($column_order[$post['order']['0']['column']], $post['order']['0']['dir']);
        } else {
            $this->db->order_by('id', 'desc');
        }

        $this->db->limit($pageSize, $skip);
        $query = $this->db->get();
        $data = $query->result_array();
        $this->db->flush_cache();

        foreach ($data as $i => $rec) {
            $data[$i]['encrypt_id'] = encrypt_url($rec['id']);
            # code...
        }
        $output = array(
            "draw" => $draw,
            "recordsTotal" => $x,
            "recordsFiltered" => $x,
            "data" => $data,
        );
        echo json_encode($output);
        exit();
    }

   

}

/* End of file FeedbackMModel.php */
/* Location: ./application/models/internalSharing.php */