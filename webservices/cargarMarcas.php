<?php
	header('Content-Type: application/json');
	echo json_encode(cargarMarcas());
	function cargarMarcas(){
	    include("../includes/conf1.php");
	    $query="SELECT * FROM Marcas WHERE activo='YES';";
	    $res=mysqli_query($link,$query) or die(mysqli_error($link));
	    $marcas=array();
	    if (mysqli_affected_rows($link) > 0) {
	    	while ($row=mysqli_fetch_array($res)) {
	    		$marc=new Marca();
				$marc->id=$row['id'];
				$marc->nombre=utf8_encode($row['nombre']);
				$marc->descripcion=utf8_encode($row['descripcion']);
				$marc->imagen=$row['imagen'];
				$marc->imagen_2=$row['imagen_2'];
				$query="SELECT * FROM Marcas_Archivos WHERE id_marca='".$row['id']."' AND activo='YES';";
				$res1=mysqli_query($link,$query) or die(mysqli_error($link));
				if (mysqli_affected_rows($link) > 0) {
					while ($row1=mysqli_fetch_array($res1)) {
						$arch=new Archivo();
						$arch->id=$row1['id_archivo'];
						$arch->nombre=utf8_encode($row1['nombre']);
						$arch->direccion=$row1['direccion'];
						$arch->tipo=$row1['tipo'];
						array_push($marc->archivos,$arch);
					}
				}
				array_push($marcas,$marc);
	    	}
	    }
	    return $marcas;
	 }
	 class Marca{
		var $id;
		var $nombre;
		var $descripcion;
		var $imagen;
		var $imagen_2;
		var $archivos=array();
	}
	class Archivo{
		var $id;
		var $nombre;
		var $direccion;
		var $tipo;
	}
 ?>