<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rak extends CI_Controller {

	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Rack_model', 'rack');
	}

	public function index()
	{

		$data['title'] = "List Rak";
		$this->load->view('template/header', $data);
		//Body

		$data['listRack'] = $this->rack->showRack();
		$this->load->view('v_rack', $data);
		$this->load->view('template/footer');
	}

	public function addrack()
	{

		$this->form_validation->set_rules('inputRack', 'Nama Rak', 'trim|required|max_length[100]');

		if ($this->form_validation->run() == false) {
			$data['title'] = "Add Rack";
			$this->load->view('template/header', $data);
			//Body
	
			$data['listRack'] = $this->rack->showRack();
			$this->load->view('v_rack_add', $data);
			$this->load->view('template/footer');
		}
		else {
			$this->saveRack();
		}
	}

	public function saveRack()
	{
		$data = [
			'id_rack' => null,
			'name' => $this->input->post('inputRack')
		];

		$query = $this->rack->insertRack($data);
		if($query){
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" rule="alert"> Data Berhasil disimpan! </div>');
			redirect('rak');
		}
	}

	public function removeRack($key)
	{
		$query = $this->rack->deleteRack($key);
		if($query === true)
		{
			echo "Data berhasil dihapus";
		}
	}
}
