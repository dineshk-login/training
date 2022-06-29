

<table border="1">
	<tr>
		<td>Id</td>
		<td>name</td>
		<td>designation</td>
		

	</tr>

<?php
include_once("logindatabase.php");
//getting id from url
$id = $_GET['id']; // id=3

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM studentdetails WHERE id=$id");

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
