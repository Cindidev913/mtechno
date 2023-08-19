<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome To M-Technology</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="M Fikri Setiadi" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url() . 'theme/favicon.ico' ?>">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
	<?php
	error_reporting(0);
	function limit_words($string, $word_limit)
	{
		$words = explode(" ", $string);
		return implode(" ", array_splice($words, 0, $word_limit));
	}

	?>

</head>

<body>


	<div id="fh5co-page">
		<header id="fh5co-header" role="banner">
			<div class="container">
				<div class="header-inner">
					<!-- <h1><img src="<?php echo base_url(); ?>theme/images/genius.png" class="img-fluid"></h1> -->
					<nav role="navigation">
						<ul>
							<li><a href="<?php echo base_url() . '' ?>">Home</a></li>
							<li><a href="<?php echo base_url() . 'about' ?>">About</a></li>
							<li><a href="<?php echo base_url() . 'portfolio' ?>">Portfolio</a></li>
							<li><a href="<?php echo base_url() . 'gallery' ?>">Gallery</a></li>
							<li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
							<li class="cta"><a href="<?php echo base_url() . 'portfolio' ?>">Get started</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>


		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/webgenius.png' ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
								</div>
							</div>
						</div>
					</li>

					<li style="background-image: url(<?php echo base_url() . 'theme/images/webgenius2.png' ?>);">
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">

								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div id="fh5co-why-us" class="animate-box">
			<div class="container">
				<div class="row">

					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/30.svg' ?>" class="img-responsive"></span>
						<h3>WEB DEVELOPMENT</h3>
						<p>Membangun dan memelihara website dengan menggunakan bahasa pemrograman dan teknologi web untuk membuat website yang interaktif dan responsif.</p>
						<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">See our services <i class="icon-arrow-right"></i></a></p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/18.svg' ?>" class="img-responsive"></span>
						<h3>SEO MANAGEMENT</h3>
						<p>Semua website yang kami buat sudah mengikuti kaidah SEO (Search Engine Optimization), sehingga bisnis Anda dapat lebih mudah ditemukan di mesin pencari.</p>
						<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">See our services <i class="icon-arrow-right"></i></a></p>
					</div>
					<div class="col-md-4 text-center item-block">
						<span class="icon"><img src="<?php echo base_url() . 'theme/images/27.svg' ?>" class="img-responsive"></span>
						<h3>Mobile Friendly</h3>
						<p>Website yang kami buat sudah mobile friendly dan responsive. Sehingga tampilan website Anda akan menyesuaikan layar dari perangkat yang digunakan.</p>
						<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">See our services <i class="icon-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>


		<div class="fh5co-section-with-image">

			<img src="<?php echo base_url() . 'theme/images/web1.jpeg' ?>" alt="" class="img-responsive">
			<div class="fh5co-box animate-box">
				<h2>Web Genius</h2>
				<p>Jadikan bisnis Anda lebih menguntungkan dengan membuat website murah dan berkualitas bersama WebbGen yang didukung hosting premium dari WebGen. Saat ini, lebih dari 500 perusahaan telah mempercayakan pembuatan websitenya kepada kami.</p>
				<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">See our services<i class="icon-arrow-right"></i></a></p>
			</div>

		</div>


		<?php $this->load->view('v_footer'); ?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>