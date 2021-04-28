<?php

//header('Access-Control-Allow-Origin: *');
require_once("../db/db.php");
require_once("../models/user.php");

        $id =   $_POST["id"];
		

$resp = User :: getImageProfile($id);

// echo $resp;

echo 'data:image/jpeg;base64,'.base64_encode(  $resp["avatar"] );




?>