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
	<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
	<!-- =======================================================
        Theme Name: Shuffle
        Theme URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
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
								<li class="active"><a href="search.php">search</a></li>
								<li class="active"><a href="profile.php">profile</a></li>
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

			</div>
			<center>
			<br>
			<form action = 'table.php?last_date=true' method = 'post'>
				select last date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="datepicker" name = "f_date" value="yyyy/mm/dd">
				&nbsp;&nbsp;&nbsp;

			<script>
			$('.datepicker').datepicker({
			weekStart:1
			})
			</script>

		    <input class='btn btn-skin' type = 'submit' value = 'select'><br><br>
		    </form>

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


			<br>

             <?php
                if(isset($_REQUEST['last_date']) === TRUE){		

				$date = $_POST['f_date'];

				$sp = split ("\-", $date); 
			
			$sql = "SELECT * FROM store  WHERE M_ID = '".$_SESSION['Mid']."'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $store_name = $row['S_Name'];
			echo $store_name;


			 echo "<br>งบทดลอง<br>

			 วันที่ 31 มกราคม 2560 <br><br>

			 <table style='width:60%'>
			    <tr>
				  <th> ชื่อบัญชี </th>
				  <th> เลขที่บัญชี </th>
				  <th> เครดิต </th>
				  <th> เดบิต </th>
				</tr>";

				$sql = "SELECT finance_book_num.F_Num_AC,finance_book_num.F_Name_AC,finance_booklist.F_Date,
				SUM(CASE F_Status 
             		WHEN '1' THEN F_Amount
             		WHEN '0' THEN -F_Amount 
           			END) AS total_amount,
				finance_booklist.F_Status 
				FROM finance_book_num  INNER JOIN finance_booklist 
				ON finance_booklist.F_Num_AC = finance_book_num.F_Num_AC
				WHERE finance_booklist.F_Date LIKE '$sp[0]-$sp[1]%'
				GROUP BY finance_book_num.F_Num_AC,finance_book_num.F_Name_AC";

				$result = $conn->query($sql);
			    $sum_credit = 0;
				$sum_debit = 0;
				while($row = $result->fetch_assoc()){
				$numac = $row['F_Num_AC'];
				$nameac = $row['F_Name_AC'];
				$status = $row['F_Status'];
				$total = $row['total_amount'];
				echo "<tr>";
				echo "<td>".$nameac."</td>";
				echo "<td>".$numac."</td>";
				if($total > 0){
				echo "<td>".$total."</td>";
				echo "<td></td>";
				$sum_credit += $total;
				}
				else{
				echo "<td></td>";	
				echo "<td>".abs($total)."</td>";
				$sum_debit += $total;
				}
				echo "</tr>";
				}
				echo "<tr>";
				echo "<td></td>";
				echo "<td></td>";
				echo "<td>".$sum_credit."</td>";
				echo "<td>".abs($sum_debit)."</td>";
				echo "</tr>";
				}
				?>

				</table>






























			 

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
			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/bootstrap-datepicker.js"></script>

</body>

</html>