<?php

require "differentlogindatabase.php";
$email= $_POST['email'];
$password= $_POST['password'];
$type= $_POST['type'];
$sql="INSERT INTO `userdetails`(`email`,`password`,`type`)VALUES ('$email','$password','$type')";
if (mysqli_query($conn,$sql)) {
header("Location:differentlogin.html");

}else
{
echo "Registeration Failed".mysqli_error($con);
}


?>