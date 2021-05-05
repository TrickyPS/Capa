<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/user2.php");

        $correo   = $_POST["emaill"];
		$contra = $_POST["passwordl"];


$resp = UserV :: Verifica($correo,$contra);   

echo json_encode($resp);    

?>