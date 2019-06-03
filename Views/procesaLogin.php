
<?php
session_start();

if(isset($_POST["email"])){ //Si completa una vez el campo usuario
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		$email = $_POST["email"]; //Guardo el usuario
		$password = $_POST["pass"]; //Guardo la contraseña
		
		//Abrir conexion
		$conexion = new Conexion;
		
		//Traigo los datos buscados en un array
		$consultar=$conexion->controlLogin($email,$password);
		
	switch($consultar['rol'])
	{
		case 'usuario': echo '<script> alert("Ingresado")</script>';
				/* Asignamos A Sessión el valor de la columna Nombre*/
				 $_SESSION['nombre']= $consultar['nom'];
				 $_SESSION['username'] = $email;
					header("location:../Views/Cliente/paginaCliente.php");
					exit();
					break;
		case 'administrador': echo '<script> alert("Ingresado")</script>';
					/* Asignamos A Sessión el valor de la columna Nombre*/
					 $_SESSION['nombre']= $consultar['nom'];
					 $_SESSION['username'] = $email;
					 header("location:../Views/Cliente/paginaAdmin.php");
					 exit();
						break;
		case '': echo '<script> alert("USUARIO O CONTRASEÑA INCORRECTA, POR FAVOR REGISTRESE PARA PODER INGRESAR")</script>';	
				header("location:login.php");
				exit();
	}
}
?>
