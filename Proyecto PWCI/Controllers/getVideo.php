<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/video.php");


$id = $_GET["id"];

$resp = Video::getVideo($id);



echo 'data:video/mp4;base64,'.base64_encode(  $resp["video"] );





?>