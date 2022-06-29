<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>id</td>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Update</td>
	</tr>
	<?php 
	require_once("cruddatabase.php");
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC"); 
	while($res = mysqli_fetch_assoc($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['Name']."</td>";
		echo "<td>".$res['Age']."</td>";
		echo "<td>".$res['Email']."</td>";	
		echo "<td>
		<button>

		<a href=\"edit.php?id=$res[id]\">Edit</a>

		</button> 

		

		<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
		</td>";		
	}
	?>
	</table>
</body>
</html>
