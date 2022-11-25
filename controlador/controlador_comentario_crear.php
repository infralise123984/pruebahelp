<?php
include "../modelo/conexion.php";
if (!empty($_POST['btncomentar'])) {
    $comentario=$_POST['comentario'];
    $id_publicacion=$_GET['id'];
    $id_creador=$_SESSION['unique_id'];
    if(!empty($_POST['comentario'])){
        $sql=$conexion->query("INSERT INTO comentarios(id_creador,id_publicacion,comentario) VALUES ($id_creador,$id_publicacion,'$comentario')"); 
        echo '<script language="javascript">alert("Se ha comentado exitosamente");</script>';


    }else{
        echo '<script language="javascript">alert("Por favor no dejar vacio el comentario");</script>';
    }
    
   
}

?>