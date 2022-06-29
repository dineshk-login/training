<?php

require "differentlogindatabase.php";
$email= $_POST['email'];
$password= $_POST['password'];
$type= $_POST['type'];
$sql="INSERT INTO `userdetails`(`name`,`password`,`type`)VALUES ('$name','$password','$type')";
if (mysqli_query($con,$sql)) {
header("differentlogin.html");

}else
{
echo "Registeration Failed".mysqli_error($con);
}


?>