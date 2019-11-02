<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller  {

    public function __construct() {
        parent::__construct();
        $this->load->model('backend/auth/authmodel');
    }

    public function index() {

        if($this->CI_auth->check_logged() == TRUE){
            redirect('admin/dashboard', 'refresh');
            return;
        }

        $data = array();
        $data["title"] = "Đăng nhập";

        if($this->input->post()) {
            $userName = $this->input->post('user_name');
            $password = $this->input->post('password');
            $remember = $this->input->post('remember');

            if(!empty($userName) && !empty($password)) {

                // Check username.
                $userNameCheck = $this->authmodel->checkUserNameLogin($userName);

                if($userNameCheck) {

                    // Login action.
                    $result  = $this->authmodel->login($userName, $password);
                    if($result) {
                        if(isset($remember)) {
                            setcookie ("user_name",$userName, time()+ (10 * 365 * 24 * 60 * 60));
                            setcookie ("password", $password, time()+ (10 * 365 * 24 * 60 * 60));
                        }
                        redirect('admin/dashboard', 'refresh');
                    }else {
                        $data["error"] = "Tài khoản hoặc mật khẩu không đúng";
                    }
                }else {
                    $data["error"] = "Tài khoản không tồn tại hoặc chưa kích hoạt";
                }
            }else {
                $data["error"] = "Chưa nhập tài khoản hoặc mật khẩu";
            }
        }
        $this->load->view('backend/auth/login', $data);
    }

    public function register() {

        $data["title"] = "Đăng ký";

        if($this->input->post()) {
            $userName = $this->input->post('user_name');
            $password = $this->input->post('password');
            $mail = $this->input->post('mail');
            $rePassword = $this->input->post('re_password');

            // Check password map re password.
            if($password == $rePassword){
                // Check username exites.
                $userNameCheck = $this->authmodel->checkUserNameExites($userName);

                if($userNameCheck) {

                    // Check Email exites.
                    $emailCheck = $this->authmodel->checkEmailExites($mail);

                    if($emailCheck) {

                        // inset to db.
                        $result = $this->authmodel->register($userName, $mail, $password);

                        if($result) {
                            redirect('admin', 'refresh');
                        }else {
                            $data['error'] = REGISTER_FAILED;
                        }
                    }else {
                        $data['error'] = EMAIL_EXITES;
                    }
                }else {
                        $data['error'] = USER_NAME_EXITES;
                }
            }else {
                $data['error'] = PASSWORD_NOT_MATCH;
            }
        }

        $this->load->view('backend/auth/register', $data);
    }

    public function resset() {
        $data['title'] = 'Lấy lại mật khẩu';

        $this->load->view('backend/auth/resset', $data);
    }
}

?>
