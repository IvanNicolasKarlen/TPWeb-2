<?php

session_start();

include_once ("../../conexionBD/conexion.php");
$conexion = new Conexion();
require_once ("MontosInvolucrados.php");





$query ="SELECT nombre,visitas, count(*) as number FROM categoria GROUP BY nombre limit 5";
$categoria = $conexion->realizarConsulta($query);

$trans ="SELECT Nombre,total, count(*) as number 
		FROM transaccion as trans
		inner join usuario as user on trans.idUsuario = user.id
		GROUP BY nombre ";
$transaccion = $conexion->realizarConsulta($trans);




?>






<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-SHOP HTML Template</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <!--Load the AJAX API-->
    <script type="text/javascript" src="js/loader.js"></script>
	 
	
															<!-- Ganancias -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Usuario');
        data.addColumn('number', 'Debe');
        data.addRows([ 
	<?php
while($liquidaciones = mysqli_fetch_array($transaccion))
{
?>
	   [<?php echo "'".$liquidaciones["Nombre"]."'";?>, <?php echo $liquidaciones["total"];?>],
	   
<?php
}
?>	   
        ]);
        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
    
   
  </head>
  <body>
   <div class="container" >  
            <h1 class="text-center" >Liquidación</h1> 
		<div id="testing">
	 <div id="table_div" ></div>
	</div>

   
        </div>
		
		  <div align="center">

   <form method="post" id="make_pdf" action="Liquidacion1.php">
   <br> <input type="hidden" name="hidden_html" id="hidden_html" />

	 <button type="button" name="create_pdf" id="create_pdf" class="btn btn-primary">Descargar</button>
   </form>
   <form action="Administrador.php">
  <br> <button type="submit" class="btn btn-danger btn-xs">Regresar</button>
  </form>
	 </div>
    
	  
	  
	
	  
	 
      
	
	
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="scripts/app/app-blog-overview.1.1.0.js"></script>
	
	
  </body>
</html>

  <script>
	  $(document).ready(function(){

		$('#create_pdf').click(function(){
											$('#hidden_html').val($('#testing').html());
											$('#make_pdf').submit();
										});
		 
	  });
	  
	  </script>