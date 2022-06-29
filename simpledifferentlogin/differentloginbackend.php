<?php
require 'differentlogindatabase.php';
$email=$_POST['email'];
$password=$_POST['password'];
$response;
$sql="SELECT * FROM userdetails WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)) {
	# code...
	$row=mysqli_fetch_assoc($result);
	if($row['type'] == 'admin')
	{
		header("Location: welcomeadmin.php");
	}
	else{
		header("Location: welcomeuser.html");
	}
	
}else{
	header("Location: register.html");
}
?>