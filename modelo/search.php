<?php
    session_start();
    include_once "config.php";

    $emisor_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM usuario WHERE NOT unique_id = {$emisor_id} AND (nombre LIKE '%{$searchTerm}%' OR apellido LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No se encontró ningún usuario relacionado con su término de búsqueda';
    }
    echo $output;
?>