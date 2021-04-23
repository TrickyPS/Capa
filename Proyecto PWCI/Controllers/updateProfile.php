<?php

require_once("../db/db.php");
require_once("../models/user.php");

$id = $_POST['id'];
$nombre = $_POST["nombre"];
$correo   = $_POST["correo"];
$contra = $_POST["contra"];
$imageData = null;
/*
*/

if (count($_FILES) > 0) {
    if (($_FILES["avatar"]["type"] == "image/pjpeg")
    || ($_FILES["avatar"]["type"] == "image/jpeg")
    || ($_FILES["avatar"]["type"] == "image/png")
    || ($_FILES["avatar"]["type"] == "image/gif")) {
    
        $imgData = addslashes(file_get_contents($_FILES['avatar']['tmp_name']));
        //echo "$imgData";
        $user = User::updatePerfil ($id,$nombre,$contra,$correo,$imgData);
        
        header("Content-type: image/png");
        echo $user["avatar"];
        //echo json_encode($user);
   
} else {
    echo "No es una imagen";
}
}else{
  
    echo"no pasa";
}


//$resp = User::UpdateProfile($id,$nombre,$correo,$contra,$imageData); 

//echo json_encode($imageData);


?>