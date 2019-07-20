
<?php
session_start();

if(isset($_POST["email"])){ //Si completa una vez el campo usuario
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		require_once ("conexionBD/direccion.php");
		$email = $_POST["email"]; //Guardo el usuario
		$password = $_POST["pass"]; //Guardo la contraseña
		
		//Abrir conexion
		$conexion = new Conexion;
		
		//Traigo los datos buscados en un array
		$consultar=$conexion->controlLogin($email,$password);
		$direccion= new Direccion();
		
		$CONS = "select * from usuario where email = '".$email."' ";
		$query = $conexion->realizarConsulta($CONS);
		while($f = mysqli_fetch_array($query))
		{
			$estado = $f['estado'];
		}
		
		if($estado == "Bloqueado")
		{
			
			$error="Lo sentimos, has infringido las reglas del sistema. Estas bloqueado";
				header($direccion->errorLogin($error));
				exit();
		}else{
		
		
	switch($consultar['rol'])
	{
		case 'usuario': echo '<script> alert("Ingresado")</script>';
				/* Asignamos A Sessión el valor de la columna Nombre*/
				 $_SESSION['nombre']= $consultar['nom'];
					$_SESSION['id'] = $consultar['id'];
			$conexion->modificarTransaccion($_SESSION['id']);
				 $_SESSION['username'] = $email;
					header($direccion->carpRaiz("Index"));
					exit();
					break;
		case 'administrador': echo '<script> alert("Ingresado")</script>';
					/* Asignamos A Sessión el valor de la columna Nombre*/
					 $_SESSION['nombre']= $consultar['nom'];
					 $_SESSION['username'] = $email;
					$_SESSION['id'] = $consultar['id'];
					$_SESSION['rol'] = $consultar['rol'];
					header("location: Administrador/HTML/Administrador.php");
					 exit();
						break;
		case '': $error="USUARIO O PASSWORD INCORRECTA, POR FAVOR REGISTRESE PARA PODER INGRESAR";
				header($direccion->errorLogin($error));
				exit();
				
	}
	}
}
?>
