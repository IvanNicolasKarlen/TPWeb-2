<?php

session_start();

include_once("header.php");
include_once ("conexionBD/conexion.php");
$conect = new Conexion();
$resultado=$conect->realizarConsulta("SELECT * FROM producto WHERE categoria='Productos y otros' LIMIT 5");
?>
	<!-- HOME -->

	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="img/banner01.jpg" alt="">
						<div class="banner-caption text-center">
							<h1 style="color:#6675df;">Bags sale</h1>
							<h3 class="white-color font-weak">Up to 50% Discount</h3>
							<a href="../Views/Cliente/productosCliente.php"><button class="primary-btn" >Shop Now</button></a>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="img/banner02.jpg" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<a href="../Views/Cliente/productosCliente.php"><button class="primary-btn" >Shop Now</button></a>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="img/banner03.jpg" alt="">
						<div class="banner-caption">
							<h1 class="white-color">New Product <span>Collection</span></h1>
							<a href="../Views/Cliente/productosCliente.php"><button class="primary-btn" >Shop Now</button></a>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<form method="post" action="ProductoBuscado.php">
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" >
						<img src="img/banner10.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">VEHICULOS</h2>
							<button type="submit" name="Vehiculos" class="primary-btn">Ver más</button>
						</div>
					</a>
				</div>
				</form>
				<!-- /banner -->

				<!-- banner -->
				<form method="post" action="ProductoBuscado.php">
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1">
						<img src="img/banner11.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">SERVICIOS</h2>
							<button type="submit" name="Servicios" class="primary-btn">Ver más</button>
						</div>
					</a>
				</div>
				</form>
				<!-- /banner -->

				<!-- banner -->
				<form method="post" action="ProductoBuscado.php">
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<a class="banner banner-1" >
						<img src="img/banner12.jpg" alt="">
						<div class="banner-caption text-center" >
							<h2 class="white-color">INMUEBLES</h2>
							<button type="submit" name="Inmuebles" class="primary-btn">Ver más</button>
						</div>
					</a>
				</div>
				</form>
				<!-- /banner -->

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
                <!-- section-title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Descubrí</h2>
                        <div class="pull-right">
                            <div class="product-slick-dots-1 custom-dots"></div>
                        </div>
                    </div>
                </div>
                <!-- /section-title -->

                <!-- banner -->
				<form method="post" action="ProductoBuscado.php">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="banner banner-2">
                        <img src="./img/banner14.jpg" alt="">
                        <div class="banner-caption">
                            <h2 class="white-color">PRODUCTOS</h2>
                           <button type="submit" name="Productos" class="primary-btn">Ver más</button>
                        </div>
                    </div>
                </div>
				</form>
                <!-- /banner -->

                <!-- Product Slick -->
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-1" class="product-slick">
                            <!-- Product Single -->
                         <?php while($f=mysqli_fetch_array($resultado)){
							?>

                            <div class='product product-single'>
                                <div class='product-thumb'>
                                   
                                    <form method="post" action="detallesProducto.php">
							<button type="submit" class="main-btn quick-view" name="detalles"><i class="fa fa-search-plus"></i> Ver más</button>
							<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
								<input type="hidden" name="ProductoNombre" value="<?php echo $f['nombre'];?>">
							<input type="hidden" name="Categoria" value="<?php echo $f['categoria'];?>">
								</form>
                                    <?php
                                    $img=$conect->traerImgPrincipal($f['id']);
                                    ?>
                                    <img src="imgPublicadas/<?php echo $img;?>" style='height:
                                     400px;'>

                                </div>
                                <div class='product-body'>
                                    <h3 class='product-price'><?php echo "$".number_format($f['precio'],0,'.','.');?></h3>
                                    <div class='product-rating'>
                                        <i class='fa fa-star'></i>
                                        <i class='fa fa-star'></i>
                                        <i class='fa fa-star'></i>
                                        <i class='fa fa-star'></i>
                                        <i class='fa fa-star-o empty'></i>
                                    </div>
									<p>Articulo: <?php echo $f["id"];?></p>
                                    <h2 class='product-name'><a href='#'><?php echo $f["nombre"];?></a></h2>
                                    <div class='product-btns'>
                                        <button class='main-btn icon-btn'><i class='fa fa-heart'></i></button>
                                        <button class='main-btn icon-btn'><i class='fa fa-exchange'></i></button>
                                       <form method="post" action="detallesProducto.php">
										<button type="submit" class="primary-btn add-to-cart" name="detalles"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>
										<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
											<input type="hidden" name="ProductoNombre" value="<?php echo $f['nombre'];?>">
							<input type="hidden" name="Categoria" value="<?php echo $f['categoria'];?>">
										</form>
                                    </div>
                                </div>
                            </div>
                             <?php
							 }
?>							 
                            <!-- /Product Single -->

                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
            <!-- /row -->


        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
			<!-- /row -->

			<!-- row -->

			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<form method="post" action="ProductoBuscado.php">
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="img/banner13.jpg" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color">Ofertón<br><span class="white-color font-weak">Llevalo con un 50% OFF</span></h1>
							<button type="submit" name="Productos" class="primary-btn">Ver más</button>
						</div>
					</div>
				</div>
				</form>
				<!-- /banner -->

				<!-- banner -->
				<form method="post" action="ProductoBuscado.php">
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1">
						<img src="img/banner11.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">SERVICIOS</h2>
							<button type="submit" name="Servicios" class="primary-btn">Ver más</button>
						</div>
					</a>
				</div>
				</form>
				<!-- /banner -->

				<!-- banner -->
				<form method="post" action="ProductoBuscado.php">
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1">
						<img src="img/banner12.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">INMUEBLES</h2>
							<button type="submit" name="Inmuebles" class="primary-btn">Ver más</button>
						</div>
					</a>
				</div>
				</form>
				<!-- /banner -->
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

			<!-- /row -->

			<!-- row -->

			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Picked For You</h2>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
						<form method="post" action="detallesProducto.php">
							<button type="submit" class="main-btn quick-view" name="detalles"><i class="fa fa-search-plus"></i> Ver más</button>
							<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						</form>
							<img src="img/product04.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<form method="post" action="detallesProducto.php">
						<button type="submit" class="primary-btn add-to-cart" name="detalles"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>
						<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
							</div>
							<form method="post" action="detallesProducto.php">
							<button type="submit" class="main-btn quick-view" name="detalles"><i class="fa fa-search-plus"></i> Ver más</button>
							<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						</form>
							<img src="img/product03.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<form method="post" action="detallesProducto.php">
						<button type="submit" class="primary-btn add-to-cart" name="detalles"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>
						<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span class="sale">-20%</span>
							</div>
							<form method="post" action="detallesProducto.php">
							<button type="submit" class="main-btn quick-view" name="detalles"><i class="fa fa-search-plus"></i> Ver más</button>
							<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						</form>
							<img src="img/product02.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<form method="post" action="detallesProducto.php">
						<button type="submit" class="primary-btn add-to-cart" name="detalles"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>
						<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-20%</span>
							</div>
							<form method="post" action="detallesProducto.php">
							<button type="submit" class="main-btn quick-view" name="detalles"><i class="fa fa-search-plus"></i> Ver más</button>
							<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						</form>
							<img src="img/product01.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<form method="post" action="detallesProducto.php">
						<button type="submit" class="primary-btn add-to-cart" name="detalles"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>
						<input type="hidden" name="Productoid" value="<?php echo $f['id'];?>">
						</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

<?php require_once("footer.php");
