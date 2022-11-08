<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM mensajes WHERE (receptor_id = {$row['unique_id']}
                OR emisor_id = {$row['unique_id']}) AND (emisor_id = {$emisor_id} 
                OR receptor_id = {$emisor_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['mensaje'] : $result ="No hay mensajes disponibles";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['emisor_id'])){
            ($emisor_id == $row2['emisor_id']) ? $you = "Tú: " : $you = "";
        }else{
            $you = "";
        }
        ($row['estado'] == "Desconectado ahora") ? $offline = "offline" : $offline = "";
        ($emisor_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";
        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <div class="details">
                        <span>'. $row['nombre']. " " . $row['apellido'] .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"> <i class="fas fa-circle"></i></div>
                </a>';
        // Está es la version original del output
        // $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
        //             <div class="content">
        //             <img src="../modelo/images/'. $row['img'] .'" alt="">
        //             <div class="details">
        //                 <span>'. $row['fname']. " " . $row['lname'] .'</span>
        //                 <p>'. $you . $msg .'</p>
        //             </div>
        //             </div>
        //             <div class="estado-dot '. $offline .'"><i class="fas fa-circle"></i></div>
        //         </a>';
    }
?>