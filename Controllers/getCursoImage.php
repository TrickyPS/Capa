<?php

header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");

$id = $_POST['id'];

if($id!=null){

    $resp = Curso::getCursoImage($id);
    echo 'data:image/jpeg;base64,'.base64_encode(  $resp["img"] );
}










?>