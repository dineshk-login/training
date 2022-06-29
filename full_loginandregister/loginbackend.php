<?php

require 'registerdatabase.php';
$name= $_POST['fname'];
$password= $_POST['password'];
$response;
$sql="SELECT * FROM userdata WHERE name='$name' AND password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result))
{
	header("location:welcome.php");
}
else{
	header("location:register.html");
}


?>