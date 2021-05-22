<?php


header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/chat.php");

$usuario = $_POST["usuario"];


$resp = Chat::getChatMaestro($usuario);

echo json_encode($resp);





?>