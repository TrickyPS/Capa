<?php

class User {

private $db;
private $user;
private $nombre;
private $correo;
private $contra;
private $avatar;



public function __construct($nombre,$correo,$contra,$avatar){
    $this->db=Connection::connect();
    $this->correo =$nombre;
    $this->contra =$correo;
    $this->correo =$contra;
    $this->contra =$avatar;
}


           public function Obtener(){

                $consulta = $this->db->query("CALL SP_UpdatePerfil('".$this->nombre."','".$this->correo."','".$this->contra."','".$this->avatar."')");


                if($consulta != null){

                  while($row = $consulta->fetch_assoc()) {

                    $this->user[]=$row;

                  }
                  return $this->user; 
                }
                else{
                  echo('no funciono');
                }
               
                 
                Connection::disconnect($this->db);
            

  
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
