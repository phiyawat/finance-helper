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

$id = $_REQUEST['m_id'];
$pass = $_REQUEST['m_pass'];
$firtname = $_REQUEST['m_fname'];
$lastname = $_REQUEST['m_lname'];
$storename = $_REQUEST['s_name'];
$storeaddress = $_REQUEST['s_address'];
$storeowner = $_REQUEST['s_owner'];

$sql = "INSERT INTO login_member(M_ID,M_Pass) VALUES('".$id."','".$pass."')";

$sql1 = "INSERT INTO member(M_ID,M_fName,M_lName,S_Name) VALUES('".$id."','".$firtname."','".$lastname."','".$storename."')";

$sql2 = "INSERT INTO store(M_ID,S_Name,S_Address,S_Owner) VALUES('".$id."','".$storename."','".$storeaddress."','".$storeowner."')";


if(($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE)){
    header("location: how-to.php");
}
else{
    echo "Error: " .$sql. "<br>" .$conn->error;
     echo "Error: " .$sql1. "<br>" .$conn->error;
      echo "Error: " .$sql2. "<br>" .$conn->error;
}

$conn->close();
?>