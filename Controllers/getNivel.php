<?php
header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");


$id = $_POST["id"];

$resp = Curso::getNivel($id);

echo json_encode($resp);

?>