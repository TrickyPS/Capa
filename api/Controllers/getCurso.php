<?php

header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");

$id = $_POST['id'];

if($id!=null){

    $resp = Curso::getCurso($id);
    echo json_encode($resp);
}










?>