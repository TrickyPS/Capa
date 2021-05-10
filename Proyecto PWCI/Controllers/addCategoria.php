<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");

$nombre = $_POST["nCategoria"];

Curso::addCategoria($nombre);

echo "success";

?>