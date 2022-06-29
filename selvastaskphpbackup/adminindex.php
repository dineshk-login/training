<?php

  session_start();
 // $a= " ";
if($_POST){

	require 'adminlogindatabase.php';
	$name=$_POST['name'];
  //echo $name;


	$password=$_POST['password'];
	
  //
  $response;
	 //echo "$name,$password";
	$sql="SELECT * FROM validate WHERE name='$name' AND password='$password'";
  
	//echo "$sql";
	$result=mysqli_query($mysqli,$sql);
 // $ress = mysqli_fetch_assoc($result)

  //$nm=$ress['name'];

 // $pw = $ress['password'];
 // echo $nm;
    	//echo $result;
    	if (mysqli_num_rows($result))
    	 {
              if($name == "admin" && $password == "1234")
                    {
                     // $fname = $_SESSION["name"];
                     $_SESSION["superadmin"] = "admin";
                            header("Location: superadmindashboard.php");  
                    }
                    else
                     {

                    $_SESSION["name"] = $name;
                       //echo $_SESSION["name"];
  

                      header("Location: admindashboard.php"); 
                      }
        }
        else
        
          { 
          $a= "error in password or incorrect name";
          }
         
}

?>
	
	

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text] {
  width: 240px;
  padding: 12px 20px;
  margin: 80px 40px 30px 70px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
 input[type=password] {
  width: 240px;
  padding: 12px 20px;
  margin: 30px 30px 30px 40px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 40px 40px 50px 180px;
  align-items: center ;
  border: none;
  cursor: pointer;
  width: 10%;
  display: inline-block;

}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  margin-left: 25%;
  margin-right: 25%;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body bgcolor="grey">

<!--<h2>Login Form</h2>-->

<form action="" method="POST">

  <div class="imgcontainer">
    <img src="avatar.jpg" alt="Avatar" class="avatar">
  </div>
 

  <div class="container">
    <label style="margin: 0px 0px 0px 10px;" for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" >
    <br>
    
    <label style="margin: 0px 0px 0px 10px;" for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><span><?php

    if($_POST) 
    {
      echo $a;
    }

    ?></span>
    <br>
    <button type="submit">Login</button>
  

</form>

</body>
</html>
