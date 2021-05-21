<?php

header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/video.php");

$id = $_GET['id'];

if($id!=null){

    $resp = Video::getInfoVideo($id);
    echo json_encode($resp);
}










?>