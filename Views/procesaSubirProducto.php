<?php
require_once("conectarse.php");


if(isset($_POST["publicar"])){
 
 
 $nombre = $_POST['nombre'];
 $estado = $_POST['estado'];
 $precio = $_POST['precio'];
 $marca = $_POST['marca'];
 $stock = $_POST['stock'];
 $telefono = $_POST['telefono'];
 $whatsapp = $_POST['whatsapp'];
 $genero = $_POST['genero'];
 $formas = $_POST['formas'];
 $envio = $_POST['envio'];
 $imgprincipal = $_POST['imgprincipal'];
 $segunda = $_POST['segundad'];
 $tercera = $_POST['tercera'];
 $cuarta = $_POST['cuarta'];
 
 require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		
		//Abrir conexion
		
		$conexion = new Conexion;
	
 		$consulta="select * from producto where nombre = '$nombre'";
		
	
	// ejecutar la consulta
		$resultado = $conexion->query($consulta);
		
		//pregunto si el resultado me devuelve una cierta cantidad de filas
		$row = $resultado->num_rows;
	
		//pregunto si la cantidad de filas es distinto a cero
		
			if($row<>0){
			echo '<script language= "javascript"> alert("Atencion, ya existe el mismo nombre, modifique datos");</script>';
			echo "<script>location.href=modificar.php/script>";
			
			
		}else {  
				$sql = "INSERT INTO producto(nombre,estado,precio,formasdepago,envio,marca,stock,telefono,whatsapp,genero,descripcion,imgprincipal,modelo1,modelo2,modelo3)
				values('$nombre','$estado',$precio,'$formasdepago', $envio, '$marca',$stock,$telefono,$whatsapp,'$genero','$descripcion','$imgprincipal','$primera','$segunda','$tercera')";
				
				if($conexion->query($sql)===true)
			{
					echo '<script language= "javascript">alert("Usuario registrado con exito");</script>';
					echo "<script>location.href=index.phpscript>";
	  
			}else{
						echo '<script language= "javascript">alert("Error");</script>';
				 }	 
				
		 }




?>