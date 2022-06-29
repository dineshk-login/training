<?php
include_once("logindatabase.php");


$result = mysqli_query($mysqli, "SELECT * FROM person  ");

while($res = mysqli_fetch_assoc($result))
{
	$a = $res['name'];
	$b = $res['fathername'];
	$c = $res['Age'];
    $d = $res['address'];

	
	
	
	
	   
        echo "<td>".$a."</td>";"<br>";
        echo "<td>".$b."</td>";
        echo "<td>".$c."</td>";
        echo "<td>".$d."</td>";

       
       /* echo '<form action="superadmin.php" method="post">
            <input type="text" name="nm" value="'.$a'">
            <input type="text" name="pw" value="'.$b'">
            <input type="text" name="clr" value="'.$c'">
            </form>';*/
            echo $res = "<td><a href='update.php?name=".$res['name']."'>Edit</a></td>"
             ;


     	 echo"</tr>";"<br>"; "<br>";  
     	}
     
?>