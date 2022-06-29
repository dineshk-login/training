<?php
if($_POST["name"]||$_POST["num"])
{
	echo "welcome".$_POST["name"]."<br>";
	echo "your mobile number is".$_POST["phone"]."<br>";
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="<?php $_PHP_SELF?>"method="POST">
		Name:<input type="text" name="name"/>
		Phone:<input type="text" name="phone"/>
		<input type="submit" name=""/>
	</form>

</body>
</html>