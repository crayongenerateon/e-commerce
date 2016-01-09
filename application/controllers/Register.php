<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['main'] = 'auth/register';
		$this->load->view('layout', $data);		
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */