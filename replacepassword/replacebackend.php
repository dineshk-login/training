<table border="1">
	<tr>
		<td>Id</td>
		<td>name</td>
		<td>designation</td>
		

	</tr>

<?php
include_once("replacedatabase.php");
//getting id from url
//$id= $_GET['id']; // id=3
$name= $_POST['name'];
$password= $_POST['password'];


//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM studentdetails WHERE name='$name' AND password='$password'");

while($res = mysqli_fetch_assoc($result))
{
	echo "<tr>";
      echo "<td>".$res['id']."</td>
      <td>".$res['name']."</td>
      <td>".$res['designation']."</td>";
      echo "</tr>";
}
?>

</table>
