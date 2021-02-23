<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_book_model', "book");
	}

	public function index()
	{
		$data['title'] = "List Buku";
		$data['listBook'] = $this->book->showBook();
		$this->load->view('template/header', $data);
		//Body
		$this->load->view('v_buku', $data);
		$this->load->view('template/footer');
	}

	public function addbook()
	{

		$this->form_validation->set_rules('inputTitle', 'Title', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('inputAuthor', 'Author', 'trim|required|min_length[5]|max_length[100]');
		$this->form_validation->set_rules('inputYear', 'Year', 'trim|required');
		$this->form_validation->set_rules('inputDesc', 'Description', 'trim|required');
		

		if($this->form_validation->run() == false) {
				
			$data['title'] = "Add Buku";
			$this->load->view('template/header', $data);
			//Body
			$this->load->view('v_buku_add');
			$this->load->view('template/footer');
		}
		else {
			$this->saveBook();
		}

	}

	public function saveBook()
	{
		$data = [
			'id_book' => null,
			'title' => $this->input->post('inputTitle'),
			'author' => $this->input->post('inputAuthor'),
			'year' => $this->input->post('inputYear'),
			'description' => $this->input->post('inputDesc'),
			'id_rack' => null
		];

		$query = $this->book->insertBook($data);
		if($query){
			//Tampilkan jika data berhasil disimpan
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" rule="alert"> Data Berhasil disimpan! </div>');
			redirect('buku');
		}
	}

	public function removeBook($id)
	{
		$this->book->deleteBook($id);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" rule="alert"> Data Berhasil di Hapus! </div>');
		redirect('buku');
	}

}
