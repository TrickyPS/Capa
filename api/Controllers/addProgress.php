<?php

header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/video.php");

$usuario = $_POST["usuario"];
$video = $_POST["video"];

Video::addProgress($usuario,$video);
echo "success";

?>