<?php

require 'config.php';
$email= $_POST['email'];
$password= $_POST['password'];
$response;
$sql="SELECT * FROM information WHERE email='$email'AND password= $password";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
	header("location:welcome1.php");
}
else{
	header("location:error.php");
}

?>