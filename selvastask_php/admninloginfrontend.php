<?php
require 'adminlogindatabase.php';
$name=$_POST['name'];
$password=$_POST['password'];
$response;
//echo "$name,$password";
$sql="SELECT * FROM validate WHERE name='$name' AND password='$password'";
//echo "$sql";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)) {
	# code...
	//$row=mysqli_fetch_assoc($result);
	
	//if($row['password'] == $password && $row['name'] == $name)
	//{
		header("Location: admindashboard.php");
	//}
	//else
	//{
		//header("Location: adminregister.php");
	//echo "hai";
	//}
}else
{
	//header("Location: adminregister.php");
	echo "error in password";
}
	


?>