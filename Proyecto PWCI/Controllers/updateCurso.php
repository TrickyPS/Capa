<?php
//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");

$id =     $_POST['id'];
$nameCurso = $_POST["nameCurso"];
$costo = $_POST['costo'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];


    

Curso :: updateCurso($id,$nameCurso,$costo,$descripcion,$categoria);
       
 echo "success";
  



?>