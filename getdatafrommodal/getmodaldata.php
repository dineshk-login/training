<?php
require "config_getmodal.php";

$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$phone= $_POST['phone'];

$sql="INSERT INTO `modaldata`(`name`,`email`,`password`,`phone`)VALUES ('$name','$email','$password','$phone')";

if (mysqli_query($con,$sql)) {
echo "Completed";

}else
{
echo "Registeration Failed".mysqli_error($con);
}
?>