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
		$data['title'] = "Add Rack";
		$this->load->view('template/header', $data);
		//Body

		$data['listRack'] = $this->rack->showRack();
		$this->load->view('v_rack_add', $data);
		$this->load->view('template/footer');
	}

	public function saveRack()
	{
		$data = [
			'id_rack' => null,
			'name' => $this->input->post('inputName')
		];

		$query = $this->rack->insertRack($data);
		if($query){
			echo "Data berhasil disimpan";
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
