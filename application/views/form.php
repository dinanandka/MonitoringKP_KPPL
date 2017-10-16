<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>Laporan Kerja Praktik</title> 
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
					<a class="navbar-brand" href="<?php echo base_url().'/index.php/c_user/';?>"><h1><img src="<?php echo base_url().'/asset_umum/images/logo1.png';?>" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#laporan">Laporan</a></li>
						<li class="scroll"><a href="<?php echo base_url('index.php/c_user/logout');?>">Logout</a></li>
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

<section id="laporan">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">Laporan</h2>
				<p>Tulis laporan mu dan submit!</p>
			</div>
		</div>
		</div>
					<div class="col-sm-12">
								<div class="status alert alert-success" style="display: none"></div>
									<form id="contact-form" class="contact" name="contact-form" method="post" action="<?php echo site_url('crud/tambah_aksi')?>">
							            <fieldset>
							             <div class="col-sm-3"> 
							              <div class="form-group">
							              <h5>Tanggal :</h5>
							                <input placeholder="mm/dd/yyyy" name="tanggal" type="date" autofocus="" required data-validation-required-message="Tanggal harus di input"> 
											<p class="help-block text-danger"></p>
											</div>
											<div class="form-group">
							              <h5>Nama :</h5>
							                <input value="<?php echo $this->session->userdata("username"); ?>" name="nama" type="text" autofocus="" required data-validation-required-message="Siapa nama anda?"> 
											<p class="help-block text-danger"></p>
											</div>
											<div class="form-group">
							              <h5>Nama Dosen Pembimbing :</h5>
							                <input placeholder="Dosen Pembimbing" name="dospem" type="text" value="" required data-validation-required-message="Siapa nama dosen pembimbing anda?"> 
											<p class="help-block text-danger"></p>
											</div>
							                </div>
							                <br></br>
							                <div class="col-sm-12"> 
							                <div class="form-group"> 
							              <h5>Judul :</h5>
							                <textarea rows="1" cols="30" name="topik" type="text" value="" required data-validation-required-message="Judul harus dimasukkan"> </textarea></div>
							                <div class="form-group">
							              <h5>Isi :</h5>
							                <textarea cols="100" rows="10"  name="isi" type="text" value="" required data-validation-required-message="Harus ada isinya"> </textarea></div></div>
							              <br></br>
							              <br></br>
							              <div class="col-sm-12"> 
							              <input class="btn btn-primary" type="submit" value="SUBMIT"></td>
							              </div>
							              <hr> 
							            </fieldset>
							        </form>
						</div>
				
				</div>
			</div>
		</div>
	</section> 


	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/jquery.js';?>"></script> 
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/bootstrap.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/smoothscroll.js';?>"></script> 
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/jquery.isotope.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/jquery.prettyPhoto.js';?>"></script> 
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/jquery.parallax.js';?>"></script> 
	<script type="text/javascript" src="<?php echo base_url().'/asset_umum/js/main.js';?>"></script> 
</body>
</html>