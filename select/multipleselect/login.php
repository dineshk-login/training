<?php
//including the database connection file
include_once("logindatabase.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($con, "SELECT * FROM studentfeesdetails ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<form action="loginbackend.php" method="POST">

	<select name="id">
<option value="0">--select--</option>
<option value="1">1st year</option>
<option value="2">2nd year</option>
<option value="3">3rd year</option>
<option value="4">4th year</option>

	</select>
	<input type="submit" name="" value="submit">
</form>
</body>
</html>