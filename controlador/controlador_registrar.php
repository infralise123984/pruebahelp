<?php
session_start();
if(!empty($_POST["btnregistrar"])){
    if (!empty ($_POST["rut"]) and !empty ($_POST["nombre"]) and !empty ($_POST["apellido"]) and !empty ($_POST["email"]) and !empty ($_POST["password"])) {
        $rut=$_POST["rut"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $mail=$_POST["email"];
        $contrasena=$_POST["password"];
        $sql=$conexion->query("INSERT INTO usuario values ('$rut', '$nombre', '$apellido', '$mail', '$contrasena','1')");
        header("location: login.php");
       
       
    } else {
        echo '<script language="javascript">alert("porfavor rellenar todos los campos");</script>';
    }
}
?>