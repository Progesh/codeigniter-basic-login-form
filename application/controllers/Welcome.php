<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('validated')){
            redirect('login');
        }
	}

	public function index(){
		$this->load->view('home');
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
