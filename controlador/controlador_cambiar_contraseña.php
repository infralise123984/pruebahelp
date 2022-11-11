<?php
session_start();
if(empty($_SESSION)){
    header("location: login.php");
}
     // en resumen no funciona 
        
            //rescato los datos de los div
            $passactual = $mysqli->real_escape_string($_POST['passactual']);
            $password = $mysqli->real_escape_string($_POST['password']);
            $password2 = $mysqli->real_escape_string($_POST['password2']);
            //El md5 es para enciptat la contraseña en la base de datos (puede que esto sea posible error para cambiar la contraseña)
            $passactual = md5 ($passactual);
            $password = md5 ($password);
            $password2 = md5 ($password2);

            //consulta la contraseña del usuraio que donde el rut sea igual al rut que entro a session
            $sqlA=$mysqli->query("SELECT contraseña FROM usuario WHERE rut ='".$_SESSION['rut']."' ");
            $rowA=$sqlA->fecht_array();
            if($rowA['contraseña']==$passactual){

                if ($password==$password2) {
                    // consulta para cambiar contraseña
                    $update = $mysqli->query("UPDATE usuario SET contraseña ='$password'WHERE rut='".$_SESSION['rut']."' ");
                    if($update){echo "se actualizo tucontraseña";}
                }
                else{
                    echo"las dos contraseña no coinciden";
                }

            }else{
                echo"no coincide tu contraseña actual";
            }
            
        }

?>

