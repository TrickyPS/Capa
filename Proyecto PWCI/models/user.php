<?php

class User {

private $db;
private $user;

private $nombre;
private $contra;
private $correo;
private $clase;



public function __construct($nombre,$contra,$correo,$clase){
        $this->db=Connection::connect();
        $this->nombre =$nombre;
        $this->contra =$contra;
        $this->correo =$correo;
        $this->clase =$clase;
        }

        

public function Registra(){


     /*    echo($this->nombre.$this->contra.$this->correo); */
     
        $this->db->query("CALL SP_AltaUsuario('".$this->nombre."','".$this->contra."','".$this->correo."',".$this->clase.")");
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

