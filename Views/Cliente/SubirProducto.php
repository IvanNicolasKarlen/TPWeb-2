<?php
session_start();

$usuario = $_SESSION['username'];

if(!isset($usuario))
{
	header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>E-SHOP HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!--Estilos-->
	<link type="text/css" rel="stylesheet" href="css/main.css" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Welcome to E-shop!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#">Store</a></li>
						<li><a href="../Cliente/CerrarSesion.php">Cerrar Sesion</a></li>
						<li><a href="#">FAQ</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="../Views/Cliente/paginaCliente.php">
							<img src="./img/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

	

	
	
	
	
	<form action="procesaSubirProducto.php" class="credit-card-div" method="post">
<div class="centrar">

 <div>
     <br><br><br>
      <div class="row ">
	  <div class="col-md-12 col-sm-12 col-xl-12">
              <div class="col-md-12 col-sm-12 col-xs-12"><h4>Nombre del Producto</h4><br>
                  <input type="text" class="col-center" name="nombre" placeholder="Nombre para identificarlo" required />
              </div>
			  </div>
          </div>
     <div class="row ">
              <div class="col-md-3 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" > <p>Estado</p></span>
                  <select class="controla" name="estado">
              <option selected=""></option>
              <option >Nuevo</option>
			  <option >Usado</option>
              </select>
              </div>
         <div class="col-md-3 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" ><p>Precio</p></span>
                  <input type="number" class="centrar" name="precio" placeholder="1.400" />
              </div>
        <div class="col-md-3 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" >  <p>Marca</p></span>
                  <input type="text" class="centrar" placeholder="CCV" name="marca" />
              </div>
			  <div class="col-md-3 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" >  <p>Stock</p></span>
                  <input type="number" class="controlf" name="stock" placeholder="Cantidad Disponible" />
              </div>
			    <div class="col-md-3 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" >  <p>Telefono</p></span>
                  <input type="number" class="form-control" name="tel" placeholder="4622-4565" />
              </div>
			    <div class="col-md-3 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" >  <p>Whatsapp</p></span>
                  <input type="number" class="form-control" name="cel" placeholder="(011) 15-3456-7328" />
              </div>
			    <div class="col-md-3 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" > <p>Genero</p></span>
                  <select class="controla" name="genero">
              <option selected="">Masculino</option>
              <option>Femenino</option>
              <option>Unisex</option>
			  </select>
              </div>
			    
			  <div class="col-md-3 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" > <p>Formas de Pago</p></span>
                  <select class="controla" name="formas" required>
              <option selected=""></option>
              <option >Efectivo</option>
              <option  >Tarjeta</option>
             <option  >Mercado de Pago</option>
              <option  >Transferencia Bancaria</option>
              <option  >Cualquier forma de pago</option>
              
			  </select>
              </div>
			  
			  <div class="col-md-12 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" >  <p>Envio</p></span>
                  <!-- Default inline 1-->
<div class="col-md-12 col-sm-8 col-xs-12" name="envio">
  <input type="radio" id="a" value="Domicilio" name="envio" class="check" >
  <label class="check" id="a" for="defaultInline2">Envio a Domicilio</label>

  <input type="radio" id="a" name="envio" value="Gratis" class="check" id="defaultInline2">
  <label class="check" for="defaultInline2"  name="envio">Gratis</label>


  <input type="radio" id="a" name="envio" value="Domicilio con Cargo" class="check" id="defaultInline3">
  <label class="check" for="defaultInline2"  name="envio">Envio a Domicilio con Cargo</label>
  
  <input type="radio" id="a" name="envio" value="Entrega en Local" class="check" id="defaultInline3">
  <label class="check" for="defaultInline2"  name="envio">Entrega en Local</label>
</div>
              </div>
			  
			  <div class="col-md-6 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" > <p>Primera Imagen</p></span>
                  <input type="file" name="archivoA" title="seleccionar fichero" id="importData" accept=".xls,.xlsx" />
              </div>
			   <div class="col-md-6 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" > <p>Segunda</p></span>
                  <input type="file" name="archivoB" title="seleccionar fichero" id="importData" accept=".xls,.xlsx" />
              </div>
			   <div class="col-md-6 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" > <p>Tercera</p></span>
                  <input type="file" name="archivoC" title="seleccionar fichero" id="importData" accept=".xls,.xlsx" />
              </div>
			   <div class="col-md-6 col-sm-12 col-xs-12">
                  <span class="help-block text-muted small-font" > <p>Cuarta</p></span>
                  <input type="file" name="archivoD"  title="seleccionar fichero" id="importData" accept=".xls,.xlsx" />
              </div>
			  
			  
		
          </div><br>
     <div class="row ">
              <div class="col-md-12 pad-adjust"><h4>Descripcion</h4>

                <textarea class="controlr" rows="3" name="descripcion"></textarea>
              </div>
          </div>
		  
		  <br><br>
     <div class="row">

     </div>
       <div>
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                 <input type="reset"  class="buttoncancelar" value="CANCELAR" />
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <input type="submit" name="publicar" class="buttonsubmit" value="PUBLICAR" />
              </div>
          </div>
     
                   </div>
              </div>
			 
</form><br><br><br><br>
	


<!--
<form>
  <div class="productos">
    <label for="email" >Nombre</label><br>
    <input type="text" class="inputproducto" id="email">
  </div>
  
  
 
  <br>
<div class="container">
  <div class="row">
    <table>
      <thead>
        <tr>
          <th class="txta">Tipo</th>
          <th class="txtb">Precio</th>
          <th class="txtc">Marca</th>
          
          
        </tr>
      </thead>
	  
	  
      
	  <tbody>
        <tr>
          <td>
            <select class="a">
			
              <option selected="">Autos</option>
              <option>Remeras</option>
              <option>Pantalon</option>
              <option>Calzado</option>
            </select>
          </td>
          
           
            <td class="b">
              
              <input type="number" class="forminput" value="1000.00">
            </td>
          
          <td>
            <input type="text" class="c"  value="hello, cruel cruel world">
          </td>
          
          
         
          
        </tr>
      </tbody>
    </table>
  </div>
</div>
  
  
  <br><br><br>
  
<div class="container">
  <div class="row">
    <table>
      <thead>
        <tr>
          
          <th class="txta">Estilo</th>
          <th class="txtb">Genero</th>
          
        </tr>
      </thead>
	  
	  
      
	  <tbody>
        <tr>
          <td>
            <select class="a">
              <option selected="">Autos</option>
              <option>Remeras</option>
              <option>Pantalon</option>
              <option>Calzado</option>
            </select>
          </td>
          
          <td>
            <input type="text" class="b" value="hello, cruel cruel world">
          </td>
          
          
        </tr>
      </tbody>
    </table>
  </div>
</div>
  
  
  
  
  
  <div class="productos">
    <label for="email">Descripcion</label><br>
 <input type="text" class="inputproducto" id="pwd">
  </div>
  
  
  
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
-->


	<!-- FOOTER -->
	<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
		            <img src="./img/logo.png" alt="">
		          </a>
						</div>
						<!-- /footer logo -->

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">My Account</h3>
						<ul class="list-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Compare</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Customer Service</h3>
						<ul class="list-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Shiping & Return</a></li>
							<li><a href="#">Shiping Guide</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h3 class="footer-header">Stay Connected</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
						<form>
							<div class="form-group">
								<input class="input" placeholder="Enter Email Address">
							</div>
							<button class="primary-btn">Join Newslatter</button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main2.js"></script>

</body>

</html>
