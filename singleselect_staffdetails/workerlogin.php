<html>
<head>	
	<title>Homepage</title>
</head>

<body>

<form action="staffdetailsbackend.php" method="post">

	<select name="id">

<option value="0">--select--</option>

	<?php 
	include_once("staffdetailsdatabase.php");
	 $a=$_POST['id'];

$result = mysqli_query($mysqli, "SELECT * FROM studentdetails"); 

	while($res = mysqli_fetch_assoc($result)) 
	{ 	
		$select = "";
		if ($res['id'] == $a) {
			$select = "selected";
		}
		echo "<option value=".$res['id']." $select >".$res['name']."</option>";
			
	}
	?>
<!--<option value="0">--abc--</option>-->
	</select>

	
	<div><?php
 if($a=="0")
  {
  	echo("please select the option");
  	
  }
?></div>
  <input type="submit" name="" value="submit">

</form>

<table border="1" bgcolor="#CCCCCC">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Password</th>
     <th>Designation</th>
  </tr>


 <?php

 
  //echo "$a";

  require 'staffdetailsdatabase.php';
  $sql="SELECT * FROM studentdetails WHERE id='".$a."'";

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
    echo "<tr><td colspan=4>No data found</td></tr>";
  }
  
  ?> 

  


</table>

</body>
</html>


