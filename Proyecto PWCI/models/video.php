<?php


class Video{

    public static function addVideo($title,$nivel,$video){
        $db = Connection::connect();
       $db->query("CALL SP_AltaVideo(".$nivel.",'".$video."','".$title."')");
       
        Connection::disconnect($db);
        
    }

    public static function addProgress($usuario,$video){
      $db = Connection::connect();
     $db->query("CALL SP_AltaProgress(".$usuario.",".$video.")");
     
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



                  public static function getProgress($curso,$usuario){
                    $db = Connection::connect();
                   $cantVideos = $db->query("SELECT count(A.id) AS cantidad from video A INNER JOIN nivel B ON  A.nivel = B.id 
                   INNER JOIN curso C  ON B.curso = C.id
                   WHERE A.active = 1 AND C.id =" . $curso. ";");
              
                  $cant = mysqli_fetch_array($cantVideos);
                             
                    $cantMyVid = $db->query("SELECT count( DISTINCT A.video) AS cantidad FROM progress A INNER JOIN video B ON A.video = B.id 
                    INNER JOIN nivel C ON C.id = B.nivel INNER JOIN curso D ON D.id = C.curso
                    WHERE A.usuario = ".$usuario." AND D.id = ".$curso.";");
                  $cant2 = mysqli_fetch_array($cantMyVid);
              
              return $cant2["cantidad"] / $cant["cantidad"];
              
              
                   
                    Connection::disconnect($db);
                    
                }



}








?>


