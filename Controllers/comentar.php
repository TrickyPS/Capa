<?php
header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/chat.php");

$usuario = $_POST["usuario"];
$curso = $_POST["curso"];
$mensaje = $_POST["mensaje"];

$resp = Chat::comentar($usuario,$curso,$mensaje);

echo json_encode($resp);

?>