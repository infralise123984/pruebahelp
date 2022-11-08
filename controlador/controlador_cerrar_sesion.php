<?php
session_start();
include "../modelo/conexion.php";
$rut=$_SESSION["rut"];
$sql222=$conexion->query("UPDATE usuario SET estado = 'Desconectado ahora' WHERE rut = '$rut'");
if($sql222>0){
    session_destroy();
    header("location: ../login.php");
}



?>