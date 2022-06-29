


<table>
	<tr>
		<td>Id</td>
		<td>rollno</td>
		<td>age</td>
		<td>email</td>
    

	</tr>


<?php
$rollnumber= $_POST['rollnumber'];


include_once("searchdatabase.php");


//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM studentdetails WHERE rollno=$rollnumber");

//echo "$result";
while($a = mysqli_fetch_assoc($result)){
	
      echo "<tr><td>".$a['id']."</td><td>".$a['rollno']."</td><td>".$a['Age']."</td><td>".$a['Email']."</td></tr>";
      
}
?>

</table>




