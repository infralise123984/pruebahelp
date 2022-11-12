<?php 

if (isset($_POST['subirfoto']) && isset($_FILES['my_image'])) {

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];


			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../img/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
				$sql="UPDATE usuario SET img_perfil = '$new_img_name' WHERE rut='$_SESSION[rut]'";
				mysqli_query($conexion, $sql);
				
			
				
				
				
			
		}
		else{
			echo '<script language="javascript">alert("porfavor elegir un archivo");</script>';
		}
	}
	
