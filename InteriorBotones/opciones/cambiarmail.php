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
                <h2 class="fw-bold text-center py-5">Cambiar contraseña</h2>

                <!-- cambio de contra UWU -->
                <?php 
                    include "../../modelo/conexion.php";
                    include "../../controlador/controlador_cambiar_mail.php";
                ?>
                <!-- Formulario -->
                <form action="" method=post oninput='newmail2.setCustomValidity(newmail2.value != newmail.value ? "El mail no coincide." : "")'>  
                    <div class="mb-4">
                        <!-- contraseña actual formulario oculta con formato . 8 caracteres minimo, una mayuscula y almenos un numero -->
                        <label for="text" class="form-label">Mail actual</label>
                        <input type="text" class="form-control" name="actualmail" placeholder="Correo@gmail.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="ejemplo@gmail.com"> 
                    </div>        
                    <div class="mb-4">
                        <!-- contraseña nueva formulario oculta con formato . 8 caracteres minimo, una mayuscula y almenos un numero -->
                        <label for="text" class="form-label">Nuevo mail</label>
                        <input type="text" class="form-control" name="newmail" placeholder="Correo@gmail.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="ejemplo@gmail.com"> 
                    </div>
                    <div class="mb-4">
                        <!-- confirmacion de contraseña funcional -->
                        <label for="text" class="form-label">Confirmar nuevo mail</label>
                        <input type="text" class="form-control" name="newmail2" placeholder="Correo@gmail.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="ejemplo@gmail.com">
                    </div>
                    <!-- boton para cambiar la contraseña -->
                    <div class="d-grid">
                    <input name="btncambiarmail" class="btn btn-primary" type="submit" value="cambiar">
                    </div>
                    <!-- añadir tabla en la cual hayan 2 opciones, 1.no trabajor o 2.Trabajador -->
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