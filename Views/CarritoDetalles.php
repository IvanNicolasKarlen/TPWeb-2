<?php
require_once("verificacionSesion.php");
$mostrar=0;
?>

<?php include_once("header.php"); 

require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;

		$id_Usuario = $_SESSION['id'];
	$email = $_SESSION['username'];
	$consulta="SELECT *
				FROM producto as prod 
				inner join productocarrito as car on prod.id=car.idProducto
				WHERE car.idUsuario = '".$id_Usuario."'";
	
	
	$productosComprados= $conexion->realizarConsulta($consulta);
	
	$compras = $productosComprados->num_rows;
?>


<body>
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Carrito &nbsp</h2> 
						<div class="header-search">
                    <form>
                        <input class="input search-input" type="text" placeholder="Enter your keyword">
                        <select class="input search-categories">
                            <option value="0">All Categories</option>
                            <option value="1">Category 01</option>
                            <option value="1">Category 02</option>
                        </select>
                        
                    </form>
                </div>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
			
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

        <div class="panel panel-default" style="padding: 50px">
            <div class="panel-body" >

                <table  class="table" >

                    <thead>
                    <tr>

                        <th scope="col">Imagen</th>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Envío</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Formas de pago</th>
                        <th scope="col">Precio</th>
						<th scope="col">Subtotal</th>
                    </tr>
                    <?php
                    //Comienzo a rellenar los campos con los datos obtenidos con el select
                    while($f=mysqli_fetch_array($productosComprados)){
                    ?>

                    </thead>
                    <tbody>
                    <tr>
                        <td  > <div style="height:100%;width:100%;"><img style="height:50px;width:50px;"  src="imgPublicadas/<?php echo $f["imgprincipal"];?>" alt=""> </div></td>
                        <th scope="row"><?php echo $f['idProducto'];?></th>
                       
                        <td><div><?php echo $f['nombre'];?></div></td>
                        <td><?php echo $f['envio'];?></td>
                       
                        
						<td><?php echo $f['cantidad'];?></td>
                        <td><?php echo $f['formasdepago'];?></td>
						<td><?php echo "$".number_format($f['precio'],0,'.','.');?></td>
						  <td><?php $subtotal= $f['precio']*$f['cantidad'];echo "$".number_format($subtotal,0,'.','.');?></td>
						  </tbody>
<?php
//Suma todos los precios
$mostrar = $mostrar+$subtotal;


 }//fin while

?>						

                    </tr>			
                  
                </table>
            </div>
			<div>
<h2 class="title" style="float:right;"><?php echo "Total: $".number_format($mostrar,0,'.','.');?></h2>

		
		</div>
		
		<form method="post" action="Pagar.php" >
<button type="submit" name="AddCarrito" class="primary-btn add-to-cart" style="float:right;"><i class="fa fa-shopping-cart"></i> Continuar</button>
								<input type="hidden" name="Add" value="<?php echo $mostrar;?>">
								<input type="hidden" name="id_Usuario" value="$_Session['id']">
</form>
		</div>
		
</body>

<?php include_once("footer.php"); ?>