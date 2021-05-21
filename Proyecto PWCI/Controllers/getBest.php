<?php

//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");


$resp = Curso::getBest();

echo json_encode($resp);







?>