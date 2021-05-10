<?php
session_start();
$si = $_SESSION["usuario_escuela"] ;

echo $si ."<br>";
echo "tipo:". gettype($si );




?>