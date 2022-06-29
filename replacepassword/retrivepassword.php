
<?php
//getting id from url
$idx = $_POST['name'];
//print("$id");
//selecting data associated with this particular id
include_once("replacedatabase.php");

$result = mysqli_query($conn,"SELECT * FROM studentdetails where name='$idx' ");

while($res = mysqli_fetch_assoc($result))
{
	$a=$res['id'];
	$b = $res['password'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="updatepassword.php">
		<table border="0">
			
			<tr> 
				<td>password</td>
				<td><input type="text" name="password" value="<?php echo $b;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $a;?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>