<?php
//getting id from url
$name = $_GET['name'];
//echo $name;
include_once("adminlogindatabase.php");


$result = mysqli_query($mysqli, "SELECT * FROM validate WHERE name='".$name."' ");
//echo  "SELECT * FROM validate WHERE name=$name ";
while($res = mysqli_fetch_assoc($result))
{
 $addr = $res['address'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	<br/><br/>
	
	<form name="form1" method="post" action="superadmindashboard.php>
		<table border"">
			<tr> 
				<td>Address: </td>
				
				<td><input type="text" name="name"  value="<?php echo $addr ?> "></td>
				<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</tr>
		</table>
	</form>
</body>
</html>