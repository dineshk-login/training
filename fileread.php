<?php
$filename= "abc.txt";
$file= fopen($filename, "r");
if($file==false){
	echo("Error in opening file");
	exit();
}
	$filesize= filesize($filename);
	$filetext= fread($file,$filesize);
	fclose($file);
	echo ("Filesize:$filesize bytes");
	echo("<pre>$filetext</pre>")

?>