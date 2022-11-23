<?php
$sql=$conexion->query("SELECT * FROM publicacion");
$output ="";
$row = mysqli_fetch_assoc($sql);
if(mysqli_num_rows($sql) == 0){
    $output = "No hay publicaciones disponibles";
}elseif(mysqli_num_rows($sql) > 0){
    if(!empty($_POST["btnvermis"])){
        $rar=$_SESSION['unique_id'];
        $sql2=$conexion->query("SELECT * FROM publicacion where creador={$rar} ORDER BY fecha desc ");

    }else{
        if(!empty($_POST['btnbuscarpubli'])){
            $busqueda=$_POST['barrabuscar'];
            $sql2=$conexion->query("SELECT * FROM publicacion WHERE titulo LIKE '%$busqueda%' OR info like '%$busqueda%' ORDER BY fecha desc");

        }else{
            $sql2=$conexion->query("SELECT * FROM publicacion ORDER BY fecha desc");
        }
        
    }
    
    //$output .= "si hay cosas";
    while ($row = mysqli_fetch_assoc($sql2)) {
        // $outputantiguo .='
        // <tr>
        // <td>'. $row['id'] .'</td>
        // <td> '. $row['titulo'] .'</td>
        // <td>'. $row['info'] .'</td>
    
        // </tr>';
        $output.='
        <a href="ver_publicacion.php?id='. $row['id'] .'" >
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
                            <div class="col d-flex justify-content-center">
                            <img class="publicacionesfoto m-lg justify-content-between" style="" src="../img/'. $row['imagen'] .'" > 
                            </div>
                    </div>                       
                </div>  </a>               <br>';

        


    }
}
echo $output;

?>