<?php
session_start();
include_once("adminlogindatabase.php");
//echo $_SESSION["name"];

if($_SESSION["superadmin"] = " ")
{
	//header("Location: adminindex.php");
}
?>

<html>
<head><style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
	</style>
<title>Edit Data</title>
</head>
<body>
<a href="superadminadd.php"> add a new member</a>
<table>
	<tr><td>name</td><td>creditpoints</td><td>color</td><td>address</td><td>delete</td><td>edit</td></tr>

<?php
$result = mysqli_query($mysqli, "SELECT * FROM validate  ");
$i=0;
while($res = mysqli_fetch_assoc($result))
{

	 $i=$i+1;
	if($i % 2 == 0)
	{
		$color = " #D3D3D3";
	}else
	{
		$color = " #87CEEB";
	}
	//echo $color;
?>

<tr bgcolor="<?= $color;?>" ><td><?= $res['name'];?></td><td><?= $res['creditpoints'];?></td><td><?= $res['color'];?></td><td><?= $res['address'];?></td>
<td><a href='superadmindelete.php?name=<?= $res['name'];?>'>Delete</a></td><td><a href='superadminedit.php?name=<?= $res['name'];?>'>Edit</a></td></tr>
<?php  }  ?>
</table>
</body>
</html>
