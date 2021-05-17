<?php

//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/video.php");


$curso = $_POST["curso"];
$usuario = $_POST["usuario"];

$resp = Video::getProgress($curso,$usuario);

echo $resp;

?>