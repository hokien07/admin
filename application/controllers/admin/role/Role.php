<?php

class Role extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('backend/role/rolemodel');
    }

    public function index() {
        $data['template'] = 'backend/role/index';
        $data['hasTable'] = true;
        $data['title'] = 'Quản lý quyền user';
        $data['roles'] = $this->rolemodel->getAll();
        $data['breadcrumb'] = array(
            'Dasboard' => 'admin/dashboard',
            'Role'=>'admin/role'
        );
        $this->load->view('backend/default/index', $data);
    }


}


?>
