<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/user2.php");

        $correo   = $_POST["emaill"];
		$contra = $_POST["passwordl"];

$usuario = new user($correo,$contra);
$resp = $usuario->Verifica();   

echo json_encode($resp);

?>