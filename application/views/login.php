<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>Sistem Monitoring KP</title> 
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
					<a class="navbar-brand" href="#contact"><h1><img src="<?php echo base_url().'/asset_umum/images/logo1.png';?>" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="">Login</a>
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

	<section id="contact">
		<div class="container">
			<div class="row text-center clearfix">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="contact-heading">
						<h2 class="title-one">Login Page</h2>
						<p>Monitoring Kerja Praktek</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="contact-details">
				<div class="pattern"></div>
					<div class="row text-center clearfix">

						<div class="col-sm-12"> 
							<div id="contact-form-section">
								<div class="status alert alert-success" style="display: none"></div>
									<form id="contact-form" class="contact" name="contact-form" method="post" action="<?php echo site_url('auth/cek_login')?>">
							            <fieldset>
							              <div class="form-group">
							                <input class="form-control" placeholder="Username" name="username" type="text" autofocus=""> </div>
							              <div class="form-group">
							                <input class="form-control" placeholder="Password" name="password" type="password" value=""> </div>
							              <br><br>
							              <input class="btn btn-primary" type="submit" value="LOGIN"></td>
							              <hr> 
							            </fieldset>
							        </form>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="contact-address">
								<address><p><span>Departemen </span>Sistem Informasi</p><strong>
								Sekretariat <br>
								Lt. 2 Gd. Lama FTIf ITS <br>
								Institut Teknologi Sepuluh Nopember, Sukolilo <br>
								Surabaya, 60111 <br>
								Indonesia <br>
								Phone: +62 31 5999944 <br> </strong>
								</address>
								<div class="social-icons">
					           		    <a href="https://ms-my.facebook.com/pages/Jurusan-Sistem-Informasi-ITS/149235835122966" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
					           		    <a href="https://www.instagram.com/hmsi_its/" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
					            		    <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=jurusan@is.its.ac.id&su=Hello&shva=1" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>	       
								</div>
							</div>
						</div>
						
					</div>
			</div>
		</div> 
	</section> <!--/#contact--> 

	<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2017 - <a href="http://is.its.ac.id/">Information System Department</a> | ITS </p> 
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
