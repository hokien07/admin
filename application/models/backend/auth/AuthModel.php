<?php

class AuthModel extends CI_Model {

    private $table = 'user';

    function __construct(){
		parent::__construct();
    }

    public function checkUserNameExites($userName) {
        $check = $this->Query_sql->select_row($this->table, '*', array('user_name'=>$userName));
        if($check == NULL) return true;

        return false;
    }

    public function checkUserNameLogin($userName) {
        $check = $this->Query_sql->select_row($this->table, '*', array('user_name'=>$userName, 'publish'=>PUBLISH));
        if($check != NULL) return true;

        return false;
    }

    public function checkEmailExites ($email) {
        $check = $this->Query_sql->select_row($this->table, '*', array('email'=>$email));
        if($check == NULL) return true;

        return false;
    }

    public function register($userName, $email, $password) {

        $salt = $this->CI_encrypts->genRndSalt();

        $passEndcode =  $this->CI_encrypts->encryptUserPwd($password, $salt);

        $dataInsert = array(
            'user_name' =>$userName,
            'full_name'=>'',
            'avatar'=> '',
            'email' => $email,
            'password' =>$passEndcode,
            'role'=>1,
            'salt' =>$salt,
            'publish'=>UNPUBLISH,
            'created_at'=>$this->CI_function->getTimeStamp(),
            'updated_at'=>0
        );

        $result = $this->Query_sql->add($this->table, $dataInsert);

        if(count($result) == 3) return true;
        return false;
    }

    public function login($userName, $password){

        $user = $this->Query_sql->select_row($this->table, "*",array('user_name'=>$userName, 'publish'=>PUBLISH));

        if(count($user) > 0) {
            $pass = $user['password'];
            $salt= $user['salt'];

            $passDecode = $this->CI_encrypts->encryptUserPwd($password,$salt);

            if($passDecode == $user['password']) {
                $this->session->set_userdata('logged_user', $user['id']);
                return true;
            }
            return false;
        }

        return false;
    }




}
?>
