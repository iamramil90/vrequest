<div id="notice">
	<?php if($this->session->flashdata('success') != ""){ ?>
	<p class="success"><?php echo $this->session->flashdata('success')?></p>
 	<?php } ?>
 	<?php if($this->session->flashdata('success') != ""){ ?>
	<p class="success"><?php echo $this->session->flashdata('error')?></p>
 	<?php } ?>
</div>