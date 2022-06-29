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
<h1>welcome admin</h1>

<table border="1"bgcolor='#CCCCCC'>
  <tr>
    <th>ID</th>
    <th>Email</th>
    <th>Password</th>
     <th>Type</th>
     
  </tr>


 <?php
 
 
  require 'differentlogindatabase.php';
  $sql="SELECT * FROM userdetails";
  $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)) {
    # code...
    
    while ($row=mysqli_fetch_assoc($result)) {
      # code...
      echo "<tr>";
      echo "<td>".$row['id']."</td>
      <td>".$row['email']."</td>
      <td>".$row['password']."</td>
      <td>".$row['type']."</td>";

      echo "</tr>";
    }
    
  }else{
    echo "No data found";
  }
  
  ?> 


</table>
</body>
</html>


</body>
</html>