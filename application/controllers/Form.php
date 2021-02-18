<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('session');
  }

  public function index()
  {
    $this->load->view('v_form');

    $this->form_validation->set_rules(
      'inputNIS', 
      'kolomNIS', 
      'required | numeric'
    );

    if($this->form_validation->run == true){
      
    }    
  }

}