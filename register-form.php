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

		</div>
		<!-- Controls -->
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
								<li class="active"><a href="index.php">Home</a></li>
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
	<br><br>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
				<div class="section-heading text-center">
					<h2 class="h-bold">Register</h2><br><br>
				</div>
			</div>
		</div>
	</div>
	<form action = "register.php" method = "post">
	<center>
		ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="m_id" value="" autocomplete = "on" required autofocus>
		<br><br> Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="password" name="m_pass" value="" autocomplete = "off" required autofocus>
		<br><br> Firstname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="m_fname" value="" autocomplete = "on" required autofocus>
		<br><br> Lastname &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="m_lname" value="" autocomplete = "on" required autofocus>
		<br><br>Storename &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="s_name" value="" autocomplete = "on" required autofocus>
				<br><br> Storeaddress &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<textarea name="s_address" rows="2" cols="20" autocomplete = "on">
        </textarea>
				<br><br> Owner &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="s_owner" value="" autocomplete = "on" required autofocus><br><br>
				<input class="btn btn-skin" type = "submit" value = "submit">
	</center>
	</form>

	<!-- /Section: about -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>