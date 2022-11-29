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
            <form action="" method="post">
            <input name="btnvolver" class="btn btn-dark" type="submit" value="volver"> 
            <?php if(!empty($_POST['btnvolver'])){
                header("location: publicaciones.php");
            } ?>
            </form>
            <!-- div publicacion -->
            <div>
                <?php  
                    include "../controlador/controlador_ver_publicaciones.php";   
                    ?>
            </div>

            <!-- div comentarios -->
            <div class="col">
            <form action="" method="post">
            <h2 class="fw-bold text-center py-5">Comentarios</h2>
            <?php include "../controlador/controlador_comentario_crear.php";   ?>
                <div class="row">
                    <textarea name="comentario" class="rounded" id="" cols="120" rows="7"></textarea>
                </div>
                <input name="btncomentar" class="btn btn-dark" type="submit" value="Comentar">
                </form>

                <div>
                    <?php include "../controlador/controlador_comentario_obtener.php";?>
                </div>



            </div>
           
         
             
    </main>
   <script src="../js/jquery-3.6.1.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>