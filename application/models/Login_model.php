<?php

Class Login_model extends CI_Model {


    public function login_inspect($data){
        $login_condition="username='" . $data['admin_username'] . "' AND password='" . $data['admin_password'] . "'"; 
        $this->db->select('*'); 
        $this->db->from('administrators');
        $this->db->where($login_condition);

        $query = $this->db->get(); 
        if ($query->num_rows() == 1){
            return true; 
        }else {
            return false; 
        }
    }
}
?>