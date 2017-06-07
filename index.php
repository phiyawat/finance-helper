<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Shuffle bootstrap 3 one page template</title>

	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
	<link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/animate.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<!-- =======================================================
        Theme Name: Shuffle
        Theme URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

	<section id="intro" class="home-slide text-light">

		<!-- Carousel -->
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/slide1.jpg" alt="First slide">
					<!-- Static Header -->
					<!-- /header-text -->
				</div>
				<div class="item">
					<img src="img/slide2.jpg" alt="Second slide">
					<!-- Static Header -->
					<!-- /header-text -->
				</div>
				<div class="item">
					<img src="img/slide3.jpg" alt="Third slide">
					<!-- Static Header -->
					<!-- /header-text -->
				</div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<!-- /carousel -->

	</section>
	<!-- /Section: intro -->


	<!-- Navigation -->
	<div id="navigation">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="site-logo">
							<a href="#" class="brand">Finance&nbsp;Helper</a>
						</div>
					</div>


					<div class="col-md-10">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="menu">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#intro">Home</a></li>
								<li><a href="#login">Login</a></li>
								<li><a href="#team">team</a></li>
								<!--
								<li><a href="#service">Services</a></li>
								<li><a href="#works">Works</a></li>

								<li><a href="#contact">Contact</a></li>
								-->
							</ul>
						</div>
						<!-- /.Navbar-collapse -->

					</div>
				</div>
			</div>
			<!-- /.container -->
		</nav>
	</div>
	<!-- /Navigation -->

	<!-- Section: about -->
	<section id="login" class="home-section color-dark bg-white">
		<form action="login.php" method="post">
			<center>
				<br><br><br><br>
				<?php
			    //check error on php if password wrong!!
				if(isset($_REQUEST['error']) == TRUE){
				echo "<script>alert('wrong id or password');
				window.location.href='index.php';</script>";
				}
				?>
				ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "text" name = "m_id" value = ""><br><br> Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "password" name = "m_password" value = ""><br><br>
				<input class = "btn btn-skin" type = "submit" value = "login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href = "register-form.php" class = "btn btn-skin" role = "button">register</a><br><br>
			    
				<br><br><br><br>

			</center>
		</form>
	</section>
	<!-- /Section: about -->

	<!-- Section: services -->
	<section id="team" class="home-section color-dark bg-gray">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
						<div class="section-heading text-center">
							<h2 class="h-bold">Team</h2>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="text-center">
			<div class="container">

				<div class="row">
					<div class="col-md-4">
						<div class="wow fadeInLeft" data-wow-delay="0.2s">
							<div class="service-box">
								<div class="service-icon">
										<img src="img/code.gif" width = "40%" height = "40%" ></img>
								</div>
								<div class="service-desc">
									<h5>Developer</h5>
									<p>
										5809680043 ปิยวัฒน์ วงศ์สวัสดิ์<br>
										Email: phiyawat9597@gmail.com
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="wow fadeInUp" data-wow-delay="0.2s">
							<div class="service-box">
								<div class="service-icon">
									<img src="img/web.gif" width = "50%" height = "50%" ></img>
								</div>
								<div class="service-desc">
									<h5>Web Design</h5>
									<p>
										5709680150 พรนิชา ธนโชคพงศ์<br>
										Email: firm_14206@hotmail.com
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="wow fadeInUp" data-wow-delay="0.2s">
							<div class="service-box">
								<div class="service-icon">
									<img src="img/document.gif" width = "30%" height = "30%" ></img>
								</div>
								<div class="service-desc">
									<h5>Document</h5>
									<p>
										5709680184 ปัญจรีย์ สืบจันทร์<br>
										Email: pries_my@hotmail.com
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: services -->




	<!-- Core JavaScript Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>