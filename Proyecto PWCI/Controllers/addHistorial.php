<?php

//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");

$id =     $_POST['id'];
$user= $_POST["user"];




Curso::addHistorial($id,$user);

echo "succes";

?>