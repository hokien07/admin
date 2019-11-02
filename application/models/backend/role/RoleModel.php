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

}




?>
