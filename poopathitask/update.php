<?php
//getting id from url
$name = $_GET['name'];
//echo $name;
include_once("logindatabase.php");


$result = mysqli_query($mysqli, "SELECT * FROM person WHERE name='".$name."' ");
//echo  "SELECT * FROM validate WHERE name=$name ";
while($res = mysqli_fetch_assoc($result))
{
	$a = $res['name'];
	$b = $res['fathername'];
	$c = $res['Age'];
	$d = $res['address'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	<br/><br/>
	
	<form name="form1" method="post" action="finalupdate.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"  value="<?php echo $a ?> "></td>
			</tr>
			<tr > 
				<td>fname</td>
				<td><input type="text" name="fname"  value="<?php echo $b;?>"></td>
			</tr>
			<tr> 
				<td>age</td>
				<td><input type="text" name="Age"  value="<?php echo $c;?>"></td>
			</tr>
			<tr> 
				<td>address</td>
				<td><input type="text" name="address"  value="<?php echo $d;?>"></td>
				

				<td><input type="submit" name="submit" value="submit"></td>
				</tr>
		
				
				
			
		</table>
	</form>
</body>
</html>