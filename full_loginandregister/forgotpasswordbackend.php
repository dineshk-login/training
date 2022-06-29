<?php

 
 
  require 'registerdatabase.php';
 $a= $_POST['nm'];
  $sql="SELECT * FROM userdata WHERE name='$a'";
  $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)) {
    # code...
    	 while ($row=mysqli_fetch_assoc($result)) {
    
  echo "your password is".$row['password'];
    }
    }
  else{
   header("location:register.html");
  }
  
  ?> 
