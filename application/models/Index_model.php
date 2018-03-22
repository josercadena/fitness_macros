<?php

Class Index_model extends CI_Model {

    public function find_protein_index($id_protein_index){
        $this->db->select('*'); 
        $this->db->from('protein_index');
        $this->db->where('id_protein_index', $id_protein_index);
        $query = $this->db->get(); 
        return $query->result(); 
    }

    public function find_fat_index($id_fat_index){
        $this->db->select('*'); 
        $this->db->from('fat_index');
        $this->db->where('id_fat_index', $id_fat_index);
        $query = $this->db->get(); 
        return $query->result(); 
    }

    public function find_fitness_index($id_fitness_index){
        $this->db->select('*'); 
        $this->db->from('fitness_index');
        $this->db->where('id_fitness_index', $id_fitness_index);
        $query = $this->db->get(); 
        return $query->result(); 
    }
}
?>