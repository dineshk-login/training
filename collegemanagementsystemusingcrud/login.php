
	<?php

require 'registerdatabase.php';
$name= $_POST['name'];
$password= $_POST['password'];


$response;
$sql="SELECT * FROM studentdetails WHERE name='$name'AND password= $password";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result))
{
	$row=mysqli_fetch_assoc($result);
	if($row['designation'] == 'officeassi')
	{
		header("Location: officeassistantregister_studentdetails.html");
	}
	elseif ($row['designation'] == 'staff') 
	{
			header("Location: welcomestaff.php");
	}
	elseif($row['designation'] == 'principal')
	 {
			header("Location: principal.php");
	
}}


?>

</body>
</html>