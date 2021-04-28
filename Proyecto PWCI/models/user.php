<?php

class User {

private $db;
private $user;

private $nombre;
private $contra;
private $correo;
private $clase;
private $avater;



public function __construct(){
      
        }


public static function updatePerfil ($id,$nombre,$contra,$correo,$avatar){
        $user = null;
        $db=Connection::connect();
        $consulta = $db->query("CALL SP_UpdatePerfil(".$id.",'".$nombre."','".$correo."','".$contra."','".$avatar."')");
        
        if($consulta != null){

               // while($row = $consulta->fetch_assoc()) {

                //  $user[]=$row;

               // }
               $row = mysqli_fetch_array($consulta);
               
                return $row; 
        }
              else{
                echo('no funciono');
              }
        Connection::disconnect($db);
     
         }

        

public static  function Registra($nombre,$correo,$contra,$clase){
        $db = Connection::connect();
        $db->query("CALL SP_AltaUsuario('".$nombre."','".$correo."','".$contra."',".$clase.")");
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

