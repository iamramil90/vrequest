<?php

class Request extends CI_Controller{

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

	public function form(){

		$user['info'] = $this->session->userdata();

		$data['title'] = "Request Vehicle"; 
		$data['content'] = $this->load->view('frontend/content/requestform',$user,true);
		$data['header'] = $this->load->view('frontend/html/header',$user,true);
		$data['sidebar'] = $this->load->view('frontend/html/sidebar',null,true);
		$this->load->view('template',$data);
	}

	public function view(){

		print_r($_GET);
	}
	public function add_new(){

		
		$user = $this->session->userdata();
		$post_data = $this->input->post();

		$arr_date = array(
			'requestor_id' => $user['user_id'],
			'requestor_name' => $user['fullname'],
			'vehicle_name' => $post_data['vehicle_name'],
			'vehicle_plate_no' => $post_data['vehicle_plate_no'],
			'request_date' => $post_data['request_date'],
			'request_location' => $post_data['request_location'],
			'location_coordinates' => ""
		);

		$this->request_model->insert_to_request_table($arr_date);

		redirect('request');
	}

}