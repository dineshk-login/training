<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>welcome</h1>
	 <?php
 
 
  require 'registerdatabase.php';
  $sql="SELECT * FROM userdata";
  $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)) {
    # code...
    
    while ($row=mysqli_fetch_assoc($result)) {
      # code...
      echo "<tr>";
      echo "<td>".$row['id']."</td>
      <td>".$row['name']."</td>
      <td>".$row['password']."</td>";
      echo "</tr><br>";
    }
    
  }else{
    echo "No data found";
  }
  
  ?> 


</body>
</html>