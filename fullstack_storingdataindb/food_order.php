<?php
require "foodorderdb_config.php";

$name= $_POST['fname'];
$city= $_POST['city'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$food= $_POST['food'];
$quantity= $_POST['quantity'];
$sql="INSERT INTO `orderdetails`(`name`, `city`,`email`,`phone`,`food`,`quantity`)VALUES ('$name','$city','$email','$phone','$food','$quantity')";

if (mysqli_query($con,$sql)) {
echo "Completed";

}else
{
echo "Registeration Failed".mysqli_error($con);
}
?>