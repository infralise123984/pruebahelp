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
                    include "../../controlador/controlador_cambiar_contraseña.php";
                ?>
                <!-- Formulario -->
                <form action="" method=post oninput='newpassword2.setCustomValidity(newpassword2.value != newpassword.value ? "Las contraseñas no coinciden." : "")'>  
                    <div class="mb-4">
                        <!-- contraseña actual formulario oculta con formato . 8 caracteres minimo, una mayuscula y almenos un numero -->
                        <label for="password" class="form-label">Contraseña actual</label>
                        <input type="text" class="form-control" name="actualpassword" placeholder="Ejemplo: Contrasena4" id="pswrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Almenos 1 mayuscula, minimo 8 caracteres y un numero"> 
                    </div>        
                    <div class="mb-4">
                        <!-- contraseña nueva formulario oculta con formato . 8 caracteres minimo, una mayuscula y almenos un numero -->
                        <label for="password" class="form-label">Nueva contraseña</label>
                        <input type="text" class="form-control" name="newpassword" placeholder="Ejemplo: Contrasena42" id="pswrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Almenos 1 mayuscula, minimo 8 caracteres y un numero"> 
                    </div>
                    <div class="mb-4">
                        <!-- confirmacion de contraseña funcional -->
                        <label for="password" class="form-label">Confirmar  nueva contraseña</label>
                        <input type="tex" class="form-control" name="newpassword2" placeholder="Ejemplo: Contrasena42" id="pswrd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        <input type="checkbox" onclick="toggleVisibility()"/>Mostrar Contraseña
                    </div>
                    <!-- boton para cambiar la contraseña -->
                    <div class="d-grid">
                    <input name="btncambiar" class="btn btn-primary" type="submit" value="cambiar">
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