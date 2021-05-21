<?php


header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/video.php");

$id = $_POST["nivel"];

$resp = Video::getVideos($id);

echo json_encode($resp);









?>