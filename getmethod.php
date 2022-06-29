<?php
if($_GET["name"]||$_GET["num"])
{
	echo "welcome".$_GET["name"]."<br>";
	echo "your mobile number is".$_GET["phone"]."<br>";
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
	<form action="<?php $_PHP_SELF?>"method="GET">
		Name:<input type="text" name="name"/>
		Phone:<input type="text" name="phone"/>
		<input type="submit" name=""/>
	</form>

</body>
</html>