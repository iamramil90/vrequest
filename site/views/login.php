

<html>
<head>
	<title><?php echo $title ?></title>
	<?php  $this->load->view('frontend/html/head');  ?>
</head>
<body>
	<div class="page">
	
		<div class="main">
			<div class="content">
				<div class="login-container">
					<div class="wrapper">
						<form action="<?php echo base_url('login/user_auth') ?>" method="post">
							<h2>Login</h2>
							<div class="list">
								<input type="text" value="" placeholder="Username/Employee ID" class="input-text" name="username"/>
							</div>
							<div class="list">
								<input type="password" value="" placeholder="Password" class="input-text" name="password"/>
							</div>
							<div class="list">
								<input type="submit" class="button" value="Submit"/>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>