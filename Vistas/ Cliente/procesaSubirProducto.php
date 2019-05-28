
<?php
session_start();
$email = $_SESSION['username'];
//echo 'EMAIIIIIIL= '.$email;

if(!isset($email))
{
	header("location: ../index.php");
}


$imgprincipal = '';
 $nombre = '';
 $estado = '';
 $precio = '';
 $marca = '';
 $stock = '';
 $palabras = '';
 $genero = '';
 $formas = '';
 $envio = '';
 $descripcion = '';
 
if(isset($_POST["publicar"])){
 
 $nombre = $_POST['nombre'];
 $estado = $_POST['estado'];
 $precio = $_POST['precio'];
 $marca = $_POST['marca'];
 $stock = $_POST['stock'];
 $palabras = $_POST['palabras'];
 $genero = $_POST['genero'];
 $formas = $_POST['formas'];
 $envio = $_POST['envio'];
 $descripcion = $_POST['descripcion'];
 $imgprincipal = $_FILES["archivoA"]["name"];
 $email = $_SESSION['username'];
	$lugar="imgPublicadas/";
	$categoria=$_POST['categoria'];

 //sube la imagen a la carpeta imgPublicadas

	if($_FILES["archivoA"]["error"] > 0)
{
echo "<script language='JavaScript'>alert('No se ha elegido ninguna imagen!');</script>";
}else 
{ 

	if(@move_uploaded_file($_FILES["archivoA"]["tmp_name"],$lugar . $imgprincipal)){
	
	}else{
		echo "<script language='JavaScript'>alert('No se guardo la imagen Principal!');</script>"; 
		}
		
 
 require_once("../conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		
		//Abrir conexion
		
		$conexion = new Conexion;
		//$conexion= mysqli_connect("localhost","root",11021998,"logintp");
		
	
 		$consulta="select * from producto where nombre = '$nombre'";
		
	
		//$resultado=mysqli_query($conexion, $consulta);

	
	// ejecutar la consulta
		$resultado = $conexion->loguearUsuario($consulta);
		
		
		//pregunto si el resultado me devuelve una cierta cantidad de filas
		$row = $resultado->num_rows;
	
	
		//pregunto si la cantidad de filas es distinto a cero
		$idUsuario=$conexion->buscarUser($email);

				
				$sql = "INSERT INTO producto(nombre,estado,precio,formasdepago,envio,marca,stock,genero,categoria,palabrasClaves,descripcion,imgprincipal,idUsuario)
				values('$nombre','$estado','$precio','$formas', '$envio', '$marca','$stock','$genero','$categoria','$palabras','$descripcion','$imgprincipal','$idUsuario')";
				
				if($conexion->loguearUsuario($sql)===true)	
			{
					echo '<script language= "javascript">alert("Producto registrado con exito");</script>';
					echo "<script>location.href='subirProducto.php'</script>";
	  
			}else{
						echo '<script language= "javascript">alert("Error");</script>';
				 }	 
				
		 

}

}

?>
