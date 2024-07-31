<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoleAkses extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect('auth/login');
		}
		$this->load->model('RoleAksesModel');
		//Do your magic here
	}

    public function index(){
        $data['breadcrumb'] 	= 'Role Akses';
        $data['active_menu'] 	= 'role_akses';
		$data['title'] 			= 'Role Akses';
		$data['action_edit'] 	= site_url('tna/role_akses');
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
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
		);

		$data['groups'] = $this->RoleAksesModel->getData();
		$this->template->load('template','tna/role_akses/index',$data);
	}

    public function edit($id, $active_tab="setting_user"){
        $data['breadcrumb'] 	= 'Setting Role Akses';
        $data['active_menu'] 	= 'role_akses';
		$data['title'] 			= 'Setting Role Akses';
        $data['action_edit'] 	= site_url('tna/role_akses');
		$data['action_submit'] 	= site_url('tna/role_akses/submit');
        $data['active_tab'] 	= $active_tab;
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
			'extension/bootstrap-filestyle-2.1.0/src/bootstrap-filestyle.min.js'
		);

		$data['group_id'] = $id;
		$data['detail_group'] = $this->RoleAksesModel->detailGroup($id);
        

        $menuItems = $this->RoleAksesModel->getMenus($id);
        $tree = $this->buildTree($menuItems);
        $data['menuTree'] = $tree;

        $userItems = $this->RoleAksesModel->getUser($id);
        $data['user'] = $userItems;

		$this->template->load('template','tna/role_akses/edit',$data);
    }

    private function buildTree($items, $parentId = 0) {
        $branch = [];
        foreach ($items as $item) {
            if ($item['parent_id'] == $parentId) {
                $children = $this->buildTree($items, $item['id']);
                if ($children) {
                    $item['children'] = $children;
                }
                $branch[] = $item;
            }
        }
        return $branch;
    }

    public function submit($category){
       
        // $data = $this->input->post();
        if($category == 'user'){
            // delete tabel users_groups
            $this->RoleAksesModel->deleteGroups($this->input->post('group_id'),'users_groups','group_id');

            // inser tabel users_groups
            foreach ($this->input->post('select_user') as $key => $value) {
                $data = array(
                    'user_id' => $value,
                    'group_id' => $this->input->post('group_id')
                );
                $saveData = $this->RoleAksesModel->saveData($data,'users_groups');
            }
            
        }
        if($category == 'menu'){
            // delete tabel r_menu_group
            $this->RoleAksesModel->deleteGroups($this->input->post('group_id'),'r_menu_group','groups_id');

            // insert tabel r_menu_group
            foreach ($this->input->post('select_menu') as $key => $value) {
                $data = array(
                    'r_menu_id' => $value,
                    'groups_id' => $this->input->post('group_id')
                );
                $saveData = $this->RoleAksesModel->saveData($data,'r_menu_group');
            }
        }
        $return = array(
            'success'		=> true,
            'status_code'	=> 201,
            'msg'			=> "Data berhasil diubah.",
            'data'			=> array()
        );

        echo json_encode($return);
    }

   
}