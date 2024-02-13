<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mutasi_karyawan_model extends CI_Model
{
   public function viewall()
    {
        return $this->db->select('hm.*,mo.nama nama_organisasi,mk.nama nama_karyawan,rj.nama nama_jabatan')
                    ->from('h_mutasi hm')
                    ->join('m_organisasi mo','mo.id=hm.m_organisasi_id')
                    ->join('m_karyawan mk','mk.id=hm.m_karyawan_id')
                    ->join('r_jabatan rj','rj.id=hm.r_jabatan_id')->get();
    }

    public function select_by_id($id)
    {
        $this->db->where('h_mutasi.id',$id);
        return $this->db->get('h_mutasi');
    }

    public function get_level_organisasi_by_karyawan_id($karyawan_id)
    {
        $query =  $this->db->from('h_mutasi hm')->where('hm.m_karyawan_id',$karyawan_id)
                    ->join('r_jabatan rj','rj.id=hm.r_jabatan_id')
                    ->join('m_organisasi mo','mo.id=hm.m_organisasi_id')
                    ->select('hm.*,rj.nama nama_jabatan, mo.nama nama_organisasi, mo.level level_organisasi')->get()->row();
        
        if(empty($query))
        {
            return 0;
        }
        return $query->level_organisasi;
    }

    public function get_jenis_organisasi_by_karyawan_id($karyawan_id)
    {
        $query = $this->db->from('h_mutasi hm')->where('hm.m_karyawan_id',$karyawan_id)
                    ->where('hm.is_aktif',1)
                    ->join('r_jabatan rj','rj.id=hm.r_jabatan_id')
                    ->join('m_organisasi mo','mo.id=hm.m_organisasi_id')
                    ->select('hm.*,rj.nama nama_jabatan, mo.nama nama_organisasi, mo.level level_organisasi,mo.r_jenis_organisasi_id')->get()->row();
        
        if(empty($query))
        {
            return 0;
        }
        return $query->r_jenis_organisasi_id;
    }

    public function viewall_by_karyawan_id($karyawan_id)
    {
        return $this->db->where('hm.m_karyawan_id',$karyawan_id)
                    ->join('m_organisasi mo','mo.id=hm.m_organisasi_id','left')
                    ->join('m_karyawan mk','mk.id=hm.m_karyawan_id','left')
                    ->join('r_jabatan rj','rj.id=hm.r_jabatan_id','left')
                    ->from('h_mutasi hm')
                    ->select('hm.*,mo.nama nama_organisasi,mk.nama nama_karyawan,rj.nama nama_jabatan')
                    ->get();
    }

    public function save($data)
    {
        $this->db->insert('h_mutasi',$data);
    }

    public function update($data)
    {
        $id = $data['id'];
        $this->db->where('id',$id);
        $this->db->update('h_mutasi',$data);
    }

    public function delete($id)
    {
        $this->db->delete('h_mutasi',array('id'=>$id));
    } 
}