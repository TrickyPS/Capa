<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/usermuestra.php");

        $correo   = $_POST["emaill"];

$usuario = new user($correo,$contra);
$resp = $usuario->Obtener();   

echo json_encode($resp);

?>