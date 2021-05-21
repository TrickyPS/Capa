<?php

class Chat{




public static function comentar($usuario,$curso,$mensaje){
    $comentarios = null;
    $db = Connection::connect();
    $consulta = $db->query("CALL SP_Comentar(".$usuario.",".$curso.",'".$mensaje."')");
    if($consulta != null){

        while($row = $consulta->fetch_assoc()) {
  
          $comentarios[]=$row;
  
        }
         
        return $comentarios; 
      }
      else{
        
        echo('no funciono');
      }
  
      Connection::disconnect($db);

}

public static function addChat($usuario,$curso,$mensaje,$to){

  $db = Connection::connect();
   $db->query("CALL SP_Mensaje('".$mensaje."',".$curso.",".$usuario.",".$to.")");
 

    Connection::disconnect($db);

}

public static function getComentarios($curso){
    $comentarios = null;
    $db = Connection::connect();
    $consulta = $db->query("CALL SP_GetComentarios(".$curso.")");
    if($consulta != null){

        while($row = $consulta->fetch_assoc()) {
  
          $comentarios[]=$row;
  
        }
         
        return $comentarios; 
      }
      else{
        
        echo('no funciono');
      }
  
      Connection::disconnect($db);

}

public static function getChatEstudiante($usuario,$curso,$to){
  $comentarios = null;
    $db = Connection::connect();
    $consulta = $db->query("CALL SP_MensajeUsuario(".$usuario.",".$curso.",".$to.")");
    if($consulta != null){

        while($row = $consulta->fetch_assoc()) {
  
          $comentarios[]=$row;
  
        }
         
        return $comentarios; 
      }
      else{
        
        echo('no funciono');
      }
  
      Connection::disconnect($db);
}



public static function getChatMaestro($usuario){
  $comentarios = null;
    $db = Connection::connect();
    $consulta = $db->query("CALL SP_MensajeMaestro(".$usuario.")");
    if($consulta != null){

        while($row = $consulta->fetch_assoc()) {
  
          $comentarios[]=$row;
  
        }
         
        return $comentarios; 
      }
      else{
        
        echo('no funciono');
      }
  
      Connection::disconnect($db);
}


}











?>