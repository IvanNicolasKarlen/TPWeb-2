
<?php
session_start();
$email = $_SESSION['username'];
//echo 'EMAIIIIIIL= '.$email;

if(!isset($email))
{
	header("location: ../Index.php");
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
 $latitud =null;
 $longitud =null;

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
 $idUsuario=$_SESSION['id'];
	$lugar="imgPublicadas/";
	$categoria=$_POST['categoria'];
	$latitud = $_POST['latitud'];
	$longitud = $_POST['longitud'];
$errorI="";
 //sube la imagen a la carpeta imgPublicadas

	if($_FILES["archivoA"]["error"] > 0)
{
	$errorI="No se ha elegido ninguna imagen";
	header("location:subirProducto.php?error=$errorI");
	
	
}else 
{ 

	if(@move_uploaded_file($_FILES["archivoA"]["tmp_name"],$lugar . $imgprincipal)){
	
	}else{
		$errorI="Error al subir la imagen principal. Intente nuevamente.";
		header("location:subirProducto.php?error=$errorI");
		}
		
 
 require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
    require_once("conexionBD/direccion.php");
		//Abrir conexion
		
		$conexion = new Conexion;
		//$conexion= mysqli_connect("localhost","root",11021998,"logintp");
		
	
 		$consulta="select * from producto where nombre = '$nombre'";
		
	
		//$resultado=mysqli_query($conexion, $consulta);

	
	// ejecutar la consulta
		$resultado = $conexion->realizarConsulta($consulta);
		
		
		//pregunto si el resultado me devuelve una cierta cantidad de filas
		$row = $resultado->num_rows;
	
	
		//pregunto si la cantidad de filas es distinto a cero


				$direc= new Direccion();
				$sql = "INSERT INTO producto(nombre,estado,precio,formasdepago,envio,marca,stock,genero,categoria,palabrasClaves,descripcion,visitas,idUsuario,latitud,longitud,ventas)
				values('$nombre','$estado','$precio','$formas', '$envio', '$marca','$stock','$genero','$categoria','$palabras','$descripcion',0,'$idUsuario','$latitud','$longitud',0)";
				
				if($conexion->realizarConsulta($sql))
			{
				
				$ultimo_id = $conexion->obtenerIdGenerado(); 
					
					$sql2="INSERT INTO imgprincipaL(idProducto,nombre)
					VALUES ($ultimo_id,'$imgprincipal')";
					
					$conexion->realizarConsulta($sql2);
				
				
				
					header($direc->carpRaiz("registroExitoso"));
					exit();
	  
			}else{
						$errorI="Error al subir el producto. Intente nuevamente";
						header("location:subirProducto.php?error=$errorI");
				 }	 
				
		 

}

}

?>
