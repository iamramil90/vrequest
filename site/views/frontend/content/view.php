<?php
	$item   =  $collection->row();
?>
<div class="view-details">
	<h1>Request Details</h1>
	<table border="0" style="border-collapse:collapse;width:70%" cellpadding="15px">
		<tr>
			<td><span class="label">Requestor: </span></td>
			<td><?php echo $item->requestor_name ?></span></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><span class="label">Vehicle's Name:</span></td>
			<td><?php echo $item->vehicle_name ?></td>
			<td><span class="label">Plate No.:</span></td>
			<td><?php echo $item->vehicle_plate_no ?></td>
		</tr>
		<tr>
			<td><span class="label">Request Location:</span></td>
			<td><?php echo $item->request_location ?></td>
			<td><span class="label">Date:</td>
			<td>
				<?php 
					$date_time = strtotime($item->request_date);
					echo date('F d, Y h:i:s a',$date_time);
				?>
			</td>
		</tr>
		<tr>
			<td><span class="label">Status:</span></td>
			<td><?php echo $this->status->gettext($item->request_status) ?></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</div>

<div class="history-list">
	<span class="handle"><i class="fa fa-history"></i>  By the minute history</span>
	<div class="h-list">
		<ul>
		<?php
		foreach($logs->result() as $row){ ?>
			<li>
			<div class="d"><b>
					<?php 
					$date_time = strtotime($row->date_created);
					echo date('F d, Y h:i:s a',$date_time);
					?></b>
			</div>
			<div>
				<?php echo "Status: " . $this->status->gettext($row->request_status) ?>
			</div>
			<div class="h">
				<?php 
					$data = json_decode($row->details,true);
					foreach($data as $key  => $value){ 
						if($value != ""){
					?>
					<div><?php echo ucwords(str_replace("_"," ",$key)) ?>:</div>
					<div><?php echo $value ?> | </div>
					<?php } } ?>
			</div>
			</li>

		<?php 	} ?>
		</ul>
	</div>
</div>

<script type="text/javascript">
	js = jQuery.noConflict();

	js(document).ready(function(){
		js(".handle").click(function(){
			js(".h-list").slideToggle();
		});

	});
</script>