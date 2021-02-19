<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->form_validation->set_rules(
      'inputNIS', 
      'NIS', 
      'trim|required|numeric'
    );
  
    if($this->form_validation->run() == false){
      $this->load->view('v_form');
      //$this->session->set_flashdata('pesan', 'Ada yang gak beres');    
    }
    else{
      $this->session->set_flashdata('pesan', 'Sip, Validasi Sukses!');
      redirect('form');
    }
    
    //redirect('URL') => Pindah halaman secara otomati
    //redirect('Dashboard');
    
  }
}