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
	            <center>


				<br><br>
				<a href="finance-helper.php" class="btn btn-skin" role="button">back</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="table.php" class="btn btn-skin" role="button">set table</a>
	            <br><br>

				<?php
				
				 //after request
                if(isset($_REQUEST['update']) === TRUE){
                sleep(4);
				$id = $_REQUEST['id'];
                $numac = $_REQUEST['f_num_ac'];
				$detail = $_REQUEST['f_detail'];
				$amount = $_REQUEST['f_amount'];
				$date = $_REQUEST['f_date'];
				$status = $_POST['status'];

				if($status === "credit"){
					$status = 1;
				}
				else{
					$status = 0;
				}

                $sql = "UPDATE finance_booklist SET F_Num_AC = '".$numac."',F_Detail = '".$detail."',F_Amount = '".$amount."'
				,F_Date = '".$date."',F_Status = '".$status."' WHERE F_ID = '".$id."' ";

					if($conn->query($sql) === TRUE){
					header("location: check.php");
					}
					else{
					echo "Error&nbsp;" .$sql. "<br>" .$conn->error;
					}
				}


				if(isset($_REQUEST['delete']) === TRUE){
                 sleep(4);
				 $num = $_REQUEST['num'];

				 $sql = "DELETE FROM finance_booklist WHERE F_Num_AC = '".$num."'";

				 $sql1 = "DELETE FROM finance_book_num WHERE F_Num_AC = '".$num."'";

                if(($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE)){
					header("location: check.php");
				}
				else{
					echo "Error&nbsp;" .$sql. "<br>" .$conn->error;
				}

				}

				if(isset($_REQUEST['detail_delete']) === TRUE){
                 sleep(4);
				 $id = $_REQUEST['id'];

				 $sql = "DELETE FROM finance_booklist WHERE F_ID = '".$id."'" ;

                if(($conn->query($sql) === TRUE)){
					header("location: check.php");
				}
				else{
					echo "Error&nbsp;" .$sql. "<br>" .$conn->error;
				}

				}							
                 ?>

			<form action = 'check.php?last_date=true' method = 'post'>
				select last date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="datepicker" name = "f_date" value="yyyy/mm/dd">
				&nbsp;&nbsp;&nbsp;

			<script>
			$('.datepicker').datepicker({
			weekStart:1
			})
			</script>

		    <input class='btn btn-skin' type = 'submit' value = 'select'><br><br><br>
		    </form>

				 <?php
                if(isset($_REQUEST['last_date']) === TRUE){		

				$date = $_POST['f_date'];

				$sp = split ("\-", $date); 
		   
				echo "<table style='width:40%'>

				<tr>
				  <th> หมายเลขบัญชี </th>
				  <th> ชื่อบัญชี </th>

				</tr>";

				$sql = "SELECT * FROM finance_book_num WHERE M_ID = '".$_SESSION['Mid']."'";

                   $result = $conn->query($sql);
				   while($row = $result->fetch_assoc()){
					 $numac = $row['F_Num_AC'];
					 $nameac = $row['F_Name_AC'];
					 echo "<tr>";
                     echo "<td>".$numac."</td>";
					 echo "<td>".$nameac."</td>";
					 echo "<td><a href='?delete=true&num=$numac' class='btn btn-skin' role='button' onclick = Delete()>delete</a><br></td>";
					 echo "</tr>";
				   }

				echo "</table>";



             	 echo "<table style = 'width: 98%'>
				   <tr>
				  	<th> วันที่ </th>
				  	<th> หมายเลขบัญชี </th>
					<th> รายละเอียด </th>
				  	<th> จำนวนเงิน </th>
					<th> สถานะเงิน </th>
				   </tr>
				   <br><br>

                    รายละเอียดงบประมาณ <br><br>";

				   $sql1 = "SELECT * FROM finance_booklist  WHERE M_ID = '".$_SESSION['Mid']."' AND F_Date LIKE '$sp[0]-$sp[1]%'  
					ORDER BY F_Date ASC";
					$result1 = $conn->query($sql1);
					while($row = $result1->fetch_assoc()){
					 $id = $row['F_ID'];
					 $date = $row['F_Date'];
					 $numac = $row['F_Num_AC'];
					 $detail = $row['F_Detail'];
					 $amount = $row['F_Amount'];
					 $status = $row['F_Status'];
					 echo "<form action = 'check.php?update=true&id=$id' method = 'post' onsubmit = Update()>";
					 echo "<tr>";
					 echo "<td><input type= 'date' name= 'f_date' value='".$date."' required></td>";
					 echo "<td><input type= 'text' name= 'f_num_ac' value='".$numac."' size='3' required></td>";
					 echo "<td><input type= 'text' name= 'f_detail' value='".$detail."' size='50' required></td>";
					 echo "<td><input type= 'text' name= 'f_amount' value='".$amount."' size='5' required autofocus></td>";
					  if($status == 1){
						  echo "<td><br>
						  <select name = status>
						  <option value='credit'>Credit</option>
						  <option value='debit'>Debit</option>
						  </select><br><br></td>";
					  }
					  else{
						  echo "<td><br>
						  <select name = status>
						  <option value='debit'>Debit</option>
						  <option value='credit'>Credit</option>
						  </select><br><br></td>";
					  }
					  echo "<td><input class='btn btn-skin' type = 'submit' value = 'update'></td>";
					   echo "<td><a href='check.php?detail_delete=true&id=$id' class='btn btn-skin' role='button' onclick = SelectDelete()>delete</a><br></td>";
					  echo "</tr>";
					  echo "</form>";

				   }
				    echo "</table>";
						
				}
				else{
				echo "<table style='width:40%'>

				<tr>
				  <th> หมายเลขบัญชี </th>
				  <th> ชื่อบัญชี </th>

				</tr>";

				$sql = "SELECT * FROM finance_book_num WHERE M_ID = '".$_SESSION['Mid']."'";

                   $result = $conn->query($sql);
				   while($row = $result->fetch_assoc()){
					 $numac = $row['F_Num_AC'];
					 $nameac = $row['F_Name_AC'];
					 echo "<tr>";
                     echo "<td>".$numac."</td>";
					 echo "<td>".$nameac."</td>";
					 echo "<td><a href='?delete=true&num=$numac' class='btn btn-skin' role='button' onclick = Delete()>delete</a><br></td>";
					 echo "</tr>";
				   }

				echo "</table>";



             	 echo "<table style = 'width: 98%'>
				   <tr>
				  	<th> วันที่ </th>
				  	<th> หมายเลขบัญชี </th>
					<th> รายละเอียด </th>
				  	<th> จำนวนเงิน </th>
					<th> สถานะเงิน </th>
				   </tr>
				   <br><br>

                    รายละเอียดงบประมาณ <br><br>";

				   $sql1 = "SELECT * FROM finance_booklist  WHERE M_ID = '".$_SESSION['Mid']."'  
					ORDER BY F_Date ASC";
					$result1 = $conn->query($sql1);
					while($row = $result1->fetch_assoc()){
					 $id = $row['F_ID'];
					 $date = $row['F_Date'];
					 $numac = $row['F_Num_AC'];
					 $detail = $row['F_Detail'];
					 $amount = $row['F_Amount'];
					 $status = $row['F_Status'];
					 echo "<form action = 'check.php?update=true&id=$id' method = 'post' onsubmit = Update()>";
					 echo "<tr>";
					 echo "<td><input type= 'date' name= 'f_date' value='".$date."' required></td>";
					 echo "<td><input type= 'text' name= 'f_num_ac' value='".$numac."' size='3' required></td>";
					 echo "<td><input type= 'text' name= 'f_detail' value='".$detail."' size='50' required></td>";
					 echo "<td><input type= 'text' name= 'f_amount' value='".$amount."' size='5' required autofocus></td>";
					  if($status == 1){
						  echo "<td><br>
						  <select name = status>
						  <option value='credit'>Credit</option>
						  <option value='debit'>Debit</option>
						  </select><br><br></td>";
					  }
					  else{
						  echo "<td><br>
						  <select name = status>
						  <option value='debit'>Debit</option>
						  <option value='credit'>Credit</option>
						  </select><br><br></td>";
					  }
					  echo "<td><input class='btn btn-skin' type = 'submit' value = 'update'></td>";
					   echo "<td><a href='check.php?detail_delete=true&id=$id' class='btn btn-skin' role='button' onclick = SelectDelete()>delete</a><br></td>";
					  echo "</tr>";
					  echo "</form>";

				   }
				    echo "</table>";

				}
				 ?>

            	
				 <br>
				</center>

		<script>
		function Update(){
		$(function() {
    	$.growl.notice({ 
			title: "Update success", 
			message: "" });
		});
		}

		function Delete(){
		$(function() {
    	$.growl.notice({ 
			title: "Delete num account success", 
			message: "" });
		});
		}

		function SelectDelete(){
		$(function() {
    	$.growl.notice({ 
			title: "Delete detail success", 
			message: "" });
		});
		}
		</script>
       

		<script>
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