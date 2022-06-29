<?php
require "adminlogindatabase.php";

$name= $_POST['name'];
$password= $_POST['password'];
$sql="INSERT INTO `registeruserdata`(`name`,`password`)VALUES ('$name','$password')";
if (mysqli_query($con,$sql)) {
header("location:login.html");

}else
{
echo "Registeration Failed".mysqli_error($con);
}

?>