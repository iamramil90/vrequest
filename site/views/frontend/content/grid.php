<div class="grid">
	<h1> Manage Requests</h1>
	<div class="table-grid">
		<table>
			<th>Request ID</th>
			<th>Vehicle Name</th>
			<th>Request Date</th>
			<th>Status</th>
			<th></th>

		<?php
		foreach($collection->result() as $item){ ?>
		<tr>
			<td><?php echo $item->request_id ?></td>
			<td><?php echo $item->vehicle_name ?></td>
			<td>
				<?php 
					$date_time = strtotime($item->request_date);
					echo date('F d, Y H:i:s a',$date_time);
				?>

			</td>
			<td><?php echo $this->status->gettext($item->request_status) ?></td>
			<td><a href="javascript:void(0)" onclick="location.href='<?php echo base_url('request/view/'.$item->request_id)?>'">View</a></td>
		</tr>
		<?php } ?>
		</table>
	</div>
</div>