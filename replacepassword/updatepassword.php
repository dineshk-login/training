<?php

include_once("replacedatabase.php");
if(isset($_POST['update'])) 
{	

	$id = $_POST['id'];
	
	$password = $_POST['password'];
		
		$result = mysqli_query($conn, "UPDATE studentdetails SET password='$password' WHERE id=$id");
		//header("Location: index.php");

}
?>
