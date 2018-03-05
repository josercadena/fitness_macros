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

    public function find_user($id_user){
        $this->db->select('*'); 
        $this->db->from('users');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get(); 
        if ($query->num_rows() > 0){
            return $query->row(); 
        }else {
            return false; 
        }
    }

    public function find_controls($id_user){
        $this->db->select('*'); 
        $this->db->from('controls');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get(); 
        return $query->result(); 
       // if ($query->num_rows() > 0){
        //     return $query; 
        // }else {
        //     return false; 
        // }
    }

    public function insert_user($user){
        return $this->db->insert('users', $user); 
    }

    public function update_user($user){
        //this->db->where('id_user', $user['id_user']);
        $this->db->replace('users', $user);
        //$query = $this->db->get(); 
        //echo $query; 
    }
}
?>