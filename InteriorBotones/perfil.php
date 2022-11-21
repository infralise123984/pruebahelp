<?php
session_start();
if(empty($_SESSION)){
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <title>iHelp</title>
</head>
<body style=" background: #ffffff00;">
    <main class="container m-lg-auto justify-content-between"> 
            <!-- contenido principal -->
            <div class="mx-auto d-flex d-flex justify-content-between">
                <div class="card d-flex justify-content-between">
                <div class="card d-flex justify-content-between">
                <?php
                 include "../controlador/controlador_generador_perfil.php";   
                ?>
            </div> 
            </div>              
    </main>
    

   <script src="../js/jquery-3.6.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>