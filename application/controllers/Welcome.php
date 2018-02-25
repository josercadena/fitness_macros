<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => "Carlos M. Arrieta - Professional Personal Trainer"
		);
		$this->load->view('header', $data);
		$this->load->view('index');
		$this->load->view('footer');
	}
}
