


<?php

if(isset($_POST["email"])){ //Si completa una vez el campo usuario
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		$email = $_POST["email"]; //Guardo el usuario
		$password = $_POST["pass"]; //Guardo la contraseña
		
		$consulta="select * from usuario where password = '$password'";
		$controlarEmail = "select * from usuario where email = '$email'";
		
		// ejecutar la consulta
		$resultado = $conexion->query($consulta);
		$verificoEmail = $conexion->query($controlarEmail);
		
		//pregunto si el resultado me devuelve una cierta cantidad de filas
		$row = $resultado->num_rows;
		$filas = $verificoEmail->num_rows;
		
		//pregunto si la cantidad de filas es distinto a cero
		if($filas<>0)
		{
			if($row<>0){
			$_SESSION['username'] = $email;
			echo '<script> alert("Ingresado")</script>';
			header("location: ../Views/Cliente/paginaCliente.php");
			
			}else{
	//caso contrario regresa al archivo html donde esta el archivo registrar
				echo '<script language= "javascript">alert("EMAIL O CONTRASEÑA INCORRECTO");</script>';
				echo "<script>location.href='index.html'</script>";	
		
			}
}else{
	
		echo '<script> alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR")</script>';
		echo "<script>location.href='index.html'</script>";
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