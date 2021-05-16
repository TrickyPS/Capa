<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <!--  Link de css -->
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- Links de fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Categorias.css">
    <script src="../JS/cateegoriasSearch.js" defer></script>
    <script src="../JS/getCursos.js" defer></script>
    <title>Creative Studios</title>
</head>

<body>
<?php
require_once("header.php")
?>
    <div class="container">
       <div class="container " style="background-color: rgb(230, 230, 230); padding-right:0px !important; padding-left:0px !important;">

            <!--Navbar-->
            <nav class="nav2 navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5" style="background-color:rgb(39, 38, 38);">
            
              <!-- Navbar brand -->
              <span class="navbar-brand">Categories:</span>
            
              <!-- Collapse button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <!-- Collapsible content -->
              <div class="collapse navbar-collapse" id="basicExampleNav">
            
                <!-- Links -->
                <ul class="navbar-nav" id="contCat2">
                  
             
            
                </ul>
                
              </div>
              <!-- Collapsible content -->
            
            </nav>
            <!--/.Navbar-->
            
           
          
            <div class="row 1" id="part1Curso">
      
     
            </div>

            <div class="row 2" id="part2Curso">
      
     

            </div>
   


        <div class="w-100 d-flex justify-content-center">
        <div class="pagination col-lg-12 col-md-12 col-sm-12 justify-content-center pt-2 mx-auto " style="width:auto; display:inline-flex !important;">
             <a href="#">&laquo;</a>
           <a id="page1" onclick="javascript:location.reload();">1</a>
           <a id="page2" onclick="page2();">2</a>
           <a id="page3">3</a>
          
          <a href="#">&raquo;</a>
        </div>
        </div>
  
       </div>
            
            
    </div>
 

    <?php
require_once("footer.php")
?>
 
   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../JS/jquery-3.6.0.min.js"></script>
  <script src="../JS/bootstrap4.js"></script>
  <script src="../JS/popper4.js"></script>
    <!-- Optional JavaScript -->
    <script src="../JS/IndexNuevo.js"></script>
</body>

</html>