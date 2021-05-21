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
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- Bootstrap CSS -->
   <!-- Links de fonts -->

   <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
   <script src="../JS/Modelos/models.js" defer></script>
   <script src="../JS/sobre.js" defer></script>
    <title>Creative Studios</title>
</head>

<body>
<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro.min.css">
<div id="chatToggle"
class="chatFloat"
  data-role="chat"
  data-width="300"
  data-height="400"
  data-title="Chat " 
  data-on-send="onSend"
></div>

  
<?php
require_once("header.php")
?>
<div class="container">
<h2 class="mt-3">Chats</h2>
<div class="row">
<div class="col-4  p-5" id="showUsersChat">


</div>
<div class="col-8  p5">
</div>
</div>
</div>
<hr>
<div class="row mt-3 mb-3">
<div class="col-2 ml-3">
<button class="btn btn-second" id="toggleTable"> Mostar/ocultar</button>
</div>
<div class="col-8 p-5" id="contCursos">

</div>
<div class="col-2"></div>
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
</body>

</html>