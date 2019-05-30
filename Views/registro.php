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
 $usuario="usuario";
 
	//Abrir conexion
	$conexion = new Conexion();
 
		//$consulta="select * from usuario where password = '$pass' and email = '$email'";
		
		$consultar=$conexion->controlRegistrar($email);

	// ejecutar la consulta
		$resultado = $conexion->realizarConsulta($consultar);

	
		//pregunto si la cantidad de filas es distinto a cero porque ya existe otro email igual
		if($consultar<>0)
		{
			echo '<script language= "javascript"> alert("Atencion, ya existe el usuario ingresado");</script>';
			//echo "<script>location.href='registrarse.php';</script>";
			header("location:registrarse.php");
			exit();
			if($pass<>$repetir)
				{
						//caso contrario regresa al archivo html donde esta el archivo registrar
										echo '<script language= "javascript"> alert("Atencion, las contraseñas no coinciden");</script>';
										header("location:registrarse.php");
										exit();
			exit();
				
				} 
		}elseif($consultar==0){  
				$sql = "INSERT INTO usuario(email,password,Nombre,pais,latitud,longitud,rol)
				values('$email','$pass','$nombre','$pais','$lat', '$long','$usuario')";
				
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