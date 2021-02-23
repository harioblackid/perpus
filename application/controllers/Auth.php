<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('inputEmail', 'Email', 'trim|required');
		$this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');

		if($this->form_validation->run() == false)
		{
			$data['title'] = "Login";
			$this->load->view('v_auth', $data);
		}
		else {
			//Cek email dan password
			$this->_login();
		}
	}

	public function _login()
	{
		$email = $this->input->post('inputEmail');
		$password = $this->input->post('inputPassword');

		//Cek emailnya ada atau tidak
		$cekUser = $this->db->get_where('user', ['email' => $email])->row();
		if($cekUser)
		{
			//Jalankan kode jika email terdaftar
			// $this->session->set_flashdata(
			// 	'pesan', 
			// 	'<div class="alert alert-success" role="alert"> Email was registered! </div>'
			// );
			// redirect('auth');
			/*
				password_verify
				@param = password asli
				@param = password hash (yang telah di encrytion)
			*/
			if(password_verify($password, $cekUser->password)){
				//Jalankan kode jika password nya benar
				$this->session->set_flashdata(
					'pesan', 
					'<div class="alert alert-success" role="alert"> Email and password are correct! </div>'
				);
				redirect('auth');
			}
			else {
				$this->session->set_flashdata(
					'pesan', 
					'<div class="alert alert-danger" role="alert"> Password incorrect! </div>'
				);
				redirect('auth');
			}

		}
		else 
		{ 
			//Kode dijalankan jika email tidak terdaftar
			$this->session->set_flashdata(
				'pesan', 
				'<div class="alert alert-danger" role="alert"> Email not found!</div>'
			);
			redirect('auth');
		}
	}

	public function register()
	{
		$data['title'] = "New Member";
		$this->load->view('v_register', $data);
	}

	public function profile()
	{
		$data['title'] = "User Profile";
		$this->load->view('template/header', $data);
		$this->load->view('v_profile');
		$this->load->view('template/footer');
		
	}
	
	public function changepass()
	{
		$data['title'] = "Change Password";
		$this->load->view('template/header', $data);
		$this->load->view('v_changepass');
		$this->load->view('template/footer');
	}
	// public function logout()
	// {

	// }
}
