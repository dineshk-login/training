<?php
include_once("logindatabase.php");
if($_POST)
{
	
$name=$_POST['name'];
$fname=$_POST['fname'];
$age=$_POST['age'];
$addr=$_POST['addr'];
$result = mysqli_query($mysqli, "INSERT INTO `person`(`name`,`fathername`,`Age`,`address`) VALUES('$name','$fname','$age','$addr')");
}


?>
<html>
<head>Bio-data</head>
<form method="post" action="">
Name:
<input type="text" name="name" value="">
<br><br>
Father name:
<input type="text" name="fname" value="">
<br><br>	
Age:
<input type="text" name="age" value="">
<br><br>
Address:
<input type="text" name="addr" value="">
<br><br>
<input type="submit" name="" value="submit">		
</form>
</html>