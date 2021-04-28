
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
                    <img class="rounded-circle" src="../IMG/photoshop.png" alt="" height="300px" width="300px" id="image">
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
                                <label for="avatar">Example file input</label>
                                <input type="file" class="form-control-file" id="avatar" name="avatar">
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
            <div class="mt-4 container">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card flex-sm-row  flex-md-row flex-md-row mb-4 box-shadow h-md-250 ">
                        <img class="shadow card-img-right flex-auto  mx-auto " alt="" style="width: auto; height:auto;"
                            src="../IMG/descarga.png" data-holder-rendered="true">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <button type="button" class="btn btn-dark mx-auto btn-lg mt-2" style="width:150px;">Ver
                                clase</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card flex-sm-row  flex-md-row flex-md-row mb-4  h-md-250 mt-3">
                        <img class=" shadow card-img-right flex-auto  mx-auto " alt="" style="width: auto; height:auto;"
                            src="../IMG/descarga.png" data-holder-rendered="true">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <button type="button" class="btn btn-dark mx-auto btn-lg mt-2"
                                style="width:150px;">Dark</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card flex-sm-row  flex-md-row flex-md-row mb-4 box-shadow h-md-250 ">
                        <img class="shadow card-img-right flex-auto  mx-auto " alt="" style="width: auto; height:auto;"
                            src="../IMG/descarga.png" data-holder-rendered="true">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <button type="button" class="btn btn-dark mx-auto btn-lg mt-2"
                                style="width:150px;">Dark</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card flex-sm-row  flex-md-row flex-md-row mb-4 box-shadow h-md-250 mt-3">
                        <img class=" shadow card-img-right flex-auto  mx-auto " alt="" style="width: auto; height:auto;"
                            src="../IMG/descarga.png" data-holder-rendered="true">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <button type="button" class="btn btn-dark mx-auto btn-lg mt-2"
                                style="width:150px;">Dark</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card flex-sm-row  flex-md-row flex-md-row mb-4 box-shadow h-md-250 mt-3">
                        <img class="shadow card-img-right flex-auto  mx-auto " alt="" style="width: auto; height:auto;"
                            src="../IMG/descarga.png" data-holder-rendered="true">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">World</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                                lead-in to additional content.</p>
                            <button type="button" class="btn btn-dark mx-auto btn-lg mt-2"
                                style="width:150px;">Dark</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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