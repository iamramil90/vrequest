<?php

class Master extends CI_Controller{


	public function index(){

		$data['title'] = "Welcome";
		$data['content'] = $this->load->view('login',null,true);
		$this->load->view('template',$data);
	}

}