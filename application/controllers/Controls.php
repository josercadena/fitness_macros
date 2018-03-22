<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controls extends CI_Controller {
	public function __construct() {
		parent::__construct();
        $this->load->model('user_model', '', true);
        $this->load->model('control_model', '', true);
        $this->load->model('index_model', '', true);

	}

    public function index()
	{
        redirect('/dashboard', 'refresh');
		//$data['title'] = "Menu Principal"; 
		//$data['all_controls'] = $this->user_model->view_all_controls();
		//if ($data['all_controls']!=false){
            
		//	$this->load->view('header', $data);
			// $this->load->view('users/view_users', $data);
			// $this->load->view('footer');
		//}   
	}

	public function new_control($id_user = NULL){
		if(!empty($this->input->post())){

            // Aqui comienza el algoritmo para calcular BMR y consumo calòrico
            $fitness_index_raw = $this->index_model->find_fitness_index($this->input->post('fitness_index'));
            $protein_index_raw = $this->index_model->find_protein_index($this->input->post('protein_index'));
            $fat_index_raw =  $this->index_model->find_fat_index($this->input->post('fat_index'));

            $fitness_index = $fitness_index_raw[0]->value;
            $protein_index = $protein_index_raw[0]->value;
            $fat_index =  $fat_index_raw[0]->value;

            $last_control = $this->control_model->find_last_control($id_user); 
            $user = $this->user_model->find_user($id_user);

            $weight = $this->input->post('peso'); 
            $height = $this->input->post('altura'); 
            $age = date_diff(date_create($user->date_birth), date_create('now'))->y;
            $gender = $user->gender;

            // Change
            $deficit = -500; 
            $protein_cals_gram = 4; 
            $carb_cals_gram = 4; 
            $fat_cals_gram = 9; 
            
            // Compute BMR
            if ($gender="masculino"){
                $bmr = (10 * $weight) + (6.25 * $height) - (5 * $age) + 5; 
            } else {
                $bmr = (10 * $weight) + (6.25 * $height) - (5 * $age) + -161; 
            }
            
            $maximum_intake = $bmr * $fitness_index;
            $total_intake = $maximum_intake + $deficit;

            $protein_intake = ($protein_index * 2.2) * $weight; 
            $fat_intake = ($fat_index * 2.2)  * $weight; 
            
            # Compute calories for protein and fat intakes
            $protein_calories = $protein_intake * $protein_cals_gram;
            $fat_calories = $fat_intake * $fat_cals_gram;
            
            # Compute calories available for carbs
            $carb_calories = $total_intake - $protein_calories - $fat_calories;

			$control = array(
                "id_user" => $id_user,
                "peso" => $this->input->post('peso'), 
                "biceps" => $this->input->post('m_biceps'),
                "pecho" => $this->input->post('m_pecho'), 
                "cadera" => $this->input->post('m_cadera'),
                "cintura" => $this->input->post('m_cintura'), 
                "cuadriceps" => $this->input->post('m_cuadriceps'), 
                "pantorrilla" => $this->input->post('m_pantorrilla'),
                "pliegue_biceps" => $this->input->post('p_biceps'), 
                "pliegue_triceps" => $this->input->post('p_triceps'), 
                "pliegue_subescapular" => $this->input->post('p_subescapular'),
                "pliegue_suprailiaco" => $this->input->post('p_suprailiaco'), 
                "id_fitness_index" => $this->input->post('fitness_index'), 
                "id_protein_index" => $this->input->post('protein_index'),
                "id_fat_index" => $this->input->post('fat_index'), 
                "protein_calories" => $protein_calories,
                "carb_calories" => $carb_calories, 
                "fat_calories" => $fat_calories
            );
            

			if ($this->control_model->insert_control($control)){
				redirect('/dashboard/read_user/'.$id_user.'', 'refresh');
			} else{
				redirect('/controls/new_control/'.$id_user.'', 'refresh');			
			}
		} else {
            $data['title'] = "Nuevo Control";
            $data['id_user'] = $id_user;
			$this->load->view('header', $data);
			$this->load->view('controls/new_control');
			$this->load->view('footer');
		}
	}


}
