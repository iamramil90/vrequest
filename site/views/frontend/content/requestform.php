<div class="requestform">
	<div class="inner">
		<h1>Request Vehicle Form</h1>
		<form action="<?php echo base_url('request/add_new') ?>" method="post">
			<div class="fields">
				<label for="vehicle_name">Vehicle Name</label><br>
				<input type="text" id="vehicle_name" name="vehicle_name" class="input-text"/>
			</div>
			<div class="fields">
				<label for="vehicle_plate_no">Plate No.</label><br>
				<input type="text" id="vehicle_plate_no" name="vehicle_plate_no" class="input-text"/>
			</div>
			<div class="fields">
				<label for="request_date">Request Date</label><br>
				<input type="text" id="request_date" name="request_date" class="input-text date"/>
			</div>
			<div class="fields">
				<label for="request_location">Location</label><br>
				<input type="text" id="request_location" name="request_location" class="input-text"/>
			</div>
			<div class="">
				
				<input type="submit"  value="Submit" class="button"/>
			</div>
		<form>
	</div>
</div>