

<?php
session_start();
include_once("adminlogindatabase.php");
//$name= $_GET['name'];
 $fname = $_SESSION["name"];

 //echo $fname;
if ( $fname == "")
{
	header("Location: adminindex.php");	
}else
{



 // echo $_SESSION["name"]

$result = mysqli_query($mysqli, "SELECT * FROM validate  WHERE name='$fname'"); 
//echo $result;
echo "welcome".$fname;
while($res = mysqli_fetch_assoc($result))
	//echo$res;
{
	
	$a = $res['description'];
	"<br>";
	$color_code = $res['color'];
	echo "$a";
	//echo "$color_code";
}
}
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body  bgcolor="<?=$color_code;?>"> 
		<form action="adminupdate.php" method="post">
		
	choose the name:	<select name="name">

	<option>--select--</option>

		<?php 
		
	include_once("adminlogindatabase.php");

$result = mysqli_query($mysqli, "SELECT * FROM validate"); 

	while($res = mysqli_fetch_assoc($result)) 
	{ 	
		//echo$res['name'];
		echo "<option value=".$res['name'].">".$res['name']."</option>";
			
	}
	?>
	</select>
	Select the points:<select name="point">

	<?php
	
		include_once("adminlogindatabase.php");


		$result = mysqli_query($mysqli, "SELECT * FROM validate WHERE name='$fname'");

		$res = mysqli_fetch_assoc($result);
		$pnt = $res['creditpoints'] ; 

		//echo $pnt;
		for ($i=50; $i <= $pnt; $i+=50) { 
			//echo $i;
			echo "<option value=".$i.">".$i."</option>";
		}
			
	?></select>
		<input type="submit"  value="update" name="addpoints">
		</form>	
	</body>
	</html>

	<!--//echo $fname;
//if($fname == "dinesh")
	{
		echo '<body style="background-color:$color">';
	}
	elseif($fname== "poopathi")
	{
		echo '<body style="background-color:$b">';
	} elseif($fname == "selva")
	{
		echo '<body style="background-color:$b">';
	}else

	{
		echo '<body style="background-color:grey">';
	}
	
	
}*/-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="adminlogout.php" method="post">
	 <button type="submit">Logout</button>
	
</form>

</body>
</html>


	


