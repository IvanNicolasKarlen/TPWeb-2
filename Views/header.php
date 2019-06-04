

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
    <link type="text/css" rel="stylesheet" href="Cliente/css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="Cliente/css/slick.css" />
    <link type="text/css" rel="stylesheet" href="Cliente/css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="Cliente/css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="Cliente/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="Cliente/css/style.css" />

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
                    <!--<li><a href="Index.php">Inicio</a></li>
                    <li><a href="CerrarSesion.php">Cerrar Sesion</a></li>-->
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
                    <a class="logo" href="Index.php">
                        <img src="Cliente/img/logo.png" alt="">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form>
                        <input class="input " type="text" placeholder="Enter your keyword"/>
						
					
                       <!-- <select class="input search-categories">
                            <option value="0">All Categories</option>
                            <option value="1">Category 01</option>
                            <option value="1">Category 02</option>
                        </select>-->
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
				
                <!-- /Search -->
            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->
                    <?php
                    if(isset($_SESSION['username'])) { ?>
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase"><?php $nombre = $_SESSION['nombre']; echo $nombre;?> <i class="fa fa-caret-down"></i></strong>
                        </div>

                        <ul class="custom-menu">
                            <li><a href="CerrarSesion.php"><i class="fa fa-unlock-alt"></i> Cerrar Sesion</a></li>
                            <li><a href="#"><i class="fa fa-user-o"></i> Mis Datos</a></li>
                            <li><a href="#"><i class="fa fa-heart-o"></i> Favoritos</a></li>
                            <li><a href="#"><i class="fa fa-check"></i> Ventas</a></li>
                            <li><a href="listarPublicaciones.php"><i class="fa fa-list"></i> Publicaciones</a></li>

                        </ul>
                    </li>
                    <?php }else{ ?>
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">Perfil <i class="fa fa-caret-down"></i></strong>
                        </div>
                        <!--<a href="registrarse.php" class="text-uppercase">Registrarme</a>-->
                        <ul class="custom-menu">
                            <li><a href="login.php"><i class="fa fa-unlock-alt"></i> Login</a></li>
                            <li><a href="../Views/registrarse.php"><i class="fa fa-user-plus"></i> Registrarme</a></li>


                        </ul>
                    </li>
                    <?php } ?>


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
                                            <img src="Cliente/img/thumb-product01.jpg" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                            <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div>
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                            <img src="Cliente/img/thumb-product01.jpg" alt="">
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

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women’s Clothing <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row hidden-sm hidden-xs">
                                <div class="col-md-12">
                                    <hr>
                                    <a class="banner banner-1" href="productosCliente.php">
                                        <img src="Cliente/img/banner05.jpg" alt="">
                                        <div class="banner-caption text-center">
                                            <h2 class="white-color">NEW COLLECTION</h2>
                                            <h3 class="white-color font-weak">HOT DEAL</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="productosCliente.php">Men’s Clothing</a></li>
                    <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Phones &amp; Accessories <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 hidden-sm hidden-xs">
                                    <a class="banner banner-2" href="#">
                                        <img src="Cliente/img/banner04.jpg" alt="">
                                        <div class="banner-caption">
                                            <h3 class="white-color">NEW<br>COLLECTION</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="productosCliente.php">Computer &amp; Office</a></li>
                    <li><a href="productosCliente.php">Consumer Electronics</a></li>
                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Jewelry &amp; Watches <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                    <li><a href="productosCliente.php">View All</a></li>
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a <?php if(!(isset($_SESSION['username']))){echo "style=display:none";}
                    else{echo "style=display:block";} ?> href="SubirProducto.php">
                            Publicar</a></li>
                    <li><a href="productosCliente.php">Shop</a></li>
                    <li class="dropdown mega-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row hidden-sm hidden-xs">
                                <div class="col-md-12">
                                    <hr>
                                    <a class="banner banner-1" href="productosCliente.php">
                                        <img src="Cliente/img/banner05.jpg" alt="">
                                        <div class="banner-caption text-center">
                                            <h2 class="white-color">NEW COLLECTION</h2>
                                            <h3 class="white-color font-weak">HOT DEAL</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Men <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="productosCliente.php">
                                            <img src="Cliente/img/banner06.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Women’s</h3>
                                            </div>
                                        </a>
                                        <hr>
                                    </div>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="productosCliente.php">
                                            <img src="Cliente/img/banner07.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Men’s</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="productosCliente.php">
                                            <img src="Cliente/img/banner08.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Accessories</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="productosCliente.php">
                                            <img src="Cliente/img/banner09.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Bags</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Categories</h3></li>
                                        <li><a href="productosCliente.php">Women’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Men’s Clothing</a></li>
                                        <li><a href="productosCliente.php">Phones &amp; Accessories</a></li>
                                        <li><a href="productosCliente.php">Jewelry &amp; Watches</a></li>
                                        <li><a href="productosCliente.php">Bags &amp; Shoes</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Sales</a></li>
                    <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="product-page.html">Product Details</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
</header>
<!-- /NAVIGATION -->

