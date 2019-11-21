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

    public function add() {
        $data['template'] = 'backend/role/addoredit';
        $data['hasTable'] = true;
        $data['title'] = 'Thêm quyền user';
        $data['breadcrumb'] = array(
            'Dasboard' => 'admin/dashboard',
            'Role'=>'admin/role'
        );

        if($this->input->post()) {
            $name = $this->input->post('name');
            $des  = $this->input->post('description');
            $publish = 0;
            if($this->input->post('publish')) {
                $publish = $this->input->post('publish');
            }

            $result = $this->rolemodel->add($name, $des, $publish);
            if($result) {
                redirect('admin/role', 'refresh');
            }else {
                $data['error'] = ADD_ERROR;
            }
        }
        $this->load->view('backend/default/tool-index', $data);
    }


}


?>
