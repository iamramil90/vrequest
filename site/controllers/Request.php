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

		$result = $this->request_model->get_collection_bypage($user_id);
		$user['collection'] = $result;
		$user['total_collection'] =  $this->request_model->get_collection($user_id)->num_rows();

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

	public function view($page_id){

		$user['info'] = $this->session->userdata();
		$user['collection'] = $this->request_model->get_collection_by_id($page_id);
		$user['logs'] = $this->request_model->get_logs($page_id);
		$user['page_id'] = $page_id;
		$data['title'] = "Request Vehicle"; 
		$data['content'] = $this->load->view('frontend/content/view',$user,true);
		$data['header'] = $this->load->view('frontend/html/header',$user,true);
		$data['sidebar'] = $this->load->view('frontend/html/sidebar',null,true);
		$this->load->view('template',$data);
	}
	public function add_new(){


		$user = $this->session->userdata();
		$post_data = $this->input->post();



		$post_data['requestor_id'] = $user['user_id'];
		$post_data['requestor_name'] = $user['fullname'];


		$this->request_model->insert_to_request_table($post_data);

		redirect('request');
	}

}