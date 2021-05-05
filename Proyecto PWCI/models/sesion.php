<?php
require_once("../models/user.php");
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
$data = $user[0];
$_SESSION["user"]=  "session";
$_SESSION["nombre"] = $data["nombre"];
$_SESSION["id"] = $data["id"];
$_SESSION["usuario_escuela"] = $data["usuario_escuela"];
$_SESSION["correo"] = $data["correo"];
$_SESSION["contra"] = $data["contra"];




        
		

$profileImage = User :: getImageProfile($data["id"]);
$_SESSION["avatar"] = 'data:image/jpeg;base64,'.base64_encode(  $profileImage["avatar"] );

/* unset($_SESSION["newsession"]); */
/*session deleted. if you try using this you've got an error*/
?>