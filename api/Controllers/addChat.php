<?php
header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/chat.php");

$usuario = $_POST["usuario"];
$curso = $_POST["curso"];
$mensaje = $_POST["mensaje"];
$to=$_POST["to"];

Chat::addChat($usuario,$curso,$mensaje,$to);

echo"succes";

?>