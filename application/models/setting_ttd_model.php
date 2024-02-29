<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_ttd_model extends CI_Model {
	public function __construct()
    {
        parent::__construct();
        $this->table = 'r_tna_setting_ttd';
        $this->id = 'id';

    }


    public function getSetting(){
        $data = $this->db->get_where($this->table, ['status_code' => 'active'])->row();
        return $data;
    }

    public function get_nama(){
        $this->db->select('mk.nama, jb.nama as jabatan');
        $this->db->from('m_karyawan mk');
        $this->db->join('h_mutasi hm', 'mk.id = hm.m_karyawan_id and hm.is_aktif = 1');
        $this->db->join('m_organisasi mo', 'mo.id = hm.m_organisasi_id');
        $this->db->join('r_jabatan jb', 'jb.id = hm.r_jabatan_id');
        $this->db->where('mo.id', 427);

        $query = $this->db->get();
        $result = $query->result();

        return $result;
    }

    public function insertData($data){
        // update status
        // $dataUpdate = array(
        //     'status_code' => 'inactive'
        // );
        $update = $this->db->update($this->table,['status_code' => 'inactive']);

        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function updateData($data, $id){
        $this->db->where('id',$id);
        $update = $this->db->update($this->table,$data);

        return $update; 
    }

    public function delete(){
        $this->db->where('status_code', 'active');
        $delete = $this->db->update($this->table,['status_code' => 'inactive']);
        if($delete){
            $return = array(
                'success'       => true,
                'status_code'   => 200,
                'msg'           => "Hapus data berhasi.",
                'data'          => array()
            );
        }else{
            $return = array(
                'success'       => false,
                'status_code'   => 200,
                'msg'           => "Hapus data gagal.",
                'data'          => array()
            );
        }
        return $return;
    }
	
   
}

