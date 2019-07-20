<?php



//Categorias mas visitadas


		$categoria = $_GET["Categoria"];
		
	//Cual es la categoria mas buscada
	$consultaCat = "Select visitas from categoria where nombre like '".$categoria."'";
	
	$cat= $conexion->realizarConsulta($consultaCat);
	
	//Contador para saber cual categoria es la que tiene mas visitas
	while($f=mysqli_fetch_array($cat))
	{
	$contador = $f["visitas"] + 1;
	}
	
	
	$sql = ("UPDATE categoria SET visitas = '".$contador."' WHERE nombre LIKE '%".$categoria."%'"); 
	
	
	$hecho= $conexion->realizarConsulta($sql);
	
	?>