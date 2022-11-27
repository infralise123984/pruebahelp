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
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>RancaguaHelp</title>
</head>
<body>
    <header>
        <div class="container ">
            <div class="row">
                <div class="col-auto d-none d-md-block logo">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
                </div>
                
                <!-- barra de navegacion de iconos -->
                <nav class="col-12 col-sm-3 col-lg-2 menu d-flex justify-content-between mx-auto mb-2 mb-sm-0">
                <h3 class="titulo">RancaguaHelp</h3>
                </nav>
            </div>
        </div>
    </header>
    <main class="container m-lg-auto justify-content-between    ">       
            <!-- barraa lateral izquierda -->
            <div class="col barra-lateral-izquierda d-flex justify-content-between">
                <nav>
                    <!-- aqui están los botones -->
                   <!-- <a href="#"><i class="icon-search"></i> Buscar empleo</a> 
                    <a href="#"><i class="icon-handshake-o"></i> Ofrecer empleo</a> -->
                    <a href="InteriorBotones/publicaciones.php" target="contenido"><i class="icon-file-image"></i> Publicaciones</a>
                    <a href="InteriorBotones/pgperfil.php" target="contenido"><i class="icon-user"></i> Perfil</a>
                    <a href="vistas/usuarios.php" target="contenido"><i class="icon-chat"></i>Chat</a>
                    <a href="InteriorBotones/opciones.php"  target="contenido"><i class="icon-cog"></i> Opciones</a>
                    <a href="controlador/controlador_cerrar_sesion.php"><i class="icon-menu"></i>Cerrar sesion</a>
                    
                </nav>
            </div>

            <!-- publicacion -->
            
                
            
            <!-- contenido principal -->
            <div class="mx-auto d-flex justify-content-between"> 
               <!-- <iframe src="pgperfil.php" frameborder="0" style="overflow: hidden; border:none; height:900vhx;width:300vh;"></iframe> -->

                    <iframe class="mx-auto" src="interiorBotones/contenidomain.php" style="" name="contenido" id="contenido" title="contenido" ></iframe>
               
            <!-- div cerrador del contenido principal -->
            </div>                     
    </main>
   <script src="js/jquery-3.6.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>