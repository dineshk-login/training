<?php

session_start();

$username = $_POST["name"];
$error = "username/password incorrect";

if($username == "$username"){
    $_SESSION["username"] = $username;
    header("location: homepage.php"); //send user to homepage, for example.
}else{
    $_SESSION["error"] = $error;
    header("location: adminfrontend.php"); //send user back to the login page.
}

?>