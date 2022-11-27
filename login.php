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
    <title>iHolp</title>
    

</head>
<body>
    <div class="container w-70 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">          
            <div class="col bg d-none d-lg-block col-xl-6 rounded">  
                <img src="img/fondohelp.jpg" class="fondologin rounded" alt="">                                          
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <img src="img/logo.png" width="48" alt="">
                </div>

                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!-- LOGIN UWU -->

                <form action="" method="post">
                
                    <div class="mb-4">
                    <?php 
                    include "modelo/conexion.php";
                    include "controlador/controlador_login.php";
                    ?>
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" name="email" >
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="pswrd"> 
                        <input type="checkbox" onclick="toggleVisibility()"/>mostrar Contraseña
                    </div>

                    <div class="d-grid">
                    
                        <input name="btniniciar" class="btn btn-dark" type="submit" value="iniciar">
                    </div>
                    <div class="my-3">
					<!--registrar -->
                        <span>No tienes cuenta? <a href="registrar.php">Registrar</a></span>   
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- <a href="registrar.html">Registrar</a></span> -->
        
    
    


   <script src="js/jquery-3.6.1.min.js"></script>
   <script src="js/menu.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/pass-show-hide.js"></script>
</body>
</html>