<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("finance_db");
mysql_query("SET NAMES UTF8");
$login = "SELECT * FROM login_member WHERE M_ID = '".mysql_real_escape_string($_REQUEST['m_id'])."'
         and M_Pass = '".mysql_real_escape_string($_REQUEST['m_password'])."'";

$objQuerySQL = mysql_query($login);
$objResult = mysql_fetch_array($objQuerySQL);

if(!$objResult){
	//wrong password
	header("location: index.php?error=1");
}
else{

    // to use session_start
    $_SESSION["Mid"] = $objResult['M_ID'];
    session_write_close();

     //to your profile
    header("location: finance-helper.php");
}
mysql_close();
?>