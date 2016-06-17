<!doctype html>
<html lang="en">
<!-- Mirrored from themes-pixeden.com/demos/levo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2015 10:19:56 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Levo Admin Theme</title>

	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>resource/admin_assets/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>resource/admin_assets/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>resource/admin_assets/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>resource/admin_assets/touch-icon-ipad-retina.png" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>resource/admin_assets/favicon.ico" />

	<link href="<?php echo base_url(); ?>resource/admin_assets/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
	<!--
    <link rel="stylesheet" href="../../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/admin_assets/jquery-jvectormap-1.2.2/jquery-jvectormap-1.2.2.css"/>
	<link href="<?php echo base_url(); ?>resource/admin_assets/css/style.css" rel="stylesheet" />
    
	<!-- Scripts -->
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/amcharts/amcharts.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/amcharts/serial.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/amcharts/pie.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/chart.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/map.js"></script>
	<script src="<?php echo base_url(); ?>resource/admin_assets/jquery-jvectormap-1.2.2/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>resource/admin_assets/jquery-jvectormap-1.2.2/jquery-jvectormap-us-aea-en.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resource/admin_assets/js/main.js"></script>

</head>
<body>
	
    <!-- Here is where top bar (header) section lies -->
    <?php $this->load->view($header_template); ?>
    <!-- Here is where top bar (header) section lies -->

	<div class="wrapper">
        <!-- Here is where main-nav (leftnav )  section lies -->
        <?php $this->load->view($left_nav_template); ?>
        <!-- Here is where main-nav (leftnav )  section lies -->
        
        <!-- Here is where content section lies -->
        <?php $this->load->view($body_template); ?>
        <!-- Here is where content section lies -->
        
	     <!-- Here is where foooter content section lies -->
         <?php $this->load->view($footer_template); ?>
         <!-- Here is where foooter content section lies -->
	</div> <!-- /wrapper -->
	</body>

   
<!-- Mirrored from themes-pixeden.com/demos/levo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Jun 2015 10:20:39 GMT -->
</html>