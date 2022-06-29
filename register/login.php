<?php

require 'registerdatabase.php';
$name= $_POST['name'];
$password= $_POST['password'];
$response;
$sql="SELECT * FROM registeruserdata WHERE name='$name'AND password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result))
{
	header("location:welcome1.html");
}
else{
	header("location:register.html");
}

?>