<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select_by_id($id)
    {
        $result = $this->db->get_where('m_karyawan',array('id'=>$id))->row_array();
        return $result;
    }

    public function get_organisasi_by_id_karyawan($id, $level = 2) // defaultnya direktorat
    {
        // 2 = direktorat
        // 3 = subdit
        // 4 = sub unit
        // 5 = bagian
        $result = array();

        $org = $this->db->select('*')
        ->from('m_karyawan mk')
        ->join('(SELECT id,m_organisasi_id,r_jabatan_id,m_karyawan_id FROM h_mutasi WHERE is_aktif=1) hm','hm.m_karyawan_id=mk.id')
        ->join('v_organisasi org','org.id=hm.m_organisasi_id')
        ->where('mk.id',$id)
        ->get()
        ->row_array();

        if(!empty($org)){
            for ($i = 1; $i <= 5; $i++) {
                if ($org['l' . $i] == $level) {
                    $result = array(
                        'id' => $org['i' . $i],
                        'kode' => $org['k' . $i],
                        'nama' => $org['o' . $i],
                    );
                }
            }
        }

        return $result;
    }

    public function get_jabatan_by_karyawan_id($id)
    {
        $result = $this->db->select('j.id, j.nama')
        ->from('m_karyawan mk')
        ->join('h_mutasi m','mk.id = m.m_karyawan_id')
        ->join('r_jabatan j','j.id = m.r_jabatan_id')
        ->where('mk.id',$id)
        ->where('m.is_aktif',1)
        ->get()
        ->row_array();

        if(!empty($result)){
            if(strpos($result['nama'], 'DIRECTOR') !== FALSE){
                $result['kode'] = '000';
            }elseif(strpos($result['nama'], 'MANAGER') !== FALSE){
                $result['kode'] = '300';
            }elseif(strpos($result['nama'], 'AVP') !== FALSE){
                $result['kode'] = '200';
            }elseif(strpos($result['nama'], 'GM') !== FALSE){
                $result['kode'] = '200';
            }elseif(strpos($result['nama'], 'VP') !== FALSE){
                $result['kode'] = '100';
            }else{
                $result['kode'] = 'xxx';
            }
        }
        

        return $result;
    }
    public function getPermission(){
        
    }
}
