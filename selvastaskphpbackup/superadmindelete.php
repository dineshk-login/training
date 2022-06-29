<?php

include("adminlogindatabase.php");
$name= $_GET['name'];
echo $name;


$result = mysqli_query($mysqli, "DELETE  FROM validate WHERE name='$name'" );
//echo "DELETE FROM validate WHERE name=$name" ;


 header("Location:superadmindashboard.php");
?>
