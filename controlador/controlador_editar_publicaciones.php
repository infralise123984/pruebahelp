<?php
error_reporting(E_ALL ^ E_NOTICE);  
$id = mysqli_real_escape_string($conexion, $_GET['id']);
$sql = $conexion->query("SELECT * FROM publicacion WHERE id='$id' ");
if($datos=$sql->fetch_object()){    
$tituloactual=$datos->titulo;
$infoactual=$datos->info;
$imagenactual=$datos->imagen;
 
//este if para cuando se apreta el btoboton
if(!empty($_POST['btneditarpublicacion'])){


 
    if(!empty ($_POST["titulo"]) and !empty ($_POST["comentario"])){
        $titulo = $_POST['titulo'];
        $info = $_POST['comentario'];
        $update = $conexion->query("UPDATE publicacion SET titulo ='$titulo',info ='$info' WHERE id='$id' ");    
        header("location: publicaciones.php");
              
        }else{
        //si los campos están vacios, se va a ejecutar este codigo
        echo '<script language="javascript">alert("porfavor rellenar todos los campos");</script>';     
    }               
} }

            
?>

