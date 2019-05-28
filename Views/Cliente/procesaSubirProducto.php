
<?php
session_start();
$email = $_SESSION['username'];
//echo 'EMAIIIIIIL= '.$email;

if(!isset($email))
{
	header("location: ../index.php");
}


$imgprincipal = '';
  $segunda = '';
 $tercera = '';
 $cuarta = '';
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
  $segunda = $_FILES["archivoB"]["name"];
 $tercera = $_FILES["archivoC"]["name"];
 $cuarta = $_FILES["archivoD"]["name"];
  //echo 'USUARIOOO= '.$usuario;
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
		
	
		if(@move_uploaded_file($_FILES["archivoB"]["tmp_name"],$lugar . $segunda)){
	}else{
		echo "<script language='JavaScript'>alert('No se guardo la segunda imagen!');</script>"; 	
	
		}
	
		if(@move_uploaded_file($_FILES["archivoC"]["tmp_name"],$lugar . $tercera)){

	}else{
		echo "<script language='JavaScript'>alert('No se guardo la tercera imagen!');</script>";	
	
		}
 
		if(@move_uploaded_file($_FILES["archivoD"]["tmp_name"],$lugar . $cuarta)){
	}else{
		echo "<script language='JavaScript'>alert('No se guardo la cuarta imagen!');</script>";	
	
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

				
				$sql = "INSERT INTO producto(nombre,estado,precio,formasdepago,envio,marca,stock,palabrasClaves,genero,descripcion,imgprincipal,modelo1,modelo2,modelo3,idUsuario,categoria)
				values('$nombre','$estado','$precio','$formas', '$envio', '$marca','$stock','$palabras','$genero','$descripcion','$imgprincipal','$segunda','$tercera','$cuarta','$idUsuario','$categoria')";
				
				if($conexion->loguearUsuario($sql)===true)	
			{
					echo '<script language= "javascript">alert("Producto registrado con exito");</script>';
					//echo "<script>location.href='subirProducto.php'</script>";
	  
			}else{
						echo '<script language= "javascript">alert("Error");</script>';
				 }	 
				
		 

}

}

?>