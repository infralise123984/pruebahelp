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
    <header  style=" border-radius: 2vh; position: fixed; z-index: 100; width: 80vh; height: 7vh;">
        <div class="container">
            <div class="col-12 buscar ">
                <!-- formulario de barra de busqueda -->
                <form action="">
                    <div class="row g-2 g-0">
                        <div class="col-10">
                            <input type="text" name="" id="" placeholder="Buscar">
                                </div>
                            <div class="col-2">
                            <input name="btnbuscarpubli" class="btn btn-primary" style="font-size: 1.8vh; padding: 0 1.5vh;height: 3.7vh; line-height: 1.5vh;" type="submit" value="buscar">
                        </div>
                    </div>
                </form>         
            </div>
        </div>
    </header>

<main class="container m-lg-auto justify-content-between" style="padding-top: 10%;
  margin-top: 10px;">
    <form action="" method=post>
<?php
        if(!empty($_POST["btncrear"])){
            header("location: crear_publicacion.php");
            
        }
    ?>
    <table class="float">
        <tr>
            <td><input name="btncrear" class="" type="submit" value="crear publicacion"></td>
            <td><input name="btnvermis" class="" type="submit" value="ver mis publicaciones"></td>
        </tr>

    </table>
   
    
    </form>
   
            <!-- contenido principal -->
            <div class="mx-auto d-flex m-lg-auto justify-content-between"> 
                <?php include "../modelo/conexion.php";?>
                <div class="col publicacion" style="">                   
                <?php include "../controlador/controlador_obtener_publicaciones.php";?>               
                </div>        
                <!-- div cerrador del contenido principal -->
                </div>      
    </main>
   <script src="js/jquery-3.6.1.min.js"></script>
   <script src="js/menu.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>