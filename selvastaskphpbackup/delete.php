<?php
session_start();
$fname = $_SESSION["name"];
	$name = $_POST['name'];
	echo $name;
	$point = $_POST['point'];
	include_once("adminlogindatabase.php");
	$result = mysqli_query($mysqli, "UPDATE validate SET creditpoints = $point + creditpoints WHERE name='$name'");
	$point = mysqli_query($mysqli, "UPDATE validate SET creditpoints =  creditpoints - $point WHERE name='$fname'");
	//echo "UPDATE validate SET creditpoints = creditpoints - $point   WHERE name='$fname'";

	
?>