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
      
      
      
      




<?php
   
  include("../includes/conf.php");
  $query = "SELECT * FROM Marcas WHERE activo = 'YES' ; "; 
  $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $prepare = $link->prepare($query);
  $prepare->setFetchMode(PDO::FETCH_ASSOC);
  $prepare->execute();
  $result = $prepare->fetchAll();
  foreach ($result as $marca) {
    echo '<div class="col-sm-2 col-md-6 col-lg-4">';
    echo '<div class="well">';
    echo '<h4 class="card-title">'.$marca['nombre'].'</h4>';
    echo '<div class="container">';
    echo '<img src="../archivos/marcas/banner/'.$marca["imagen"].'" width="100% ">';
    echo '</div>';
    echo '<div class="card-footer">';
    echo '<form action="detalleMarca.php" method="POST">';
    echo '<input type="text" value="'.$marca["id"].'" name="id" hidden/>';
    echo '<button type="submit" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button>';
    echo '</form>';
    echo '<form action="../includes/eliminarMarca.php" onsubmit="return eliminarMarca();" method="POST">';
    echo '<input type="text" name="ide" value="'.$marca['id'].'" hidden>';
    echo '<button type="submit" class="btn btn-default btn-lg btn-block"><i class="fa fa-trash" aria-hidden="true"></i>       Eliminar</button>';
    echo "</form>";
    echo '</div>';
    echo '</div>';
    echo '</div>';
  }
    
  
?>
      
      
      
<!--Original marca   --> 
            
 <div class="col-sm-2 col-md-6 col-lg-4">
        <div class="well">
<h4 class="card-title">Educación</h4>
<div class="container">
<img src="../archivos/marcas/banner/banner_15_1480954522.png" width="100% ">
</div>
<div class="card-footer">
    <form action="detalleMarca.php"><button type="submit" class="btn btn-primary btn-lg btn-block"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></form>
<button type="button" class="btn btn-default btn-lg btn-block"><i class="fa fa-trash" aria-hidden="true"></i>       Eliminar</button>

    
    <input type="checkbox" checked data-toggle="toggle" data-on="Destacar marca" data-off="Marca destacada <i class='fa fa-close'></i>" data-onstyle="danger" data-offstyle="success" data-width="100%";>

            
    </div>
    </div>
   </div>
      
      
      
      
    <!--  Duplicado Tarjeta   -->  
            
 
      
      
      
     
     </div>
      </div>
          
 
        </center></div>

        <script type="text/javascript">
        	function eliminarMarca(){
        		var conf = confirm("¿Seguro deseas eliminar esta marca?");
        		if (!conf) {
        			return false;
        		}
        		return true;
        	}
                        
        </script>
        
        

       
 
    
    
    </body></html>
    