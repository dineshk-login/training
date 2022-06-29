<?php

include_once("familydatabase.php");
if(isset($_POST['update'])) 
{	

	$id = $_POST['id'];
	$name = $_POST['name'];
	$fathername = $_POST['fathername'];
	$age = $_POST['age'];
	$designation = $_POST['designation'];	
		$result = mysqli_query($mysqli, "UPDATE familymembers SET name='$name',fathername='$fathername',age='$age',designation='$designation' WHERE id=$id");
		header("Location: familyfrontend.php");

}
?>

<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM familymembers WHERE id=$id");

while($res = mysqli_fetch_assoc($result))
{
	$a = $res['name'];
	$b = $res['fathername'];
	$c = $res['age'];
	$d = $res['designation'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	<br/><br/>
	
	<form name="form1" method="post" action="familyedit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $a ?> "></td>
			</tr>
			<tr> 
				<td>Fathername</td>
				<td><input type="text" name="fathername" value="<?php echo $b;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $c;?>"></td>
			</tr>
			<tr> 
				<td>Designation</td>
				<td><input type="text" name="designation" value="<?php echo $d;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>