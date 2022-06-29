<?php

include_once("adminlogindatabase.php");
if(isset($_POST['name'])) 
{	


	$name = $_POST['name'];
	$password = $_POST['password'];
	$color = $_POST['color'];
	$address = $_POST['address'];
	$description = $_POST['description'];
    $creditpoints = $_POST['creditpoints'];
 // echo  $creditpoints;
    
		$result = mysqli_query($mysqli, "INSERT INTO `validate`(`name`,`password`,`color`,`address`,`description`,`creditpoints`) VALUES('$name','$password','$color','$address','$description','$creditpoints')");
	
		//echo "INSERT INTO `validate`(`name`,`password`,`color`,`address`,`description`,`creditpoint`) VALUES('$name','$password','$color',`$address`,`$description`,`$creditpoint`)";
	
		header("Location: superadmindashboard.php");

	}
?>

<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	<br/><br/>
	
	<form name="form1" method="post" action="">
		<table border="0">
			<tr> 
				<td> Enter Name</td>
				<td><input type="text" name="name"  value=" "></td>
			</tr>
			<tr > 
				<td> Enter password</td>
				<td><input type="password" name="password"  value=""></td>
			</tr>
			<tr> 
				<td>Enter color</td>
				<td><input type="text" name="color"  value=""></td>
            </tr>
		    <tr> 
				<td>Enter description</td>
				<td><input type="text" name="description"  value=""></td>
			</tr>
			<tr> 
				<td>Enter creditpoint</td>
				<td><input type="text" name="creditpoints"  value=""></td>
			</tr>
			<tr> 
				<td>Enter address</td>
				<td><input type="text" name="address"  value=""></td>
			</tr>


			<td><input type="submit" name="submit" value="submit"></td>
				</tr> 
				
				
				
			
		</table>
	</form>
</body>
</html>