<?php
header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/curso.php");

$id =     $_POST['id'];
$nameCurso = $_POST["nameCurso"];
$costo = $_POST['costo'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];


   if (($_FILES["img"]["type"] == "image/pjpeg")
    || ($_FILES["img"]["type"] == "image/jpeg")
    || ($_FILES["img"]["type"] == "image/png")
    || ($_FILES["img"]["type"] == "image/gif")) {
    
        $imgData = addslashes(file_get_contents($_FILES['img']['tmp_name']));
        //echo "$imgData";
       Curso :: addCurso($id,$nameCurso,$costo,$descripcion,$categoria,$imgData);
       
       echo "success";
  
   
} else {

   echo "No es imagen";
  
}










?>