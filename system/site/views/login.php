<!DOCTYPE html>
<html>
<head>

<!-- Begin meta tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="resource-type" content="document" />
<meta name="language" content="en" />
<link href="<?php echo base_url();?>system/site/themes/site/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />

<base href="<?php echo base_url();?>" />

<!-- Begin stylesheets -->
<link href="<?php echo base_url();?>system/site/themes/site/css/style.css" type="text/css" rel="stylesheet" />
<!-- End stylesheets -->

<!-- Load jQuery Before Modules/Widgets -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script>window.jQuery || document.write("\x3Cscript src='<?php echo base_url(); ?>system/site/themes/site/js/jquery/jquery.min.js'>\x3C/script>")</script>
<!-- End jquery -->

<link rel="canonical" href="<?php echo site_url();?>" />
<meta name="keywords" content="" />
<meta name="description" content="" />

<title>EnA Space&nbsp;&bull;&nbsp;Enter with Love</title>

</head>

<body>
	<!-- Begin pageWrapper -->
	<div id="container">

		<!-- Begin header -->
		<header>
			<!-- Begin logo -->
			<div id="logo"></div>
			<!-- End logo -->		
		</header>
		<!-- End header -->

		<div id="content-body">
			<div id="login-box">
				<?php echo form_open('users/login'); ?>
					<ul id="login-ul">
						<li>
							<div class="txt"><input class="txtbox" type="text" name="email" placeholder="Username" /></div>
						</li>
						<li>
							<div class="txt"><input class="txtbox" type="password" name="password" placeholder="Password"/></div>
						</li>
						<li>
							<input class="remember" class="remember" id="remember"
								type="checkbox" name="remember" value="1" />&nbsp;
							<label for="remember"
								class="remember">Remember</label>
						</li>
						<li>
							<input class="loginbtn" type="submit" name="submit" value="Enter" />
						</li>
					</ul>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<!-- End pageWrapper -->
	
	<!-- Begin footer -->
	<footer>
		<div class="wrapper">
			<p>Copyright &copy; 2008 - <?php echo date('Y'); ?> Arbitrarily Arbit</p>
		</div>
	</footer>
	<!-- End footer -->
	
	<!-- Begin scripts -->
	<!-- Load JS files here -->
	<script src="<?php echo base_url(); ?>system/site/themes/site/js/app.js"></script>
	<!-- End scripts -->
</body>
</html>