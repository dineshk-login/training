
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="printtable.php" method="post">
		Enter the value:<input type="number" id="txt" name="value">
		<input type="submit" name="">
	</form>
		<?php
		$b = $_POST['value'];
		//echo$b;
		if( isset($_POST['value']) )
		{
			if(!is_numeric($b))
			{
				echo "Numbers only allowed";
				die();
			}
		

			//$a = 0;
			for($a=1;$a<=10;$a++){
				echo $a.'*'.$b.'='.$a*$b;
				echo '<br>';
			}
		}

 
?></body>
</html>