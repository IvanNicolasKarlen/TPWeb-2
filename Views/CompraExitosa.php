<?php
require_once("verificacionSesion.php");
require_once("header.php");
if(isset($_GET["pagar"]))
		{
			
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;


		$id_Usuario = $_SESSION['id'];
		$consulta="SELECT *
				FROM producto as prod 
				inner join productocarrito as car on prod.id=car.idProducto
				WHERE car.idUsuario = '".$id_Usuario."'";

				
	$productosComprados= $conexion->realizarConsulta($consulta);
$compras = $productosComprados->num_rows;

	
 while($f=mysqli_fetch_array($productosComprados)){

				$insertar="INSERT INTO compra(idUsuario, idProducto,cantidad, costo )
				VALUES ($id_Usuario,".$f['idProducto'].",".$f['cantidad'].",".$f['cantidad']*$f['precio'].")";		
				$resul=$conexion->realizarConsulta($insertar);
				$stockk=$f['stock']-$f['cantidad'];
				$ventas=$f['ventas']+$f['cantidad'];
                $conexion->realizarConsulta("UPDATE producto SET stock=$stockk WHERE 
				id=$f[idProducto]");
                $conexion->realizarConsulta("UPDATE producto SET ventas=$ventas WHERE id=$f[idProducto]");

  }
 
   //Vaciar CARRITO
  $eliminar = "DELETE FROM productocarrito WHERE idUsuario=$id_Usuario";
  $conexion->realizarConsulta($eliminar);
 
			
			
		}
 
?>


<div class="container" style="text-align: center; padding:30px">
    <h3 style="color:#6675df">La compra se ha realizado con éxito!</h3>
    <a class="a" href="Index.php">Volver a Inicio</a>
</div>


<?php
require_once("footer.php");
?>
