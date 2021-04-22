<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/user.php");

        $name =   $_POST["nombresign"];
		$correo = $_POST["correosign"];
		$contra = $_POST["contraseñasign"];
        $clase  = $_POST['flexRadioDefault'] == true ? "true" : "false";
$usuario = new user($name,$correo,$contra,$clase);
$resp = $usuario->Registra();

echo json_encode($resp);

?>