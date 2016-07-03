<div id="notice">
	<?php if($this->session->flashdata('success') != ""){ ?>
	<p class="uk-alert uk-alert-success"><?php echo $this->session->flashdata('success')?></p>
 	<?php } ?>
 	<?php if($this->session->flashdata('error') != ""){ ?>
	<p class="uk-alert uk-alert-danger"><?php echo $this->session->flashdata('error')?></p>
 	<?php } ?>
</div>