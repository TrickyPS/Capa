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


}











?>