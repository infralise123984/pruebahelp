<?php
    session_start();
    include_once "config.php";
    $emisor_id = $_SESSION['rut'];
    $sql = "SELECT * FROM usuario WHERE NOT rut = {$emisor_id} ";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No hay usuarios disponibles para chatear.";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>