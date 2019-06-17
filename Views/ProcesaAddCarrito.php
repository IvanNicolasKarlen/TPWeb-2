<?php
require_once("verificacionSesion.php");


		
if(isset($_POST["AddCarrito"]))
		{
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;

		
 		$id_producto = $_POST['Add'];
		$id_usuario = $_SESSION['id'];
		$cantidad = $_POST['cantidad'];
		
		
		$sql = "INSERT INTO productocarrito(idUsuario,idProducto,cantidad) Values ('$id_usuario','$id_producto','$cantidad')";
		
		//ejecutar la consulta
		$resultado = $conexion->realizarConsulta($sql);
		//$direccion = new Direccion();
		
		if($resultado===true)
			{
					echo '<script language= "javascript">alert("Agregado al Carrito");</script>';
					header($direccion->carpRaiz("detallesProducto"));
					 exit();
					
			}else{
						echo"error";
				 }	 
		}
		
?>