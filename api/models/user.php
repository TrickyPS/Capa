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


public static function updatePerfilAvatar ($id,$nombre,$contra,$correo,$avatar){
        $user = null;
        $db=Connection::connect();
        $consulta = $db->query("CALL SP_UpdatePerfil(".$id.",'".$nombre."','".$correo."','".$contra."','".$avatar."')");
        
        if($consulta != null){

               while($row = $consulta->fetch_assoc()) {

          $user[]=$row;

                }
             //  $row = mysqli_fetch_array($consulta);
               
                return $user; 
        }
              else{
                echo('no funciono');
              }
        Connection::disconnect($db);
     
         }

         public static function updatePerfil ($id,$nombre,$contra,$correo){
                $user = null;
                $db=Connection::connect();
                $consulta = $db->query("CALL SP_UpdatePerfilDatos(".$id.",'".$nombre."','".$correo."','".$contra."')");
                
                if($consulta != null){
        
                        while($row = $consulta->fetch_assoc()) {
        
                          $user[]=$row;
        
                        }
                     //  $row = mysqli_fetch_array($consulta);
                       
                        return $user; 
                }
                      else{
                        echo('no funciono');
                      }
                Connection::disconnect($db);
             
                 }
        

        

public static  function Registra($nombre,$correo,$contra,$clase){
        $db = Connection::connect();
        $db->query("CALL SP_AltaUsuario('".$nombre."','".$correo."','".$contra."',".$clase.")");
        Connection::disconnect($db);
           }

public static  function getImageProfile($id){
        $user = null;
        $db = Connection::connect();
        $consulta = $db->query("CALL SP_GetAvatar(".$id.")");
        if($consulta != null){
        
                       
                     $user = mysqli_fetch_array($consulta);
                       
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

