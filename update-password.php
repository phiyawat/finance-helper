<?php
session_start();
$servername = "localhost";
$username  ="root";
$password = "";
$dbName = "finance_db";

$conn = new mysqli($servername,$username,$password,$dbName);

//if you want to read thai letter on web or database VERY IMPORTANT!! 
mysqli_set_charset($conn, "utf8");

if($conn->connect_error){
	die("connection failed" .$conn->connect_error);
}
//set equal to form action <input type = "text" name = "cname<important!!>" value="">
$old = $_REQUEST['oldpassword'];
$password = $_REQUEST['password'];
$cpassword = $_REQUEST['cpassword'];

if(strcmp($password,$cpassword) == 0){

$sql = "UPDATE login_member SET M_Pass = '".$cpassword."' WHERE M_ID = '".$_SESSION['Mid']."'";

if($conn->query($sql) === TRUE){
	sleep(4);
	header("location: profile.php");
}
}

else{
	echo "error: Wrong password or password not matches <br><br>";
	echo "<a href='change-password.php' role='button'>back</a>";
}


?>