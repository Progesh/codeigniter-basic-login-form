<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Model {

	public function validate($username,$password){
		$this->db->where(array('username'=>$username,'password'=>$password));
		$query=$this->db->get('user');
		
		if($query->num_rows()==1){
			$result=$query->result();
			$data=array(
				'id'=>$result[0]->id,
				'username'=>$result[0]->username,
				'validated' => true
				);
			$this->session->set_userdata($data);
            return true;
		}else{
			return false;
		}
	}
}
