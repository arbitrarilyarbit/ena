<!DOCTYPE html>
<html>
<head>
	<?php file_partial('metadata'); ?>
</head>
<body>
	<!-- Begin pageWrapper -->
	<div id="container">
		<?php file_partial('header'); ?>
		<div id="content-body">
			<?php echo $template['body']; ?>
		</div>
	</div>
	<!-- End pageWrapper -->
	
	<!-- Begin scripts -->
	<!-- Load JS files here -->
	<script src="<?php echo base_url(); ?>system/site/themes/site/js/app.js"></script>
	<!-- End scripts -->
</body>
</html>