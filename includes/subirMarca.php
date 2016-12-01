<?php
	echo "Hola ";
	if (!isset($_POST["submit"])) {
		echo "ERROR";
		exit();
	}
	if (isset($_POST["idMarca"])) {
		
	}else{
		///nueva marca
		///nombre
		$nombreMarca = htmlentities(strtoupper($_POST['nombreMarca']), ENT_QUOTES);
		///descripcion descripcionMarca
		$descripcionMarca = htmlentities(strtoupper($_POST['descripcionMarca']), ENT_QUOTES);
		///imagen principal  imagenMarca
		$check = getimagesize($_FILES["imagenMarca"]["tmp_name"]);
		if($check !== false) {
			include("conf.php");
			$query = "INSERT INTO "
		}else{
			echo "ERROR no viene la imagen";
			exit();
		}



	}
?>