<?php
    session_start();
    include_once "config.php";
    $emisor_id = $_SESSION['unique_id'];
    // $sql = "SELECT * FROM usuario WHERE NOT unique_id = {$emisor_id} ";
    $sql = "SELECT * FROM usuario WHERE NOT unique_id = '$emisor_id' ORDER BY nombre DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No hay usuarios disponibles para chatear.";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>