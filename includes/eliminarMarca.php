<?php
	if (isset($_POST['ide'])) {
		include("conf1.php");
		$query = "UPDATE Marcas SET activo='NO' WHERE id=".$_POST['ide']." ;";
		mysqli_query($link,$query) or die(mysqli_error($link));
		if (mysqli_affected_rows($link) > 0) {
			echo "<script>alert('Marca eliminada');</script>";
			echo "<script>window.location.href = '../admin/marcas.php';</script>";
		}else{
			echo "<script>alert('Hubo un error eliminando, por favor intente de nuevo');</script>";
			echo "<script>window.location.href = '../admin/marcas.php';</script>";
		}
	}else{
		echo "<script>alert('Hubo un error eliminando, por favor intente de nuevo');</script>";
		echo "<script>window.location.href = '../admin/marcas.php';</script>";
	}
?>