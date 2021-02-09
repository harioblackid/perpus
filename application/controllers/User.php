<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//Langkah ke-3
	public function __construct()
	{
		parent::__construct();
		//load model ('nama model', 'alias')
		$this->load->model('M_user_model', 'user');
	}

	public function index()
	{
		$data['title'] = "List User";
		$this->load->view('template/header', $data);

		//Ambil data member dari UserModel 
		$data['UserData'] = $this->user->showMember()->result();
		//Body
		$this->load->view('v_member', $data);
		$this->load->view('template/footer');
	}

	public function petugas()
	{
		$data['title'] = "List Petugas";
		$this->load->view('template/header', $data);
		
		//Load Data Petugas
		$data['petugasData'] = $this->user->showPetugas()->result();
		//Body
		$this->load->view('v_petugas', $data);
		$this->load->view('template/footer');
	}
	
	public function addmember()
	{
		$data['title'] = "Add Member";
		$this->load->view('template/header', $data);
		//Body
		$this->load->view('v_member_add');
		$this->load->view('template/footer');
	}

	public function addpetugas()
	{
		$data['title'] = "Add Petugas";
		$this->load->view('template/header', $data);
		//Body
		$this->load->view('v_petugas_add');
		$this->load->view('template/footer');
	}

	public function saveMember()
	{
		$data = array(
			// "key" => "value"
			// "kolom pada database" => 'fullname' => $this->input->post('attribute_name'),
			'id_user' => NULL,
			'email'		=> $this->input->post('inputEmail'),
			'fullname' => $this->input->post('inputFullname'),
			'place' => $this->input->post('inputPlace'),
			'birthdate' => $this->input->post('inputBd'),
			'gender' => $this->input->post('inputGender'),
			'status' => "member",
			'password' => $this->input->post('inputPassword')
		);

		$query = $this->user->insertMember($data);
		//kalo query nya gk error maka 
		//$query = true
		
		if($query === true){
			//Jika $query = true 
			echo "Data berhasil disimpan!";
		}
		
	}

	public function savePetugas()
	{
		$data = array(
			// "key" => "value"
			// "kolom pada database" => 'fullname' => $this->input->post('attribute_name'),
			'id_user' => NULL,
			'email'		=> $this->input->post('inputEmail'),
			'fullname' => $this->input->post('inputFullname'),
			'place' => $this->input->post('inputPlace'),
			'birthdate' => $this->input->post('inputBd'),
			'gender' => $this->input->post('inputGender'),
			'status' => "petugas",
			'password' => password_hash($this->input->post('inputPassword'), PASSWORD_DEFAULT)
		);

		if ($this->user->insertPetugas($data)) {
			redirect(base_url('User/petugas'));
		}
	}

	public function removeMember($id)
	{
		$query = $this->user->deleteMember($id);
		if($query === true){
			echo "Data berhasil dihapus";
		}
	}
}
 