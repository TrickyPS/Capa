<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <!--  Link de css -->
    <link rel="stylesheet" href="../CSS/Video.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
   <!-- Links de fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
   <script src="../JS/loadVideo.js" defer></script>
    <title>Creative Studios</title>
</head>

<body>

  
<?php
require_once("header.php")
?>
    <section class=" cursos d-flex " id="home" data-scroll-index="0">
        <div class="container pt-4 mt-5 mb-5 ">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-8 col-sm-12">
                    <div class=" mr-auto titulon">
                        <h2 id="titulo"></h2>
                    </div>
                    <div id="videoCont" class="jutify-content-center shadow bg-dark"    width="100%" height="auto" >
                    <video data-role="video-player" id="vid"
        data-logo="../IMG/C.png"
      data-logo-height="64"
      data-controls-hide="1000000"
      
       data-src=""></video>

</div>
         
                    <p id="date"></p>
                </div>
                <div class="commentsec mx-auto0 pt-3">
                    <h1 class="mx-auto">Comentarios</h1>
                </div>
                <div class="col-lg-12 col-md-8 col-sm-12">
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <img
                                    src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                    class="user-img rounded-circle mr-2"> <span><small
                                        class="font-weight-bold text-primary">@rashida_jones :</small> <small
                                        class="font-weight-bold">El mejor video que he visto acerca de
                                        photoshop</small></span>
                            </div>
                            <small>1 min ago</small>
                        </div>
                    </div>
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <img
                                    src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                    class="user-img rounded-circle mr-2"> <span><small
                                        class="font-weight-bold text-primary">@rashida_jones :</small> <small
                                        class="font-weight-bold">El mejor video que he visto acerca de
                                        photoshop</small></span>
                            </div>
                            <small>1 min ago</small>
                        </div>
                    </div>
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <img
                                    src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                    class="user-img rounded-circle mr-2"> <span><small
                                        class="font-weight-bold text-primary">@rashida_jones :</small> <small
                                        class="font-weight-bold">El mejor video que he visto acerca de
                                        photoshop</small></span>
                            </div>
                            <small>1 min ago</small>
                        </div>
                    </div>
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <img
                                    src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                    class="user-img rounded-circle mr-2"> <span><small
                                        class="font-weight-bold text-primary">@rashida_jones :</small> <small
                                        class="font-weight-bold">El mejor video que he visto acerca de
                                        photoshop</small></span>
                            </div>
                            <small>1 min ago</small>
                        </div>
                    </div>
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <img
                                    src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                    class="user-img rounded-circle mr-2"> <span><small
                                        class="font-weight-bold text-primary">@rashida_jones :</small> <small
                                        class="font-weight-bold">El mejor video que he visto acerca de
                                        photoshop</small></span>
                            </div>
                            <small>1 min ago</small>
                        </div>
                    </div>
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center"> <img
                                    src="https://i.imgur.com/ZSkeqnd.jpg" width="30"
                                    class="user-img rounded-circle mr-2"> <span><small
                                        class="font-weight-bold text-primary">@rashida_jones :</small> <small
                                        class="font-weight-bold">El mejor video que he visto acerca de
                                        photoshop</small></span>
                            </div>
                            <small>1 min ago</small>
                        </div>
                    </div>
                </div>
                    <form action="" class="col-lg-12 col-md-8 col-sm-12">
                         <div class="comentarios"></div>
                                    <div class="form-group">
                        <label for="comment">Comentario:</label>
                        <textarea class="form-control" rows="2" id="comment"></textarea>
                             </div>
                                         </div>
                                <div class=" botonsub justify-content-between">
                              <button type="button" class="btn btn-dark">Comentar</button>
                                  <button type="button" class="btn btn-dark">Cancelar</button>
                            </div>

                     </form>

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
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../JS/jquery-3.6.0.min.js"></script>
  <script src="../JS/bootstrap4.js"></script>
  <script src="../JS/popper4.js"></script>
    <!-- Optional JavaScript -->
    <script src="../JS/Video.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>

</html>