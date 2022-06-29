<?php

include_once("logindatabase.php");
if(isset($_POST['name'])) 
{	


	$name = $_POST['name'];
	$fname = $_POST['fathername'];
	$age = $_POST['Age'];
	$address = $_POST['address'];

		//$result = mysqli_query($mysqli, "UPDATE person SET name='".$name."',fathername='".$.fname"',Age='".$age."address='".$address."' WHERE name='".$name."'");
		$result = mysqli_query($mysqli, "UPDATE person SET name='".$name."',fathername='".$fname."',Age='".$age."',address='".$address."' WHERE name='".$name."'");
		//echo "UPDATE person SET name='".$name."',fathername='".$fathername."',color='".$color."' WHERE name='".$name."'";
		header("Location: index1.php");

}
?>


