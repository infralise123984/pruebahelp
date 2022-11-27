<?php   
            //este if para cuando se apreta el btoboton
            if(!empty($_POST["btncambiar"])){
                //si los recuadros de las contraseñas no están vacios, va a ejecutar el codigo dentro
                if(!empty ($_POST["actualpassword"]) and !empty ($_POST["newpassword"]) and !empty ($_POST["newpassword2"])){
                    //aqui se guardan en variables los recuadros de las contraseñas
                    $passactual = $_POST['actualpassword'];
                    $password = $_POST['newpassword'];
                    $password2 = $_POST['newpassword2'];
                    $rut=$_SESSION['rut'];
                    $sqlA=$conexion->query("SELECT contraseña  FROM usuario WHERE rut = '$rut'");
                    $datos1=$sqlA->fetch_object();
                    $passDB=$datos1->contraseña;
                    if($password    !=$passDB){
                        //si la contraseña es distinta a contraseña dentro de la base de datos, va a ejecutar este codigo
                        //echo 'las contraseñas son distintas';
                        $update = $conexion->query("UPDATE usuario SET contraseña ='$password'WHERE rut='$rut' ");
                        echo '<script language="javascript">alert("Contraseña cambiada exitosamente");</script>';  
                        header("location: ../opciones.php");
                        

                    }else{
                        //si la contraseña es igual a la de la base de datos, se va a ejecutar este codigo
                        //echo 'las contraseñas son iguales';
                        echo '<script language="javascript">alert("porfavor usar una contraseña distinta a su contraseña actual");</script>';     
                    }

                }else{
                    //si los campos están vacios, se va a ejecutar este codigo
                    echo '<script language="javascript">alert("porfavor rellenar todos los campos");</script>';     
                }               
            }

            
        

?>

