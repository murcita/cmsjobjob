
<?php
  if (isset($_POST['id'])) {
    include("../includes/conf.php");
    $query = "SELECT * FROM Marcas WHERE activo = 'YES' AND id = :id ; "; 
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $prepare = $link->prepare($query);
    $prepare->setFetchMode(PDO::FETCH_ASSOC);
    $prepare->bindParam(":id",$_POST['id']);
    $prepare->execute();
    $result = $prepare->fetchAll();
    foreach ($result as $mar) {
      $marca = $mar;
    }

    $query = "SELECT * FROM Marcas_Archivos WHERE id_marca=:id AND activo = 'YES'; ";
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $prepare = $link->prepare($query);
    $prepare->setFetchMode(PDO::FETCH_ASSOC);
    $prepare->bindParam(":id",$_POST['id']);
    $prepare->execute();
    $result = $prepare->fetchAll();
    foreach ($result as $archivo) {
    	switch ($archivo['tipo']) {
    		//ficha tecnica
    		case '1':
    			$fichaTecnica = $archivo;
    			break;
    		//presentacion
    		case '2':
    			$presentacion = $archivo;
    			break;
    		//mailing
    		case '3':
    			$mailing = $archivo;
    			break;
    		default:
    			# code...
    			break;
    	}
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marcas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
        
    <script type="text/javascript">
    function readURL(entrada) {
        console.log("Input " + entrada);
        if(entrada == 1){
            var ideEntrada = "#file-input1";
            var ideSalida = "#imagenMarca";
            var anchoPermitido = 640;
            var altoPermitido = 268;
        }else{
            var ideEntrada = "#file-input2";
            var ideSalida = "#imagenIcono";
            var anchoPermitido = 230;
            var altoPermitido = 230;
        }
        console.log("Entrada: "+ideEntrada);
        var input = $(ideEntrada)[0];
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                //console.log("Salida: "+e.target.result);
                var img = new Image();
                img.src = e.target.result;
                img.onload = function () {
                    //alert(this.width + " " + this.height);
                    if(this.width == anchoPermitido && this.height == altoPermitido){
                        $(ideSalida).attr('src', e.target.result)
                    }else{
                        alert("La imagen no tiene las dimensiones apropiadas "+anchoPermitido+"X"+altoPermitido);
                        $(ideEntrada).val("");
                    }
                };
            }
            reader.readAsDataURL(input.files[0]);
        }else{
            console.log("NO");
        }
    }
        
        
        
        
    
          
        
        
        
        
        
        
        
        
        
        
        
        
        
</script>


    
 <?php
include_once("../includes/libraries.php");
?>

</head>
<body>
     <!-- NAVBAR -->
        <?php
            include("../includes/sideBar.php");
        ?>
    
    
    
<!--BANNER PRINCIPAL-->   
     
<div class="col-sm-9 ">
<div>
<div class="row" >
</div>
 </div>
    
    

    

    <!--AQUÍ INICIAN EL FORM-->     
<CENTER>
    
<div>
<div class="container-fluid">
<div class="card" style="width: 100%;">
<div class="card-header">
<div style="background-image: url(../includes/imagenes/BannerMarcas.jpg); height: 200px; width: 100%; border: 0px;background-repeat: no-repeat;"></div>
<!-- Form Name -->
<legend><b>Editor de marca</b></legend>
</div>
<br>
    

        
<fieldset>  
        
<form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="../includes/subirMarca.php">


<?php 
  if(isset($_POST['id'])){
    echo "<input type='text' value='".$_POST['id']."' hidden name='idMarca'/>";
  }
?>


<!-- NOMBRE DE LA MARCA-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre marca">Nombre marca</label>  
  <div class="col-md-4">
  <?php 
    if(isset($_POST['id'])){
      echo '<input id="Nombre marca" name="nombreMarca" type="text" placeholder="" class="form-control input-md" required value="'.$marca['nombre'].'" />';
    }else{
      echo '<input id="Nombre marca" name="nombreMarca" type="text" placeholder="" class="form-control input-md" required />';
    }
  ?>
    
  </div>
</div>

<!-- File Button --> 
    
    
    
    
    <!-- IMAGEN DE LA MARCA -->
<div class="form-group">
     <label class="col-md-4 control-label" for="Imagen">Imagen marca</label>
  <div class="col-md-4">
   <div class="image-upload">
      <label for="file-input">
  <?php
    if (isset($_POST['id'])) {
      echo '<img src="../archivos/marcas/banner/'.$marca['imagen'].'" id="imagenMarca"><hr>';
      echo '<input id="file-input1" type="file"  onchange="readURL(1);" accept=".jpg,.jpeg,.png" name="imagenMarca" />';
    }else{
      echo '<img src="../includes/imagenes/educacion.jpg" id="imagenMarca"><hr>';
      echo '<input id="file-input1" type="file"  onchange="readURL(1);" accept=".jpg,.jpeg,.png" name="imagenMarca" required/>';
    }
    
  ?>
    
    </label>
  </div>
</div>
</div>
    
    
  
    
    
      <!-- IMAGEN ICONO -->
<div class="form-group">
     <label class="col-md-4 control-label" for="Imagen">Imagen Icono</label>
  <div class="col-md-4">
   <div class="image-upload">
      <label for="file-input">
  <?php
    if (isset($_POST['id']) && $marca["imagen_2"] != null) {
      echo '<img src="../archivos/marcas/icono/'.$marca["imagen_2"].'" id="imagenIcono"><hr>';
      echo '<input id="file-input2"  type="file"  onchange="readURL(2);" accept=".jpg,.jpeg,.png" name="imagenMarca2"/>';
    }else{
      echo '<img src="../includes/imagenes/educacion.jpg" id="imagenIcono"><hr>';
      echo '<input id="file-input2"  type="file"  onchange="readURL(2);" accept=".jpg,.jpeg,.png" name="imagenMarca2" required/>';
    }
  ?>
    </label>
  </div>
</div>
</div>
    
     
    
    
    

<!-- DESCRIPCION -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Descripción">Descripción del producto</label>
  <div class="col-md-4">                     
  <?php
    if (isset($_POST['id'])) {
      echo '<textarea class="form-control" id="Descripción" name="descripcionMarca" class="form-control input-md" required>'.$marca['descripcion'].'</textarea>';
    }else{
      echo '<textarea class="form-control" id="Descripción" name="descripcionMarca" class="form-control input-md" required></textarea>';
    }
  ?>
  
  </div>
</div>    
    

    
    
    
    
    
<!-- PRESENTACION --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Presentación">Presentación PPT -PPTX</label>
     <div class="col-md-4">
    <input id="Presentación" name="presentacionMarca" class="input-file" type="file">
    <?php
    	if ($presentacion !== null) {
    		echo '<a href="../archivos/marcas/presentacion/'.$presentacion['direccion'].'" target="_blank"><img src="../includes/imagenes/editdoc.png" width="6%" alt="Enviar" data-toggle="tooltip" data-placement="top" title="Archivo adjuntado"></a> ';
    	}else{
    		echo '<img src="../includes/imagenes/editdocbn.png" width="6%" alt="Enviar" data-toggle="tooltip" data-placement="top" title="Archivo no adjuntado">';
    	}
    ?>
     
  </div>
</div>

    

    

<!-- FICHA TECNICA --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Ficha técnica">Ficha técnica PDF</label>
  <div class="col-md-4">
    <input id="Ficha técnica" name="fichaTecnica" class="input-file" type="file">
    <?php
    	if ($fichaTecnica !== null) {
    		echo '<a href="../archivos/marcas/fichatecnica/'.$fichaTecnica['direccion'].'" target="_blank"><img src="../includes/imagenes/editdoc.png" width="6%" alt="Enviar" data-toggle="tooltip" data-placement="top" title="Archivo adjuntado"></a> ';
    	}else{
    		echo '<img src="../includes/imagenes/editdocbn.png" width="6%" alt="Enviar" data-toggle="tooltip" data-placement="top" title="Archivo no adjuntado">';
    	}
    ?>
      
      </div>
</div>

    
    
<!-- MAILING --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="Mailing">Mailing JPG</label>
  <div class="col-md-4">
    <input id="Mailing" name="mailing" class="input-file" type="file">
    <?php
    	if ($mailing !== null) {
    		echo '<a href="../archivos/marcas/mailing/'.$mailing['direccion'].'" target="_blank"><img src="../includes/imagenes/editdoc.png" width="6%" alt="Enviar" data-toggle="tooltip" data-placement="top" title="Archivo adjuntado"></a> ';
    	}else{
    		echo '<img src="../includes/imagenes/editdocbn.png" width="6%" alt="Enviar" data-toggle="tooltip" data-placement="top" title="Archivo no adjuntado">';
    	}
    ?>
  </div>
</div>

<div class="card-footer">
<input type="submit" value="Guardar" name="submit">
</div>    
    
    
    
</form>
</fieldset>
    
    
    

    </div></div></div></CENTER></div></body></html>




