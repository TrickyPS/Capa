<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/chat.php");


$curso = $_POST["curso"];

$resp = Chat::getComentarios($curso);

echo json_encode($resp);

?>