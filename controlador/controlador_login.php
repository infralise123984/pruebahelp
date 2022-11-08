<?php
session_start();
if(!empty($_POST["btniniciar"])){
    if (!empty ($_POST["email"]) and !empty ($_POST["password"])) {
        $mail=$_POST["email"];
        $contrasena=$_POST["password"];
    //    $sql=$conexion->query("SELECT rut,nombre,apellido,mail,contraseña,Publicacion_id,trabajos.desc_trabajo FROM usuario INNER JOIN trabajos ON  trabajos.id =usuario.trabajo_id where mail='$mail' and contraseña='$contrasena'");
    //    $sql2=$conexion->query("SELECT trabajos.desc_trabajo  FROM usuario INNER JOIN trabajos ON  trabajos.id =usuario.trabajo_id ");
        $sql=$conexion->query("select * from usuario where mail='$mail' and contraseña='$contrasena' ");
       if ($datos=$sql->fetch_object()) {
        $_SESSION["rut"]=$datos->rut;
        $_SESSION["unique_id"]=$datos->unique_id;
        $_SESSION["nombre"]=$datos->nombre;
        $_SESSION["apellido"]=$datos->apellido;
        $_SESSION["idtrabajo"]=$datos->desc_trabajo;
        $rut=$_SESSION["rut"];
        $sql2=$conexion->query("UPDATE usuario SET estado = 'Activo ahora' WHERE rut = '$rut'");
        if($sql2>0){
            header("location: index.php");

        }
        
        
     
        
        
        header("location: index.php");
        
       } else {
        echo '<script language="javascript">alert("Correo o contraseña incorrecta");</script>';
       }
       
    } else {
        echo '<script language="javascript">alert("porfavor rellenar todos los campos");</script>';
    }
}
?>