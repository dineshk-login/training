<?php

session_start();
include_once("adminlogindatabase.php");

if($_SESSION["name"]=="")
{
	header("Location: adminindex.php");	
}


?>

<table border="0" style="margin-left: 0px;">
<tr>	<th><td>Name</td><td>Password</td><td>Color</td></th></tr>





<?php

$result = mysqli_query($mysqli, "SELECT * FROM validate  ");

while($res = mysqli_fetch_assoc($result))
{																																																																																										
	$a = $res['name'];
	$b = $res['password'];
	$c = $res['color'];

	
	
	
	   
        echo "<td>".$a."</td>";
        echo "<td>".$b."</td>";
        echo "<td>".$c."</td>";
       
       
            echo $res = "<td><a href='superadminedit.php?name='".$res['name']."'>Edit</a>
            <td><a href='superadmindelete.php?name='".$res['name']."'>Delete</a><td><a href='superadminadd.php?name='".$res['name']."'>add</a></td>"; 

            
             //echo $res = "<td><a href='superadmindelete.php?name='".$res['name']."'>Delete</a></td>";

     	 echo"</tr>";"<br>";  

               //echo"</tr>";"<br>";   
          
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	
	
	<form name="form1" method="post" action="supperadminedit.php">

		3
		<table border="0">
		
			
		</table>
	</form>
</body>
</html>
