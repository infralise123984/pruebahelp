<?php 
    session_start();
    if(isset($_SESSION['rut'])){
        include_once "config.php";
        $emisor_id = $_SESSION['unique_id'];
        $receptor_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO mensajes (receptor_id, emisor_id, mensaje)
                                        VALUES ({$receptor_id}, {$emisor_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../vistas/login.php");
    }


    
?>