<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/logo.png">
    <script src="js/validarrut.js"></script>
    <title>iHelp</title>
</head>

<body>
    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-lg-5 col-xl-6 rounded">
                
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/logo.png" width="48" alt="">
                </div>

                <h2 class="fw-bold text-center py-5">Registrar</h2>

                <!-- LOGIN UWU -->
                <?php 
                    include "modelo/conexion.php";
                    include "controlador/controlador_registrar.php";
                ?>
                <!-- Formulario del registar con rut, nombre, apellido, email, y contraseña -->
                <form action="" method=post oninput='password2.setCustomValidity(password2.value != password.value ? "Las contraseñas no coinciden." : "")'>
                    <div class="mb-4">
                        <label for="rut" class="form-label">Rut</label>
                        <input type="text" class="form-control" name="rut" required oninput="checkRut(this)"  maxlength="10" placeholder="12345345-0" title="Rut sin puntos, con guion y remplazar k con un 0">
                    </div>
                    <div class="mb-4">
                        <!-- texto formulario nombre -->
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Alejandro" pattern="[a-zA-Z ]{2,25}" title="Solo letras">
                    </div>
                    <div class="mb-4">
                        <!-- texto formulario apellido -->
                        <label for="apellido" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="apellido" placeholder="Rojas" pattern="[a-zA-Z ]{2,20}"title="Solo letras">
                    </div>
                    <div class="mb-4">
                        <!-- texto formulario mail con formato "ejemplo@gmail.com" -->
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email" placeholder="Correo@gmail.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="ejemplo@gmail.com">
                    </div>
                    <div class="mb-4">
                        <!-- contraseña formulario oculta con formato . 8 caracteres minimo, una mayuscula y almenos un numero -->
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Ejemplo: Contrasena4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Almenos 1 mayuscula, minimo 8 caracteres y un numero"> 
                    </div>
                    <div class="mb-4">
                        <!-- confirmacion de contraseña funcional -->
                        <label for="password" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control" name="password2" placeholder="Ejemplo: Contrasena4" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                    </div>
                    <!-- boton para registrar -->
                    <div class="d-grid">
                    <input name="btnregistrar" class="btn btn-primary" type="submit" value="registrar">
                    </div>
                    <!-- añadir tabla en la cual hayan 2 opciones, 1.no trabajor o 2.Trabajador -->
                    <div class="my-3">
                        <span><br><a href="login.php">Volver</a></span>    
                    </div>
                </form>

            </div>
        </div>
    </div>






    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
 </html>