<?php

class User {

private $db;
private $user;

private $nombre;
private $contra;
private $correo;
private $clase;



public function __construct($correo,$contra){
    $this->db=Connection::connect();
    $this->correo =$correo;
    $this->contra =$contra;
}


           public function Verifica(){

                $consulta = $this->db->query("CALL SP_Login('".$this->correo."','".$this->contra."')");


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
?>

