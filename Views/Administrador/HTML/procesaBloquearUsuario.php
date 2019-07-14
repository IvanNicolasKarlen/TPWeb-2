<?php


require_once("../../verificacionSesion.php");


		
if(isset($_POST["bloquear"]))
		{
		
		require_once("../../conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;

		
		$idUsuario = $_POST["idUsuario"];
		$estado="Bloqueado";

		$consultaB = "Update usuario SET estado='".$estado."' where id = '".$idUsuario."'";
		
		$ConsultaUsuario = $conexion->realizarConsulta($consultaB);
		
		header("location: ComentariosGenerales.php");
		 exit();
		

		}
		
		
	
		

?>