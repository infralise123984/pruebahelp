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
        <form action="" method=post >
            <!-- contenido principal -->
            <div class="">  
            <?php
                    include "../modelo/conexion.php";
                    include "../controlador/controlador_editar_publicaciones.php";
                ?>
                <div class="mb-4">
                    
                    <label class="form-label">titulo</label>
                    <input type="text" class="form-control" name="titulo" value="<?php echo $tituloactual;?>" placeholder="Ejemplo: busco trabajo" id="pswrd"> 
                </div>
                <div class="mb-4">
                    <label class="form-label">descripcion</label>
                    <!-- <input type="text-area" class="form-control" name="descripcion" placeholder="Ejemplo: porfavor necesito trabajo hace como 3 mese que esoty comiendo maruchan" id="pswr"> -->
                    
                </div>
                <div class="mb-4">
                    <textarea name="comentario" rows="10" cols="40"><?php echo $infoactual;?></textarea> 
                </div>

                <input name="btneditarpublicacion" class="btn btn-primary"  type="submit" value="editar publicacion">
               
                

                <!-- div cerrador del contenido principal -->
                </div>      
            </form>         
        </main>
   <script src="../js/jquery-3.6.1.min.js"></script>
   <script src="../js/menu.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>