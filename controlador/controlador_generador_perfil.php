<?php 
error_reporting(E_ERROR | E_PARSE);    
                    include "../modelo/conexion.php";   
                    $id = mysqli_real_escape_string($conexion, $_GET['id']);
                    $sql=$conexion->query("SELECT * FROM usuario INNER JOIN trabajos ON trabajos.id =usuario.trabajo_id  WHERE unique_id = {$id}");       
                      if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);        
                        if ($id == $_SESSION['unique_id']) {
                          $output .='
                      <div class="card-block">
                            <div class="row d-flex justify-content-between">
                                <div class="col justify-content-between">
                                    <h2 class="card-title">Bienvenido</h2>
                                    <p class="card-text "><strong>Nombre: </strong> '.$row['nombre'].'</p>

                                    <p class="card-text "><strong>Apellido: </strong>  '.$row['apellido'].'</p>

                                    <p class="card-text "><strong>Rut: </strong> '.$row['rut'].'</p>

                                    <p class="card-text "><strong>Area de trabajo: </strong> '.$row['desc_trabajo'].'</p>

                                    <p><strong>Redes Sociales: </strong>
                                    <a href="'.$row['ig'].'" target="_blank"><span class="badge bg-danger">Instagram</span></a>
                                    <a href="'.$row['fb'].'" target="_blank"> <span class="badge bg-primary">Facebook</span></a>
                                    <a href="https://web.whatsapp.com/send?phone='.$row['ws'].'" target="_blank"><span class="badge bg-success">WhatsApp</span></a>
                                    <a href="'.$row['tg'].'" target="_blank"><span class="badge bg-info">Telegram</span></a>
                                    </p>
                                    </div>
                                    <div class="col text-center d-flex justify-content-between">
                                    <img class="imagenperfil m-lg-auto justify-content-between" src="../img/'.$row['img_perfil'].' " >   
                                    </div>
                                        <div class="row justify-content-center text-center">
                                        </div>

                            </div>
                                <div class="col text-center m-lg-auto justify-content-between">
                                    <h2><strong> 3.4/5 </strong></h2>                    
                                    <p><small>Estrellas</small></p>
                                </div>

                        </div>                       

                    </div>

                      ';
                          
                        }else{
                          $output .='
                      <div class="card-block">
                            <div class="row d-flex justify-content-between">
                                <div class="col justify-content-between">
                                    <h2 class="card-title">Bienvenido</h2>
                                    <p class="card-text "><strong>Nombre: </strong> '.$row['nombre'].'</p>

                                    <p class="card-text "><strong>Apellido: </strong>  '.$row['apellido'].'</p>

                                    <p class="card-text "><strong>Rut: </strong> '.$row['rut'].'</p>

                                    <p class="card-text "><strong>Area de trabajo: </strong> '.$row['desc_trabajo'].'</p>

                                    <p><strong>Redes Sociales: </strong>
                                    <a href="'.$row['ig'].'" target="_blank"><span class="badge bg-danger">Instagram</span></a>
                                    <a href="'.$row['fb'].'" target="_blank"> <span class="badge bg-primary">Facebook</span></a>
                                    <a href="https://web.whatsapp.com/send?phone='.$row['ws'].'" target="_blank"><span class="badge bg-success">WhatsApp</span></a>
                                    <a href="'.$row['tg'].'" target="_blank"><span class="badge bg-info">Telegram</span></a>
                                    </p>
                                    </div>
                                    <div class="col text-center d-flex justify-content-between">
                                    <img class="imagenperfil m-lg-auto justify-content-between" src="../img/'.$row['img_perfil'].' " >   
                                    </div>
                                        <div class="row justify-content-center text-center">
                                        <a href="../vistas/chat.php?user_id='.$row['unique_id'].'"><input name="btnchat" class="btn btn-primary" style="width: 50vh;" type="submit" value="Abrir chat"></a>
                                        </div>

                            </div>
                                <div class="col text-center m-lg-auto justify-content-between">
                                    <h2><strong> 3.4/5 </strong></h2>                    
                                    <p><small>Estrellas</small></p>
                                </div>

                        </div>                       

                    </div>

                      ';
                        }
                      }else{
                        header("location: publicaciones.php");
                      }
                      
                    echo $output;
                    
                    
                    ?>