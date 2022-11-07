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
    <title>iHelp</title>
</head>
<body>
    <header>
        <div class="container ">
            <div class="row">
                <div class="col-auto d-none d-md-block logo">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="col-12 col-sm-8 col-lg-6 buscar mb-2 mb-sm-0">
                    <!-- formulario de barra de busqueda -->
                    <form action="">
                        <div class="row g-2 g-0">
                            <div class="col-10">
                                <input type="text" name="" id="" placeholder="Buscar">
                            </div>
                            <div class="col-2">
                                <button><i class="icon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- barra de navegacion de iconos -->
                <!-- barra de navegacion de iconos -->
                <nav class="col-12 col-sm-3 col-lg-2 menu d-flex justify-content-between ml-auto mb-2 mb-sm-0">
                    <a href="#"><i class="icon-users"></i></a>
                    <a href="#"><i class="icon-bell-alt"></i></a>  
                    <a href="#"><i class="icon-chat"></i></a>                      
                    <a href="profile.php" class="imagen"><img src="img/perfil.png" width="22" height="22" alt=""></a>
                    
                </nav>
            </div>
        </div>
    </header>
    <main class="container m-lg-auto justify-content-between    ">       
            <!-- barraa lateral izquierda -->
            <div class="col barra-lateral-izquierda m-lg-auto justify-content-between">
                <nav>
                    <!-- aqui están los botones -->
                   <!-- <a href="#"><i class="icon-search"></i> Buscar empleo</a> 
                    <a href="#"><i class="icon-handshake-o"></i> Ofrecer empleo</a> -->
                    <a href="InteriorBotones/contenidomain.php" target="contenido"><i class="icon-file-image"></i> Publicaciones</a>
                    <a href="InteriorBotones/pgperfil.php" target="contenido"><i class="icon-user"></i> Perfil</a>
                    <a href="vistas/usuarios.php" target="contenido"><i class="icon-chat"></i>Chat</a>
                    <a href="#"><i class="icon-cog"></i> Opciones</a>
                    <a href="controlador/controlador_cerrar_sesion.php"><i class="icon-cog"></i>Cerrar sesion</a>
                </nav>
            </div>
            
            <!-- barra lateral derecha -->
            <div class="col-1 barra-lateral-derecha m-lg-auto justify-content-between">
                Contenido barra lateral derecha WIP
            </div>
            <!-- publicacion -->
            
                
            
            <!-- contenido principal -->
            <div class="mx-auto d-flex justify-content-between"> 
               <!-- <iframe src="pgperfil.php" frameborder="0" style="overflow: hidden; border:none; height:900vhx;width:300vh;"></iframe> -->
               <iframeset class="barra-lateral-derecha d-flex m-lg-auto justify-content-between">
                    <iframe src="" width="600vh" height="500vh" name="contenido" scrolling="No" id="contenido" title="contenido" ></iframe>
               </iframeset>
            <!-- div cerrador del contenido principal -->
            </div>                     
    </main>
   <script src="js/jquery-3.6.1.min.js"></script>
   <script src="js/menu.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>