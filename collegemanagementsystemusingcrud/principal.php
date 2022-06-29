<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="lightgreen">
<h1>welcome principal</h1>

<table border="1">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Studentclass</th>
     <th>Year</th>
      <th>Batch</th>
      <th>Fees</th>
       <th>Balancefees</th>
       <th>Update</th>
     
  </tr>


 <?php 
	include_once("registerdatabase.php");
$result = mysqli_query($con, "SELECT * FROM studentfeesdetails ORDER BY id DESC"); 
	while($res = mysqli_fetch_assoc($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['studentclass']."</td>";
		echo "<td>".$res['year']."</td>";
		echo "<td>".$res['batch']."</td>";	
		echo "<td>".$res['fees']."</td>";	
		echo "<td>".$res['balancefees']."</td>";		
		echo "<td>
		<button>

		<a href=\"principaledit.php?id=$res[id]\">Edit</a>

		</button> 

		

		<a href=\"principaldelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
		</td>";		
	}
	?>


</table>
<center><a href="login.html">logout</a></center>
</body>
</html>


</body>
</html>