<?php
class RoleModel extends CI_Model {

    private $table = 'role';

    function __construct(){
		parent::__construct();
    }

    public function getAll() {
        $roles = $this->Query_sql->select_array($this->table, '*');
        return $roles;
    }

    public function add($name,$des,$publish) {
        $data_save = array(
            "name"=>$name,
            "description"=>$des,
            "publish"=>$publish,
            "created_at"=>$this->CI_function->getTimeStamp(),
            "updated_at"=>0
        );

        $result = $this->Query_sql->add($this->table, $data_save);

        if(count($result) == 3) return true;

        return false;
    }

}




?>
