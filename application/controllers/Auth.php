<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data['title'] = "Login";
		$this->load->view('v_auth', $data);
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
