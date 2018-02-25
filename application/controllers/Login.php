<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('login_model', '', true);
	}

	public function index()
	{
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function credentials_submitted(){

		if(!empty($this->input->post('admin_login'))){
			$data = array(
				'admin_login' => $this->input->post('admin_login'),
				'admin_username' => $this->input->post('admin_username'),
				'admin_password' => $this->input->post('admin_pass')
			);
			$result = $this->login_model->login_inspect($data);

			if($result==true){
				redirect('/dashboard', 'refresh');
			}else{
				redirect('/contact', 'refresh');

			}
		}	
	}
}
