<?php
$sql=$conexion->query("SELECT * FROM publicacion");
$output ="";
$row = mysqli_fetch_assoc($sql);
if(mysqli_num_rows($sql) == 0){
    $output .= "No hay publicaciones disponibles";
}elseif(mysqli_num_rows($sql) > 0){
    $sql2=$conexion->query("SELECT * FROM publicacion");
    //$output .= "si hay cosas";
    while ($row = mysqli_fetch_assoc($sql2)) {
        $output .='
        <tr>
        <td>'. $row['id'] .'</td>
        <td> '. $row['titulo'] .'</td>
        <td>'. $row['info'] .'</td>
    
        </tr>';
    }
}
echo $output;

?>