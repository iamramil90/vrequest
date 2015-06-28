<?php

class Login_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}

	public function user_auth($username,$password){

		$query = $this->db->query("SELECT * FROM user_information WHERE employee_id = '$username' AND
						 password='$password' AND is_active = 1 LIMIT 1");

		return $query;
	}

	public function user_validation(){

		$user = $this->session->userdata();
		
		if( ! isset($user['log_in'])){
			redirect('login');
		}

	}

}