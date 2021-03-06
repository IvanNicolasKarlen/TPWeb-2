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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <!--Load the AJAX API-->
    
   
  </head>
  <body class="h-100">
    
	
	
	
	
    <div class="container-fluid" >
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
        
		 <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="Administrador.php">
                
                  <span>&#x2190 Regresar al home</span>
                </a>
              </li>
		</ul>
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
                      <div class="notification__content" id="testing">
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
          
		  
         
            <!-- End Small Stats Blocks -->
            <div class="row">
            
              
            <!-- Discussions Component -->
              <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                <div class="card card-small blog-comments">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Comentarios</h6>
                  </div>
      <?php while($U = mysqli_fetch_array($ComentariosGenerales))
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
				  
                </div>
              </div>
              <!-- End Discussions Component -->


			  
			  
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
