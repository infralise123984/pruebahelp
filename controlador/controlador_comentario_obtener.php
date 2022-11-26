<?php
include "../modelo/conexion.php";
$id_publi = mysqli_real_escape_string($conexion, $_GET['id']);
$sql=$conexion->query("SELECT * FROM comentarios WHERE id_publicacion=$id_publi ");
$row = mysqli_fetch_assoc($sql);
$comentareichon="";
if(mysqli_num_rows($sql) == 0){
    $comentareichon = "No hay comentarios disponibles";
}elseif(mysqli_num_rows($sql) > 0){
    $sql2=$conexion->query("SELECT * FROM comentarios WHERE id_publicacion=$id_publi  ORDER BY fecha desc ");
    while($row = mysqli_fetch_assoc($sql2)){      
        $comentareichon.='
        <div class="card">
                    <div class="card-block">
                        <div class="row mx-auto">
                            <div class="col ">
                            <a href="perfil.php?id='.$row['id_creador'].'"><p>Ir al perfil</p></a>
                                </div>
                                <div class="col d-flex text-center">
                                <p>'. $row['fecha'] .'</p> 
                                </div>
                        </div>
                            <div class="col text-center ">
                                <p>'. $row['comentario'] .'</p>                    
                            </div>
                    </div>                       
                </div><br>';
    }
} 

echo $comentareichon;

?>