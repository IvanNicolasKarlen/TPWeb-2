<?php

//Categorias mas visitadas


		
	//Sumarle 1 a la cantidad del producto visitado
	$consultaProd = "Select visitas from producto where id = '".$idProducto."'";
	
	$Prod= $conexion->realizarConsulta($consultaProd);
	
	//Contador para saber cual categoria es la que tiene mas visitas
	while($p=mysqli_fetch_array($Prod))
	{
	$contadorProducto = $p["visitas"] + 1;
	}
	
	
	$sqlProducto = ("UPDATE producto SET visitas = '".$contadorProducto."' WHERE nombre LIKE '%".$NombreProducto."%'"); 
	
	
	$hechoProd= $conexion->realizarConsulta($sqlProducto);
	
	?>