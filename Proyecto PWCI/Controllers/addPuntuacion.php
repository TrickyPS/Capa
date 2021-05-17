<?php

//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");

$curso =     $_POST['curso'];
$usuario= $_POST["usuario"];
$pts = $_POST['pts'];




Curso::addPuntuacion($usuario,$curso,$pts);

$resp = Curso::getPuntuacion($curso);

echo json_encode($resp);

?>