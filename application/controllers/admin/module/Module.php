<?php

class Module extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('backend/module/modulemodel');
    }

    public function index() {

    }
}

?>
