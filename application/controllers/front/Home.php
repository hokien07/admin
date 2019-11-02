<?php 

class Home extends CI_Controller {
     
    function _construct() {

    }


    function _destruct() {

    }


    public function index() {
        $this->load->view("frontend/home");
    }
}