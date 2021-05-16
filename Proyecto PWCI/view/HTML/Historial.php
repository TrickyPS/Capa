
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <!--  Link de css -->
    <link rel="stylesheet" href="../CSS/Historial.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- Links de fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
    <script src="../JS/Modelos/models.js" defer></script>
    <title>Creative Studios</title>
</head>

<body>
<?php
require_once("header.php")
?>
    <div class=" d-flex opciones mx-auto border-bottom border shadow" style="justify-content: space-evenly;">
        <button id="boton1" class="button mt-2"><span>Mi cuenta</span></button>
        <button id="boton2" class="button mt-2"><span>Cursos</span></button>
    </div>
    <div class="division d-none" id="cuentota">
        <section class=" cuenta d-flex align-items-center" id="home" data-scroll-index="0">
            <div class="container">
                <div class="col-lg-4 mx-auto text-center">
                    <img class="rounded-circle" src="../IMG/user.png" alt="" height="300px" width="300px" id="image">
                    <title>Placeholder</title>
                    </svg>

                    <h2 id="tipou"></h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is
                        the
                        first column.</p>
           
                </div>
            </div>
        </section>
        <section id="cursotes" class="  cursos d-flex align-items-center " id="home" data-scroll-index="0">
            <div class="mt-4 container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="box-shadow justify-content-center mx-auto">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-3 text-primary mx-auto text-center">Personal Details</h6>
                        </div>
                        <form class="row justify-content-center" id="rerto3" enctype="multipart/form-data" accept-charset="utf-8" method="POST">
                        
                            <div class=" col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="uName">Nombre</label>
                                    <input type="text" class="form-control" id="uName" placeholder="Enter full name" name="nombre">
                                 </div>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="uEmail">Email</label>
                                    <input type="email" class="form-control" id="uEmail" placeholder="Enter email ID" name="correo">
                                </div>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="uContra">Contraseña</label>
                                    <input type="password" class="form-control" id="uContra" placeholder="Enter password" name="contra">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12"">
                            <input type="file" class="custom-file-input" id="avatar" lang="es" name="avatar" accept="image/*">
                    <label class="custom-file-label" for="avatar">Seleccionar imagen de perfil</label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <div class="text-center  mx-auto justify-content m-3">
                                    <button type="submit" id="submit" name="submit"
                                        class="btn btn-primary">Update</button>
                                </div>
  
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div class="division2" id="cursotes">
        <section class="  cursos d-flex align-items-center">
            <div class="mt-4 container" id="addCursos">
                
               
            </div>
        </section>
    </div>

    <?php
require_once("footer.php")
?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../JS/jquery-3.6.0.min.js"></script>
  <script src="../JS/bootstrap4.js"></script>
  <script src="../JS/popper4.js"></script>
    <!-- Optional JavaScript -->
    <script src="../JS/Historial.js"></script>
</body>

</html>