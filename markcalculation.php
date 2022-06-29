<?php
if ($_POST) {
	

$a=$_POST["fname1"];
$b=$_POST["tmark"];
$c=$_POST["emark"];
$d=$_POST["mmark"];
$e=$_POST["pmark"];
$f=$_POST["ctmark"];
$total=$b+$c+$d+$e+$f;
$average=$total/5;
echo("student name:"."$a<br>");
echo("tamil mark:"."$b<br>");

echo("english mark:"."$c<br>");

echo("maths mark:"."$d<br>");

echo("physics mark:"."$e<br>");
echo("chemistry mark:"."$f<br>");
echo("the total is:"."$total<br>");
echo("the average is:"."$average<br>");
}

?>