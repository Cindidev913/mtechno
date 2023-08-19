<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="M Fikri Setiadi" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

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
							<li class="active"><a href="<?php echo base_url() . 'about' ?>">About</a></li>
							<li><a href="<?php echo base_url() . 'portfolio' ?>">Portfolio</a></li>
							<li><a href="<?php echo base_url() . 'gallery' ?>">Gallery</a></li>
							<li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>
							<li class="cta"><a href="<?php echo base_url() . 'portfolio' ?>">Get started</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>


		<aside id="fh5co-hero" clsas="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/aboutwebgen.png' ?>);">
						<div class="overlay-gradient"></div>
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

		<div class="fh5co-about animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>About Us</h2>
				<p>Web Genius merupakan Startup dari Indonesia yang bergerak di bidang teknologi, terutama dibagian jasa pembuatan website digital, mulai dari website E-Commerece, Bisnis, Portfolio dan Masih banyak lagi. Menciptakan Teknologi yang modern dan nyaman digunakan itu adalah tujuan kami.</p>
			</div>
			<div class="container">
				<div class="col-md-6">
					<figure>
						<img src="<?php echo base_url() . 'theme/images/about.jpeg' ?>" alt="Free HTML5 Template" class="img-responsive">
					</figure>
				</div>
				<div class="col-md-6">
					<h3>Visi</h3>
					<ul>
						<li>Menjadi perusahaan terbuka berskala nasional terkemuka yang dikenal sebagai mitra yang dapat menyediakan solusi teknologi informasi terbaik untuk masyarakat Indonesia pada umumnya dan perusahaan-perusahaan pada khususnya.</li>

					</ul>
					<h3>Misi</h3>
					<ul>
						<li>MMengutamakan profesionalisme dan kompetensi tim untuk menghasilkan sistem terintegrasi antara satu dengan lainnya yang dapat membantu mengurangi permasalahan dan dapat meningkatkan pertumbuhan laba pelanggan kami.</li>
						<li>Membuat struktur dan desain website yang SEO, ringan, responsive, dan mobile friendly bagi klien.</li>
						<li>Mengubah tantangan teknologi informasi menjadi peluang dan solusi bermanfaat untuk masyarakat pada umumnya dan untuk perusahaan-perusahaan pada khususnya.</li>
						<li>Menjalin kerja sama dengan business partner dalam mendistribusikan produk unggulan maupun solusi teknologi informasi.</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="fh5co-team animate-box">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>The Team</h2>
						<p>The Best Team in Web Genius</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url() . 'theme/images/profilegani.jpg' ?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Gani Ramadhan</h3>
						<h4>Web Developer and Software Testing</h4>
						<!-- <p>Gani Ramadhan adalah seorang Software Enginer di salah satu startup besar di Jepang</p> -->

					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url() . 'theme/images/cindi.jpg' ?>" alt="Free HTML5 Bootstrap Template" class="img-responsive" width="270px" height="250px">
						<h3>Cindi Widiawati</h3>
						<h4>Human Resource Development</h4>
						<!-- <p>Cindy Widiawati adalah seorang web designer lulusan perguruan tinggi di daerah Bandung</p> -->

					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url() . 'theme/images/fajar.jpg' ?>" alt="Free HTML5 Bootstrap Template" class="img-responsive" width="350px" height="350px">
						<h3>Muhammad Fajar</h3>
						<h4>CEO Web Genius</h4>
						<!-- <p>Muhammad Fajar adalah CEO di Web Genius</p> -->

					</div>
				</div>
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