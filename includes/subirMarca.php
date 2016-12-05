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
    		if (empty($_FILE["presentacionMarca"]["name"])) {
    			$presentacion = $_FILES["presentacionMarca"]["tmp_name"];
    			$nombrePresentacion = "presentacion_".$lastId."_".$fecha.".".pathinfo($_FILES["presentacionMarca"]["name"],PATHINFO_EXTENSION);
    			if (move_uploaded_file($presentacion, $rutaGeneral."presentacion/".$nombrePresentacion)) {
    				$query = "INSERT INTO Marcas_Archivos (direccion,tipo,id_marca) VALUES (:nombrePresentacion,'2',:lastId) ; ";
    				$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				$prepare = $link->prepare($query);
    				$prepare->bindParam(":nombrePresentacion",$nombrePresentacion);
    				$prepare->bindParam(":lastId",$lastId);
    				$prepare->execute();
    			}
    		}
    		if (empty($_FILE["fichaTecnica"]["name"])) {
    			$fichaTecnica = $_FILES["fichaTecnica"]["tmp_name"];
    			$nombreFichaTecnica = "ficha_".$lastId."_".$fecha.".".pathinfo($_FILES["fichaTecnica"]["name"],PATHINFO_EXTENSION);
    			if (move_uploaded_file($fichaTecnica, $rutaGeneral."fichatecnica/".$nombreFichaTecnica)) {
    				$query = "INSERT INTO Marcas_Archivos (direccion,tipo,id_marca) VALUES (:nombreFichaTecnica,'1',:lastId) ; ";
    				$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				$prepare = $link->prepare($query);
    				$prepare->bindParam(":nombreFichaTecnica",$nombreFichaTecnica);
    				$prepare->bindParam(":lastId",$lastId);
    				$prepare->execute();
    			}
    		}
    		if (empty($_FILE["mailing"]["name"])) {
    			$mailing = $_FILES["mailing"]["tmp_name"];
    			$nombreMailing= "mailing_".$lastId."_".$fecha.".".pathinfo($_FILES["mailing"]["name"],PATHINFO_EXTENSION);
    			if (move_uploaded_file($mailing, $rutaGeneral."mailing/".$nombreMailing)) {
    				$query = "INSERT INTO Marcas_Archivos (direccion,tipo,id_marca) VALUES (:nombreMailing,'3',:lastId) ; ";
    				$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    				$prepare = $link->prepare($query);
    				$prepare->bindParam(":nombreMailing",$nombreMailing);
    				$prepare->bindParam(":lastId",$lastId);
    				$prepare->execute();
    			}
    		}
    		echo "<script>console.log('Marca creada');</script>";
    		echo "<script></script>";

		}else{
			echo "ERROR no viene la imagen";
			exit();
		}
	}
	function extension($nombre){

	}
?>