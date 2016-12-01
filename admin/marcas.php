<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marcas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="container-fluid">
<div class="card" style="width: 100%;">
<div class="card-header">
<div style="background-image: url(../includes/imagenes/BannerMarcas.jpg); height: 200px; width: 100%; border: 0px;background-repeat: no-repeat;"></div>
<!-- Form Name -->
</div>
</div>
    
 <div class="row">

 </div>
 </div>

    <!--AQUÍ INICIAN LAS TARJETAS--> 
      <center>
    
 <div>
 
  
</div>
  <div>
  <div class="row">
      
      
<!--Tarjeta para nueva marca-->      
      
      
<div class="col-sm-2 col-md-6 col-lg-4">
        <div class="well">
<h4 class="card-title">Nueva Compumarca</h4>
<i class="fa fa-plus-circle fa-5x" aria-hidden="true"></i>

<div class="card-footer">
<form action="detalleMarca.php" method="POST">
<input type="text" value="hola" hidden name="mensaje">
<button type="submit" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Crear</button>
</form>
<!--button type="button" class="btn btn-default btn-lg btn-block"><i class="fa fa-trash" aria-hidden="true"></i>       Eliminar</button-->
</div>
    </div>
   </div>
      
      
      
      
      
      
      
<!--Original marca-->      
            
 <div class="col-sm-2 col-md-6 col-lg-4">
        <div class="well">
<h4 class="card-title">Educación</h4>
<p><img src="../includes/imagenes/educacion.jpg">
   
    <div class="card-footer">
<button type="button" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
<button type="button" class="btn btn-default btn-lg btn-block"><i class="fa fa-trash" aria-hidden="true"></i>       Eliminar</button>
</div>
    </div>
   </div>
      
      
      
      
      <!--Duplicado Tarjeta-->      
            
 <div class="col-sm-2 col-md-6 col-lg-4">
        <div class="well">
<h4 class="card-title">Educación</h4>
<p><img src="../includes/imagenes/educacion.jpg">
   
    <div class="card-footer">
<button type="button" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
<button type="button" class="btn btn-default btn-lg btn-block"><i class="fa fa-trash" aria-hidden="true"></i>       Eliminar</button>
</div>
    </div>
   </div>
      
      <!--Duplicado Tarjeta-->      
            
 <div class="col-sm-2 col-md-6 col-lg-4">
        <div class="well">
<h4 class="card-title">Educación</h4>
<p><img src="../includes/imagenes/educacion.jpg">
      
    <div class="card-footer">
<button type="button" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
<button type="button" class="btn btn-default btn-lg btn-block"><i class="fa fa-trash" aria-hidden="true"></i>       Eliminar</button>
</div>
    </div>
   </div>
      
          
      
      <!--Duplicado Tarjeta-->      
            
 <div class="col-sm-2 col-md-6 col-lg-4">
        <div class="well">
<h4 class="card-title">Educación</h4>
<p><img src="../includes/imagenes/educacion.jpg">
    
    <div class="card-footer">
<button type="button" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
<button type="button" class="btn btn-default btn-lg btn-block"><i class="fa fa-trash" aria-hidden="true"></i>       Eliminar</button>
</div>
    </div>
   </div>
      
      </div>
     </div>
      </div>
    