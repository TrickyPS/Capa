<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mrs+Saint+Delafield&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/certificado.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Links de fonts -->
    <script src="../JS/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&display=swap" rel="stylesheet">
    <script src="../JS/certificado.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="d-flex row  justify-content-center w-100 h-100">
        <div class=" certificado w-75 m-5 " id="certificado">
            <div class="d-flex flex-row justify-content-center align-items-center h-100">
                <div class="p-5 w-100 d-flex flex-column  align-items-center  justify-content-center">

                    <img src="../IMG/C.png" width="70px" class="mt-3">
                    <h5>Creative Studios</h5>
                    <h2 class="p-0" id="curso"></h2>
                    <span class="hr w-100 mt-3 mb-3"></span>
                    <p>Ha superado cumpliendo con los requisitos academicos exigidos en el curso <strong
                            style="text-transform: uppercase;" id="curso2"></strong> de 40h de
                        duración. </p>
                    <p>Y para que asi conste, hacemos entrega del presente diploma acreditativo a <strong id="nameUser"></strong> .</p>
                    <i id="date"></i>
                    <i class="firma">Pedro Ramirez :)</i>
                    <span class="hr w-25 m-1"></span>
                    <h6><strong>Pedro Angel Ramirez Villarreal</strong></h6>
                    <h6>Director General de Creative Studios</h6>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center w-100 btn_imprimir">
        <a onclick="Imprimir()" class=" btn btn-light"> Imprimir</a>
    </div>

    <script>


        function Imprimir() {

            window.print();
        }

    </script>


</body>

</html>