<?php


//$mayor = "SELECT TOP 10 * FROM producto Order by visitas desc limit 10";

$montosInvolucrados = "SELECT * FROM producto Order by visitas desc limit 10";

$RankingProductos = $conexion->realizarConsulta($montosInvolucrados);
$ProductoCantidad = $conexion->cantidadDeFilas($RankingProductos);
//$resultadoProductos = $conexion->realizarConsulta($ConsultaProductos);






?>