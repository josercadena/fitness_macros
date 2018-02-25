<?php

Class User_model extends CI_Model {

    public function view_all_users(){
        $this->db->select('*'); 
        $this->db->from('users');

        $query = $this->db->get(); 
        if ($query->num_rows() > 0){
            return $query->result(); 
        }else {
            return false; 
        }
    }
}
?>