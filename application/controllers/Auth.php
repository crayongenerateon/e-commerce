<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
	}

	public function index()
	{
		if ($this->session->userdata('u_login')) {
			redirect('user');
		}else{
			redirect('auth/login');
		}
	}

	public function login()
	{
		if ($this->session->userdata('u_login')) {
			redirect('user');
		}
		
		$data['title'] = 'Login / Register';
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$data['is_register'] = false;
		if ($this->input->post('register', TRUE)) {
			$this->form_validation->set_rules('inputEmail', 'Email', 'required');
			$this->form_validation->set_rules('inputPassword', 'Password', 'required');
			$this->form_validation->set_rules('inputPasswordConf', 'Konfirmasi Password', 'required');
			if ($this->form_validation->run()) {
				$params['customer_email'] = $this->input->post('inputEmail', TRUE);
				$params['customer_password'] = sha1($this->input->post('inputPassword', TRUE));
				$id = $this->Customer_model->add($params);

				$array = array(
					'u_login' => true,
					'u_id' => $id,
					'u_full_name' => '',
					'u_email' => $params['customer_email']
					);

				$this->session->set_userdata( $array );

				$this->session->set_flashdata('success', 'Berhasil daftar pengguna');
				if ($this->input->post('location', TRUE)) {
					$lokasi = $this->input->post('location', TRUE);
					header("Location:" . htmlspecialchars($lokasi));
				}else{
					redirect('auth/login');
				}
			}else{
				$data['is_register'] = true;
			}
		}elseif ($this->input->post('login', TRUE)) {
			$this->form_validation->set_rules('inputEmail', 'Email', 'required');
			$this->form_validation->set_rules('inputPassword', 'Password', 'required');	
			if ($this->form_validation->run()) {
				$params['customer_email'] = $this->input->post('inputEmail', TRUE);
				$params['customer_password'] = sha1($this->input->post('inputPassword', TRUE));
				$user = $this->Customer_model->get($params);
				if (count($user) == 1) {
					
					$array = array(
						'u_login' => true,
						'u_id' => $user[0]['customer_id'],
						'u_full_name' => $user[0]['customer_full_name'],
						'u_email' => $user[0]['customer_email']
						);

					$this->session->set_userdata( $array );

					$this->session->set_flashdata('success', 'Berhasil login');
					if ($this->input->post('location', TRUE)) {
						$lokasi = $this->input->post('location', TRUE);
						header("Location:" . htmlspecialchars($lokasi));
					}else{
						redirect(site_url());
					}
				}else{
					$this->session->set_flashdata('errorLogin', 'Email atau password salah');
					redirect('auth/login');
				}
			}
		}elseif ($this->input->post('forgot', TRUE)) {
			$this->form_validation->set_rules('inputEmail', 'Email', 'trim|required|xss_clean');
			if ($this->form_validation->run()) {

				$user = $this->Customer_model->get(array('email' => $this->input->post('inputEmail')));
				
				$datetime = date('Y-m-d H:i:s');
				$token = sha1($this->config->item('encryption_key').$this->input->post('inputEmail').$datetime);
				
				$this->Customer_model->add_token(array(
					'uid' => $user[0]['customer_id'],
					'token' => $token,
					'date_created' => $datetime
					));

				$params['url'] = site_url('auth/reset/'.$token);
				$this->email->from($this->config->item('from'), $this->config->item('from_name'));
				$this->email->to($this->input->post('inputEmail', TRUE)); 
				$this->email->subject('Konfirmasi reset password');
				$this->email->message($this->load->view('email/reset_password', array('params' => $params), true));
				$this->email->send();

				$this->session->set_flashdata('success', 'Konfirmasi telah dikirim. Silakan buka email anda');
				redirect('auth/login');

			}
		}
		$params['limit'] = 10;
		$data['main'] = 'auth/login';
		$this->load->view('layout', $data);
	}

	public function logout()
	{
		if (!$this->session->userdata('u_login')) {
			redirect('auth/login');
		}

		$arr_login = array('u_login', 'u_id', 'u_name', 'u_full_name', 'u_email');
		$this->session->unset_userdata($arr_login);

		$this->session->set_flashdata('success', 'Berhasil logout');
		redirect('base');

	}

	public function reset($token = null)
	{
		if ($token == null) {
			redirect('auth/login');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('inputPassword', 'Password Baru', 'trim|required|xss_clean');
		$this->form_validation->set_rules('inputPasswordConf', 'Konfirmasi Password Baru', 'trim|required|xss_clean|matches[inputPassword]');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		if ($this->form_validation->run()) {
			$get_token = $this->Customer_model->get_token(array('token' => $token));
			if (count($get_token) == 4) {
				
				$this->Customer_model->delete_token($token);
				$params['id'] = $get_token['user_public_id'];
				$params['password'] = sha1($this->input->post('inputPassword', TRUE));
				$this->Customer_model->add($params);

				$this->session->set_flashdata('success', 'Berhasil reset password');
				redirect('auth/login');
			}
		}
		$data['main'] = 'auth/reset';
		$this->load->view('auth/login', $data);
	}

	public function profile()
	{
		$data['customer'] = $this->Customer_model->get(array('id' => $id));
		$data['main'] = 'auth/profile';
		$this->load->view('layout', $data);
	}
	
}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */	