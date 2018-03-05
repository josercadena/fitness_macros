<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model', '', true);
	}

    public function index()
	{
		$data['title'] = "Menu Principal"; 
		$data['all_users'] = $this->user_model->view_all_users();
		if ($data['all_users']!=false){
			$this->load->view('header', $data);
			$this->load->view('users/view_users', $data);
			$this->load->view('footer');
		}   
	}

	public function new_user(){
		if(!empty($this->input->post())){
			$user = array(
				"names" => $this->input->post('names'),
				"last_names" => $this->input->post('last_names'),
				"gender" => $this->input->post('gender'),
				"type_identification" => $this->input->post('type_identification'),
				"identification" => $this->input->post('identification'),
				"date_birth" => $this->input->post('date_birth'),
				"occupation" => $this->input->post('occupation'),
				"email" => $this->input->post('email'),
				"phone" => $this->input->post('phone'),
				"notes" => $this->input->post('notes'),
				"id_fitness_index" => $this->input->post('fitness_index'),
				"id_protein_index" => $this->input->post('protein_index'),
				"id_fat_index" => $this->input->post('fat_index'),
			);
			if ($this->user_model->insert_user($user)){
				redirect('/dashboard', 'refresh');
			} else{
				redirect('/dasboard/new_user', 'refresh');			
			}
		} else {
			$data['title'] = "Nuevo Usuario";
			$this->load->view('header', $data);
			$this->load->view('users/new_user');
			$this->load->view('footer');
		}
	}

	public function read_user($id_user = NULL){
		if($id_user!=NULL){
			$user = $this->user_model->find_user($id_user);
			$controls = $this->user_model->find_controls($id_user);
			if (!empty($user)){
				$data['title'] = "Ver Usuario";
				$data['user'] = $user;
				$data['controls'] = $controls;

				$this->load->view('header', $data);
				$this->load->view('users/read_user');
				$this->load->view('users/read_user_controls');
				$this->load->view('footer');
			} else{
				redirect('/dashboard', 'refresh');		
			}
			
		} else {
			$this->index(); 
		}
	}

	public function edit_user($id_user = NULL){
		if($id_user!=NULL){
			if(!empty($this->input->post())){
				$user_update = array(
					"id_user" =>$id_user,
					"names" => $this->input->post('names'),
					"last_names" => $this->input->post('last_names'),
					"gender" => $this->input->post('gender'),
					"type_identification" => $this->input->post('type_identification'),
					"identification" => $this->input->post('identification'),
					"date_birth" => $this->input->post('date_birth'),
					"occupation" => $this->input->post('occupation'),
					"email" => $this->input->post('email'),
					"phone" => $this->input->post('phone'),
					"notes" => $this->input->post('notes'),
					"id_fitness_index" => $this->input->post('fitness_index'),
					"id_protein_index" => $this->input->post('protein_index'),
					"id_fat_index" => $this->input->post('fat_index'),
				);
				$this->user_model->update_user($user_update);
			}

			$user = $this->user_model->find_user($id_user);
			if (!empty($user)){
				$data['title'] = "Editar Usuario";
				$data['user'] = $user;
				$this->load->view('header', $data);
				$this->load->view('users/edit_user', $user);
				$this->load->view('footer');
			} else{
				redirect('/dashboard', 'refresh');		
			}
			
		} else {
			$this->index(); 
		}
	}

}
