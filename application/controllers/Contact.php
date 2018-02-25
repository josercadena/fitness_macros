<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => "Contacto"
		);

		$this->load->view('header', $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
}
