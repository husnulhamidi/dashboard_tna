<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('auth_model','karyawan_model'));
    }

    // redirect if needed, otherwise display the user list
    public function index()
    {
        redirect('auth/logout', 'refresh');
    }

    // log the user in
    public function login()
    {
        if($this->session->userdata('user')){
            // logged in
            //redirect('home');
            redirect('home');
        }elseif($this->input->post()){
            // do login
            $user = $this->auth_model->login($this->input->post('username'), $this->input->post('password'));
            if($user){
                // set session user
                $this->session->set_userdata(array('user'=>$user));
                // set session karyawan
                $karyawan = $this->karyawan_model->select_by_id($user['m_karyawan_id']);
                $this->session->set_userdata(array('karyawan'=>$karyawan));
                // set session subdit
                $subdit = $this->karyawan_model->get_organisasi_by_id_karyawan($user['m_karyawan_id'],3);
                $this->session->set_userdata(array('subdit'=>$subdit));
                // set session jabatan
                $jabatan = $this->karyawan_model->get_jabatan_by_karyawan_id($user['m_karyawan_id']);
                $this->session->set_userdata(array('jabatan'=>$jabatan));

                $permission = $this->auth_model->get_permission($user['id']);
                $this->session->set_userdata(array('permission'=>$permission));

            }
            redirect('auth/login', 'refresh');
        }else{
            $this->load->view('auth/login');
        }
    }

    // log the user out
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login', 'refresh');
    }

}
