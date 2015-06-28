<?php

class Login extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$user = $this->session->userdata();
	}

	public function index(){
		
		if(isset($user['log_in']) == 1){
			redirect('home');
		}else{

			$data['title'] = "Login";
			$this->load->view('login',$data);

		}

		
	} 

	public function user_auth(){

		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$this->load->model('login_model');
		$result = $this->login_model->user_auth($username,$password);
		$user = $result->row();

		if($result->num_rows()){

			$userdata = array(
				"user_id" => $user->user_id,
				"first_name" => $user->first_name,
				"employee_id" => $user->employee_id,
				"username" => $user->username,
				"fullname" => $user->first_name . " " . $user->last_name,
				"log_in" => true

			);

			$this->session->set_userdata($userdata);
			redirect("home");
		}else{

			$this->session->set_flashdata('error', 'username and password does not match.');
			redirect("/");
		}
	}

	public function user_logout(){

		unset($user['log_in']);
		redirect('login');
	}

}