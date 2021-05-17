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
    <link rel="stylesheet" href="../CSS/card.css">
    <script src="../JS/card.js" defer></script>
    <script src="../JS/curso.js" defer></script>
    <title>Creative Studios</title>
</head>

<body>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
<?php
if(!isset($_GET["activate"])){
    ?>
<div id="chatToggle"
class="chatFloat"
  data-role="chat"
  data-width="300"
  data-height="400"
  data-title="Chat "
></div>
<?php } ?>

    <?php
require_once("header.php");
    ?>
    <section class=" d-flex justify-content-center" id="home" data-scroll-index="0">
        <div class="m-4 container  p-5">

            <div class="container dark-grey-text mt-5">

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4 text-center">

                        <img src="" id="imgCurso" class="" width="300" height="300" style="object-fit:cover;" alt="">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Content-->
                        <div class="p-4">

                            <div class="mb-3">
                          
                                <h4 id="nameCurso">Nombre del producto</h4>
                                <div class="progress" id="progress" style="height:18px;"></div>
                            </div>
                            <input data-role="rating" data-value="0" data-static="true" data-message="(0)">

                      <?php 
              if(!isset($_GET["activate"])){
              ?>
                            <p class="lead">
                                <span class="mr-1">
                                    <del id="del">$150</del>
                                </span>
                                <span id="costo">$100</span>
                            </p>

                            <?php 
             }
              ?>

                            <p class="lead font-weight-bold">Descripción</p>

                            <p id="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolor suscipit libero eos
                                atque quia
                                ipsa
                                sint voluptatibus!
                                Beatae sit assumenda asperiores iure at maxime atque repellendus maiores quia sapiente.
                            </p>

                            <div class="d-flex justify-content-left" >

                            <?php 
              if(!isset($_GET["activate"])){
              ?>
                               
                                <button class="ml-2 btn btn-main btn-md my-0 p waves-effect waves-light"
                                    type="submit" data-toggle="modal" data-target="#tarjeta">Comprar
                                    <i class="fas fa-money-check-alt"></i>
                                </button>
                                <?php 
              }  ?>
            
             <div id="calificar" >
            </div>
                            </div>

                        </div>
                        <!--Content-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->



            </div>

            <h2 class="mt-5 mb-3 text-center">Contenido</h2>
            <div class="container">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6" id="niveles">
                       
                      
                     
                    </div>
                    <div class="col-3"></div>
                </div>
            </div>

        </div>
    </section>

    <div class="container">
    
  <hr>
                <div class="commentsec mx-auto0 pt-3">
                    <h1 class="mx-auto">Comentarios</h1>
                </div>
                <div class="col-lg-12 col-md-8 col-sm-12" id="contComent" >
                   
                </div>

                
              <!---
            form para comentar
            --->
            <div id="comentar"></div>

    </div>

<!-----Calificete Modal---->
<div class="modal fade" id="calificate" data-backdrop="static"   tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Califique el curso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formPuntos">
            <div class="modal-body">
            
                <div class="form-group">
                  <label for="cPuntos">Puntos:</label>
                  <input type="number" min="0" max="5" class="form-control" id="cPuntos" >
                </div>
              

            
            </div>
            <div class="modal-footer">
          
                <button type="submit" class="btn btn-main">Agregar</button>
             </div>
        </form>
      </div>
    </div>
  </div>


    
  <div class="modal fade"  data-backdrop="static" id="tarjeta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog  modal-dialog-centered modal-md">
      <div class="modal-content" style="background-color: transparent;border-color: transparent;">

  <div class="checkout">
    <div class="credit-card-box">
      <div class="flip">
        <div class="front">
          <div class="chip"></div>
          <div class="logo">
            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
              <g>
                <g>
                  <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                           c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                           c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                           M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                           c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                           c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                           l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                           C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                           C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                           c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                           h-3.888L19.153,16.8z"/>
                </g>
              </g>
            </svg>
          </div>
          <div class="number"></div>
          <div class="card-holder">
            <label>Card holder</label>
            <div></div>
          </div>
          <div class="card-expiration-date">
            <label>Expires</label>
            <div></div>
          </div>
        </div>
        <div class="back">
          <div class="strip"></div>
          <div class="logo">
            <svg version="1.1" id="visa" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="47.834px" height="47.834px" viewBox="0 0 47.834 47.834" style="enable-background:new 0 0 47.834 47.834;">
              <g>
                <g>
                  <path d="M44.688,16.814h-3.004c-0.933,0-1.627,0.254-2.037,1.184l-5.773,13.074h4.083c0,0,0.666-1.758,0.817-2.143
                           c0.447,0,4.414,0.006,4.979,0.006c0.116,0.498,0.474,2.137,0.474,2.137h3.607L44.688,16.814z M39.893,26.01
                           c0.32-0.819,1.549-3.987,1.549-3.987c-0.021,0.039,0.317-0.825,0.518-1.362l0.262,1.23c0,0,0.745,3.406,0.901,4.119H39.893z
                           M34.146,26.404c-0.028,2.963-2.684,4.875-6.771,4.875c-1.743-0.018-3.422-0.361-4.332-0.76l0.547-3.193l0.501,0.228
                           c1.277,0.532,2.104,0.747,3.661,0.747c1.117,0,2.313-0.438,2.325-1.393c0.007-0.625-0.501-1.07-2.016-1.77
                           c-1.476-0.683-3.43-1.827-3.405-3.876c0.021-2.773,2.729-4.708,6.571-4.708c1.506,0,2.713,0.31,3.483,0.599l-0.526,3.092
                           l-0.351-0.165c-0.716-0.288-1.638-0.566-2.91-0.546c-1.522,0-2.228,0.634-2.228,1.227c-0.008,0.668,0.824,1.108,2.184,1.77
                           C33.126,23.546,34.163,24.783,34.146,26.404z M0,16.962l0.05-0.286h6.028c0.813,0.031,1.468,0.29,1.694,1.159l1.311,6.304
                           C7.795,20.842,4.691,18.099,0,16.962z M17.581,16.812l-6.123,14.239l-4.114,0.007L3.862,19.161
                           c2.503,1.602,4.635,4.144,5.386,5.914l0.406,1.469l3.808-9.729L17.581,16.812L17.581,16.812z M19.153,16.8h3.89L20.61,31.066
                           h-3.888L19.153,16.8z"/>
                </g>
              </g>
            </svg>
  
          </div>
          <div class="ccv">
            <label>CCV</label>
            <div></div>
          </div>
        </div>
      </div>
    </div>
    <form class="form" autocomplete="off"  id="tarjeta_click" novalidate>
      <fieldset>
        <label for="card-number">Número de tarjeta.</label>
        <input type="num" id="card-number" class="input-cart-number" maxlength="4" required/>
        <input type="num" id="card-number-1" class="input-cart-number" maxlength="4" required/>
        <input type="num" id="card-number-2" class="input-cart-number" maxlength="4" required/>
        <input type="num" id="card-number-3" class="input-cart-number" maxlength="4" required/>
      </fieldset>
      <fieldset>
        <label for="card-holder">Titular de tarjeta.</label>
        <input type="text" id="card-holder" required/>
      </fieldset>
      <fieldset class="card-expire">
        <label for="expire-month">Fecha de expiración.</label>
        <div class="select">
          <select id="expire-month">
            <option></option>
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
        </div>
        <div class="select">
          <select id="expire-year">
            <option></option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>2023</option>
            <option>2024</option>
            <option>2025</option>
          </select>
        </div>
      </fieldset>
      <fieldset class="fieldset-ccv">
        <label for="card-ccv">CCV</label>
        <input type="text" id="card-ccv" maxlength="3" required/>
      </fieldset>
    
    </form>
    <center> 
      <button type="button" class="btn btn-second" data-dismiss="modal">Cancelar</button>
      <button class="btn  my-1 btn-main " onclick="addHistorial(<?php  echo $_SESSION['id']; ?>);"><i class="fa fa-lock"></i> Pagar</button>
    </center>
  </div>
  
</div>
</div>






</div>

    <?php
require_once("footer.php")
?>
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../JS/jquery-3.6.0.min.js"></script>
  <script src="../JS/bootstrap4.js"></script>
  <script src="../JS/popper4.js"></script>
    <!-- Optional JavaScript -->
    <script src="../JS/Video.js"></script>
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
</body>

</html>