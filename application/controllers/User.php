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
		//Buat Rule Validation
		$this->form_validation->set_rules(
			'inputEmail', 
			'Email', 
			'trim|required|valid_email'
		);

		$this->form_validation->set_rules(
			'inputFullname', 
			'Fullname', 
			'trim|required|max_length[100]'
		);

		$this->form_validation->set_rules(
			'inputPlace', 
			'Place', 
			'trim|required|max_length[100]'
		);

		$this->form_validation->set_rules(
			'inputBd', 
			'Birthdate', 
			'trim|required'
		);

		$this->form_validation->set_rules(
			'inputGender', 
			'Gender', 
			'trim|required'
		);

		$this->form_validation->set_rules(
			'new_password', 
			'Password', 
			'trim|required|min_length[4] | matches[inputPassword]',
		);

		$this->form_validation->set_rules(
			'inputPassword', 
			'Password', 
			'trim|required|min_length[4]|matches[new_password]'
		);
		
		if($this->form_validation->run() == false)
		{
      //Tampilkan View
			$data['title'] = "Add Member";
			$this->load->view('template/header', $data);
			//Body
			$this->load->view('v_member_add');
			$this->load->view('template/footer');     
    }
    else
		{
			//Jika Validasinya Sukses
      $this->saveMember();
    }
	}

	public function addpetugas()
	{
		//Buat Rule Validation
		$this->form_validation->set_rules(
			'inputEmail', 
			'Email', 
			'trim|required|valid_email'
		);

		$this->form_validation->set_rules(
			'inputFullname', 
			'Fullname', 
			'trim|required|max_length[100]'
		);

		$this->form_validation->set_rules(
			'inputPlace', 
			'Place', 
			'trim|required|max_length[100]'
		);

		$this->form_validation->set_rules(
			'inputBd', 
			'Birthdate', 
			'trim|required'
		);

		$this->form_validation->set_rules(
			'inputGender', 
			'Gender', 
			'trim|required'
		);

		$this->form_validation->set_rules(
			'new_password', 
			'Password', 
			'trim|required|min_length[4] | matches[inputPassword]',
		);

		$this->form_validation->set_rules(
			'inputPassword', 
			'Password', 
			'trim|required|min_length[4]|matches[new_password]'
		);

		if ($this->form_validation->run() == false) {
			$data['title'] = "Add Petugas";
			$this->load->view('template/header', $data);
			//Body
			$this->load->view('v_petugas_add');
			$this->load->view('template/footer');	
		} else {
			$this->savePetugas();
		}
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
			'password' => password_hash($this->input->post('inputPassword'), PASSWORD_BCRYPT) 
		);

		$query = $this->user->insertMember($data);
		//kalo query nya gk error maka 
		//$query = true
		
		if($query === true){
			//Jika $query = true 
			$this->session->set_flashdata('pesan', '<div class="alert alert-primary" role="alert"> Data berhasil disimpan! </div>');
			redirect('user');
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
			'password' => password_hash($this->input->post('inputPassword'), PASSWORD_BCRYPT)
		);

		if ($this->user->insertPetugas($data)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" rule="alert"> Data Berhasil disimpan! </div>');
			redirect(base_url('User/petugas'));
		}
	}

	public function removeMember($id)
	{
		$query = $this->user->deleteMember($id);
		if($query === true){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" rule="alert"> Data Berhasil disimpan! </div>');
			redirect(base_url('User'));
		}
	}

	public function editMember($key)
	{
		$data['title'] = "Edit Member";
		$data['member'] = $this->user->getMember($key)->row();
		$this->load->view('template/header', $data);
		//Body
		$this->load->view('v_member_edit', $data);
		$this->load->view('template/footer');
	}

	public function editPetugas($key)
	{
		$data['title'] = "Edit Member";
		$data['petugas'] = $this->user->getPetugas($key)->row();
		$this->load->view('template/header', $data);
		//Body
		$this->load->view('v_petugas_edit', $data);
		$this->load->view('template/footer');
	}

	public function updateMember()
	{
		$id_user = $this->input->post('id_user');
		$data = array(
			// "key" => "value"
			// "kolom pada database" => 'fullname' => $this->input->post('attribute_name'),
			'email'		=> $this->input->post('inputEmail'),
			'fullname' => $this->input->post('inputFullname'),
			'place' => $this->input->post('inputPlace'),
			'birthdate' => $this->input->post('inputBd'),
			'gender' => $this->input->post('inputGender'),
			'status' => "member"
		);

		$query = $this->user->ubahMember($data, $id_user);
		if($query == true){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" rule="alert"> Data Berhasil disimpan! </div>');
			redirect(base_url('User'));
		}
	}

	
}
 