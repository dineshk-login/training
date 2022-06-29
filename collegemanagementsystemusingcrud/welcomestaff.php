

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="lightgreen">
<h1>welcome staff</h1>

<table border="1">
  <tr bgcolor='#CCCCCC'>
    <th>ID</th>
    <th>student name</th>
    <th>student class</th>
    <th>year</th>
     <th>batch</th>
     <th>fees</th>
     <th>balancefees</th>
     
  </tr>


 <?php
 
 
  require 'registerdatabase.php';
  $sql="SELECT * FROM studentfeesdetails";
  $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)) {
    # code...
    
    while ($row= mysqli_fetch_assoc($result)) {
      # code...
     echo "<tr>";
      echo "<td>".$row['id']."</td>
      <td>".$row['name']."</td>
      <td>".$row['studentclass']."</td>
      <td>".$row['year']."</td>
      <td>".$row['batch']."</td>
      <td>".$row['fees']."</td>
      <td>".$row['balancefees']."</td>";
      echo "</tr>";
    }
    
  }
  
  ?> 


</table>
<center><a href="login.html">logout</a></center>
</body>
</html>



