<?php
header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");



$limit = $_GET["limit"];
$to = $_GET["to"];



$resp = Curso::getAllCursos($limit,$to);

echo json_encode($resp);




?>