<?php
require_once("verificacionSesion.php");

include_once("header.php");

?>






<?php

if (isset($_GET["detalles"])) {

    require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
    //Abrir conexion
    $conexion = new Conexion;
    $idProducto = $_GET["Productoid"];
    $NombreProducto = $_GET["ProductoNombre"];

    //Traer el articulo que presiono ver más
    $consulta = "SELECT * FROM producto WHERE id = '" . $idProducto . "'";


    //Id del usuario que esta usando
    $id_Usuario = $_SESSION['id'];


//Traigo el id del Vendedor		
    $productos = "SELECT * FROM producto WHERE id = '" . $idProducto . "'";
    $listaProductos = $conexion->realizarConsulta($productos);
    while ($dato = mysqli_fetch_array($listaProductos)) {
        $idVendedor = $dato['idUsuario'];
    }

//Traigo nombre del Vendedor
    $vendedor = "SELECT * FROM USUARIO WHERE id = '" . $idVendedor . "'";
    $resultadoVendedor = $conexion->realizarConsulta($vendedor);
    while ($dato = mysqli_fetch_array($resultadoVendedor)) {
        $nombreVendedor = $dato['Nombre'];
    }


  

    $estado = "SELECT * 
				FROM compra as c
				inner join producto as p on c.idProducto = p.id 
				WHERE c.idUsuario = '" . $id_Usuario . "' and c.idProducto =  '" . $idProducto . "'
				or p.idUsuario = '" . $id_Usuario . "' and	c.idProducto =  '" . $idProducto . "'";

    $resultado = $conexion->realizarConsulta($consulta);
    $consultaEstado = $conexion->realizarConsulta($estado);

  
    //Contiene los metodos de la categoria mas buscada
    require_once("CategoriasMasVisitadas.php");
    include_once("ProductoMasVisitado.php");

}
?>

<?PHP
//Comienzo a rellenar los campos con los datos obtenidos con el select
while ($f = mysqli_fetch_array($resultado)){

//busco img principal
$consulta2 = "SELECT * FROM imgprincipal WHERE idProducto= '" . $f['id'] . "'";
$resultado2 = $conexion->realizarConsulta($consulta2);

//busco img secundarias
$consulta3 = "SELECT * FROM imgproducto WHERE idProducto= '" . $f['id'] . "'";
$resultado3 = $conexion->realizarConsulta($consulta3);


//busco img principal para slider en detalles de producto
$consulta4 = "SELECT * FROM imgprincipal WHERE idProducto= '" . $f['id'] . "'";
$resultado4 = $conexion->realizarConsulta($consulta4);

//busco img secundarias para slider en detalles de producto
$consulta5 = "SELECT * FROM imgproducto WHERE idProducto= '" . $f['id'] . "'";
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
                        while ($i = mysqli_fetch_array($resultado2)) {
                            ?>


                            <div class="product-view">
                                <img src="imgPublicadas/<?php echo $i["nombre"]; ?>" alt="">
                            </div>
                            <?php
                        }//fin while mostrar img principal
                        ?>


                        <!-- mostrar img secundarias -->

                        <?php
                        while ($j = mysqli_fetch_array($resultado3)) {
                            ?>

                            <div class="product-view">
                                <img src="imgPublicadas/<?php echo $j["nombre"]; ?>" alt="">
                            </div>


                            <?php
                        }//fin while mostrar img secundarias
                        ?>


                    </div>


                    <!--	slider en detalles de producto -->
                    <div id="product-view">

                        <!-- mostrar img principal -->
                        <?php
                        while ($i = mysqli_fetch_array($resultado4)) {
                            ?>


                            <div class="product-view">
                                <img src="imgPublicadas/<?php echo $i["nombre"]; ?>" alt="">
                            </div>
                            <?php
                        }//fin while mostrar img principal
                        ?>


                        <!-- mostrar img secundarias -->

                        <?php
                        while ($j = mysqli_fetch_array($resultado5)) {
                            ?>

                            <div class="product-view">
                                <img src="imgPublicadas/<?php echo $j["nombre"]; ?>" alt="">
                            </div>


                            <?php
                        }//fin while mostrar img secundarias
                        ?>

                    </div>

                </div>

                <form method="get" action="ProcesaAddCarrito.php">
					    <div class="col-md-6">
                        <div class="product-body">
                            <div class="product-label">
                                <span>New</span>
                                <span class="sale">-20%</span>
                            </div>
                            <h2 class="product-name"><?php echo $f["nombre"]; ?></h2>
                            <h3 class="product-price"><?php echo "$" . number_format($f['precio'], 0, '.', '.'); ?> </h3>
                            <div>
                                <div class="product-rating">
                                    <?php
                                    $idU = $conexion->consultarIdUser($f['id']);
                                    $cant = $conexion->cambiarTipoUser($idU);
                                    $tipoU = $conexion->consultarTipoUser($idU);
                                    echo "<h4 class='text-primary'>$tipoU</h4>";
                                    for ($i = 0; $i < $cant; $i++) {
                                        echo "<i class='fa fa-star'></i>";
                                    };
                                    for ($z = 0; $z < 5 - $cant; $z++) {
                                        echo "<i class='fa fa-star-o empty'></i>";
                                    };
                                    ?>
                                </div>
                            </div>
                            <p><strong>Cantidad:</strong> <?php if ($f["stock"] > 0) {
                                    echo "$f[stock]";
                                } else {
                                    echo "No hay stock";
                                } ?></p>
                            <p><strong>Marca:</strong> <?php echo $f["marca"]; ?></p>
                            <p><?php echo $f["descripcion"]; ?></p>
                            <div class="product-btns">
                                <div class="qty-input">
                                    <span class="text-uppercase">Cantidad: </span>
                                    <input id="numero" name="cantidad" class="input"
                                           type="number" min="1"
                                           <?php echo "max='$f[stock]'";
                                           ?>pattern="^[0-9]+"
                                           required>
                                </div>
                                <br><br><br><br><br>
                                <?php
                                if ($f['stock'] == 0) {
                                    echo "<button disabled type='reset'  
                                                class='btn btn-danger'><i class='fa
                                                fa-shopping-cart'></i> No hay stock</button>";
                                } else {
                                    echo "<button type='submit' name='AddCarrito' 
                                                class='primary-btn add-to-cart'><i class='fa
                                                fa-shopping-cart'></i> Añadir al carrito</button>";
                                }
                                ?>


                                <input type="hidden" name="Add" value="<?php echo $f['id']; ?>">
                             
								<input type="hidden" name="vendedor" value="<?php echo $f['idUsuario']; ?>">
                </form>

                <?php
                $msj = isset($_GET["error"]) ? $_GET["error"] : "";
                ?>

            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="product-tab">
            <ul class="tab-nav">
                <li class="active"><a data-toggle="tab" href="#tab1">Descripcion</a></li>
                <li><a data-toggle="tab" href="#tab2">Detalles</a></li>
                <li><a data-toggle="tab" href="#tab3">Valoraciones</a></li>
                <li><a data-toggle="tab" href="#tab4">Preguntas</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab1" class="tab-pane fade in active">
                    <p><?php echo "Descripción: " . $f["descripcion"]; ?></p>
                    <p><?php echo "Envio: " . $f["envio"]; ?></p>
                </div>
                <div id="tab2" class="tab-pane fade in">
                    <?php
                    if ($f["latitud"] == "undefined" || $f["latitud"] == null) {
                        echo "<p>El vendedor no ha definido la ubicación del producto.</p>";
                    } else {
                        echo "<div id='map' style='width: 100%; height:200px'></div>
                                <input style='display: none' name='lat' type='number' id='lat' value='$f[latitud]'>
                            <input style='display: none' name='lng' type='number' id='lng' value='$f[longitud]'>";
                    }
                    ?>
                </div>
                <div id="tab3" class="tab-pane fade in">
                    <?php

                    } //fin del while de producto
                    $valoraciones = $conexion->traerValoraciones($idU);
                    ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-reviews">
                                <?php while ($v =
                                    $valoraciones->fetch_assoc()) { ?>


                                    <div class="single-review">
                                        <div class="review-heading">
                                            <?php
                                            $nu = "";
                                            $nu = $conexion->traerUsuarioQueValora
                                            ($v['idUsuario']);

                                            echo "<div><h6><i class='fa
														fa-user-o'></i> $nu </h6></div>";
                                            ?>
                                            <div class="review-rating pull-right">
                                                <?php
                                                for ($x = 0; $x < $v['puntaje']; $x++) {
                                                    echo "<i class='fa fa-star'></i>";
                                                };
                                                for ($z = 0; $z < 5 - $v['puntaje']; $z++) {
                                                    echo "<i class='fa fa-star-o empty'></i>";
                                                };
                                                ?>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <?php echo
                                            "<p>$v[comentario]</p>"; ?>
                                        </div>
                                    </div> <!--/single review-->
                                <?php } //fin for
                                $valoraciones->close();
                                ?>
                                <ul class="reviews-pages">
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="text-uppercase">Tu reseña</h4>
                            <form class="review-form" method="post"
                                  action="procesarValoracion.php">
                                <div class="form-group">
													<textarea class="input" name="comentario"
                                                              placeholder="Escribe aquí tu opinión"></textarea>
                                </div>
                                <?php echo "<input style='display: none' 
                                                value='$idU' name='idVendedor'>"; ?>
                                <div class="form-group">
                                    <div class="input-rating">
                                        <strong
                                                class="text-uppercase">Valoración: </strong>
                                        <div class="stars">
                                            <input type="radio" id="star5" name="puntaje"
                                                   value="5"/><label for="star5"></label>
                                            <input type="radio" id="star4" name="puntaje"
                                                   value="4"/><label for="star4"></label>
                                            <input type="radio" id="star3" name="puntaje"
                                                   value="3"/><label for="star3"></label>
                                            <input type="radio" id="star2" name="puntaje"
                                                   value="2"/><label for="star2"></label>
                                            <input type="radio" id="star1" name="puntaje"
                                                   value="1"/><label for="star1"></label>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $numm = $conexion->verificarCompra($idVendedor, $id_Usuario);
                                if ($numm > 0) {
                                    echo "<button class='primary-btn'>Enviar</button>";
                                } else {
                                    echo "<p class='text-info'>¡Debes comprarle algo al vendedor antes de opinar sobre él!</p>";
                                    echo "<button type='reset' disabled class='btn btn-danger'>Enviar</button>'";
                                }

                                ?>
                            </form>

                        </div>
                    </div>
                </div>

              


            <?php include_once ("coments.php"); ?>

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

            $prod = array();

            $array = explode(' ', $NombreProducto);

            foreach ($array as $var) {

                $busquedaaa = ("SELECT DISTINCT * FROM producto WHERE nombre LIKE '%" . $var . "%' OR estado LIKE '%" . $var . "%' OR precio LIKE '%" . $var . "%' OR marca LIKE '%" . $var . "%' OR genero LIKE '%" . $var . "%' OR palabrasClaves LIKE '%" . $var . "%' OR descripcion LIKE '%" . $var . "%'");

                $resultadooo = $conexion->realizarConsulta($busquedaaa);


                while ($f = mysqli_fetch_array($resultadooo)) {


                    $prod[] = $f['id'];


                }//fin while


            }//fin for

            ?>

            <?php

            $ProductoSinRepetidos = array_unique($prod);

            foreach ($ProductoSinRepetidos as $var) {


                $select = "SELECT * FROM producto WHERE id=$var";
                $resultado = $conexion->realizarConsulta($select);

                while ($f = mysqli_fetch_array($resultado)) {


                    $consulta2 = "SELECT * FROM imgprincipal WHERE idProducto= '" . $f['id'] . "'";
                    $resultado2 = $conexion->realizarConsulta($consulta2);


                    ?>

                    <?php
                    while ($g = mysqli_fetch_array($resultado2)) {
                        ?>


                        <!-- Product Single -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                        <div class="product-thumb">
                        <form method="post" action="detallesProducto.php">
                            <button type="submit" class="main-btn quick-view" name="detalles">
                                <i class="fa fa-search-plus"></i> Ver más
                            </button>
                            <input type="hidden" name="Productoid"
                                   value="<?php echo $f['id']; ?>">
                            <input type="hidden" name="ProductoNombre"
                                   value="<?php echo $f['nombre']; ?>">
                            <input type="hidden" name="Categoria"
                                   value="<?php echo $f['categoria']; ?>">
                        </form>
                        <img src="./imgPublicadas/<?php echo $g["nombre"]; ?>" alt="">
                        <?php
                    }
                    ?>




                    </div>
                    <div class="product-body">
                        <h3 class="product-price"><?php echo "$" . number_format($f['precio'], 0, '.', '.'); ?></h3>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o empty"></i>
                        </div>
                        <h2 class="product-name"><a href="#"><?php echo $f["nombre"]; ?></a>
                        </h2>
                        <div class="product-btns">
                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i>
                            </button>
                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i>
                            </button>
                            <form method="post" action="detallesProducto.php">
                                <button type="submit" class="primary-btn add-to-cart"
                                        name="detalles"><i class="fa fa-shopping-cart"></i>
                                    Añadir al Carrito
                                </button>
                                <input type="hidden" name="Productoid"
                                       value="<?php echo $f['id']; ?>">
                                <input type="hidden" name="ProductoNombre"
                                       value="<?php echo $f['nombre']; ?>">
                                <input type="hidden" name="Categoria"
                                       value="<?php echo $f['categoria']; ?>">
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- /Product Single -->
                    <?php


                }//fin while
            }
            ?>


        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
<script src="js/maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiq3xISXSZYgkd9GDAOdajy4NK2d3L7dY&callback=iniciarMap2"></script>


<!-- FOOTER -->
<?php
include_once("footer.php");
?>


