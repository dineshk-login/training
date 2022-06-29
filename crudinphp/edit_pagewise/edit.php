<html>
<head>
  <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) { 
  $name = $_POST['name'];
  
    $result = mysqli_query($conn, "INSERT INTO `workersinformations`(`name`) VALUES('$name')");
  
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='crudfrontend.php'>View Result</a>";
  }

?>
</body>
</html>