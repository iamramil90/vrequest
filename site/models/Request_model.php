<?php

class Request_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}

	public function get_collection($user_id){

		$query = $this->db->query("SELECT e.*,log.* FROM request_information_table as e INNER JOIN request_logs as log
								ON e.request_id = log.request_id INNER JOIN( 
										SELECT request_id, MAX(date_created) maxDate
     								     FROM request_logs 
									        GROUP BY request_id
									    ) b ON log.request_id = b.request_id AND
									            log.date_created = b.maxDate WHERE e.requestor_id = '$user_id' ORDER BY e.date_created DESC");
		return $query;
	}

	public function get_collection_by_id($request_id){
		$query = $this->db->query("SELECT e.*,log.* FROM request_information_table as e INNER JOIN request_logs as log
								ON e.request_id = log.request_id INNER JOIN( 
										SELECT request_id, MAX(date_created) maxDate
     								     FROM request_logs 
									        GROUP BY request_id
									    ) b ON log.request_id = b.request_id AND
									            log.date_created = b.maxDate WHERE e.request_id = '$request_id' ORDER BY e.date_created DESC");
		return $query;
	}

	public function get_logs($request_id){

		$query = $this->db->query("SELECT * FROM request_logs WHERE request_id = '$request_id'");
		

		return $query;

	}

	public function insert_to_request_table($data){

		$this->db->insert('request_information_table', $data);

		if($this->db->affected_rows() >= 1){

			$last_id = $this->db->insert_id();
			$this->insert_logs($last_id,$data);
			$this->session->set_flashdata('success', 'Congratulation! Your request has been successfully submitted.');
		}
	
	}

	public function insert_logs($last_id,$data){

		$log_data = array(
				'request_id' => $last_id,
				'request_status' => 1,
				'details' => json_encode($data)
		);

		$this->db->insert('request_logs',$log_data);

	}

}
?>