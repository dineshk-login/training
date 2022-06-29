<html>
<head>	
	<title>Homepage</title>
</head>
<style type="text/css">
	.active {
		font-size: 20px;
		color: #FF00FF;
	}
</style>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table width='80%' cellpadding="0" cellspacing="0" border=0>

	<tr bgcolor='#CCCCCC'>
		<td>id</td>
		<td>Name</td>
		<td>Update</td>
		</tr>

	
	<?php
	 
	 $value = $_GET['page'];
	 echo $value = $value - 1;

	 $count =  $value * 10 ;

	/* if($value == 1)
	 {
	 	$count = 1;
	 }*/

	include_once("config.php");
	 $query1 = "SELECT * FROM workersinformations ORDER BY id ASC limit $count, 10";
$result = mysqli_query($mysqli, $query1); 
	while($res = mysqli_fetch_assoc($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		
		echo "<td>
			

		<button>

		<a href=\"edit.php?id=$res[id]\">Edit</a>

		</button> 
		

		<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
		</td>";		
	}
	?>
	<tr>
		 
		<td colspan="4" align="center">
			Page:
	<?php
		$query = "select * from workersinformations";
		$query = mysqli_query($mysqli,$query);
		 $n = mysqli_num_rows($query);
		 $total=$n/10;
		 
		 for($i=0;$i <= $total; $i++)
		 {
		 	$cls = "";
		 	if($value == $i){
		 		$cls = "active";
		 	}
		 ?>
		 	<a href=edit_pagewise.php?page=<?php echo $i + 1; ?> style="text-decoration: none" class="<?php echo $cls; ?>"> <?php echo $i + 1; ?></a>
		 <?php
		 }
	?>
	</td>
	</tr>



	</table>
</body>
</html>
