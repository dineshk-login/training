


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="lightgreen">

<table border="1"bgcolor='#CCCCCC'>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>password</th>
    <th>designation</th>

     
  </tr>


 <?php
 
 
  require 'workersdetailsdatabase.php';
  $a=$_GET['desig'];

 echo "$a";
 echo  $sql="SELECT * FROM studentdetails WHERE designation='$a'";

  $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)) {
    # code...
    
    while ($row=mysqli_fetch_assoc($result)) {
      # code...
      echo "<tr>";
      echo "<td>".$row['id']."</td>
      <td>".$row['name']."</td>
      <td>".$row['password']."</td>
      <td>".$row['designation']."</td>";

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