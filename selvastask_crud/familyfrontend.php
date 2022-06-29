<html>
<head>	
<title>Homepage</title>
</head>
<body>
<table width='80%' border=1>
	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Update</td>
	</tr>
	<a href="add.php"> addnew data</a>
	<?php 
	include_once("familydatabase.php");
	$result = mysqli_query($mysqli, "SELECT * FROM familymembers ORDER BY id DESC"); 
	$row = "";
	$i=0;
	while($res = mysqli_fetch_assoc($result)) { 
	echo $i=$i+1;
	if($i % 2 == 0)
	{
		$color = "bgcolor = #13C8C4";
	}else
	{
		$color = "bgcolor = green";
	}
		//echo $i;

		echo $row = "<tr ".$color."><td>".$res['name']."</td><td><a href='familyedit.php?id=".$res['id']."'>Edit</a></td><td><a href='delete.php?id='".$res['id']."' onClick='return confirm('Are you sure you want to delete?')'>Delete</a></td></tr>";
		//echo "<tr>";
		//echo "<td>".$res['id']."</td>";
		//echo "<td>".$res['name']."</td>";
		//echo "<td>
		//<button>
		//<a href=\"familyedit.php?id=$res[id]\">Edit</a>
		//</button> 
		//<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
		//</td>";	

	}
	?>
</table>
</body>
</html>