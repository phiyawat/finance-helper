<?php
session_start();
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

$mid = $_SESSION['Mid'];
$numac = $_REQUEST['f_num_ac'];
$nameac = $_REQUEST['f_name_ac'];
$date = $_REQUEST['f_date'];
$amount = $_REQUEST['f_amount'];
$status = $_REQUEST['f_status'];
$detail = $_REQUEST['f_detail'];

if($numac >= 101 && $numac <= 199){
    $choice = 1;
}
else if($numac >= 201 && $numac <= 299){
    $choice = 2;
}
else if($numac >= 301 && $numac <= 399){
    $choice = 3;
}
else if($numac >= 401 && $numac <= 499){
    $choice = 4;
}
else if($numac >= 501 && $numac <= 599){
    $choice = 5;
}
$type = $choice;

$sql = "INSERT INTO finance_book_num(M_ID,F_Num_AC,F_Name_AC) VALUES ('".$mid."','".$numac."','".$nameac."')";

$sql1 = "INSERT INTO finance_booklist(F_Num_AC,F_Detail,F_Amount,F_Status,F_Type,F_Date,M_ID) VALUES
('".$numac."','".$detail."','".$amount."','".$status."','".$type."','".$date."','".$mid."')";

if(($conn->query($sql) === TRUE)){
    if($conn->query($sql1) === TRUE){
        sleep(4);
        header("location: finance-helper.php");
    }
}
else{
    // cannot insert sql because it same key but you can insert sql1
     if($conn->query($sql1) === TRUE){
         sleep(4);
         header("location: finance-helper.php");
        } 
}

$conn->close();
?>