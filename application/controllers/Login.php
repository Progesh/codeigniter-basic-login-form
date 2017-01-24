<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Common','common');
	}

	public function index($msg=NULL){
		$data['msg'] = $msg;
		$this->load->view('login',$data);
	}

	public function check_login(){
		$username=$this->security->xss_clean($this->input->post('username'));
		$password=$this->security->xss_clean($this->input->post('password'));
		
		$status=$this->common->validate($username,$password);
		if($status){
			redirect('welcome/index');
		}else{
			$msg="Invalid username or password";
			$this->index($msg);
		}
	}

}
