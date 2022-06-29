<?php

include_once("registerdatabase.php");
if(isset($_POST['update'])) 
{	

	$id = $_POST['id'];
	$name = $_POST['name'];
	$studentclass = $_POST['studentclass'];
	$year = $_POST['year'];	
	$batch = $_POST['batch'];	
	$fees = $_POST['fees'];	
	$balancefees = $_POST['balancefees'];	
		$result = mysqli_query($con, "UPDATE studentfeesdetails SET name='$name',studentclass='$studentclass',year='$year',batch='$batch',fees='$fees',balancefees='$balancefees' WHERE id=$id");
		header("Location: principal.php");

}
?>

<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($con, "SELECT * FROM studentfeesdetails WHERE id=$id");

while($res = mysqli_fetch_assoc($result))
{
	$a = $res['name'];
	$b = $res['studentclass'];
	$c = $res['year'];
	$d = $res['batch'];
	$e = $res['fees'];
	$f = $res['balancefees'];

}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	
	
	<form name="form1" method="post" action="principaledit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $a ?> "></td>
			</tr>
			<tr> 
				<td>studentclass</td>
				<td><input type="text" name="studentclass" value="<?php echo $b;?>"></td>
			</tr>
			<tr> 
				<td>year</td>
				<td><input type="text" name="year" value="<?php echo $c;?>"></td>
			</tr>
			<tr> 
				<td>batch</td>
				<td><input type="text" name="batch" value="<?php echo $d;?>"></td>
			</tr>
			<tr> 
				<td>fees</td>
				<td><input type="text" name="fees" value="<?php echo $e;?>"></td>
			</tr>
			<tr> 
				<td>balancefees</td>
				<td><input type="text" name="balancefees" value="<?php echo $f;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>