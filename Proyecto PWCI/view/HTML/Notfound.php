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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--      Links FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
   <!-- Links de fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
    
    <title>Creative Studios</title>
</head>


<body style="background: linear-gradient(90deg, rgb(27, 27, 27) 9%, rgb(17, 14, 14) 100%);">
    <div class="d-flex mamando ">
        <nav class="navbar navbar2 navbar-light bg-light fixed-top">

            <a class="navbar-brand p-0" href="#"  style="font-family: 'Fjalla One', sans-serif;">Diseño web</a>
            <a class="navbar-brand p-0" href="#"  style="font-family: 'Fjalla One', sans-serif;">Programacion</a>
            <a class="navbar-brand p-0" href="#"  style="font-family: 'Fjalla One', sans-serif;">C</a>
            <a class="navbar-brand p-0" href="#"  style="font-family: 'Fjalla One', sans-serif;">Ciencias</a>
            <a class="navbar-brand p-0" href="#"  style="font-family: 'Fjalla One', sans-serif;">Ciencias</a>
            <a class="navbar-brand p-0" href="#"  style="font-family: 'Fjalla One', sans-serif;">Ciencias</a>
        </nav>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="namep">
            <img class="imageno m-0 pb-1" src="../IMG/C.png" width="35px">
            <a class="navbar-brand titulo" href="IndexNuevo.html">Creative Studios</a>
        </div>
        <button id="botonazo" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class=" form1 form-inline mx-auto justify-content-center">
                <input class="buscador form-control mr-sm-2 justify-content-center" type="search" placeholder="Search"
                    aria-label="Search" style="width: 260px;">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <div class="grupo ml-auto">
                <ul class="navbar-nav text-center ml-auto mt-2"
                    style="flex-direction: row; justify-content: space-evenly;">

                    <!-- Button trigger modal -->
                    <li class="nav-item titulo" data-toggle="modal" data-target="#exampleModal">
                        <a class="COLORL nav-link titulo" href="#">Inicia sesión</a>
                    </li>
                    <!-- Button trigger modal2 -->
                    <li class="nav-item titulo" data-toggle="modal" data-target="#exampleModal2">
                        <a class="COLORL nav-link titulo" href="#">Registrate</a>
                    </li>

                    <li class="nav-item">

                        <a class="COLORL nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="imageno m-0 pb-0 rounded-circle" src="../IMG/photoshop.png" width="25px">
                            Pedro
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="Historial.html">Cuenta</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Mis cursos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Cerrar sesion</a>
                          </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex inicio justify-content-center mx-auto" style="padding-top: 90px;">
    </div>
    <div class="notfound">
        <div class="container">
            <div class="d-flex divisi text-center">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <img src="../IMG/—Pngtree—mobile phone model 2 5d_3919693.png" width="100%" height="auto">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 mx-auto my-auto" style="font-size: 50px;">
                    <p class="fontazo" style="color: white; font-family: 'Bungee', cursive;">Oops, hubo un error....</p>
                </div>
            </div>
        </div>
    </div>
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


                        <form>
                            <div class="form-group pl-5 pr-5">
                                <a>Correo electronico</a>
                                <input type="email" class="form-control" id="email1"
                                    placeholder="Ingresa tu correo electronico">
                            </div>
                            <div class="form-group pl-5 pr-5">
                                <a>Contraseña</a>
                                <input type="password" class="form-control" id="password1"
                                    placeholder="Ingresa tu contraseña">
                            </div>
                            <div class="grupo text-center pt-3">
                                <button type="button" class="btn btn-primary btn-md ">Small button</button>
                            </div>
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
                        <form>
                            <div class="form-group pl-5 pr-5">
                                <a>Nombre completo</a>
                                <input type="text" class="form-control" id="text" placeholder="Escribe tu nombre">
                            </div>
                            <div class="form-group pl-5 pr-5">
                                <a>Correo electronico</a>
                                <input type="email" class="form-control" id="email1" placeholder="Ingresa tu correo">
                            </div>
                            <div class="form-group pl-5 pr-5">
                                <a>Contraseña</a>
                                <input type="password" class="form-control" id="password1"
                                    placeholder="Ingresa tu contraseña">
                            </div>
                            <div class="grupo text-center pt-3">
                                <button type="button" class="btn btn-primary btn-md ">Small button</button>
                            </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    <!-- Optional JavaScript -->
    <script src="../JS/Historial.js"></script>
</body>

</html>