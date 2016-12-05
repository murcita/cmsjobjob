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
		$check1 = getimagesize($_FILES["imagenMarca2"]["tmp_name"]);
		if($check !== false && $check1 !== false) {
			include("conf.php");
			$query = "INSERT INTO Marcas (nombre,descripcion) VALUES(:nombre,:descripcion) ; ";
			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		$prepare = $link->prepare($query);
    		$prepare->bindParam(":nombre",$nombreMarca);
    		$prepare->bindParam(":descripcion",$descripcionMarca);
    		$prepare->execute();
    		echo "ACA";
    		$lastId = $link->lastInsertId();
    		echo $lastId;
    		///mover imagenes
    		$rutaGeneral = "../archivos/marcas/";
    		$fecha = time();
    		echo "La fecha ".$fecha;
    		$banner = $_FILES["imagenMarca"]["tmp_name"];
    		$bannerNombre = "banner_".$lastId."_".$fecha.".png";
    		echo $bannerNombre;
    		$icono = $_FILES["imagenMarca2"]["tmp_name"];
    		$iconoNombre = "icono_".$lastId."_".$fecha.".png";

    		if (move_uploaded_file($banner, $rutaGeneral."banner/".$bannerNombre)) {
    			echo "SE MOVIO";
    			$query = "UPDATE Marcas SET imagen = :bannerNombre WHERE id = :lastId ;";
    			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			$prepare = $link->prepare($query);
    			$prepare->bindParam(":bannerNombre",$bannerNombre);
    			$prepare->bindParam(":lastId",$lastId);
    			$prepare->execute();
    		}
    		if (move_uploaded_file($icono, $rutaGeneral."icono/".$iconoNombre)) {
    			echo "SE MOVIO";
    			$query = "UPDATE Marcas SET imagen_2 = :iconoNombre WHERE id = :lastId ;";
    			$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    			$prepare = $link->prepare($query);
    			$prepare->bindParam(":iconoNombre",$iconoNombre);
    			$prepare->bindParam(":lastId",$lastId);
    			$prepare->execute();
    		}
    		if (isset($_POST['presentacionMarca'])) {
    			$nombrePresentacion = "presentacion_".$lastId."_".$fecha
    		}


		}else{
			echo "ERROR no viene la imagen";
			exit();
		}
	}
	function extension($nombre){
		
	}
?>