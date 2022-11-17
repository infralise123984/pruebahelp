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
            <input name="btnvolver" class="btn btn-primary" type="submit" value="volver"> 
            <?php if(!empty($_POST['btnvolver'])){
                header("location: publicaciones.php");
            } ?>
            </form>
            <div class="mx-auto d-flex m-lg-auto justify-content-between">
                
                <?php  
                    include "../modelo/conexion.php";   
                    $id = mysqli_real_escape_string($conexion, $_GET['id']);
                    $sql=$conexion->query("SELECT * FROM publicacion WHERE id = {$id}");       
                      if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                        
                      }else{
                        header("location: publicaciones.php");
                      }
                    
                    ?>
                    <?php
                    $u=$row['creador'];
                    $sql2=$conexion->query("SELECT * FROM usuario WHERE unique_id = '$u'");
                    $row2 = mysqli_fetch_assoc($sql2);
                      
                    ?>
        <div class="card">
                    <div class="card-block">
                        <div class="row mx-auto">
                            <div class="col ">
                                <h4 class="card-title"><?php echo $row['titulo']; ?></h4>
                                </div>
                                <div class="col d-flex text-center">
                                <p>fecha: <?php echo $row['fecha']; ?></p> 
                                </div>
                                <div class="row d-flex">
                                <p>creador: <?php echo $row2['nombre'];?> <?php echo $row2['apellido'];?></p> 
                                </div>
                        </div>
                            <div class="col text-center ">
                                <p><?php echo $row['info']; ?></p>                    
                            </div>
                            <div class="col d-flex text-center">
                            <img class="publicacionesfotogrande m-lg-auto justify-content-between" style="" src="../img/<?php echo $row['imagen']; ?>" > 
                            </div>
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