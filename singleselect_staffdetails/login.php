<html>
<head>	
	<title>Homepage</title>
</head>

<body>

<form action="loginbackend.php" method="post">

	<select name="id">

<option>--select--</option>

	<?php 
	
$result = mysqli_query($mysqli, "SELECT * FROM studentdetails"); 

	while($res = mysqli_fetch_assoc($result)) 
	{ 	

		echo "<option value=".$res['id'].">".$res['name']."</option>";
			
	}
	?>


	</select>
	
	
</form>


</body>
</html>


