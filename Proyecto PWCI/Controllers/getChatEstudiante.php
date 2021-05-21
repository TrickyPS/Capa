<?php


//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/chat.php");

$usuario = $_POST["usuario"];
$curso = $_POST["curso"];
$to = $_POST["to"];

$resp = Chat::getChatEstudiante($usuario,$curso,$to);

echo json_encode($resp);





?>