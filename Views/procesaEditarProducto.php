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
 $id = $_POST['id'];
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
 $imgprincipal = $_FILES["imgPrincipal"]["name"];
 $categoria=$_POST['categoria'];
 $latitud = $_POST['latitud'];
$longitud = $_POST['longitud'];
 $errorI="";
  require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
    require_once("conexionBD/direccion.php");
		//Abrir conexion
		
		$conexion = new Conexion;

		$direc= new Direccion();
				
 // imagenes a eliminar

	 if(!empty($_POST['check_list'])) {
		 
		 
		 
// Contando el número de casillas marcadas.
$checked_count = count($_POST['check_list']);
echo "You have selected following ".$checked_count." option(s): <br/>";

// Bucle para borrar los valores de la casilla de verificación individual marcada
foreach($_POST['check_list'] as $selected) {
	echo $selected;
$eliminarImg="DELETE FROM imgproducto WHERE id=$selected";
$consulta="SELECT nombre FROM imgproducto WHERE  id=$selected";


$nombreImg=$conexion->realizarConsulta($consulta);
foreach($nombreImg as $i){
	
echo $i['nombre'];	
}

unlink('imgPublicadas/'.$i['nombre']);	
$conexion->realizarConsulta($eliminarImg);


echo "<p> check: ".$selected ."</p>";
}

	 }
	 

$consultaImg= "select * from imgproducto where idProducto=$id";

$listaImg=$conexion->realizarConsulta($consultaImg);

$imgActuales=$conexion->cantidadDeFilas($listaImg);





$imgNuevas=count($_FILES["archivo"]["name"]);
$totalimg=$imgActuales+$imgNuevas;
	 
if($totalimg>9){
	$ImagenesNuevas=count($_FILES["archivo"]["name"]);
	
	$errorI="No se pueden subir mas de 10 imagenes";
	header("location:modificarProducto.php?cod=$id&error=$errorI");

}
else
{
	echo "insert";
	
	
 
				$sql = "UPDATE producto
						SET nombre='$nombre' , estado='$estado' , precio='$precio',formasdepago='$formas',
						envio='$envio',marca='$marca', stock='$stock',genero='$genero',categoria='$categoria',
						palabrasClaves='$palabras' , descripcion='$descripcion' , latitud='$latitud',longitud='$longitud'
						WHERE id ='$id';";
			

				
				if($conexion->realizarConsulta($sql)===true)
			{
				
				//********Update img principal
				//Validamos que el archivo exista
		if($_FILES["imgPrincipal"]["name"]) {
				$query = "UPDATE imgprincipal
						SET idProducto= $id,nombre='$imgprincipal'
						WHERE idProducto = $id ";
						
				$conexion->realizarConsulta($query);
				
			$source = $_FILES["imgPrincipal"]["tmp_name"]; //Obtenemos un nombre temporal del archivo
			$directorio="imgPublicadas/";//Declaramos un  variable con la ruta donde guardaremos los archivos

			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.'/'.$imgprincipal; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
		
			if(move_uploaded_file($source, $target_path)) {	
				echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
		
			}
				
		}
		

//********Update img secundarias	
//subiendo las 10 img
	//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if($_FILES["archivo"]["name"][$key]) {
			$imgPrincipal=$_FILES["archivo"]["name"][0];//Esta es la img principal
			
			$filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
			$source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			$directorio="imgPublicadas/";//Declaramos un  variable con la ruta donde guardaremos los archivos
			
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
			
			
			
			if(move_uploaded_file($source, $target_path)) {	
				echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
		
				
				
				$insertarImg= "INSERT into imgproducto (idProducto, nombre)
				VALUES ('$id', '$filename')";
				
				$resultado=$conexion->realizarConsulta($insertarImg);

				
				
			
				
				} else {	
				echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
			}
			closedir($dir); //Cerramos el directorio de destino
		
			
		}
	}
	
						  
			}else{
						
						$errorI="No se puede subir mas de 10 imagenes $totalImg";
	header("location:modificarProducto.php?error=$errorI");
				 }	 


$mensaje="Los cambios se han realizado con exito! ";
				header("location:listarPublicaciones.php?mensaje=$mensaje");
				
					exit();
	
	//imagenes					 
} //fin else
} //fin isset



?>



