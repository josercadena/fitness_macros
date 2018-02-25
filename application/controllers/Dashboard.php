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
}
