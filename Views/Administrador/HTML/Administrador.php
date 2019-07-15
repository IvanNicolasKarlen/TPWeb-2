<?php
session_start();
include_once ("../../conexionBD/conexion.php");
$conexion = new Conexion();
require_once ("ConsultasPromedios.php");
require_once ("EstadisticasGenerales.php");
require_once ("ProductosPromedios.php");
require_once ("MontosInvolucrados.php");
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  
  <!--Load the AJAX API-->
    <script type="text/javascript" src="js/loader.js"></script>
	
	
	<script type="text/javascript">
	var servicios = <?php echo $serv; ?> ;
	var productos = <?php echo $prod; ?> ;
	var inmuebles = <?php echo $inm; ?> ;
	var vehiculos = <?php echo $veh; ?> ;
// Grafico linea 521
      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
	  
	  
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
	  
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Servicios', servicios],
          ['Inmuebles', inmuebles],
          ['Vehiculos', vehiculos],
          ['Productos y Otros', productos],
          
        ]);
        // Set chart options
        var options = {'title':'Categorias más buscadas:',
                       'width':400,
                       'height':300};
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
	
	
	<!-- Productos mas buscados -->
	

	
	
	
	<script type="text/javascript">
	
// Grafico linea 521
      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
	  
	  
      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
	
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
		
<?php
while($m = mysqli_fetch_array($RankingProductos))
{
?>	  
		
          [<?php echo "'".$m['nombre']."'";?>, <?php echo $m['visitas'];?>],
<?php
}
?>
          
          
        ]);
        // Set chart options
        var options = {'title':'Categorias más buscadas:',
                       'width':400,
                       'height':300};
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart2_div'));
        chart.draw(data, options);
      }
    </script>
	
	
	
	
	
    
   
  </head>
  <body class="h-100">
   
    <div class="color-switcher-toggle animated pulse infinite">
      <i class="material-icons"></i>
    </div>
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="header-logo">
                    <a class="logo" href="../../Index.php">
                        <img src="../../img/logo.png" style="margin-right: 21px;" alt="">
                    </a>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
        
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
              <form method="get" action="../../ProductoBuscado.php" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                <div class="input-group input-group-seamless ml-3">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <form method="get" action="ProductoBuscado.php">
                    </div>
                  </div>
				  <input class="navbar-search form-control" name="buscar" type="search" placeholder="Buscar productos, marcas y más" aria-label="Search"> </div>
				<button class="search-btn" name="enviar" type="submit" style="background-color: white;border: none;"><i class="fa fa-search"></i></button>             
			 </form>
			 </form>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                  <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE6E1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Analytics</span>
                        <p>Your website’s active users count increased by
                          <span class="text-success text-semibold">28%</span> in the last week. Great job!</p>
                      </div>
                    </a>
                    <a class="dropdown-item" href="#">
                      <div class="notification__icon-wrapper">
                        <div class="notification__icon">
                          <i class="material-icons">&#xE8D1;</i>
                        </div>
                      </div>
                      <div class="notification__content">
                        <span class="notification__category">Sales</span>
                        <p>Last week your store’s sales count decreased by
                          <span class="text-danger text-semibold">5.52%</span>. It could have been worse!</p>
                      </div>
                    </a>
                    <a class="dropdown-item notification__all text-center" href="#"> View all Notifications </a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="../../img/logo.png" alt="User Avatar">
                    <?php	if(isset($_SESSION['username'])) { ?>
					<span class="d-none d-md-inline-block"><?php $nombre = $_SESSION['nombre']; echo $nombre;?></span>
					<?php } ?>
				  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="#">
                      <i class="material-icons">&#xE7FD;</i> Perfil</a>
                    <a class="dropdown-item" href="#">
                      <i class="material-icons">vertical_split</i> Ventas</a>
                    <a class="dropdown-item" href="../../listarPublicaciones.php">
                      <i class="fa fa-list"></i>Publicaciones</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="../../CerrarSesion.php">
                      <i class="material-icons text-danger">&#xE879;</i> Cerrar Sesión </a>
                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->
          
		  <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
		
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Bienvenido</span>
				<?php	if(isset($_SESSION['username'])) { ?>
                <h3 class="page-title"><?php $nombre = $_SESSION['nombre']; echo $nombre;?></h3>
              <?php
		}
		?>
			  </div>
            </div>
			
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Publicados</span>
                        <h6 class="stats-small__value count my-3"><?php echo $Producto?></h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-1"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Usuarios</span>
                        <h6 class="stats-small__value count my-3"><?php echo $Usuario?></h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">80.4%</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Comentarios</span>
                        <h6 class="stats-small__value count my-3"><?php echo $Comentarios?> </h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--decrease">3.8%</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-3"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Ingresos</span>
                        <h6 class="stats-small__value count my-3"><?php echo "$".$transaccion?></h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-4"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-12 mb-4">
                <div class="stats-small stats-small--1 card card-small">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase">Ventas</span>
                        <h6 class="stats-small__value count my-3"><?php echo "$".number_format($Compras,0,'.','.');?></h6>
                      </div>
                      <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--decrease">2.4%</span>
                      </div>
                    </div>
                    <canvas height="120" class="blog-overview-stats-small-5"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Small Stats Blocks -->
            <div class="row">
              <!-- Users Stats -->
             <!-- <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Users</h6>
                  </div>
                  <div class="card-body pt-0">
                    <div class="row border-bottom py-2 bg-light">
                      <div class="col-12 col-sm-6">
                        <div id="blog-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                          <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="blog-overview-date-range-1">
                          <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="blog-overview-date-range-2">
                          <span class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons"></i>
                            </span>
                          </span>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                        <button type="button" class="btn btn-sm btn-white ml-auto mr-auto ml-sm-auto mr-sm-0 mt-3 mt-sm-0">View Full Report &rarr;</button>
                      </div>
                    </div>
                    <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
                  </div>
                </div>
              </div>
			  -->
              <!-- End Users Stats -->
              <!-- Users By Device Stats -->
              
              <!-- End Users By Device Stats -->
              
              <!-- Discussions Component -->
              <div class="col-lg-9 col-md-12 col-sm-12 mb-4">
                <div class="card card-small blog-comments">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Comentarios</h6>
                  </div>
      <?php while($U = mysqli_fetch_array($ComentariosPublicos))
				{
?>             <div class="card-body p-0">
                    <div class="blog-comments__item d-flex p-3">
                      <div class="blog-comments__avatar mr-3">
      
	   <img src="images/avatars/1.jpg" alt="User avatar" /> </div>
                      <div class="blog-comments__content">

                        <div class="blog-comments__meta text-muted">
                          <a class="text-secondary" href="#"><?php echo $U['Nombre'];?></a>
                          
                          <span class="text-muted">– 3 days ago</span>
						    <span class="text-muted">- Estado: <?php echo $U['estado']?></span>
                        </div>
                        <p class="m-0 my-1 mb-2 text-muted"><?php echo $U['comentario']?></p>
                        

						
						<div class="blog-comments__actions">
                          <div class="btn-group btn-group-sm">
 <?php if($U['estado']=="Bloqueado")
{ ?>              
						<form action="procesaDesbloquearUsuario.php" method="post">
						<input type="hidden" name="idUsuario" value="<?php echo $U['id']; ?>">
						   <button type="submit" name="desbloquear" class="btn btn-white">
                              <span class="text-success">
                                <i class="material-icons">check</i>
                              </span> Desbloquear </button>
							  </form>
							  
<?php	}if($U['estado']=="ok"){ ?>
							  
							  <form action="procesaBloquearUsuario.php" method="post">
							  	<input type="hidden" name="idUsuario" value="<?php echo $U['id']; ?>">
                            <button type="submit" name="bloquear" class="btn btn-white">
                              <span class="text-danger">
                                <i class="material-icons">clear</i>
                              </span> Bloquear </button>
							  </form>
<?php 
	}
?>	                      
                          </div>
                        </div>	
						
                      </div>
                    </div>

					  	
                    
                  </div>
<?php 
				}
?>
				  <form method="post" action="ComentariosGenerales.php">
                  <div class="card-footer border-top">
                    <div class="row">
                      <div class="col text-center view-report">
					
                        <button type="submit" class="btn btn-white">Ver todos los comentarios</button>
                      </div>
                    </div>
                  </div>
				  </form>
                </div>
              </div>
              <!-- End Discussions Component -->
              <!-- Top Referrals Component -->
              <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
                <div class="card card-small">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Ganancias</h6>
                  </div>
                  <div class="card-body p-0">
                    <ul class="list-group list-group-small list-group-flush">
<?php			  while($f=mysqli_fetch_array($ConsultaUsuario))
					{
?>
					  
					  <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue"><?php echo $f['Nombre']; ?></span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray"><?php echo "$".number_format($f['total'],0,'.','.');?></span>
                      </li>
					  <?php
}
?>
                    </ul>
                  </div>
                  <div class="card-footer border-top">
                    <div class="row">
                      
                      <div class="col text-right view-report">
                       <a href="Liquidaciones.php">Ver todos &rarr;</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Top Referrals Component -->
			  
			 
			  
			 
			  <!--GRAFICO-->
    <div id="chart_div"></div>
	<div id="chart2_div"></div>
			
			  
			  
            </div>
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
            </span>
          </footer>
        </main>
      </div>
    </div>
	
	<div class="color-switcher animated" >
      <div class="actions mb-4">
	  
	  <form action="ImprimirEstadisticas.php" method="post" id="make_pdf" >
	  <input type="hidden" name="hidden_html" id="hidden_html"/>
        <button type="submit" class="mb-2 btn btn-sm btn-primary w-100 d-table mx-auto extra-action" name="CrearPdf" id="CrearPdf">
          <i class="material-icons"></i> Descargar Todo</a></button>
        </form>
		  <form action="ImprimirLiquidacion.php" method="post" id="make_pdf" >
		<button type="submit" class="mb-2 btn btn-sm btn-white w-100 d-table mx-auto extra-action" name="CrearPdf" id="CrearPdf" >
          <i class="material-icons"></i> Liquidación</a></button>
      </div>
	  </form>
	  
	 
	  
	 
      <div class="social-wrapper">
        <div class="social-actions">
          <h5>
		  Pasar a PDF
          </h5>
        </div>
       <div class="loading-overlay">
          <div class="spinner"></div>
        </div>
      </div>
      <div class="close">
        <i class="material-icons"><b>X</b></i>
      </div>
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

		$('#CrearPdf').click(function(){
											$('#hidden_html').val($('#testing').html());
											$('#make_pdf').submit();
										});
		 
	  });
	  
	  </script>