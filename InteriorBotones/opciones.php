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
            <h1>Menu de opciones</h1>  
            <div class="mx-auto d-flex m-lg-auto justify-content-between"> 
                <div class="col">
                    <div class="row d-flex justify-content-between">
                        <a href="opciones/subirfoto.php" ><input name="btncambiarfoto" class="btn btn-dark" type="submit" value="cambiar foto de perfil"></a>
                        <br><br>
                        <a href="opciones/cambiar_rrss.php" ><input name="btnredes" class="btn btn-dark" type="submit" value="cambiar redes sociales"></a>            
                        <br><br>
                        <a href="opciones/cambiarmail.php" ><input name="btncambiarmail" class="btn btn-dark" type="submit" value="cambiar email"></a>
                        <br><br>
                        <a href="opciones/cambiarcontraseña.php" ><input name="btncambiarmail" class="btn btn-dark" type="submit" value="cambiar contraseña"></a> 
                        <br><br> 
                        <a href="opciones/cambiardatosperfil.php" ><input name="btncambiardatos" class="btn btn-dark" type="submit" value="cambiar datos del perfil"></a>
                        
                    </div>
                </div>        
            <!-- div cerrador del contenido principal -->
            </div> 
    </main>
   <script src="js/jquery-3.6.1.min.js"></script>
   <script src="js/menu.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>