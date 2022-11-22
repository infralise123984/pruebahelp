<?php   
            //este if para cuando se apreta el btoboton
            if(!empty($_POST["btncambiarmail"])){
                //si los recuadros de las contraseñas no están vacios, va a ejecutar el codigo dentro
                if(!empty ($_POST["actualmail"]) and !empty ($_POST["newmail"]) and !empty ($_POST["newmail2"])){
                    //aqui se guardan en variables los recuadros de las contraseñas
                    $passactual = $_POST['actualmail'];
                    $mail = $_POST['newmail'];
                    $rut=$_SESSION['rut'];
                    $sqlA=$conexion->query("SELECT mail  FROM usuario WHERE rut = '$rut'");
                    $datos1=$sqlA->fetch_object();
                    $mailDB=$datos1->mail;
                    if($mail    !=$mailDB){
                        //si la contraseña es distinta a contraseña dentro de la base de datos, va a ejecutar este codigo
                        //echo 'las contraseñas son distintas';
                        $update = $conexion->query("UPDATE usuario SET mail ='$mail'WHERE rut='$rut' ");
                        echo '<script language="javascript">alert("Contraseña cambiada exitosamente");</script>';  
                        header("location: ../opciones.php");
                        

                    }else{
                        //si la contraseña es igual a la de la base de datos, se va a ejecutar este codigo
                        //echo 'las contraseñas son iguales';
                        echo '<script language="javascript">alert("porfavor usar un mail distinto a su mail actual");</script>';     
                    }

                }else{
                    //si los campos están vacios, se va a ejecutar este codigo
                    echo '<script language="javascript">alert("porfavor rellenar todos los campos");</script>';     
                }               
            }
    
?>

