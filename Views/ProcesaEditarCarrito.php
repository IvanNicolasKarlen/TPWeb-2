<?php
require_once("verificacionSesion.php");


		
if(isset($_POST["guardar"]))
	{
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;

		//codCarrito
 	
		$id_usuario = $_SESSION['id'];
		$cantidad = $_POST['cantidad'];
		$id_carrito= $_POST['codCarrito'];
		echo $id_carrito;
		
		
		$sql = "UPDATE productocarrito
						SET cantidad='$cantidad'
						WHERE id ='$id_carrito';";
		
		
		//ejecutar la consulta
		$resultado = $conexion->realizarConsulta($sql);
		
		
		if($resultado===true)
			{
					echo '<script language= "javascript">alert("Agregado al Carrito");</script>';
					header("location:CarritoDetalles.php");
					 exit();
					
			}else{
				
				$direccion = new Direccion();
						$error="No se ha podido añadir al carrito. Intentelo de nuevo o más tarde";
				header($direccion->errorAgregarCarrito($error));
				exit();
				 }	 
	}
		
?>