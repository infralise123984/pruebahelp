<?php 
    session_start();
    if(empty($_SESSION)){
    header("location: login.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/fontello.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>iHelp</title>
</head>

<body style=" background: #ffffff00;">
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">

            <div class="col bg-white p-5 rounded">
                <form action="" method=post>
                    <select name="trabajos" id="" >
                    <?php 
                    include "../../modelo/conexion.php";
                     include "../../controlador/controlador_opciones_trabajo.php";
                     
                    ?>  

                    </select>
                    <input name="btntrabajo" class="btn btn-primary" type="submit" value="Cambiar">                     
                </form>

                
            </div>
        </div>
    </div>






    <script src="../../js/jquery-3.6.1.min.js"></script>
    <script src="../../js/menu.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/pass-show-hide.js"></script>
 </body>
 </html>