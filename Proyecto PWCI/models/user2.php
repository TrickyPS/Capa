<?php

class User {

private $db;
private $user;

private $nombre;
private $contra;
private $correo;
private $clase;



public function __construct(){
   
}


static  public function Verifica($correo,$contra){
                $user = null;
                $db = Connection::connect();

                $consulta = $db->query("CALL SP_Login('".$correo."','".$contra."')");


                if($consulta != null){

                  while($row = $consulta->fetch_assoc()) {

                    $user[]=$row;

                  }
                  require_once("sesion.php");
                  
                  return $user; 
                }
                else{
                  
                  echo('no funciono');
                }
             
                Connection::disconnect($db);
    
                  }


                }
        


        
/* public function getUsers(){

$consulta=$this->db->query("select * from user;");
while($filas=$consulta->fetch_assoc()){
	$this->user[]=$filas;
        }
Connection::disconnect($this->db);
return $this->user;
}
} */
?>

