<div class="grid uk-block">
	<h2 class="uk-h2"> Manage Requests</h2>
	<hr>
	<div class="">
		<table class="tblgrid uk-table uk-table-hover uk-table-striped">

			<thead>
			<th>Request ID</th>
			<th>Vehicle Name</th>
			<th>Request Date</th>
			<th>Status</th>
			<th></th>

			</thead>

		<tbody>

		</tbody>

		</table>
		<div class="uk-block">

			<ul class="uk-pagination " data-ajax-url="<?php echo base_url('collection/request_details') ?>" data-uk-pagination="{items:<?php echo $total_collection ?>, itemsOnPage:<?php echo Config::PAGE_LIMIT ?>,lblPrev: 'Prev', lblNext: 'Next'}">

			</ul>
		</div>

	</div>
</div>