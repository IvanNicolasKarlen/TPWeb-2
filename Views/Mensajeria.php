<?php

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





//Verifico si yo soy el vendedor o el comprador 

//Compruebo si yo soy el vendedor
$CONSCompra = "SELECT * FROM COMENTARIOS WHERE idVendedor = '".$id_Usuario."' or idProducto= '".$idProducto."'";
$compra= $conexion->realizarConsulta($CONSCompra);
while($g = mysqli_fetch_array($compra))
{
	$idVendedorTabla = $g['idVendedor'];
	$nombreCompradores = $g['nombreUsuario'];
}



if($idVendedorTabla==$id_Usuario)//Verifico si yo soy el vendedor 
{

//Traigo el id del chat que se genero en la tabla compra

$Compra = "SELECT * 
			FROM comentarios 																	//ACA
			WHERE idVendedor = '".$id_Usuario."'";
			
$compra= $conexion->realizarConsulta($Compra);
while($b = mysqli_fetch_array($compra))
{
	$idChat = $b['idChat'];														//TIENE QUE SER UN ARRAY
}

}else{//Si yo soy un comprador



//traer todos los comentarios cuando el idproducto= id producto



//Traigo el id del chat que se genero en la tabla compra
$Compra = "SELECT * FROM comentarios WHERE idUsuario = '".$id_Usuario."' ";							//ACA
$compra= $conexion->realizarConsulta($Compra);
while($b = mysqli_fetch_array($compra))
{
	$idChat = $b['idChat'];
}



}




if($idVendedorTabla==$id_Usuario)
{
	$chatprivado ="SELECT DISTINCT(nombreUsuario), idVendedor, texto, idChat
						FROM comentarios 
						WHERE  idProducto= '".$idProducto."'  and idUsuario != '".$id_Usuario."' GROUP BY nombreUsuario";
	

	$privado= $conexion->realizarConsulta($chatprivado);
	
	
}else{


		$chatprivado ="SELECT *
						FROM comentarios 
						WHERE  idProducto= '".$idProducto."' and idUsuario!= '".$id_Usuario."' and idChat = '".$idChat."'";
	

	$privado= $conexion->realizarConsulta($chatprivado);
}	

	//Verifico si existe algun comentario ya hecho
	$ExisteChat = "SELECT * FROM COMENTARIOS WHERE idChat = '".$idChat."'";
	$existeAlgo= $conexion->realizarConsulta($ExisteChat);
	$CantidadDeMensajes= $conexion->cantidadDeFilas($existeAlgo);
	
		//Verifico si existe algun comentario ya hecho por el vendedor
	$ExisteMsjVendedor = "SELECT * FROM COMENTARIOS WHERE idChat = '".$idChat."' and idUsuario = '".$idVendedor."'";
	$existealgo= $conexion->realizarConsulta($ExisteMsjVendedor);
	$CantidadDeMensajesVendedor= $conexion->cantidadDeFilas($existealgo);
	
	



require_once("verificacionSesion.php");
require_once("header.php");





?>

											
<?php

if($CantidadDeMensajes=null and $CantidadDeMensajesVendedor=0)
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
 //Comienzo a rellenar los campos con los datos obtenidos con el select
while($name=mysqli_fetch_array($privado)){
	
?>											
											<div class="single-review">

												<div class="review-heading">

														<div><a href="#"><i class="fa fa-user-o"></i> <?php echo $name['nombreUsuario'];?></a></div>
														
														<div><a href="#"><i class="fa fa-clock-o"></i> 27 DEC 2017 / 8:0 PM</a></div>
														
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
