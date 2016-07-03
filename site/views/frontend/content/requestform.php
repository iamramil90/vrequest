<div class="requestform">
	<div class="inner">
		<h1>Request Vehicle Form</h1>
		<form class="uk-form" id="formVal" action="<?php echo base_url('request/add_new') ?>" method="post">
			<div class="uk-grid ">
			<div class=" uk-width-1-1 uk-form-row uk-form-icon">
				<i class="uk-icon-automobile"></i>
				<input type="text" id="vehicle_name" placeholder="Vehicle's Name" name="vehicle_name" class="input-text required"/>
			</div>
			<div class=" uk-width-1-1 uk-form-row uk-form-icon">
				<i class="uk-icon-credit-card"></i>
				<input type="text" id="vehicle_plate_no" placeholder="Plate Number" name="vehicle_plate_no" class="input-text"/>
			</div>
			<div class=" uk-width-1-1 uk-form-row">

				<div class="uk-width-1-3 uk-align-left uk-form-icon">
					<i class="uk-icon-calendar"></i>
					<input type="text" placeholder="From" data-uk-datepicker="{format:'YYYY/MM/DD', minDate:0}" id="from_date" name="from_date" class="input-text date"/>
				</div>
				<div class="uk-width-1-3 uk-align-left  uk-form-icon">
					<i class="uk-icon-calendar"></i>
					<input type="text" placeholder="To" data-uk-datepicker="{format:'YYYY/MM/DD', minDate:0}" id="to_date" name="to_date" class="input-text date "/>
				</div>
				<div class="uk-width-1-3 hide uk-text-small" id="date_range"></div>
			</div>
			<div class="uk-width-1-1 uk-form-row uk-form-icon">
				<i class="uk-icon-location-arrow"></i>
				<input type="text" id="searchInput" placeholder="Search location" name="request_location" class="input-text "/>

			</div>
			<div class="uk-width-1-1 uk-form-row">
				<input type="submit"  value="Submit" class=" uk-button uk-button-primary"/>
			</div>
				</div>
		</form>
	</div>
</div>

<script>
	function init() {
		var input = document.getElementById('searchInput');
		var options = {

			componentRestrictions: {country: "ph"}
		};
		var autocomplete = new google.maps.places.Autocomplete(input,options);
	}

	google.maps.event.addDomListener(window, 'load', init);
</script>
