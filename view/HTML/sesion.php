<?php




session_start();


$_SESSION["user"]=  "session";
$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["id"] = $_POST["id"];
$_SESSION["usuario_escuela"] = $_POST["estudiante"];
$_SESSION["correo"] = $_POST["correo"];
$_SESSION["contra"] = $_POST["contra"];
$_SESSION["caducate"] = time();



$id = $_SESSION["id"]; 
$ch = curl_init();
// definimos la URL a la que hacemos la petición
curl_setopt($ch, CURLOPT_URL,"http://localhost/Capa/Capa/Proyecto%20PWCI/Controllers/getImageProfile.php");
// indicamos el tipo de petición: POST
curl_setopt($ch, CURLOPT_POST, TRUE);
// definimos cada uno de los parámetros
curl_setopt($ch, CURLOPT_POSTFIELDS, "id=".$id);

// recibimos la respuesta y la guardamos en una variable
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$imageAvatar = curl_exec ($ch);
$_SESSION["avatar"] =$imageAvatar;
// cerramos la sesión cURL
curl_close ($ch);



?>