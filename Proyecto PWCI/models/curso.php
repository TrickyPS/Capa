<?php


class Curso{

public static function addCategoria($categoria){
    $db = Connection::connect();
    $db->query("CALL SP_AltaCategoria('".$categoria."')");
    Connection::disconnect($db);
}

public static function addNivel($nombre,$id){
  $db = Connection::connect();
  $db->query("CALL SP_AltaNivel('".$nombre."',".$id.")");
  Connection::disconnect($db);
}

public static function addCurso($id,$nameCurso,$costo,$descripcion,$categoria,$img){
  
    $db = Connection::connect();
    $consulta = $db->query("CALL SP_AltaCurso('".$nameCurso."','".$descripcion."','".$img."',".$costo.",".$id.",".$categoria.")");
   
    Connection::disconnect($db);
}

public static function deleteCurso($id){
  $db = Connection::connect();
  $db->query("CALL SP_DeleteCurso(".$id.")");
  Connection::disconnect($db);
}


public static function deleteNivel($id){
  $db = Connection::connect();
  $db->query("CALL SP_DeleteNivel(".$id.")");
  Connection::disconnect($db);
}

public static function updateCurso($id,$nameCurso,$costo,$descripcion,$categoria){
  
  $db = Connection::connect();
  $consulta = $db->query("CALL SP_UpdateCurso('".$nameCurso."','".$descripcion."',".$costo.",".$id.",".$categoria.")");
 
  Connection::disconnect($db);
}



public static function getCategorias(){
    $categorias = null;
    $db = Connection::connect();

    $consulta = $db->query("CALL SP_GetCategorias()");


    if($consulta != null){

      while($row = $consulta->fetch_assoc()) {

        $categorias[]=$row;

      }
       
      return $categorias; 
    }
    else{
      
      echo('no funciono');
    }

    Connection::disconnect($db);

      }

public static function getNivel($id){
        $niveles = null;
        $db = Connection::connect();
    
        $consulta = $db->query("CALL SP_GetNivel(".$id.")");
    
    
        if($consulta != null){
    
          while($row = $consulta->fetch_assoc()) {
    
            $niveles[]=$row;
    
          }
           
          return $niveles; 
        }
        else{
          
          echo('no funciono');
        }
    
        Connection::disconnect($db);
    
}

public static function getCursos($id){
        $cursos = null;
        $db = Connection::connect();
    
        $consulta = $db->query("CALL SP_GetCursos(".$id.")");
    
    
        if($consulta != null){
    
          while($row = $consulta->fetch_assoc()) {
    
            $cursos[]=$row;
    
          }
           
          return $cursos; 
        }
        else{
          
          echo('no funciono');
        }
    
        Connection::disconnect($db);
    
     }


 public static function getCurso($id){
      $curso = null;
      $db = Connection::connect();
  
      $consulta = $db->query("CALL SP_GetCurso(".$id.")");
  
  
      if($consulta != null){
  
        $curso = mysqli_fetch_array($consulta);
         
        return $curso; 
      }
      else{
        
        echo('no funciono');
      }
  
      Connection::disconnect($db);
  
   }
  
   public static function getCursoImage($id){
    $curso = null;
    $db = Connection::connect();

    $consulta = $db->query("CALL SP_GetCursoImage(".$id.")");


    if($consulta != null){

      $curso = mysqli_fetch_array($consulta);
       
      return $curso; 
    }
    else{
      
      echo('no funciono');
    }

    Connection::disconnect($db);

 }








public static function getAllCursos($limit,$to){
  $cursos = null;
  $db = Connection::connect();
  $consulta = $db->query("CALL SP_GetAllCursos(".$limit.",".$to.")");

  if($consulta != null){
    
    while($row = $consulta->fetch_assoc()) {

      $cursos[]=$row;

    }
     
    return $cursos; 
  }
  else{
    
    echo('no funciono');
  }

  Connection::disconnect($db);


}


public static function addHistorial($curso,$user){
  $db = Connection::connect();
    $db->query("CALL SP_AltaHistorial(".$curso.",".$user.")");
   
    Connection::disconnect($db);

}

public static function getHistorial($id){
  $cursos = null;
  $db = Connection::connect();
  $consulta = $db->query("CALL SP_Historial(".$id.")");

  if($consulta != null){
    
    while($row = $consulta->fetch_assoc()) {

      $cursos[]=$row;

    }
     
    return $cursos; 
  }
  else{
    
    echo('no funciono');
  }

  Connection::disconnect($db);


}


public static function validateCurso($curso,$user){
  $cursos = null;
  $db = Connection::connect();
  $consulta = $db->query("CALL SP_ValidateCurso(".$curso.",".$user.")");

  if($consulta != null){
    
    while($row = $consulta->fetch_assoc()) {

      $cursos[]=$row;

    }
     
    return $cursos; 
  }
  else{
    
    echo('no funciono');
  }

  Connection::disconnect($db);


}


    


}







?>