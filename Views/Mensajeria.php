<?php


//$resultado = $conexion->realizarConsulta( "SELECT * FROM mensajeria WHERE idProducto='$idProducto' AND idUsuario ='$idUsuario' AND idVendedor='$idVendedor' ORDER BY DATE DESC");
//hacer el while




require_once("verificacionSesion.php");
require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;

		$idVendedorTabla = '';
		$idChat= ''; 

$idVendedor = $_POST["Vendedor"];
$idProducto = $_POST["Producto"];

//Id del usuario que esta usando
$id_Usuario = $_SESSION['id'];
		
		
	require_once("header.php");	
		
$sql =  "SELECT * FROM comentarios WHERE idProducto=$idProducto AND idUsuario =$id_Usuario AND idVendedor=$idVendedor ORDER BY fecha DESC";
		
	

		
$resultado = $conexion->realizarConsulta($sql);

?>

											
<?php


if ($conexion->cantidadDeFilas($resultado)==0) 
{
	
	
?>
<br>
<h3 class="text-center "> No has recibido ningun mensaje.</h3>
<form method="post" action="Responder.php">
	<button type="submit" class="text-center btn-link mx-md-8 my-md-1"> Enviar mensaje al vendedor </button><br><br>
<input type="hidden" name="Vendedor" value="<?php echo $idVendedor;?>">
<input type="hidden" name="Usuario" value="<?php echo $id_Usuario;?>">
<input type="hidden" name="Producto" value="<?php echo $idProducto;?>">
<input type="hidden" name="Chat" value="<?php echo $idChat;?>">
</form>


								<div id="tab4" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">



	
											
											
											
											
<?PHP
}else{
	
	
echo $conexion->cantidadDeFilas($resultado);
 //Comienzo a rellenar los campos con los datos obtenidos con el select
while($name=mysqli_fetch_array($resultado)){
	
?>											
											<div class="single-review">

												<div class="review-heading">

														<div><a><i class="fa fa-user-o"></i> <?php echo $name['nombreUsuario'];?></a></div>
														
														<div><a><i class="fa fa-clock-o"></i> <?php echo $name['fecha'];?></a></div>
														
													</div>
													<div class="review-body">
														<p><?php echo $name['texto'];?> </p>
													<form method="post" action="Responder.php">
													<button type="submit" class="btn-link"> Responder </button>
													<input type="hidden" name="Vendedor" value="<?php echo $name['idVendedor'];?>">
													<input type="hidden" name="Usuario" value="<?php echo $name['idUsuario'];?>">
													<input type="hidden" name="Producto" value="<?php echo $idProducto;?>">
													<input type="hidden" name="Chat" value="<?php echo $name['idChat'];?>">
													</form>


													</div>
												</div>
												
<?php 
}  //fin del while
 }//fin del if?>
									
											</div>
										</div>
										
									</div>



								</div>
<?php 
require_once("footer.php");

?>							
