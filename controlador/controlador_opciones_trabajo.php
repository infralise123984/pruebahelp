<?php
$rir = $_SESSION['unique_id'];
    // $sql2=$conexion->query("SELECT *
    // FROM usuario 
    // INNER JOIN trabajos ON trabajos.id =usuario.trabajo_id, trabajos.desc_trabajo as desc_trabajo 
    // where unique_id ={$rir}"); 
    $sql=$conexion->query("SELECT * FROM trabajos"); 
    // $row2 = mysqli_fetch_array($sql2);
    while ($row = mysqli_fetch_array($sql))
    {                     
    // $opciondefault.= '<option selected="'.$row2['id'].'">'.$row2['desc_trabajo'].'</option>';
    $opciones.= '<option value="'.$row['id'].'">'.$row['desc_trabajo'].'</option>';
    // echo $opciondefault;
    echo $opciones;
}
?>  