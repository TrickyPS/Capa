<?php


class Video{

    public static function addVideo($title,$nivel,$video){
        $db = Connection::connect();
       $db->query("CALL SP_AltaVideo(".$nivel.",'".$video."','".$title."')");
       
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






          public static function getVideo($id){
            $video = null;
            $db = Connection::connect();
        
            $consulta = $db->query("CALL SP_GetVideo(".$id.")");
        
        
            if($consulta != null){
        
              $video = mysqli_fetch_array($consulta);
               
              return $video; 
            }
            else{
              
              echo('no funciono');
            }
        
            Connection::disconnect($db);
        
              }
    


              public static function getInfoVideo($id){
                $video = null;
                $db = Connection::connect();
            
                $consulta = $db->query("CALL SP_GetInfoVideo(".$id.")");
            
            
               
                if($consulta != null){
    
                  while($row = $consulta->fetch_assoc()) {
            
                    $video[]=$row;
            
                  }
                   
                  return $video; 
                }
                else{
                  
                  echo('no funciono');
                }
            
                Connection::disconnect($db);
            
                  }






}








?>