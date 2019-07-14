<?php
require_once("verificacionSesion.php");
include_once("header.php"); 
		// Consultamos los productos a listar
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		require_once ("conexionBD/direccion.php");
		$direccion= new Direccion();
		//Abrir conexion
		$conexion = new Conexion;
$idCarrito=isset($_GET["cod"]) ? $_GET["cod"] : "";


	

		 //Vaciar CARRITO
  $eliminar = "DELETE FROM productocarrito WHERE id=$idCarrito";
  $resultado =$conexion->realizarConsulta($eliminar);
		
		
		

?>

<div class="container" style="text-align: center; padding:30px">
    <h3 style="color:#6675df">Eliminado del carrito</h3>
    <a class="a" href="CarritoDetalles.php">Volver al carrito</a>
</div>


<?php
require_once("footer.php");
?>
 