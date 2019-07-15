<?php
session_start();

/*if (isset($_SESSION['usuario'])){
    header('location: pagina.html');
}*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrarme</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->


</head>
<body style="background-color: #999999;">
	
	<div class="limiter" method="post" action="">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/registrarse.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="registro.php">
					<span class="login100-form-title p-b-59">
						Registro de Usuario
					</span>

					<div class="wrap-input100 validate-input" data-validate="Ej: Usuario">
						<span class="label-input100">Nombre</span>
						<input class="input100" type="text" name="nombre">
						<span class="focus-input100"></span>
					</div>
					

					<div class="wrap-input100 validate-input" data-validate="Ej: Usuario@gmail.com">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese la contraseña">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Repita la contraseña">
						<span class="label-input100">Repetir contraseña</span>
						<input class="input100" type="password" name="repetir" >
						<span class="focus-input100"></span>
					</div>
					
					<!--campo pais-->
					<div class="wrap-input100 validate-input" data-validate="Ej: Pais">
						<span class="label-input100">Pais</span>
						<select class="input100" name="pais">

						<?php
						 
						 require_once("conexionBD/conexion.php");
						 

							$connect = new Conexion();
							$output = array();
							$query = "SELECT nombre FROM pais";
							$resultado = $connect->realizarConsulta($query);

							while($fila = mysqli_fetch_array($resultado))
							{
								echo "<option value='" . $fila["nombre"] . "'>" . $fila["nombre"] . "</option>";
					
							}
							
							?>
							
						</select>
					</div>

						
						<!--inputs invisibles para guardar lat y long-->
						<input type="text"  style="display: none" name="latitud" id="latitud">
						<input type="text" style="display: none" name="longitud" id="longitud">
						
						
						
								   
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
						<button type="submit" class="login100-form-btn" name="botonRegistrar">
								Registrarme
							</button>
							
						</div>
	


						<?php
						if(isset($_POST['registrar']))
						{
							require("registro.php");
						}
						
						?>
						
						<a href="login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10
						p-l-30">
							Login
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
						
						<a href="Index.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10
						p-l-30">
							Regresar
							<i class="fa fa-long-arrow-left m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->

   
</body>
</html>


<script>
/*var x = document.getElementById("latitud");
var y = document.getElementById("longitud");*/

function getLocation() {
  if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(enviarLocalizacion, showError);
  } else { 
    alert("La geolocalización no es compatible con este navegador.");
  }
}

function enviarLocalizacion(position) {
	
	document.getElementById("longitud").value = position.coords.longitude;
	document.getElementById("latitud").value = position.coords.latitude;
	
}
function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
	document.getElementById("longitud").value = "Usuario nego la solicitud de Geolocalizacion."
	document.getElementById("latitud").value = "Null"
    
      break;
    case error.POSITION_UNAVAILABLE:
	document.getElementById("longitud").value = "La informacion de ubicacion no esta disponible."
	document.getElementById("latitud").value = "Null"
       
      break;
    case error.TIMEOUT:
	document.getElementById("longitud").value = "La solicitud para obtener la ubicacion del usuario ha caducado."
	document.getElementById("latitud").value = "Null"
       
      break;
    case error.UNKNOWN_ERROR:
	document.getElementById("longitud").value = "Un error desconocido ocurrio."
	document.getElementById("latitud").value = "Null"
      
      break;
  }
}
</script>


						

