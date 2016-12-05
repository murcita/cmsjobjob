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
<div style="background-image: url(../includes/imagenes/BannerActualidad.jpg); height: 200PX; width: 100%; border: 0px;background-repeat: no-repeat;"></div>
<!-- Form Name -->
</div>
</div>
    
 <div class="row">

 </div>
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
<h4 class="card-title">Nueva Entrada</h4>
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
        <div style="background-color: orange;">   
<h4 class="card-title">Luisa Perdomo</h4>
            </div>   
            <p></p>
            <p>Grupo Compufácil presente en RUMBO 2016, evento de educación  y TICS. <a href=”www.rumbo.com”>www.rumbo.com</a></p>
            
            <div class="container">
<img src="../includes/imagenes/Actualidad.jpg" width="100% ">
              <b> Dic 05, 2016 3:00 p.m.</b>
</div>   
    <div class="card-footer">
<button type="button" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>
<button type="button" class="btn btn-default btn-lg btn-block"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button>
</div>
    </div>
   </div>
      
      
      
      
      
      
      
      
    
    </body>