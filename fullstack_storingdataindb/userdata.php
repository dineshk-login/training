<?php
require"db_config.php";
$name= $_POST['fname'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$sql="INSERT INTO `userinformation`(`fname`, `email`,`phone`)VALUES ('$name','$email','$phone')";

if (mysqli_query($con,$sql)) {
echo "Completed";
}
else
{
echo "Registeration Failed".mysqli_error($con);
}
?>