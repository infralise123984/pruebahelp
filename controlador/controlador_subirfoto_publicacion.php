<?php
if (isset($_POST['btncrearpubli']) && isset($_FILES['imagen'])) {
	$titulo=$_POST['titulo'];
	$desc=$_POST['comentario'];
	$img_name = $_FILES['imagen']['name'];
	$img_size = $_FILES['imagen']['size'];
	$tmp_name = $_FILES['imagen']['tmp_name'];
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$allowed_exs = array("jpg", "jpeg", "png", "gif"); 
			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../img/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
	 			$sql=$conexion->query("INSERT INTO publicacion(titulo,info,creador,estado,imagen) VALUES ('$titulo','$desc','$_SESSION[unique_id]','1','$new_img_name')");
	 			mysqli_query($conexion, $sql);
				 echo '<script language="javascript">alert("se subio con foto");</script>';  
				
		}
		else{
			$titulo=$_POST['titulo'];
			$desc=$_POST['comentario'];
			$sql=$conexion->query("INSERT INTO publicacion(titulo,info,creador,estado) VALUES ('$titulo','$desc','$_SESSION[unique_id]','1')");
			mysqli_query($conexion, $sql);
			echo '<script language="javascript">alert("se subio sin foto");</script>'; 

		}
	}

		



