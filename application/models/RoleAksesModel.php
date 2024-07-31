<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleAksesModel extends CI_Model {
	public function __construct()
    {
        parent::__construct();
        $this->table = 'groups';
        $this->id = 'id';

    }


    public function getData(){
        $this->db->select('g.id,g.name AS group_name, g.description AS group_description, COUNT(ug.user_id) AS total_users');
        $this->db->from('groups g');
        $this->db->join('users_groups ug', 'g.id = ug.group_id', 'left');
        $this->db->where('g.m_sistem_sipatra_id', 31);
        $this->db->group_by(['g.id', 'g.name', 'g.description']);
        $this->db->order_by('g.name', 'ASC');
        $query = $this->db->get();
        $result = $query->result();
        return $result;

    }

    public function detailGroup($id){
        $this->db->where('id', $id);
		$data = $this->db->get($this->table)->row();
		return $data;
    }

    // public function getMenus() {
    //     $this->db->select('id, nama, parent_id');
    //     $this->db->from('r_menu');
    //     $this->db->where('m_sistem_sipatra_id', 31); // Tambahkan kondisi where sebelum get
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
    public function getMenus($groupId) {
        $this->db->select('r_menu.id, r_menu.nama, r_menu.parent_id, r_menu_group.id AS group_id');
        $this->db->from('r_menu');
        $this->db->join('r_menu_group', 'r_menu.id = r_menu_group.r_menu_id AND r_menu_group.groups_id = ' . $this->db->escape($groupId), 'left');
        $this->db->where('r_menu.m_sistem_sipatra_id', 31); // Add your condition here
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getUser($groupId) {
        $this->db->select('u.id, mk.nama, mk.nik_tg, users_groups.group_id AS group_id');
        $this->db->from('m_karyawan mk');
        $this->db->join('users u', 'u.m_karyawan_id = mk.id');
        $this->db->join('users_groups', 'u.id = users_groups.user_id AND users_groups.group_id = ' . $this->db->escape($groupId), 'left');
        $this->db->where('u.active', 1);
    
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deleteGroups($groupId, $table, $parameter){
        $this->db->where($parameter,$groupId);
        $delete = $this->db->delete($table);

        if($delete){
            $return = array(
                'success'       => true,
                'status_code'   => 200,
                'msg'           => "Data berhasil dihapus.",
                'data'          => array()
            );
        }else{
            $return = array(
                'success'       => false,
                'status_code'   => 500,
                'msg'           => "Data gagal dihapus.",
                'data'          => array()
            );
        }
        return $return;
    }

    public function saveData($data, $table){
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    
    
}

