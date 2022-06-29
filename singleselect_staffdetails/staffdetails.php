<html>
<head>	
	<title>Homepage</title>
</head>

<body>

<form action="staffdetailsbackend.php" method="post">

	<select name="id">

<option>--select--</option>

	<?php 
	include_once("staffdetailsdatabase.php");

$result = mysqli_query($mysqli, "SELECT * FROM studentdetails order by name "); 

	while($res = mysqli_fetch_assoc($result)) 
	{ 	

		echo "<option value=".$res['id'].">".strtoupper($res['name'])."</option>";
			
	}
	?>


	</select>
	
	<input type="submit" name="" value="submit">
</form>



</body>
</html>


