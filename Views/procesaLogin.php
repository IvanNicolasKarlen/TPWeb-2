
<?php
session_start();



if(isset($_POST["email"])){ //Si completa una vez el campo usuario
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		$email = $_POST["email"]; //Guardo el usuario
		$password = $_POST["pass"]; //Guardo la contraseña
		
		//Abrir conexion
		//$conexion = new mysqli($host, $usuario, $clave, $bd);
		$conexion = new Conexion;
		
		$consulta="select * from usuario where password = '$password'";
		$controlarEmail = "select * from usuario where email = '$email'";
		$consultoNombre = "select Nombre from usuario where email = '$email'";
		$consultoRol = "select rol from usuario where email = '$email'";
		
		
		// ejecutar la consulta
		$resultado = $conexion->loguearUsuario($consulta);
		$verificoEmail = $conexion->loguearUsuario($controlarEmail);
		$verificoNombre=$conexion->loguearUsuario($consultoNombre);
		$resultadoRol = $conexion->loguearUsuario($consultoRol);
		
		//pregunto si el resultado me devuelve una cierta cantidad de filas
		$row = $resultado->num_rows;
		$filas = $verificoEmail->num_rows;
		$names = $verificoNombre->num_rows;
		$rol = $resultadoRol->num_rows;
		
		
	//Obtengo el nombre del email que ingreso por Login
	if(($names)>0){
    
	$columna = $verificoNombre->fetch_array(MYSQLI_ASSOC);
    
	/* Asignamos A Sessión el valor de la columna Nombre*/
    $_SESSION['nombre']= $columna['Nombre'];	
	}
		else{
				echo "NO HAY RESULTADOS";
			}
			
			
	//* Obtener rol	
	if(($rol)>0){
	$columna = $resultadoRol->fetch_array(MYSQLI_ASSOC);
	/* Asignamos A una variable el valor de la columna rol*/
    $rol2= $columna['rol'];
	}
		else{
				echo "NO HAY RESULTADOS";
			}

		//pregunto si la cantidad de filas es distinto a cero
		if($filas<>0)
		{
			if($row<>0){
			$_SESSION['username'] = $email;
		echo '<script> alert("Ingresado")</script>';
				
			//pregunto si es un usuario o un admin
			if($rol2=="usuario")
			{
				echo "<script>location.href='../Views/Cliente/paginaCliente.php'</script>";
			}else
				{
					echo "<script>location.href='login.php'</script>";
				}
			
			}else{
	//caso contrario regresa al archivo html donde esta el archivo login
				echo '<script language= "javascript">alert("EMAIL O CONTRASEÑA INCORRECTO");</script>';
				echo "<script>location.href='login.php'</script>";	
		
			}
}else{
	
		echo '<script> alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR")</script>';
		echo "<script>location.href='login.php'</script>";
	}

}
?>





<?php
/*
if(isset($_POST["email"])){ //Si completa una vez el campo usuario
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		$email = $_POST["email"]; //Guardo el usuario
		$password = $_POST["pass"]; //Guardo la contraseña
		//print ("Email: $email <br>");//Muestro el usurio
		//print ("Contraseña: $password<br>"); //Muestro la password
		// crear consulta para comparar los datos recibidos con los datos de la BD
		
		
		//Hecho con constructor
		$conexion1 = new Conexion();
		$conexion1->loguearUsuario();
		
		$consulta="select * from usuario where password = '$password'";
		$controlarEmail = "select * from usuario where email = '$email'";
		
		
		
		//Query es un metodo de mysqli, como ahora tenemos en Conexion un atributo de este tipo, agregamos tmbn
		//un metodko loguearUsuario q llama al metodo query del atributo mysqli
		$resultado = $conexion1->loguearUsuario($consulta);
		$verificoEmail = $conexion1->loguearUsuario($controlarEmail);
		
		//pregunto si el resultado me devuelve una cierta cantidad de filas
		$row = $resultado->num_rows;
		$filas = $verificoEmail->num_rows;
		
		//pregunto si la cantidad de filas es distinto a cero
		if($filas<>0)
		{
			if($row<>0){
				$_SESSION['username'] = $email;
			echo "<script>location.href='../pagina.php'</script>";
			
			}else{
	//caso contrario regresa al archivo html donde esta el archivo registrar
				echo '<script language= "javascript">alert("EMAIL O CONTRASEÑA INCORRECTO");</script>';
				echo "<script>location.href=index.php </script>";
		
			}
}else{
	
		echo '<script> alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR")</script>';
		echo "<script>location.href=index.php</script>";
	}

}

?>*/