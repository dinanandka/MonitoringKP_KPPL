<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>Sistem Monitoring KP - Sisfor ITS</title> 
	<link href="<?php echo base_url().'/asset_umum/css/bootstrap.min.css';?>" rel="stylesheet">
	<link href="<?php echo base_url().'/asset_umum/css/prettyPhoto.css';?>" rel="stylesheet"> 
	<link href="<?php echo base_url().'/asset_umum/css/font-awesome.min.css';?>" rel="stylesheet"> 
	<link href="<?php echo base_url().'/asset_umum/css/animate.css';?>" rel="stylesheet"> 
	<link href="<?php echo base_url().'/asset_umum/css/main.css';?>" rel="stylesheet">
	<link href="<?php echo base_url().'/asset_umum/css/responsive.css';?>" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'/asset_umum/images/ico/apple-touch-icon-144-precomposed.png';?>"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'/asset_umum/images/ico/apple-touch-icon-114-precomposed.png';?>"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'/asset_umum/images/ico/apple-touch-icon-72-precomposed.png';?>"> 
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'/asset_umum/images/ico/apple-touch-icon-57-precomposed.png';?>">
</head><!--/head-->
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="#navigation"><h1><img src="<?php echo base_url().'/asset_umum/images/logo1.png';?>" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll"><a href="<?php echo base_url('index.php/auth/');?>">Home</a></li>						
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(<?php echo base_url().'/asset_umum/images/slider/s1.jpg';?>)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown">MOHON MAAF! ANDA TIDAK TERDAFTAR:(</h2> 
							<p class="animated bounceInUp">Information Systems Department</p>
						</div> 
					</div> 
				</div>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--/#home-->

	<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2017 - <a href="http://is.its.ac.id/">Information Systems Department</a> | All Rights Reserved</p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 

	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/jquery.js';?>"></script> 
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/bootstrap.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/smoothscroll.js';?>"></script> 
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/jquery.isotope.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/jquery.prettyPhoto.js';?>"></script> 
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/jquery.parallax.js';?>"></script> 
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/main.js';?>"></script> 
</body>
</html>