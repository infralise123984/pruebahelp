<?php
$sql=$conexion->query("SELECT * FROM publicacion");
$output ="";
$row = mysqli_fetch_assoc($sql);
if(mysqli_num_rows($sql) == 0){
    $output .= "No hay publicaciones disponibles";
}elseif(mysqli_num_rows($sql) > 0){
    $sql2=$conexion->query("SELECT * FROM publicacion ORDER BY fecha desc");
    //$output .= "si hay cosas";
    while ($row = mysqli_fetch_assoc($sql2)) {
        // $outputantiguo .='
        // <tr>
        // <td>'. $row['id'] .'</td>
        // <td> '. $row['titulo'] .'</td>
        // <td>'. $row['info'] .'</td>
    
        // </tr>';
        $output.='
        <div class="card">
                    <div class="card-block">
                        <div class="row mx-auto">
                            <div class="col ">
                                <h4 class="card-title">'. $row['titulo'] .'</h4>
                                </div>
                                <div class="col d-flex text-center">
                                <p>'. $row['fecha'] .'</p> 
                                </div>
                        </div>
                            <div class="col text-center ">
                                <p>'. $row['info'] .'</p>                    
                            </div>
                            <div class="col d-flex text-center">
                            <img class="imagenperfil m-lg-auto justify-content-between" style="width: 15vh; height: 15vh; border-radius: 50%;" src="../img/'. $row['imagen'] .'" > 
                            </div>
                    </div>                       
                </div>                <br>';

        


    }
}
echo $output;

?>