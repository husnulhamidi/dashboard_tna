<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    private function login_ldap($username, $password) {
        $domain_name = $this->config->item('ldap_domain');
        $username_domain = $username.'@'.$domain_name;
        $ldap_server = $this->config->item('ldap_server');
        $dn = 'uid='.$username.',cn=users,dc=telkomsat,dc=co,dc=id';

        if($connect = @ldap_connect($ldap_server)){
            ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($connect, LDAP_OPT_REFERRALS, 0);
            ldap_start_tls($connect);
            if($bind = @ldap_bind($connect, $dn, $password)){
                @ldap_close($connect);
                return TRUE;
            }else{
                @ldap_close($connect);
                return FALSE;
            }
        }
        return FALSE;
    }

    public function login($username, $password)
    {
        $user = $this->db->select('*')
        ->from('users')
        ->where('username', $username)
        ->or_where('email', $username)
        ->limit(1)
        ->get()
        ->row_array();

        if(!$user){
            return false;
        }

        // if($this->login_ldap($username,$password){
        //     return $user;
        // }

        $hash = crypt($password, $user['password']);
        if ($hash === $user['password'])
        {
            return $user;
        }

        return false;
    }

    public function get_permission($user_id){
        $this->db->select('A.user_id,A.group_id,B.name');
        $this->db->from('users_groups A');
        $this->db->join('groups B','A.group_id=B.id');
        $this->db->where('A.user_id',$user_id);
        $query = $this->db->get()->result();
        //print_r($this->db->last_query()); die;
        $result = array();
       
        foreach ($query as $key) {
            $result[]=$key->name;
        }
        return $result;
    }
}