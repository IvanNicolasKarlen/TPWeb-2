<?php


if(isset($_POST["botonRegistrar"])){ //Si completa una vez el campo usuario
 require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		
 
$nombre = $_POST['nombre'];
 $email = $_POST['email'];
$pass = $_POST['pass'];
$repetir = $_POST['repetir'];
$pais = $_POST['pais'];
$lat = $_POST['latitud'];
$long = $_POST['longitud'];


 
	//Abrir conexion
	$conexion = new Conexion();

		
		$consultar = $conexion->controlRegistrar($email);

		//$numFilas = $conexion->cantidadDeFilas($consultar);

		//pregunto si la cantidad de filas es distinto a cero porque ya existe otro email igual
		if($consultar!=null)
		{
			echo '<script language= "javascript"> alert("Atencion, ya existe el usuario ingresado");</script>';
	
			header("location:registrarse.php");
			exit();
			if($pass<>$repetir)
				{
						//caso contrario regresa al archivo html donde esta el archivo registrar
										echo '<script language= "javascript"> alert("Atencion, las contraseñas no coinciden");</script>';
										header("location:registrarse.php");
										exit();
			
				
				} 
		}elseif($consultar==null){  
		
				$estado = "ok";
				$idTipoUser = 3;
				 $rol= "usuario";
				
				$sql = "INSERT INTO usuario(email, password, Nombre, estado, pais, latitud, longitud, rol,idTipoUser)
				values('$email','$pass','$nombre','$estado','$pais','$lat', '$long','$rol',$idTipoUser)";
				
				if($conexion->realizarConsulta($sql)===true)
			{
				
					echo '<script language= "javascript">alert("Usuario registrado con exito");</script>';
					header("location:../Views/login.php");
					exit();
			}else{
						echo"error";
				 }	 
				
		 }



}
?>