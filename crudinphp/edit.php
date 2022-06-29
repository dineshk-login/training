<?php

include_once("cruddatabase.php");
if(isset($_POST['update'])) 
{	

	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];	
		$result = mysqli_query($conn, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
		header("Location: crudfrontend.php");

}
?>

<?php
//getting id from url
$id = $_GET['id'];
echo $id;

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_assoc($result))
{
	$a = $res['Name'];
	$b = $res['Age'];
	$c = $res['Email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="crudfrontend.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $a ?> "></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $b;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $c;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>