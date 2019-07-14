<?php
session_start();



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
	<header>
	<?php include_once("header.php"); ?>

	</header>

						
<?php
if(isset($_POST["detalles"]))
{
	
	require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;

		$idProducto = $_POST["Productoid"];
		$NombreProducto = $_POST["ProductoNombre"];

	
	
	//Traer el articulo que presiono ver más	
	$consulta="SELECT * FROM producto WHERE id = '".$idProducto."'";
	
	
	//Para mostrar los articulos relacionados a la busqueda hecha con un nombre parecido al producto que esta viendo
	$consultaExtra="SELECT * FROM producto WHERE nombre like '%".$NombreProducto."%'";
	
	
	//Saber si se hizo la compra, si el usuario esta en la tabla compra
	//Si está, traer toda esa fila.
	//Mostrar el chat
	
		//Id del usuario que esta usando
		$id_Usuario = $_SESSION['id'];
		
		
//Traigo el id del Vendedor		
$productos ="SELECT * FROM producto WHERE id = '".$idProducto."'";	
$listaProductos= $conexion->realizarConsulta($productos);
while($dato = mysqli_fetch_array($listaProductos))
{
	$idVendedor = $dato['idUsuario'];
}

//Traigo nombre del Vendedor
$vendedor = "SELECT * FROM USUARIO WHERE id = '".$idVendedor."'";
$resultadoVendedor= $conexion->realizarConsulta($vendedor);
while($dato = mysqli_fetch_array($resultadoVendedor))
{
	$nombreVendedor = $dato['Nombre'];
}


		$chatprivado ="SELECT * FROM comentarios WHERE  idUsuario='".$id_Usuario."' and idProducto = '".$idProducto."' and idVendedor = '".$idVendedor."' or idVendedor = '".$id_Usuario."' and idProducto = '".$idProducto."' limit 1";
	
	
	$estado ="SELECT * 
				FROM compra as c
				inner join producto as p on c.idProducto = p.id 
				WHERE c.idUsuario = '".$id_Usuario."' and c.idProducto =  '".$idProducto."'
				or p.idUsuario = '".$id_Usuario."' and	c.idProducto =  '".$idProducto."'" ;
	
	$resultado= $conexion->realizarConsulta($consulta);
	$extra= $conexion->realizarConsulta($consultaExtra);
	$consultaEstado= $conexion->realizarConsulta($estado);
	
	$privado= $conexion->realizarConsulta($chatprivado);
	$EstadoDePrivado= $conexion->cantidadDeFilas($consultaEstado);
	

	
	//$publico= $conexion->realizarConsulta($chatpublico);
	
	
	
	
		//Contiene los metodos de la categoria mas buscada
		require_once("CategoriasMasVisitadas.php");
		include_once("ProductoMasVisitado.php");

}
	?>
	
<?PHP
 //Comienzo a rellenar los campos con los datos obtenidos con el select
while($f=mysqli_fetch_array($resultado)){
	
	//busco img principal
	$consulta2="SELECT * FROM imgprincipal WHERE idProducto= '".$f['id']."'";
	$resultado2 = $conexion->realizarConsulta($consulta2);
	
	//busco img secundarias
	$consulta3="SELECT * FROM imgproducto WHERE idProducto= '".$f['id']."'";
	$resultado3 = $conexion->realizarConsulta($consulta3);
	
	
	//busco img principal para slider en detalles de producto
	$consulta4="SELECT * FROM imgprincipal WHERE idProducto= '".$f['id']."'";
	$resultado4 = $conexion->realizarConsulta($consulta4);
	
	//busco img secundarias para slider en detalles de producto
	$consulta5="SELECT * FROM imgproducto WHERE idProducto= '".$f['id']."'";
	$resultado5 = $conexion->realizarConsulta($consulta5);
	
?>

	
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			
			
				<!--  Product Details -->
				<div class="product product-details clearfix">
				
						<div class="col-md-6">
					
					<div id="product-main-view">
					
					
						<!-- mostrar img principal -->
							<?php
								while($i=mysqli_fetch_array($resultado2)){
							?>
					
						
						
						<div class="product-view">
								<img src="imgPublicadas/<?php echo $i["nombre"];?>" alt="">
							</div>
						<?php
								}//fin while mostrar img principal
							?>
							
						
						<!-- mostrar img secundarias -->
										
						<?php
							while($j=mysqli_fetch_array($resultado3)){
						?>
	
							<div class="product-view">
								<img src="imgPublicadas/<?php echo $j["nombre"];?>" alt="">
							</div>
						
									
							
							
							<?php
								}//fin while mostrar img secundarias
							?>
							
							
						</div>
					
					
					<!--	slider en detalles de producto -->
					<div id="product-view">
						
							<!-- mostrar img principal -->
							<?php
								while($i=mysqli_fetch_array($resultado4)){
							?>
					
						
						
						<div class="product-view">
								<img src="imgPublicadas/<?php echo $i["nombre"];?>" alt="">
							</div>
						<?php
								}//fin while mostrar img principal
							?>
							
						
						<!-- mostrar img secundarias -->
										
						<?php
							while($j=mysqli_fetch_array($resultado5)){
						?>
	
							<div class="product-view">
								<img src="imgPublicadas/<?php echo $j["nombre"];?>" alt="">
							</div>
						
									
							
							
							<?php
								}//fin while mostrar img secundarias
							?>
							
							
						</div>
					
					
					
					
					
					
						
					</div>
					
							
						
							
					

					<form method="post" action="ProcesaAddCarrito.php">
					<div class="col-md-6">
						<div class="product-body">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<h2 class="product-name"><?php echo $f["nombre"];?></h2>
							<h3 class="product-price"><?php echo "$".number_format($f['precio'],0,'.','.');?> <del class="product-old-price" value="precio"><?php if($f["precio"]>1000){echo "$".$mostrar= number_format($f['precio']+ 1650,0,'.','.') ;}elseif($f["precio"]>10000){echo "$".$mostrar= number_format($f["precio"] + 5200,0,'.','.');}?></del></h3>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i>
								</div>
								<a href="#">3 Review(s) / Add Review</a>
							</div>
							<p><strong>Cantidad:</strong> <?php if($f["stock"]>0){echo "Dispone de Stock";}else{echo "Se ha vendido todo";}?></p>
							<p><strong>Marca:</strong> <?php echo $f["marca"];?></p>
							<p><?php echo $f["descripcion"];?></p>
							<div class="product-options">
								<ul class="size-option">
									<li><span class="text-uppercase">Size:</span></li>
									<li class="active"><a href="#">S</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">SL</a></li>
								</ul>
								<ul class="color-option">
									<li><span class="text-uppercase">Color:</span></li>
									<li class="active"><a href="#" style="background-color:#475984;"></a></li>
									<li><a href="#" style="background-color:#8A2454;"></a></li>
									<li><a href="#" style="background-color:#BF6989;"></a></li>
									<li><a href="#" style="background-color:#9A54D8;"></a></li>
								</ul>
							</div>

							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">Cantidad: </span>
									<input id="numero" name="cantidad" class="input" type="number" min="1" pattern="^[0-9]+" required>
								</div><br><br><br><br><br>
								
								<button type="submit" name="AddCarrito" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>
								<input type="hidden" name="Add" value="<?php echo $f['id'];?>">
								<input type="hidden" name="id_Usuario" value="$_Session['id']">
								
								<input type="hidden" name="id_Usuario" value="$_Session['id']">
								</form>
								
								<?php
								$msj= isset($_GET["error"]) ? $_GET["error"] : "";
								?>
								<div class="pull-right">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
								</div>
							</div>
						</div>
					</div>
					
					
					
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Descripcion</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Comentarios</a></li>
								
<?php
				if($EstadoDePrivado!=0)
					{
?>	
								<li><a data-toggle="tab" href="#tab4">Privado</a></li>

<?php
					}
?>	
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p><?php echo $f["descripcion"];?></p>
								</div>
								<div id="tab2" class="tab-pane fade in active">
									<p><?php echo "Envio: ".$f["envio"];?></p>
								</div>
								<div id="tab3" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														
													</div>
												</div>

												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
															irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													</div>
												</div>

												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> John</a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														<div class="review-rating pull-right">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-o empty"></i>
														</div>
													</div>
													<div class="review-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
															irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
													</div>
												</div>

												<ul class="reviews-pages">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6">
											<h4 class="text-uppercase">Write Your Review</h4>
											<p>Your email address will not be published.</p>
											<form class="review-form">
												<div class="form-group">
													<input class="input" type="text" placeholder="Your Name" />
												</div>
												<div class="form-group">
													<input class="input" type="email" placeholder="Email Address" />
												</div>
												<div class="form-group">
													<textarea class="input" placeholder="Your review"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">Your Rating: </strong>
														<div class="stars">
															<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<button class="primary-btn">Submit</button>
											</form>
														
										</div>
									</div>

<?php
	}// Fin del while producto
?>

								</div>
								
									<div id="tab4" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
											
											<div class="single-review">

												<div class="review-heading">

														
													</div>
													<div class="review-body">
													<form method="post" action="Mensajeria.php">
													<button type="submit" class="btn-link text-center"> Ver todos los mensajes </button>
													<input type="hidden" name="Vendedor" value="<?php echo $idVendedor;?>">
													<input type="hidden" name="Usuario" value="<?php echo $id_Usuario;?>">
													<input type="hidden" name="Producto" value="<?php echo $idProducto;?>">
													</form>
													
													</div>
												</div>

											</div>
										</div>
										
									</div>



								</div>
								
								
								
								
								
								
								
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
	
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	
	
			
							
					
				
	
	
	
<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Elegido para tí</h2>
					</div>
				</div>
				<!-- section title -->

<?php
	while($f=mysqli_fetch_array($extra)){			
?>				
				
				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<form method="post" action="detallesProducto.php">
							<button type="submit" class="main-btn quick-view" name="detalles"><i class="fa fa-search-plus"></i> Ver más</button>
							<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
							<input type="hidden" name="ProductoNombre" value="<?php echo $f['nombre'];?>">
							<input type="hidden" name="Categoria" value="<?php echo $f['categoria'];?>">
							</form>
							<img src="./imgPublicadas/<?php echo $f["imgprincipal"];?>" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price"><?php echo "$".number_format($f['precio'],0,'.','.');?></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#"><?php echo $f["nombre"];?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<form method="post" action="detallesProducto.php">
						<button type="submit" class="primary-btn add-to-cart" name="detalles"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>
						<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						<input type="hidden" name="ProductoNombre" value="<?php echo $f['nombre'];?>">
						<input type="hidden" name="Categoria" value="<?php echo $f['categoria'];?>">
						</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
<?php
	}
	?>
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->


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
