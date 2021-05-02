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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Links de fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
    
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
            <ul class="list-group list-group-flush">
                <li class="list-group-item h5">Curso 1
                    <button class="btn btn-second float-right">
                        <i class="fas fa-pen"></i>
                    </button>
                </li>
                <li class="list-group-item h5">Curso 2
                    <button class="btn btn-second float-right">
                        <i class="fas fa-pen"></i>
                    </button>
                </li>
                <li class="list-group-item h5">Curso 3
                    <button class="btn btn-second float-right">
                        <i class="fas fa-pen"></i>
                    </button>
                </li>

            </ul>
            <a class="ver_todos m-1  d-block mt-3 mb-3 text-right font-weight-bold text-primary">Ver todos</a>
            
            <div class="row ">
                <div class="col-8">
                   
                </div>
                <div class="col-4">
                    <button class="btn btn-main w-100"  data-toggle="modal" data-target="#ModalAddCurso"><i class="fas fa-plus mr-2"></i>Agregar Curso</button>
                </div>
            </div>
            <h1 class="mt-4 mb-4">Niveles</h1>
            <div class="form-row mt-2 mb-5">
                <div class="col-8">
                    <input type="text" placeholder="Nombre del nivel" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-main w-100"> <i class="fas fa-plus mr-2"></i>Agregar Nivel</button>
                </div>
            </div>
            <div class="form-row mt-2 mb-2">
                <div class="col-6">
                    <div class="list-group-item ">
                        <h5 class="d-inline-block">Nivel 1</h5>
                        <button type="button"
                            class="btn bg-transparent dropdown-toggle dropdown-toggle-split float-right">
                        </button>
                    </div>
                </div>
                <div class="col-2 ">
                    <button class="btn btn-main  w-100 h-100"> <i class="fas fa-plus mr-2"></i>Agregar video</button>
                </div>
                <div class="col-2 ">
                    <button class="btn btn-main w-100 h-100"><i class="fas fa-pen mr-2"></i>Editar</button>
                </div>
                <div class="col-2 ">
                    <button class="btn btn-main w-100 h-100"><i class="fas fa-trash mr-2"></i>Eliminar</button>
                </div>
            </div>



        </div>
        </div>
    </section>
    <footer class="main-footer">
        <div class="bg-gray-100 text-dark-700 py-6">
            <div class="container">
                <div class="row">
                    <div class="service-column col-lg-4">
                        <svg class="svg-icon service-icon">
                            <use xlink:href="/icons/orion-svg-sprite.svg#delivery-time-1"></use>
                        </svg>
                        <div class="service-text">
                            <h6 class="text-uppercase">Free shipping &amp; return</h6>
                            <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>
                        </div>
                    </div>
                    <div class="service-column col-lg-4">
                        <svg class="svg-icon service-icon">
                            <use xlink:href="/icons/orion-svg-sprite.svg#money-1">
                            </use>
                        </svg>
                        <div class="service-text">
                            <h6 class="text-uppercase">Money back guarantee</h6>
                            <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>
                        </div>
                    </div>
                    <div class="service-column col-lg-4">
                        <svg class="svg-icon service-icon">
                            <use xlink:href="/icons/orion-svg-sprite.svg#customer-support-1">
                            </use>
                        </svg>
                        <div class="service-text">
                            <h6 class="text-uppercase">020-800-456-747</h6>
                            <p class="text-muted font-weight-light text-sm mb-0">24/7 Available Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 bg-gray-300 text-muted">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">Sell<span
                                class="text-primary">.</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted text-hover-primary" href="#" target="_blank" title="twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted text-hover-primary" href="#" target="_blank" title="facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted text-hover-primary" href="#" target="_blank" title="instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted text-hover-primary" href="#" target="_blank" title="pinterest">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted text-hover-primary" href="#" target="_blank" title="vimeo">
                                    <i class="fab fa-vimeo">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                        <h6 class="text-uppercase text-dark mb-3">Shop</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-muted" href="#">For Women</a>
                            </li>
                            <li>
                                <a class="text-muted" href="#">For Men</a>
                            </li>
                            <li>
                                <a class="text-muted" href="#">Stores</a>
                            </li>
                            <li>
                                <a class="text-muted" href="#">Our Blog</a>
                            </li>
                            <li>
                                <a class="text-muted" href="#">Shop</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                        <h6 class="text-uppercase text-dark mb-3">Company</h6>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-muted" href="#">Login</a>
                            </li>
                            <li>
                                <a class="text-muted" href="#">Register</a>
                            </li>
                            <li>
                                <a class="text-muted" href="#">Wishlist</a>
                            </li>
                            <li>
                                <a class="text-muted" href="#">Our Products</a>
                            </li>
                            <li>
                                <a class="text-muted" href="#">Checkouts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h6 class="text-uppercase text-dark mb-3">Daily Offers &amp; Discounts</h6>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.
                        </p>
                        <form action="#" id="newsletter-form">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control bg-transparent border-secondary border-right-0"
                                    placeholder="Your Email Address" aria-label="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary border-left-0" type="submit">
                                        <i class="fa fa-paper-plane text-lg text-dark">
                                        </i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-4 font-weight-light bg-gray-800 text-gray-300">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-left">
                        <p class="mb-md-0">© 2021 Your company. All rights reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-md-right">
                            <li class="list-inline-item"><img class="w-2rem" src="/svg/visa.svg" alt="..."></li>
                            <li class="list-inline-item"><img class="w-2rem" src="/svg/mastercard.svg" alt="..."></li>
                            <li class="list-inline-item"><img class="w-2rem" src="/svg/paypal.svg" alt="..."></li>
                            <li class="list-inline-item"><img class="w-2rem" src="/svg/western-union.svg" alt="...">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
<!--Modal curso-->
<div class="modal fade" id="ModalAddCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
        <div class="modal-body">
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
    <script src="../JS/Video.js"></script>
</body>

</html>