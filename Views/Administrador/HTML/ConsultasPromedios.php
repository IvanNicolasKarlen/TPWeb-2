<?php


$Vehiculos = "Vehiculos";
$Servicios = "Servicios";
$Inmuebles = "Inmuebles";
$Productos = "Productos y otros";

$ConsultaServicios = "SELECT visitas FROM categoria where nombre like '".$Servicios."'";
$ConsultaVehiculos = "SELECT visitas FROM categoria where nombre like '".$Vehiculos."'";
$ConsultaInmuebles = "SELECT visitas FROM categoria where nombre like '".$Inmuebles."'";
$ConsultaProductos = "SELECT visitas FROM categoria where nombre like '".$Productos."'";


$resultadoServicios = $conexion->realizarConsulta($ConsultaServicios);
$resultadoVehiculos = $conexion->realizarConsulta($ConsultaVehiculos);
$resultadoInmuebles = $conexion->realizarConsulta($ConsultaInmuebles);
$resultadoProductos = $conexion->realizarConsulta($ConsultaProductos);

while($v = mysqli_fetch_array($resultadoVehiculos))
{
	$veh = $v["visitas"];
}

while($i=mysqli_fetch_array($resultadoInmuebles))
{
	$inm = $i["visitas"];
}

while($p=mysqli_fetch_array($resultadoProductos))
{
	$prod = $p["visitas"];
}


while($s=mysqli_fetch_array($resultadoServicios))
{
	$serv = $s["visitas"];
}



?>