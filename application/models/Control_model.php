<?php

Class Control_model extends CI_Model {

    public function view_all_controls(){
        $this->db->select('*'); 
        $this->db->from('controls');

        $query = $this->db->get(); 
        if ($query->num_rows() > 0){
            return $query->result(); 
        }else {
            return false; 
        }
    }

    public function insert_control($control){
        return $this->db->insert('controls', $control); 
    }

    public function find_last_control($id_user){
        $this->db->select('*'); 
        $this->db->from('controls');
        $this->db->where('id_user', $id_user);
        $this->db->order_by("id_control", "desc");
        $this->db->limit(1);
        $query = $this->db->get(); 
        if ($query->num_rows() > 0){
            return $query->row(); 
        }else {
            return false; 
        }
    }

 
}
?>