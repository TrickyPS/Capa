<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/video.php");

$nivel = $_POST["nivel"];
$titulo = $_POST["titulo"];

//if ($_FILES["video"]["type"] == "video/mp4") {
    
        $video = addslashes(file_get_contents($_FILES['video']['tmp_name']));
        
       Video :: addVideo($titulo,$nivel,$video);
       
       echo "success";
  
  // } else {

 // echo "No es video";
  
//}
/*
if (count($_FILES) > 0) {
    echo "Upload: " . $_FILES["video"]["name"] . "<br />";
    echo "Type: " . $_FILES["video"]["type"] . "<br />";
    echo "Size: " . ($_FILES["video"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["video"]["tmp_name"] . "<br />";
}else{
    echo "no manda nada defile ";
}

$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['video']['name'], PATHINFO_EXTENSION);

if ((($_FILES["video"]["type"] == "video/mp4")
|| ($_FILES["video"]["type"] == "audio/mp3")
|| ($_FILES["video"]["type"] == "audio/wma")
|| ($_FILES["video"]["type"] == "image/pjpeg")
|| ($_FILES["video"]["type"] == "image/gif")
|| ($_FILES["video"]["type"] == "image/jpeg"))

)

  {
  if ($_FILES["video"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["video"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["video"]["name"] . "<br />";
    echo "Type: " . $_FILES["video"]["type"] . "<br />";
    echo "Size: " . ($_FILES["video"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["video"]["tmp_name"] . "<br />";

    }
  }
else
  {
  echo $_FILES["video"]["type"];
  }

*/

?>