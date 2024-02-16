<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lokasi_akun_model extends CI_Model
{
   public function viewall()
    {
        return $this->db->from('h_lokasi_akun')
                        ->join('m_organisasi','m_organisasi.id=h_lokasi_akun.m_organisasi_id')
                        ->select('h_lokasi_akun.*,m_organisasi.nama nama_organisasi,m_organisasi.level')->get();
    }

    public function viewall_subdit()
    {
        return $this->db->query("select m_organisasi_id,nama from (select m_organisasi_id from h_lokasi_akun where is_aktif = 1 group by m_organisasi_id) a
join m_organisasi b ON a.m_organisasi_id=b.id group by b.nama,a.m_organisasi_id");

        
    }

    public function select_by_id($id)
    {
        return $this->db->where('h_lokasi_akun.id',$id)->from('h_lokasi_akun')
                        ->join('m_organisasi','m_organisasi.id=h_lokasi_akun.m_organisasi_id')
                        ->select('h_lokasi_akun.*,m_organisasi.nama nama_organisasi,m_organisasi.level')->get();
    }

    public function save($data)
    {
        $this->db->insert('h_lokasi_akun',$data);
    }

    public function update($data)
    {
        $id = $data['id'];
        $this->db->where('id',$id);
        $this->db->update('h_lokasi_akun',$data);
    }

    public function delete($id)
    {
        $this->db->delete('h_lokasi_akun',array('id'=>$id));
    } 
}