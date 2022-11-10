<?php 
    $sql = "SELECT img_perfil FROM usuario where rut='$_SESSION[rut]'";
    $res = mysqli_query($conexion,  $sql);                   
    $datos=$res->fetch_object();
    $imagen=$datos->img_perfil;
    ?>