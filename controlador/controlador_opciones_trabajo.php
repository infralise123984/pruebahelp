<?php
    $rir = $_SESSION['unique_id'];
//     $sql2=$conexion->query("SELECT *
//     FROM usuario 
//     INNER JOIN trabajos ON trabajos.id =usuario.trabajo_id
//     where unique_id ={$rir}");   
//     while ($row2 = mysqli_fetch_array($sql2))
//     echo '<option selected="'.$row2['trabajo_id'].'"></option>';
//     {                     
//     echo '<option value="'.$row['id'].'">'.$row['desc_trabajo'].'</option>' ;
// }
    $sql=$conexion->query("SELECT * FROM trabajos"); 
    echo '<option value="" disabled>===========</option>';
    while ($row = mysqli_fetch_array($sql))
    {                     
    echo '<option value="'.$row['id'].'">'.$row['desc_trabajo'].'</option>' ;
}
if(!empty($_POST['btntrabajo'])){
    $trabajo=$_POST['trabajos'];
    $sql2=$conexion->query("UPDATE usuario SET trabajo_id= '$trabajo' WHERE unique_id = '$rir'");
    // echo '<script language="javascript">alert(UPDATE usuario SET id_trabajo= '.$trabajo.' WHERE unique_id = '.$rir.');</script>'; 
    echo '<script language="javascript">alert("Se cambió su area de trabajo");</script>';
}

?>  