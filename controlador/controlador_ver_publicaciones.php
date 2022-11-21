<?php  
error_reporting(E_ALL ^ E_NOTICE);  
                    include "../modelo/conexion.php";   
                    $id = mysqli_real_escape_string($conexion, $_GET['id']);
                    $sql=$conexion->query("SELECT * FROM publicacion WHERE id = {$id}");       
                      if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                        $u=$row['creador'];
                        $sql2=$conexion->query("SELECT * FROM usuario WHERE unique_id = '$u'");
                        $row2 = mysqli_fetch_assoc($sql2); 
                      }else{
                        header("location: publicaciones.php");
                      }
                      $output .=' <div class="card">
                        <div class="card-block">
                            <div class="row mx-auto">
                                <div class="col justify-content-center">
                                    <h4 class="card-title">'.$row['titulo'].'</h4>
                                    </div>
                                    <div class="col d-flex text-center">
                                    <p>fecha: '.$row['fecha'].'</p> 
                                    </div>
                                    <div class="row d-flex">
                                    <p>creador: <a href="perfil.php?id='. $row2['unique_id'] .'" >'.$row2['nombre'].' '.$row2['apellido'].'</p></a>
                                    </div>
                            </div>
                                <div class="col text-center justify-content-center">
                                    <p>'.$row['info'].'</p>                    
                                </div>
                                <div class="col d-flex justify-content-center">
                                <img class="publicacionesfotogrande justify-content-center" src="../img/'.$row['imagen'].'"> 
                                </div>
                        </div>                       
                    </div>  ';
                    echo $output;
                    
                    
                    ?>