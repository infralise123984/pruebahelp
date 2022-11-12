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
        // $outputantiguo .='
        // <tr>
        // <td>'. $row['id'] .'</td>
        // <td> '. $row['titulo'] .'</td>
        // <td>'. $row['info'] .'</td>
    
        // </tr>';



        $output.='
        <div class="card ">
        <div class="card-block ">
        
                <h2 class="card-title">'. $row['titulo'] .'</h2>
                <p class="card-text "><strong>'. $row['id'] .'</strong></p>

            <div class="col">                
                <p><small>'. $row['info'] .'</small></p>
            </div>
    </div>                       
</div>';
    }
}
echo $output;

?>