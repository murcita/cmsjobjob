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
<div style="background-image: url(../includes/imagenes/BannerActualidad.jpg); height: 200px; width: 100%; border: 0px;background-repeat: no-repeat;"></div>
<!-- Form Name -->
<legend><b>Nueva Entrada</b></legend>
</div>
<br>
    

        
<fieldset>  
        
<form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="../includes/subirMarca.php">

<!-- NOMBRE DE LA MARCA->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre marca">Nombre marca</label>  
  <div class="col-md-4">
  <input id="Nombre marca" name="nombreMarca" type="text" placeholder="" class="form-control input-md" required/>
    
  </div>
</div-->

<!-- File Button --> 
    
    
    
    
    
    
    <!-- NUEVA ENTRADA -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Descripción">Nueva entrada</label>
  <div class="col-md-4">                     
  <textarea class="form-control" id="Descripción" name="descripcionMarca" class="form-control input-md" required></textarea>
  </div>
</div>

    
    
    
    <!-- IMAGEN DE LA MARCA -->
<div class="form-group">
     <label class="col-md-4 control-label" for="Imagen">Imagen marca</label>
  <div class="col-md-4">
   <div class="image-upload">
      <label for="file-input">
    <img src="../includes/imagenes/educacion.jpg" id="imagenMarca"><hr>
    <input id="file-input1" type="file"  onchange="readURL(1);" accept=".jpg,.jpeg,.png" name="imagenMarca" required/>
    </label>
  </div>
</div>
</div>
    
    
  
    
    






<div class="card-footer">
<input type="submit" value="Guardar" name="submit">
</div>    
    
    
    
</form>
</fieldset>

    </div></div></div></CENTER></div></body></html>




