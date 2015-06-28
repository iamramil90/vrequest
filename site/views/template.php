<html>
<head>
	<title><?php echo $title ?></title>
	<?php  $this->load->view('frontend/html/head');  ?>
</head>
<body>
	<div class="page">
		<?php echo $header ?>
		<div class="main">
			<div class="content">
				<?php  $this->load->view('frontend/html/notice');  ?>
				<?php echo $content; ?> 
			</div>
		</div>
		<div class="sidebar">
			<?php echo $sidebar ?> 
		<div></div
	</div>
</body>
</html>