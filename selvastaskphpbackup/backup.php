<?php

session_start();
include_once("adminlogindatabase.php");
//echo $_SESSION["name"];


if($_SESSION["superadmin"])
{

   


?>

<table border="0" style="margin-left: 0px;">
<tr>  <th><td>Name</td><td>Password</td><td>Color</td></th></tr>





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
       
       /* echo '<form action="superadmin.php" method="post">
            <input type="text" name="nm" value="'.$a'">
            <input type="text" name="pw" value="'.$b'">
            <input type="text" name="clr" value="'.$c'">
            </form>';*/
            echo $res = "<td><a href='superadmindelete.php?name=".$res['name']."'>Delete</a>
              <a href='superadminedit.php?name=".$res['name']."'>Edit</a></td>";


       echo"</tr>";"<br>";   

     
}

   
?><?php
}

else{
   header("Location: adminindex.php"); 
}
?>


<html>
<head>   
   <title>Edit Data</title>
</head>

<body> 
   <form>
   
      <button><a href="superadminadd.php"> add a new member</a></button>

      
         
   
   </form>

</body>
</html>
