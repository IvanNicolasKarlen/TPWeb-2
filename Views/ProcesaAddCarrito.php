<?php
require_once("verificacionSesion.php");


		
if(isset($_GET["AddCarrito"]))
		{
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		 require_once("conexionBD/direccion.php");
		
		//Abrir conexion
		$conexion = new Conexion;
		
		
		
		
		
     $direccion = new Direccion();
		$id_pro = $_GET['AddCarrito'];
 		$id_producto = $_GET['Add'];
		$id_usuario = $_SESSION['id'];
		$cantidad = $_GET['cantidad'];
		$id_vendedor = $_GET['vendedor'];
		
		
		
		$consultaCarrito="SELECT * FROM productocarrito WHERE idProducto=$id_producto and idUsuario=$id_usuario" ;
		$resultadoCarrito = $conexion->realizarConsulta($consultaCarrito);
		$numFilas=$conexion->cantidadDeFilas($resultadoCarrito);
	
			
		//saco el numero de elementos
		//$longitud =$conexion->cantidadDeFilas($resultadoCarrito);
		
		//Recorro todos los elementos
	
			  
			 if($numFilas>0) 
			 { 
		 //header($direccion->carpRaiz(Index));
				$error="El producto ya esta agregado en el carrito";
				header($direccion->errorProductoRepetido($error));
				exit();
				 
		 
		 
			}else{
						
				
				$sql = "INSERT INTO productocarrito(idUsuario,idProducto,cantidad,vendedor) Values ('$id_usuario','$id_producto','$cantidad','$id_vendedor' )";
			
				//ejecutar la consulta
				$resultado = $conexion->realizarConsulta($sql);
				//$direccion = new Direccion();
				
				if($resultado===true)
				{
				
					echo '<script language= "javascript">alert("Agregado al Carrito");</script>';
					header("location:CarritoDetalles.php");
					exit();
					
			 }else{
						$error="No se ha podido añadir al carrito. Intentelo de nuevo o más tarde";
				header($direccion->errorAgregarCarrito($error));
				exit();
				 }	
				
		  
			}
		
		}//fin isset
		
		
		
?>
