<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM mensajes LEFT JOIN usuario ON usuario.unique_id = mensajes.emisor_id
                WHERE (emisor_id = {$outgoing_id} AND receptor_id = {$incoming_id})
                OR (emisor_id = {$incoming_id} AND receptor_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['emisor_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['mensaje'] .'</p>
                                </div>
                                </div>';
                }else{
                    // output original con la imagen
                    // $output .= '<div class="chat incoming">
                    //             <img src="../modelo/images/'.$row['img'].'" alt="">
                    //             <div class="details">
                    //                 <p>'. $row['mensaje'] .'</p>
                    //             </div>
                    //             </div>';
                    $output .= '<div class="chat incoming">
                                <img src="../img/'. $row['img_perfil'] .'" alt="">
                                <div class="details">
                                    <p>'. $row['mensaje'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No hay mensajes disponibles. Una vez que envíe el mensaje, aparecerán aquí.</div>';
        }
        echo $output;
    }else{
        header("location: ../vistas/login.php");
    }

?>