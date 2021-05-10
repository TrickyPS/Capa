<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");

$nombre = $_POST["nombre"];
$id = $_POST["id"];

Curso::addNivel($nombre,$id);

echo "success";

?>