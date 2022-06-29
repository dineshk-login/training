<?php
require 'differentlogindatabase.php';
$email=$_POST['email'];
$password=$_POST['password'];
$response;
$sql="SELECT * FROM login WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)) {
	# code...
	$row=mysqli_fetch_assoc($result);
	if($row['type'] == 'admin')
	{
		header("Location: welcome.php");
	}
	else{
		header("Location: welcome1.php");
	}
	//echo "Welcome ".$row['type'];
	//header("Location: welcome.php");
}else{
	header("Location: error.php");
}
?>
