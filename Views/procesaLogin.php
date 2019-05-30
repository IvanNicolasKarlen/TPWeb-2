
<?php
session_start();



if(isset($_POST["email"])){ //Si completa una vez el campo usuario
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		$email = $_POST["email"]; //Guardo el usuario
		$password = $_POST["pass"]; //Guardo la contraseña
		
		//Abrir conexion
		//$conexion = new mysqli($host, $usuario, $clave, $bd);
		$conexion = new Conexion;
		
		//Traigo los datos buscados
		$consultar=$conexion->controlLogin($email,$password);
		
		//Busca por email para saber si el email esta o no registrado
		$controlarEmail = "select * from usuario where email = '$email'";
		//Busca por nombre y rol para definir si es un Usuario o Admin
		$consultoNombre = "select Nombre,rol from usuario where email = '$email'";
		
		
		// ejecutar la consulta
		//$resultado = $conexion->realizarConsulta($consulta);
		$resultado=$conexion->realizarConsulta($consultar);
		$verificoEmail = $conexion->realizarConsulta($controlarEmail);
		$verificoNombre=$conexion->realizarConsulta($consultoNombre);
		
		//pregunto si el resultado me devuelve una cierta cantidad de filas
		$filas = $verificoEmail->num_rows;
		$names = $verificoNombre->num_rows;
		
		
	//Obtengo el nombre del email que ingreso por Login
	if(($names)>0){
    //Para poder buscar en la parte de Nombres en base al nombre que buscamos
	$columna = $verificoNombre->fetch_array(MYSQLI_ASSOC);
    
	/* Asignamos A Sessión el valor de la columna Nombre*/
    $_SESSION['nombre']= $columna['Nombre'];	
	}
			
			
	//* Obtener rol	
	if(($names)>0){
	
	$columna = $verificoNombre->fetch_array(MYSQLI_ASSOC);
	/* Asignamos A una variable el valor de la columna rol*/
    $rol2= $columna['rol'];
	}

		//pregunto si la cantidad de filas es distinto a cero
		if($consultar<>0){
			$_SESSION['username'] = $email;
		echo '<script> alert("Ingresado")</script>';
				
			//pregunto si es un usuario o un admin
			if($rol2=="usuario")
			{
				header("location:../Views/Cliente/paginaCliente.php");
					exit();
			}else{
					
				header("location:login.php");
					exit();
					
				}
			//Busca si este email se encuentra al menos en la BD
			}elseif($filas==0){
	
		echo '<script> alert("ESTE USUARIO NO EXISTE, POR FAVOR REGISTRESE PARA PODER INGRESAR")</script>';
			header("location:login.php");
					exit();
		
	}else{
	//caso contrario regresa al archivo html donde esta el archivo login
				echo '<script language= "javascript">alert("EMAIL O CONTRASEÑA INCORRECTO");</script>';
					header("location:login.php");
					exit();
				
		
			}

}
?>