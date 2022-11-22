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
            <?php 
                    include "../modelo/conexion.php";
                    
                    include "../controlador/controlador_obtener_pfp.php";
                ?>
                        <div class="card-block">
                            <div class="row d-flex justify-content-between">
                                <div class="col justify-content-between">
                                    <h2 class="card-title">Bienvenido</h2>
                                    <p class="card-text "><strong>Nombre: </strong> <?php echo $_SESSION["nombre"];?> </p>
                                    <p class="card-text "><strong>Apellido: </strong> <?php echo $_SESSION["apellido"]?> </p>
                                    <p class="card-text "><strong>Rut: </strong> <?php echo $_SESSION["rut"]?> </p>
                                    <p class="card-text "><strong>Area de trabajo: </strong> <?php echo $_SESSION["idtrabajo"] ?> </p>
                                    <p><strong>Redes Sociales: </strong>
                                        <a href="<?php echo $_SESSION["ig"]?>" target="_blank"><span class="badge bg-danger">Instagram</span> </a>
                                        <a href="<?php echo $_SESSION["fb"]?>" target="_blank"><span class="badge bg-primary">Facebook</span></a>
                                        <a href="https://web.whatsapp.com/send?phone=<?php echo $_SESSION["ws"]?>" target="_blank"><span class="badge bg-success">WhatsApp</span></a>
                                        <a href="<?php echo $_SESSION["tg"]?>" target="_blank"><span class="badge bg-info">Telegram</span></a>
                                    </p>
                                    <!-- DIV finalizador del COL -->
                                    </div>
                                    <!-- DIV seccion imagen de perfil COL -->
                                    <div class="col text-center d-flex justify-content-between">
                                    <img class="imagenperfil m-lg-auto justify-content-between" src="../img/<?=$imagen?>" >   
                                    <!-- DIV finalizador de imagen perfil -->
                                    </div>
                            <!-- DIV finalizadord ROW -->
                            </div>
                                <div class="col text-center m-lg-auto justify-content-between">
                                    <h2><strong> 3.4/5 </strong></h2>                    
                                    <p><small>Estrellas</small></p>
                                </div>
                        <!-- Div Finalizador CARD-BLOCK  -->
                        </div>                       
                    <!-- div finalizador de CARD-->
                    </div>
                <!-- div cerrador del contenido principal -->
                </div>            
            <!-- div cerrador del contenido principal -->
            </div> 
            
                
    </main>
    

   <script src="../js/jquery-3.6.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>