<?php 
	$host="localhost";
	$user="root";
	$pass="";
	$db="test1";
	// connect database
	$conn=mysqli_connect($host,$user,$pass,$db);
	if ($conn) {
		// # code...
 		//echo "connected sucess";
	}
	else
	{
		echo "Error".mysqli_connect_error();
	}
?>