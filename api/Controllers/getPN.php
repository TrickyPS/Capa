<?php

header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/video.php");


$curso = $_POST["curso"];

$resp = Video::getPN($curso);

echo json_encode ($resp);

?>