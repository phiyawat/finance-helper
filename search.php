<!DOCTYPE html>
<?php
//error_reporting(E_ALL ^ E_NOTICE);
session_start();
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "finance_db";

    $conn = new mysqli($servername,$username,$password,$dbname);

    //if you want to read thai letter on web or database VERY IMPORTANT!! 
    mysqli_set_charset($conn, "utf8");

    if($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
    }
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
	<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery.growl.css" rel="stylesheet" type="text/css" />

	
	<!-- =======================================================
        Theme Name: Shuffle
        Theme URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->



    <!-- import some script here -->
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
								<li class="active"><a href="finance-helper.php">home</a></li>
								<li class="active"><a href="profile.php">profile</a></li>
								<li class="active"><a href="how-to.php">help</a></li>
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
	<br><br>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
				<div class="section-heading text-center">
					<h2 class="h-bold">SEARCH</h2><br><br>
				</div>
			</div>
			<center>
                <form action = 'search.php?search_date=true' method = 'post'>
				date (yyyy-mm-dd) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="datepicker" name = "f_date" value="yyyy/mm/dd">
				&nbsp;&nbsp;&nbsp;
			<script>
			$('.datepicker').datepicker({
			weekStart:1
			})
			</script>
				 <input class='btn btn-skin' type = 'submit' value = 'search'>
				 </form>
				 <br>

				 <form action = 'search.php?search_detail=true' method = 'post'>
				 detail book &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                <!-- make drop down -->
				<select name = "detail">

  				<?php

				$sql = "SELECT * FROM finance_book_num";

				 $result = $conn->query($sql);

				 while($row = $result->fetch_assoc()){
					 $nameac = $row['F_Name_AC'];
					 echo "<option value='$nameac'>".$nameac."</option>";
				   }   
				echo "</select> &nbsp;&nbsp;&nbsp;";
				echo "&nbsp;&nbsp;&nbsp;";
   			    echo "<input class='btn btn-skin' type = 'submit' value = 'search'>";      
				  ?>
				</form>

				<?php
				if(isset($_REQUEST['search_date']) === TRUE){
				
            //    $numac = $_REQUEST['f_num_ac'];
				$date = $_REQUEST['f_date'];
               
			   echo "<br>";

               $sql = "SELECT finance_booklist.F_Date,finance_booklist.F_Num_AC,
			   finance_book_num.F_Name_AC,finance_booklist.F_Detail,finance_booklist.F_Amount,
			   finance_booklist.F_Type FROM finance_book_num INNER JOIN finance_booklist 
				ON finance_booklist.F_Num_AC = finance_book_num.F_Num_AC
				WHERE finance_booklist.F_Date = '".$date."' and finance_booklist.F_Status = '1' and 
				finance_booklist.M_ID = '".$_SESSION['Mid']."' ";

                   $result = $conn->query($sql);
                   echo"<table style='width:100%'>";
				   echo "สถานะการเงิน: Credit <br><br>";
			
				   $count = 0;
				   $first_table = 1;
				   while($row = $result->fetch_assoc()){
				   if($first_table == 1){
			       echo "<tr>";
				   echo "<th> วันที่ </th>";
				   echo "<th> หมายเลขบัญชี </th>";
				   echo "<th> ชื่อบัญชี </th>";
				   echo "<th> รายละเอียด </th>";
				   echo "<th> จำนวนเงิน </th>";
				   echo "<th> ประเภท </th>";
				   echo "</tr>";
				   $first_table = 0;
				   }
					 $count = 1;
					 $fdate = $row['F_Date'];
					 $numac = $row['F_Num_AC'];
					 $nameac = $row['F_Name_AC'];
					 $detail = $row['F_Detail'];
					 $amount = $row['F_Amount'];
					 $type = $row['F_Type'];
					 echo "<tr>";
                     echo "<td>".$fdate."</td>";
					 echo "<td>".$numac."</td>";
					 echo "<td>".$nameac."</td>";
					 echo "<td>".$detail."</td>";
					 echo "<td>".$amount."</td>";
					 echo "<td>".$type."</td>";
				   }
				   echo "</tr>";

				if($count == 0){
					echo "Search not found";
				}

				$sql2 = "SELECT finance_booklist.F_Date,finance_booklist.F_Num_AC,
			   finance_book_num.F_Name_AC,finance_booklist.F_Detail,finance_booklist.F_Amount,
			   finance_booklist.F_Type FROM finance_book_num INNER JOIN finance_booklist 
				ON finance_booklist.F_Num_AC = finance_book_num.F_Num_AC
				WHERE finance_booklist.F_Date = '".$date."' and finance_booklist.F_Status = '0' and 
				finance_booklist.M_ID = '".$_SESSION['Mid']."' ";

                   $result2 = $conn->query($sql2);

				   $count = 0;
				   $first_table = 1;

				   echo"<table style='width:100%'>";
				   echo "<br><br>";
				   echo "สถานะการเงิน: Debit <br><br>";
			    
				   while($row = $result2->fetch_assoc()){
					 $count = 1;
					 if($first_table == 1){
					 echo "<tr>";
				   	 echo "<th> วันที่ </th>";
				     echo "<th> หมายเลขบัญชี </th>";
				     echo "<th> ชื่อบัญชี </th>";
				     echo "<th> รายละเอียด </th>";
				     echo "<th> จำนวนเงิน </th>";
				     echo "<th> ประเภท </th>";
				     echo "</tr>";
					 $first_table = 0;
					 }
					 $fdate = $row['F_Date'];
					 $numac = $row['F_Num_AC'];
					 $nameac = $row['F_Name_AC'];
					 $detail = $row['F_Detail'];
					 $amount = $row['F_Amount'];
					 $type = $row['F_Type'];
					 echo "<tr>";
                     echo "<td>".$fdate."</td>";
					 echo "<td>".$numac."</td>";
					 echo "<td>".$nameac."</td>";
					 echo "<td>".$detail."</td>";
					 echo "<td>".$amount."</td>";
					 echo "<td>".$type."</td>";
				   }
				   echo "</tr>";

				   if($count == 0){
					echo "Search not found";
					}

				}

				if(isset($_REQUEST['search_detail']) === TRUE){
					
				   echo "<br>";

                   $detail_credit = $_POST['detail'];
				   echo $detail_credit."<br><br>";
				
				$sql = "SELECT finance_booklist.F_Date,finance_booklist.F_Num_AC,
			   finance_book_num.F_Name_AC,finance_booklist.F_Detail,finance_booklist.F_Amount,
			   finance_booklist.F_Type FROM finance_book_num INNER JOIN finance_booklist 
				ON finance_booklist.F_Num_AC = finance_book_num.F_Num_AC
				WHERE finance_book_num.F_Name_AC = '".$detail_credit."' and finance_booklist.F_Status = '1' and 
				finance_booklist.M_ID = '".$_SESSION['Mid']."' ORDER BY finance_booklist.F_Date ASC";

                   $result = $conn->query($sql);

				   $count = 0;
				   $first_table = 1;

				   echo"<table style='width:70%'>";
				   echo "สถานะการเงิน: Credit <br><br>";
				   while($row = $result->fetch_assoc()){
					 $count = 1;
					 if($first_table == 1){
					 echo "<tr>";
				     echo "<th> วันที่ </th>";
				     echo "<th> รายละเอียด </th>";
				     echo "<th> จำนวนเงิน </th>";
				     echo "</tr>";
					 $first_table = 0;
					 }
					 $fdate = $row['F_Date'];
					 $detail = $row['F_Detail'];
					 $amount = $row['F_Amount'];
					 echo "<tr>";
                     echo "<td>".$fdate."</td>";
					 echo "<td>".$detail."</td>";
					 echo "<td>".$amount."</td>";
				   }
				   echo "</tr>";

				if($count == 0){
					echo "Search not found";
				}

				$detail_debit = $_POST['detail'];

				$sql2 = "SELECT finance_booklist.F_Date,finance_booklist.F_Num_AC,
			   finance_book_num.F_Name_AC,finance_booklist.F_Detail,finance_booklist.F_Amount
			    FROM finance_book_num INNER JOIN finance_booklist 
				ON finance_booklist.F_Num_AC = finance_book_num.F_Num_AC
				WHERE finance_book_num.F_Name_AC = '".$detail_debit."' and finance_booklist.F_Status = '0' and 
				finance_booklist.M_ID = '".$_SESSION['Mid']."' ORDER BY finance_booklist.F_Date ASC";

                   $result2 = $conn->query($sql2);

				$count = 0;
				$first_table = 1;

				   echo"<table style='width:70%'>";
				   echo "<br><br>";
				   echo "สถานะการเงิน: Debit <br><br>";
			       
				   while($row = $result2->fetch_assoc()){
					$count = 1;
					if($first_table == 1){
					echo "<tr>";
				   	echo "<th> วันที่ </th>";
				   	echo "<th> รายละเอียด </th>";
				   	echo "<th> จำนวนเงิน </th>";
				   	echo "</tr>";
					$first_table = 0;
					}
					 $fdate = $row['F_Date'];
					 $detail = $row['F_Detail'];
					 $amount = $row['F_Amount'];
					 echo "<tr>";
                     echo "<td>".$fdate."</td>";
					 echo "<td>".$detail."</td>";
					 echo "<td>".$amount."</td>";
				   }
				   echo "</tr>";
				if($count == 0){
				echo "Search not found";
				}
				}
				?>

			</center>
		
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
			<script src="js/bootstrap-datepicker.js"></script>

</body>

</html>