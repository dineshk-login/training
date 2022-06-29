<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="lightgreen">


<table border="1" bgcolor="#CCCCCC">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
     <th>Designation</th>
  </tr>


 <?php

  $a=$_POST['id'];
  //echo "$a";

  require 'staffdetailsdatabase.php';
  $sql="SELECT * FROM studentdetails WHERE id=$a";
  $result=mysqli_query($mysqli,$sql);
    if (mysqli_num_rows($result)) {
    
    while ($row=mysqli_fetch_assoc($result)) {
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
