<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <!--  Link de css -->
    <link rel="stylesheet" href="../CSS/Video.css">
    <link rel="stylesheet" href="../CSS/cms.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- Links de fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
    <script src="../JS/cms.js" defer > </script>
    <title>Creative Studios</title>
</head>

<body>
<?php
require_once("header.php")
?>
    <div class="d-flex inicio justify-content-center mx-auto" style="padding-top: 20px;">
        <h1 style="color: white;">Creacion de cursos</h1>
    </div>
    <section class=" cursos d-flex " id="home" data-scroll-index="0">
        <div class="mt-4 mb-4 container  p-5">
            <div class="row justify-content-center">
                <h1 class="mx-auto m-3">Cursos Agregados</h1>
            </div>
            <ul class="list-group list-group-flush" id="addCursos">
                
               
            </ul>
            <a class="ver_todos m-1  d-block mt-3 mb-3 text-right font-weight-bold text-primary">Ver todos</a>
            
            <div class="row ">
                <div class="col-8">
                   
                </div>
                <div class="col-4">
                    <button class="btn btn-main w-100"  data-toggle="modal" data-target="#ModalAddCurso" onclick="getCategorias('categoria')"><i class="fas fa-plus mr-2"></i>Agregar Curso</button>
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col-8">
                   
                </div>
                <div class="col-4">
                    <button class="btn btn-main w-100"  data-toggle="modal" data-target="#ModalAddCategoria" ><i class="fas fa-plus mr-2"></i>Agregar Categoria</button>
                </div>
            </div>
           <div  id="toggleCurso">
           <hr/>
            <h1 class="mt-4 mb-4">Informacion del curso</h1>
            <div class="form-row mt-2 mb-5">
                <div class="col-6 pr-2">
                <img alt="imagen" width="100%" height="200" class="fondo_curso" id="imagenE">
                <button class="btn btn-main w-100" id="btnUpdateCurso"> <i class="fas fa-pen mr-2"></i>Actualizar</button>
                    <button class="btn btn-second w-100 mt-1" id="btnDeleteCurso"> <i class="fas fa-trash-alt mr-2 "></i>Eliminar</button>
                </div>
                <div class="col-6">
                <label for="nombreE">Nombre:</label>
                <input type="text" placeholder="Nombre del curso" class="form-control" id="nombreE">
                <label for="costoE">Costo:</label>
                <input type="number" placeholder="Costo MXN" min="0" class="form-control" id="costoE">
                <label for="descripcionE">Descripcion:</label>
                <input type="text" placeholder="Descripcion" class="form-control" id="descripcionE">
                <label for="categoriaE">Categoria:</label>
                <select id="categoriaE" class="form-control">
                        
                </select>
                </div>
                
            </div>
            <hr/>
            <h1 class="mt-4 mb-4">Niveles</h1>
            <div class="form-row mt-2 mb-5">
                <div class="col-8">
                    <input type="text" placeholder="Nombre del nivel" class="form-control" id="nombreN">
                </div>
               
                <div class="col-4">
                    <button class="btn btn-main w-100" onclick="addNivel();"> <i class="fas fa-plus mr-2"></i>Agregar Nivel</button>
                </div>
            </div>
           
           <div id="niveles">
           
           </div>
           



        </div>
           </div>
        </div>
    </section>
 
    <footer class=" text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0 mt-3">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="color: black;">
            © 2021 Copyright:
            <a class="text-black" href="https://mdbootstrap.com/" style="color: black;">Creative Studios</a>
        </div>
        <!-- Copyright -->
    </footer>

<!--Modal curso-->
<div class="modal fade" id="ModalAddCurso"   tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Curso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formCurso">

        <div class="modal-body">
            
                <div class="form-group">
                  <label for="cTitle">Titulo:</label>
                  <input type="text" class="form-control" id="cTitle" placeholder="Agregar titulo" name="nameCurso" >
                 
                </div>
                
                <div class="form-group">
                  <label for="cDesc">Descripcion:</label>
                  <input type="text" class="form-control" id="cDesc" placeholder="Agregar descripcion" name="descripcion">
                 
                </div>
                
                <div class="form-group">
                  <label for="CCosto">Costo:</label>
                  <input type="number" min="0" class="form-control" id="cCosto" placeholder="Agregar el costo MXN" name="costo">
                 
                </div>
                <div class="form-group">
                <label for="categoria">Categoria:</label>
                    <select id="categoria" class="form-control" name="categoria">
                        
                    </select>
                </div>
                <div class="custom-file mt-3">
                
                    <input type="file" class="custom-file-input" id="cImagen" lang="es" name="img" accept="image/*">
                    <label class="custom-file-label" for="cImagen">Seleccionar imagen del curso</label>
                </div>

            
        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-main">Agregar</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  <!--Modal categoria-->
<div class="modal fade" id="ModalAddCategoria"   tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Nueva Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formCategoria">
            <div class="modal-body">
            
                <div class="form-group">
                  <label for="nCategoria">Nombre de categoria:</label>
                  <input type="text" class="form-control" id="nCategoria" placeholder="Agregar categoria" >
                </div>
              

            
            </div>
            <div class="modal-footer">
          
                <button type="submit" class="btn btn-main">Agregar</button>
             </div>
        </form>
      </div>
    </div>
  </div>

  <!--Modal video-->
<div class="modal fade" id="ModalAddVideo"   tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Video</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formVideo">

        <div class="modal-body">
            
                <div class="form-group">
                  <label for="vTitle">Titulo:</label>
                  <input type="text" class="form-control" id="vTitle" placeholder="Agregar titulo" name="nameCurso" >
                 
                </div>
                
                
                <div class="custom-file mt-3">
                
                    <input type="file" class="custom-file-input" id="vVideo" lang="es" name="img" accept="video/mp4">
                    <label class="custom-file-label" for="vVideo">Seleccionar video</label>
                </div>

            
        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-main">Agregar</button>
        </div>
    </form>
      </div>
    </div>
  </div>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../JS/jquery-3.6.0.min.js"></script>
  
  <script src="../JS/popper4.js"></script>
  <script src="../JS/bootstrap4.js"></script>
    <!-- Optional JavaScript -->
    <script src="../JS/Video.js"></script>
</body>

</html>