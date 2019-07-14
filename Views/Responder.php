<?php

require_once("verificacionSesion.php");
require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;
		
		


$idVendedor = $_POST["Vendedor"];
$id_Comprador = $_POST["Usuario"];
$idProducto = $_POST["Producto"];
$idChat = $_POST["Chat"];


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


		$chatprivado ="SELECT * 
						FROM comentarios 
						WHERE  idChat= '".$idChat."'";
						
	
					

	
	$privado= $conexion->realizarConsulta($chatprivado);
	
	


require_once("verificacionSesion.php");
require_once("header.php");
?>


<div class="container" style="text-align: center; padding:30px">
    
	

<?PHP
 //Comienzo a rellenar los campos con los datos obtenidos con el select
while($r=mysqli_fetch_array($privado)){
	
?>
	<div><a href="#"><i class="fa fa-user-o"></i> <?php echo $r['nombreUsuario'];?></a></div><p> <?php echo $r["texto"]; ?> </p>
	
	
	
<?php } ?>
	
	
	
											<h4 class="text-uppercase text-center">Acordemos la compra</h4>
											
											<form class="review-form" method="post" action="ComentariosPrivados.php">
												
												<input type="hidden" name="Vendedor" value="<?php echo $idVendedor;?>">
												<input type="hidden" name="Producto" value="<?php echo $idProducto;?>">
												<input type="hidden" name="Chat" value="<?php echo $idChat;?>">		
												
												<div class="form-group">
													<textarea class="input" name="comentario" placeholder="Este comentario sera privado y solo tu y el vendedor podran verlo"></textarea>
												
											
												</div>
												
												<button class="primary-btn" name="Comentar" type="submit">Enviar</button>
											</form>
											
											
										
	
	
	
</div>

	


<?php 
require_once("footer.php");

?>