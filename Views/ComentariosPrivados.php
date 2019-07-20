<?php



require_once("verificacionSesion.php");

require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
//Abrir conexion
		$conexion = new Conexion;
		
if(isset($_POST["Comentar"]))
		{

$texto = $_POST["comentario"];
$idProducto = $_POST["Producto"];
$id_Usuario = $_SESSION['id'];
$idChat = $_POST["Chat"];
$idVendedor = $_POST["Vendedor"];

//Traemos el nombre del usuario
$consulta ="SELECT * FROM usuario where id = '".$id_Usuario."'";
 $nombre= $conexion->realizarConsulta($consulta);
 
 while($name = mysqli_fetch_array($nombre))
 {
	 $NombreUsuario = $name['Nombre'];
	 
 }
	
	


//Traigo nombre del Vendedor en base al id que le pasamos
$vendedor = "SELECT * FROM USUARIO WHERE id = '".$idVendedor."'";
$resultadoVendedor= $conexion->realizarConsulta($vendedor);
while($dato = mysqli_fetch_array($resultadoVendedor))
{
	$nombreVendedor = $dato['Nombre'];
}




$insertar = "INSERT INTO comentarios(texto,idUsuario, nombreUsuario, idProducto, idVendedor, idChat) values ('$texto','$id_Usuario','$NombreUsuario','$idProducto','$idVendedor','$idChat')";

//die($insertar);	
$hecho= $conexion->realizarConsulta($insertar);



header("location:ComentarioExitoso.php");
exit();





/* 													Esto iria para crear un chat al comprar los productos

$chat = "SELECT * FROM comentarios where idUsuario='".$id_Usuario."' and idProducto = '".$idProducto."'";
$resultadoChat= $conexion->realizarConsulta($chat);
while($n = mysqli_fetch_array($resultadoChat))
{
	$chatNumero = $n['idChat'];
}
var_dump($chatNumero);


if($chatNumero = 0)
{
	$tipo += 1;												//VALIDAR QUE NO SIEMPRE SEA 1
	
	
	
	$insertar = "INSERT INTO comentarios(texto,idUsuario, nombreUsuario, idProducto, idVendedor, tipo) values ('$texto','$id_Usuario','$NombreUsuario','$idProducto','$idVendedor','$tipo')";
	
}else{
	
	$ver="SELECT * FROM comentarios where idUsuario='".$id_Usuario."' and idProducto = '".$idProducto."'";
	$resultadoChat= $conexion->realizarConsulta($ver);

	while($n = mysqli_fetch_array($resultadoChat))
{
	$chatNumero = $n['idChat'];
}
	$tipo = $chatNumero;
	$insertar = "INSERT INTO comentarios(texto,idUsuario, nombreUsuario, idProducto, idVendedor, idChat) values ('$texto','$id_Usuario','$NombreUsuario','$idProducto','$idVendedor','$tipo')";

}
*/



//header("location:ComentarioExitoso.php");
//exit();
}

?>