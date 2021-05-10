<?php


class Video{

    public static function addVideo($title,$nivel,$video){
        $db = Connection::connect();
       $db->query("CALL SP_AltaVideo('".$title."',".$nivel.",'".$video."')");
       
        Connection::disconnect($db);
        
    }

    public static function getVideos($id){
        $videos = null;
        $db = Connection::connect();
    
        $consulta = $db->query("CALL SP_GetVideos(".$id.")");
    
    
        if($consulta != null){
    
          while($row = $consulta->fetch_assoc()) {
    
            $videos[]=$row;
    
          }
           
          return $videos; 
        }
        else{
          
          echo('no funciono');
        }
    
        Connection::disconnect($db);
    
          }

}








?>