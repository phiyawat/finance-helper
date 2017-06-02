<!DOCTYPE html>
<?php
//error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
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
	<link href="css/jquery.growl.css" rel="stylesheet" type="text/css" />
	<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
	<!-- =======================================================
        Theme Name: Shuffle
        Theme URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
	<script src="js/jquery.growl.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>

	
	

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
								<li class="active"><a href="search.php">search</a></li>
								<li class="active"><a href="profile.php">profile</a></li>
								<li class="active"><a href="how-to.php">Help</a></li>
								<li class="active"><a href="index.php">logout</a></li>
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
	<br><br><br>

	<form action = "list-finance.php" method = "post" onsubmit = Submit()>
	<center>
		Num Account &nbsp;&nbsp;&nbsp;
		<input type="text" name="f_num_ac" value="" size="3" maxlength="3" required autofocus> 
		&nbsp;&nbsp;&nbsp; Name Account &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" name="f_name_ac" value="" size="30" required autofocus> 
		<br><br>date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input class="datepicker" name = "f_date" value="yyyy/mm/dd">
		<br><br> &nbsp; money &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<input type="text" name="f_amount" value="" size="10" required autofocus> 
		<br><br>&nbsp; Status &nbsp;
		<input type="radio" name="f_status" value="0" required autofocus> 
		Debit &nbsp;
		<input type="radio" name="f_status" value="1" required autofocus> 
		Credit
		<br><br> Details &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<textarea name="f_detail" rows="2" cols="40">
        </textarea>
		<br><br>
		<input class="btn btn-skin" type = "submit" value = "submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="check.php" class="btn btn-skin" role="button">check</a>
	

	</center>
	</form>

		<script>
		function Submit(){
		$(function() {
    	$.growl.notice({ 
			title: "Insert success", 
			message: "" });
		});
		}

		$('.datepicker').datepicker({
		weekStart:1
		})

		</script>



	<!-- /Section: about -->
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
	<script src="js/jquery.growl.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>

</body>

</html>