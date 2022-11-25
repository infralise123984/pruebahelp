<?php
include "../modelo/conexion.php";
$sql=$conexion->query("SELECT * FROM comentarios ");
$output ="";
$row = mysqli_fetch_assoc($sql);
// $id_publi=$_GET['id'];
$id_publi = mysqli_real_escape_string($conexion, $_GET['id']);
if(mysqli_num_rows($sql) == 0){
    $output = "No hay comentarios disponibles";
}elseif(mysqli_num_rows($sql) > 0){
    $sql2=$conexion->query("SELECT * FROM comentarios WHERE id_publicacion=$id_publi  ORDER BY fecha desc ");
    $row2 = mysqli_fetch_assoc($sql2);
    
    
    
    while($row2 = mysqli_fetch_assoc($sql2)){
        
        
        
        $output.='
        <div class="card">
                    <div class="card-block">
                        <div class="row mx-auto">
                            <div class="col ">
                                <p>'. $row3['nombre'] .'</p>
                                </div>
                                <div class="col d-flex text-center">
                                <p>'. $row2['fecha'] .'</p> 
                                </div>
                        </div>
                            <div class="col text-center ">
                                <p>'. $row2['comentario'] .'</p>                    
                            </div>
                    </div>                       
                </div><br>';
    }
} 

echo $output;

?>