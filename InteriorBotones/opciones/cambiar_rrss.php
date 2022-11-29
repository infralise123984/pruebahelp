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
    <link rel="stylesheet" href="../../css/fontello.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="shortcut icon" href="../../img/logo.png">
    <title>iHelp</title>
</head>
<body style=" background: #ffffff00;">
<?php 
                    include "../../modelo/conexion.php";
                    include "../../controlador/controlador_cambiar_rrss.php";
                    ?>
    <main class="container m-lg-auto justify-content-between"> 
            <!-- contenido principal -->    
            <div class="mx-auto d-flex m-lg-auto justify-content-between"> 
            
                <form action="" method="post" enctype="multipart/form-data"> 
                <div class="mb-4">  
                    <label for="text" class="form-label">Instagram</label> | ejemplo: instagram.com/nombrecuenta
                        <input type="text" class="form-control" name="ig" value="<?php echo $actualig;?>" placeholder="https://www.instagram.com/nombrecuenta/" > 
                    </div>
                    <div class="mb-4">
                        <label for="text" class="form-label">Facebook</label> | ejemplo: facebook.com/machaliconectado.cl
                        <input type="text" class="form-control" name="fb" value="<?php echo $actualfb;?>" placeholder=""> 
                    </div>
                    <div class="mb-4">
                        <label for="text" class="form-label">whatsapp</label> | ejemplo: 912345678
                        <input type="text" class="form-control" name="ws" value="<?php echo $actualws;?>" placeholder="912345678" pattern="[0-9]+"> 
                    </div>
                    <div class="mb-2">
                        <label for="text" class="form-label">Telegram</label> | ejemplo: t.me/nombre
                        <input type="text" class="form-control" name="tg" value="<?php echo $actualtg;?>" placeholder="t.me/nombre"> 
                    </div>

                <!-- <input type="submit" name="subirfoto" value="Upload"> -->
                <input name="btnredes" class="btn btn-dark" type="submit" value="Cambiar redes">
                
            
                </form>              
            <!-- div cerrador del contenido principal -->
            </div> 
    </main>
   <script src="js/jquery-3.6.1.min.js"></script>
   <script src="js/menu.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>