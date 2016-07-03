<div class="header sticky">
	<div id="logo" class="fl">
		<a href="<?php echo base_url() ?>">Vehicles Request System</a>
	</div>
	<div class="fr">
		<ul class="tabs">
			<li class="calendar ">
				<div class="uk-text-bold"><?php echo date("F d, Y : h:i:s a") ?></div>
			</li>
			<li>
				<i class="fa  fa-bell fa-fw"></i> 
			</li>
			<li >
				
				<i class="fa fa-user fa-fw pointer"></i>
				<span class="pointer"><?php echo "Hi " . $info['first_name'] . "!" ?>&nbsp;</span>
				<ul>
					<li>
						<a href="">
							<i class="fa fa-user"></i>User Profile
						</a> 
					</li>
					<li><a href="">
							<i class="fa fa-cogs"></i>Settings
						</a> 
					</li>
					<li>
						<a href="<?php echo base_url('login/user_logout') ?>">
							<i class="fa fa-sign-out"></i>Logout
						</a> 
					</li>
				</ul>
			</li> 
		</ul>
	</div>
</div>

