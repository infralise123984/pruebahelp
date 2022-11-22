<?php
error_reporting(E_ALL ^ E_NOTICE);  
$unique_id=$_SESSION['unique_id'];
$sql = $conexion->query("SELECT * FROM usuario WHERE unique_id='$unique_id' ");
if($datos=$sql->fetch_object()){    
$actualig=$datos->ig;
$actualfb=$datos->fb;
$actualws=$datos->ws;
$actualtg=$datos->tg;  
//este if para cuando se apreta el btoboton
if(!empty($_POST["btnredes"])){   
    if(!empty ($_POST["ig"]) and !empty ($_POST["fb"]) and !empty ($_POST["ws"]) and !empty ($_POST["tg"])){
        $ig = $_POST['ig'];
        $fb = $_POST['fb'];
        $ws = $_POST['ws'];
        $tg = $_POST['tg'];
            $update = $conexion->query("UPDATE usuario SET ig ='$ig',fb ='$fb',ws ='$ws', tg ='$tg' WHERE unique_id='$unique_id' ");
            header("location: ../opciones.php");
              
        }else{
        //si los campos están vacios, se va a ejecutar este codigo
        echo '<script language="javascript">alert("porfavor rellenar todos los campos");</script>';     
    }               
} 
}
            
?>

