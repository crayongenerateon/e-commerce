<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'auth/login';
		$this->load->view('layout', $data);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */