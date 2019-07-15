<?php
require_once("verificacionSesion.php");
include_once("header.php"); 
		// Consultamos los productos a listar
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		require_once ("conexionBD/direccion.php");
		$direccion= new Direccion();
		//Abrir conexion
		$conexion = new Conexion;
$idProducto=isset($_GET["cod"]) ? $_GET["cod"] : "";

$consulta1="SELECT nombre FROM imgprincipal WHERE  idProducto=$idProducto";
  $nombreImg=$conexion->realizarConsulta($consulta1);
	foreach($nombreImg as $i){
	unlink('imgPublicadas/'.$i['nombre']);		
	
	}
$eliminarImgPrincipal= "DELETE FROM imgprincipal WHERE idProducto=$idProducto";
 $conexion->realizarConsulta($eliminarImgPrincipal);
  
  
  
  $consulta2="SELECT nombre FROM imgproducto WHERE  idProducto=$idProducto";
  $nombreImg2=$conexion->realizarConsulta($consulta2);
  if($conexion->cantidadDeFilas($nombreImg2)>0)
  {
	foreach($nombreImg2 as $i){
	unlink('imgPublicadas/'.$i['nombre']);		
	
	}
  $eliminarImgSecundarias= "DELETE FROM imgproducto WHERE idProducto=$idProducto";
  $conexion->realizarConsulta($eliminarImgSecundarias);	
		

  }

	
	
	
  $eliminarProducto = "DELETE FROM producto WHERE id=$idProducto";
  $resultado =$conexion->realizarConsulta($eliminarProducto);
  

?>

<div class="container" style="text-align: center; padding:30px">
    <h3 style="color:#6675df">Publicación eliminada</h3>
    <a class="a" href="listarPublicaciones.php">Volver a publicaciones</a>
</div>


<?php
require_once("footer.php");
?>
 