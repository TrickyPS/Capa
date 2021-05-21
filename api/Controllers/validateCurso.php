<?php
header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");



$curso= $_POST["curso"];
$usuario= $_POST["user"];


$resp = Curso::validateCurso($curso,$usuario);

echo json_encode($resp);




?>