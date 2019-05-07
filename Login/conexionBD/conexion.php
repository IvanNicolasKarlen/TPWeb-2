<?php  
		
		//1 CONECTAR CON LA BD
	//$host = "localhost"; //$host = "localhost:3307";
	$host = "localhost:3306";
	$usuario = "root";
	//$clave = "Cuc41515"; 
	//$clave = 11021998;
	$clave=1234;
	$bd = "logintp";
	 
	$conexion = new mysqli($host, $usuario, $clave, $bd);

	/*if($conexion->connect_error) //true o false da el connect_error
	{
		die ("Ha ocurrido un problema ");
	}else
		{
			echo("Conectado correctamente <br>");
		}
	*/
?>	