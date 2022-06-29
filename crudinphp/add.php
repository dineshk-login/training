<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("cruddatabase.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];

		$result = mysqli_query($conn, "INSERT INTO `users`(`name`,`age`,`email`) VALUES('$name','$age','$email')");
	
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='crudfrontend.php'>View Result</a>";
	}

?>
</body>
</html>