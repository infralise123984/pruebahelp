<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title>iHelp</title>
</head>

<body>
    
    <form action="" method="post">
    <?php
    // en resumen no funciona 
        if(isset($_POST['editar'])){
            session_start();
            if(empty($_SESSION)){
                header("location: login.php");
            }
            //rescato los datos de los div
            $passactual = $mysqli->real_escape_string($_POST['passactual']);
            $pass1 = $mysqli->real_escape_string($_POST['pass1']);
            $pass2 = $mysqli->real_escape_string($_POST['pass2']);
            //El md5 es para enciptat la contraseña en la base de datos (puede que esto sea posible error para cambiar la contraseña)
            $passactual = md5 ($passactual);
            $pass1 = md5 ($pass1);
            $pass2 = md5 ($pass2);

            //consulta la contraseña del usuraio que donde el rut sea igual al rut que entro a session
            $sqlA=$mysqli->query("SELECT contraseña FROM usuario WHERE rut ='".$_SESSION['rut']."' ");
            $rowA=$sqlA->fecht_array();
            if($rowA['contraseña']==$passactual){

                if ($pass1==$pass2) {
                    // consulta para cambiar contraseña
                    $update = $mysqli->query("UPDATE usuario SET contraseña ='$pass1'WHERE rut='".$_SESSION['rut']."' ");
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
    <div>
        <div>
            <div class="e-title">Contraseña actual</div>
            <div class="e-input"> <input type="password" name="passactual"></div>
        </div>
    </div>
    <div>
        <div>
            <div class="e-title">Contraseña nueva</div>
            <div class="e-input"> <input type="password" name="pass1"></div>
        </div>
    </div>
    <div>
        <div>
            <div class="e-title">Escribe de nuevo la Contraseña</div>
            <div class="e-input"> <input type="password" name="pass2"></div>
        </div>
    </div>
    <div>
        <div>
            <div class="e-title"></div>
            <div class="e-input"> <input type="submit" value="cambiar contraseña" name="editar"></div>
        </div>
    </div>
        






    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </body>
 </html>