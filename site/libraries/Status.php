<?php

class Status{

	public function gettext($id){

		$status_text = array();

		$status_text[1] = "<span class='st pending'>Pending</span>";
		$status_text[2] = "<span class='st declined'>Declined</span>";
		$status_text[3] = "<span class='st approved'>Approved</span>";
		$status_text[4] = "<span class='st closed'>Closed</span>";

		return $status_text[$id];
	}
}

?>