<?php



session_start();

$ocultar = "d-none";
$mostrar="";
$nombre = "";
$avatar = "";
$tipo = "d-none";
$url = explode('/', $_SERVER['PHP_SELF']);
if(!isset($_SESSION["user"])){
    if(array_pop($url) != "IndexNuevo.php"){
   
    header("Location:" . "Notfound.php");
    }
}else{

    if( (time() - $_SESSION["caducate"]) > 1800 ){
        header("Location:" . "cierrasesion.php");
    }

    if ($_SESSION["usuario_escuela"] == 1){
        $tipo = "";
    }


    $mostrar = "d-none";
    $nombre = $_SESSION["nombre"];
    $ocultar="";


    
    $avatar = "../IMG/user.png";

 
    
}
?>

<script src="../JS/categorias.js" defer></script>
<div class="d-flex mamando ">
    <nav class=" navbar2 navbar-light bg-light fixed-top pl-5 pr-5 " id="contCat">

    </nav>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="namep">
            <img class="imageno m-0 pb-1" src="../IMG/C.png" width="35px">
            <a class="navbar-brand titulo" href="IndexNuevo.php" style="font-family: 'Bebas Neue', cursive; font-size: 25px;"  >Creative Studios</a>
        </div>
        <button id="botonazo" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="overflow:visible;">

            <form class=" form1 form-inline mx-auto justify-content-center">
                <input class="buscador form-control mr-sm-2 justify-content-center" type="search" placeholder="Search"
                    aria-label="Search" style="width: 260px;">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <div class="grupo ml-auto">
                <ul class="navbar-nav text-center ml-auto mt-2"
                    style="flex-direction: row; justify-content: space-evenly;">

                    <!-- Button trigger modal -->
                    <li class="nav-item titulo <?php echo $mostrar;?>" data-toggle="modal" data-target="#exampleModal">
                        <a class="nav-link titulo" href="#">Inicia sesión</a>
                    </li>
                    <!-- Button trigger modal2 -->
                    <li class="nav-item titulo <?php echo $mostrar;?>" data-toggle="modal" data-target="#exampleModal2">
                        <a class="nav-link titulo" href="#">Registrate</a>
                    </li>

                    <a class="perfilrandom nav-link dropdown-toggle  <?php echo $ocultar;?>" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        
                        <img class="imageno m-0 pb-0 rounded-circle mr-1 mb-1" src="<?php echo $avatar; ?>" width="25px" height="25px" style="object-fit:cover;">
                        <?php echo $nombre;  ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Historial.php">Cuenta</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Historial.php">Mis cursos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item <?php echo $tipo;?>" href="cms.php">Crear curso</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item <?php echo $tipo;?>" href="chat.php">Sobre cursos</a>
                        <div class="dropdown-divider  <?php echo $tipo;?>"></div>
                        <a class="dropdown-item" href="cierrasesion.php" onclick="myFunction();">Cerrar sesion</a>
                        <script>
                 function myFunction() {
                    
                   localStorage.clear();
                     }
              </script>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex inicio justify-content-center mx-auto" style="padding-top: 80px;">

    </div>


