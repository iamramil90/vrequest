<?php

class Collection extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('request_model');
    }

    public function request_details($page){

        $user['info'] = $this->session->userdata();
        $user_id = $user['info']['user_id'];
        $limit = Config::PAGE_LIMIT;

        $result = $this->request_model->get_collection_bypage($user_id,$page,$limit);

       if($result->num_rows() > 0){

           echo json_encode($result->result());
       }
    }
}