<?php
$host= "localhost";
$user= "root";
$pass="";
$database= "collegedata";
$con=mysqli_connect($host,$user,$pass,$database);
if ($con) {
//echo ("Data Base connected Successfull");
	
}
else{
	echo ("db_connected Failed").mysqli_error();
}
?>