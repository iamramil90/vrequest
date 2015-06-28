<?php

class Home extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->library('status');
		$this->load->model('request_model');
		
		$this->load->model('login_model');
		$this->login_model->user_validation();
	}

	public function index(){

		$user['info'] = $this->session->userdata();
		$user_id = $user['info']['user_id'];

		$result = $this->request_model->get_collection($user_id);
		$user['collection'] = $result;

		$data['title'] = "Request Vehicle"; 
		$data['content'] = $this->load->view('frontend/content/grid',$user,true);
		$data['header'] = $this->load->view('frontend/html/header',$user,true);
		$data['sidebar'] = $this->load->view('frontend/html/sidebar',null,true);
		$this->load->view('template',$data);
	}
}