<?php
session_start();
if(!empty($_POST["btniniciar"])){
    if (!empty ($_POST["email"]) and !empty ($_POST["password"])) {
       $mail=$_POST["email"];
       $contrasena=$_POST["password"];
       $sql=$conexion->query("select * from usuario where mail='$mail' and contraseña='$contrasena' ");
       //$sql2=$conexion->query("select trabajo_id,id,desc_trabajo from usuario, trabajos where trabajo_id=trabajos.id");
       if ($datos=$sql->fetch_object()) {
        $_SESSION["rut"]=$datos->rut;
        $_SESSION["nombre"]=$datos->nombre;
        $_SESSION["apellido"]=$datos->apellido;
        $fila = mysqli_fetch_array($sql);
        // while ($fila=mysqli_fetch_row($sql2)){
        //     $xd=$fila1[1];
        //     // IDEA fila crear una sentencia sql que llame a la tabla de "trabajos" para que compare con la "idtrabajo" con la "id"
        //     }
        // $_SESSION["idtrabajo"]=$xd;
        
        
        header("location: index.php");
        
       } else {
        echo '<script language="javascript">alert("Correo o contraseña incorrecta");</script>';
       }
       
    } else {
        echo '<script language="javascript">alert("porfavor rellenar todos los campos");</script>';
    }
}
?>