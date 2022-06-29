<?php

require 'registerdatabase.php';
$studentname= $_POST['sname'];
$studentclass= $_POST['section'];
$year= $_POST['year'];
$batch= $_POST['batch'];
$fees= $_POST['fees'];
$balancefees= $_POST['balfees'];


$sql="INSERT INTO `studentfeesdetails`(`name`,`studentclass`,`year`,`batch`,`fees`,`balancefees`)VALUES ('$studentname','$studentclass','$year','$batch','$fees','$balancefees')";

if (mysqli_query($con,$sql)) {
	echo "Registeration success";

}else
{
echo "Registeration Failed".mysqli_error($con);
}
?>