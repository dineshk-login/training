<?php

if(isset($_POST['submit']))
{
$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");

$fileName = $_FILES['file']['name'];
$extension = substr($fileName, strrpos($fileName, '.') + 1); // getting the info about the image to get 
 
if(in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
     echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    
 
    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
        echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
       move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
}
?>
<form method="post"  enctype="multipart/form-data" >
 
<label for="file"><span>Filename:</span></label>
 
<input type="file" name="file" id="file" /> 
 
<br />
<input type="submit" name="submit" value="Submit" />
</form>