<?php
require "registerdatabase.php";

$name= $_POST['name'];
$password= $_POST['password'];
$designation= $_POST['designation'];

//echo "$name"."<br>".$password."".$designation;
$sql="INSERT INTO `studentdetails`(`name`,`password`,`designation`)VALUES ('$name','$password','$designation')";

if (mysqli_query($con,$sql)) {
header("location:login.html");

}else
{
echo "Registeration Failed".mysqli_error($con);
}

?>