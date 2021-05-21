<!doctype html>
<html lang="en">

<head>


    
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
  <!--  Link de css -->
  <link rel="stylesheet" href="../CSS/IndexNuevo.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
   
  <!-- Links de fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../CSS/toast.css">
  <script src="../JS/Modelos/models.js" defer></script>
  <script src="../JS/toast.js" defer></script>
  <title>Creative Studios</title>
</head>

<body>
<?php
require_once("header.php")
?>
  
  <section class="inicio d-flex align-items-center shadow" id="home" data-scroll-index="0">
    <div class="container">
      <div class="mt-5 row row-inicio align-items-center">
        <div class="col-md-7">
          <div class="inicio-text">
            <h1>Bienvenido a una aventura nueva.</h1>
            <p>Busca los cursos que ocupes para aprender y mejorar en tu escuela, trabajo o vida personal. Una nueva experiencia te espera...</p>

            <form class=" form2 form-inline">
              <input class="buscadori form-control mr-sm-2 input-lg" type="search" placeholder="Buscar..."
                aria-label="Search" style="width: 60%;">
              <button class="btn btn-outline-success" type="submit"
                style="width:25%; margin-left: 30px;">Buscar</button>
            </form>
          </div>
        </div>
        <div class="col-md-5 text-center">
          <div class="inicio-carrusel">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../IMG/car1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../IMG/car2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../IMG/car3.png" alt="Third slide">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- DIVISION DE multiples videos -->
  <section class="tarjeta">
    <div class="container" >
      <div class="cabezado">
        <h1 class=" d-flex pt-5 pb-4 mx-auto justify-content-center">Cursos Más Recientes</h1>
      </div>

      

       <div id="addCursos" class="row justify-content-center" >

       </div>
        
      </div>
  </section>
  <!--  DIVISION DE LOS PRECIOS -->
  <section class="parte3">
    <div class="container">
      <div class="row medio justify-content-center mt-4 border rounded">
        <div class="col-12">
          <div class="container ">
            <div class=" mb-3 text-center"  id="contBest">
             
           
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <?php
require_once("footer.php")
?>
  <!-- Modal -->
  <div class="modal fade modalon mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  " style="width:400px;">
      <div class="modal-content  modalon2">
        <button type="button" class="close ml-auto pr-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class=" col-12 ">
          <div class="modal-body">
            <div class="form-title text-center">
              <h4>Inicia sesión</h4>
            </div>


            <form id="rertol" accept-charset="utf-8" method="POST">
              <div class="form-group pl-5 pr-5">
                <a>Correo electronico</a>
                <input type="email" class="form-control" id="emaili" name="emaill"
                  placeholder="Ingresa tu correo electronico">
              </div>
              <div class="form-group pl-5 pr-5">
                <a>Contraseña</a>
                <input type="password" class="form-control" id="passwordi" name="passwordl"
                  placeholder="Ingresa tu contraseña">
              </div>

              <button type="submit" class="btn btn-primary btn-md d-block mx-auto">Inicia sesion</button>

            </form>


            <div class="text-center text-muted delimiter pt-2">or use a social network</div>
            <div class="text-center pt-3">
              <a class="text-muted text-hover-primary " href="#" target="_blank" title="instagram">
                <i class="fab fa-instagram" style="font-size: 25px;"></i>
              </a>

              <a class="text-muted text-hover-primary " href="#" target="_blank" title="facebook">
                <i class="fab fa-facebook" style="font-size: 25px;"></i>
              </a>

              <a class="text-muted text-hover-primary " href="#" target="_blank" title="twitter">
                <i class="fab fa-twitter" style="font-size: 25px;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade modalon mt-5" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  " style="width:400px;">
      <div class="modal-content  modalon2">
        <button type="button" class="close ml-auto pr-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class=" col-12 ">
          <div class="modal-body">
            <div class="form-title text-center">
              <h4>Crea una cuenta.</h4>
            </div>
            <form id="rerto" accept-charset="utf-8" method="POST">
              <div class="form-group pl-5 pr-5">
                <a>Nombre completo</a>
                <input type="text" class="form-control" name="nombresign" id="nombrer" placeholder="Escribe tu nombre">
              </div>
              <div class="form-group pl-5 pr-5">
                <a>Correo electronico</a>
                <input type="email" class="form-control" name="correosign" id="emailr" placeholder="Ingresa tu correo">
              </div>
              <div class="form-group pl-5 pr-5">
                <a>Contraseña</a>
                <input type="password" class="form-control" name="contraseñasign" id="passwordr"
                  placeholder="Ingresa tu contraseña">
              </div>
              <div class="row justify-content-center">
                <div class="form-check pl-4">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                    value="false">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Estudiante
                  </label>
                </div>
                <div class="form-check pr-4 " style="margin-left: 40px !important;">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                    value="true" checked>
                  <label class="form-check-label" for="flexRadioDefault2">
                    Profesor
                  </label>
                </div>
              </div>


              <button type="sumbit" class="btn btn-primary btn-md d-block mx-auto">Registrate</button>


            </form>

            <div class="text-center text-muted delimiter pt-2">or use a social network</div>
            <div class="text-center pt-3">
              <a class="text-muted text-hover-primary " href="#" target="_blank" title="instagram">
                <i class="fab fa-instagram" style="font-size: 25px;"></i>
              </a>
              <a class="text-muted text-hover-primary " href="#" target="_blank" title="facebook">
                <i class="fab fa-facebook" style="font-size: 25px;"></i>
              </a>
              <a class="text-muted text-hover-primary " href="#" target="_blank" title="twitter">
                <i class="fab fa-twitter" style="font-size: 25px;"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../JS/jquery-3.6.0.min.js"></script>
  <script src="../JS/bootstrap4.js"></script>
  <script src="../JS/popper4.js"></script>
  <!-- Optional JavaScript -->
  <script src="../JS/IndexNuevo.js"></script>
  <script src="../JS/Modelos/models.js"></script>

    


</body>


</html>