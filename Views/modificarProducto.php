<?php
require_once("verificacionSesion.php");
include_once("header.php");
		//Consultamos los productos a listar
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;
$id=isset($_GET["cod"]) ? $_GET["cod"] : "";
		
		
 		$consulta="SELECT * FROM producto WHERE id='$id'";
		$consulta2="SELECT * FROM imgproducto WHERE idProducto='$id'";
		$consulta3="SELECT * FROM imgprincipal WHERE idProducto='$id'";

		//ejecutar la consulta
		$resultado = $conexion->realizarConsulta($consulta);
		$imgProducto = $conexion->realizarConsulta($consulta2);
		$imgPrincipal = $conexion->realizarConsulta($consulta3);



?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Modificar producto</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/main.css" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--Estilos-->

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header>
	<?php include_once("header.php"); ?>
	
	
	
	
	
	
	
	
	
<script>
	
	function contarImgs() {
		

document.getElementById('imgSecundarias').addEventListener('change', function() {


	vari=  parseInt(document.getElementById('imgSecundarias').files.length);
	va2= parseInt(document.getElementById('var').value);
	va3= vari + 4;
	if(va3 > 9){
	
	document.getElementsByClassName('alert alert-warning')[0].style.display = "block";
	}
	
	//document.getElementsByClassName('alerta')[0].style.display = "block";
	 //document.getElementById('var').value=vari;
	//alert(var)//; this.value = '';}
});
}

window.onload = contarImgs;

</script>


	</header>
<?php $error=isset($_GET["error"]) ? $_GET["error"] : ""; ?>
<div class="section"> <!-- section -->

    <div class="container"> <!-- container -->

        <div class="row"> <!-- row -->
		<h4 style="text-align:center; color:#9a2222; background-color:#d0be6547"> <?php echo"$error"; ?></h4>
		
			
            <form  id="checkout-form" class="clearfix" action="procesaEditarProducto.php" method="post" enctype="multipart/form-data"> <!--form-->

			
			
			
			<?php
                //Comienzo a rellenar los campos con los datos obtenidos con el select
                while($f=mysqli_fetch_array($resultado)){
             ?>
			
			
			<input class="input" type="hidden" name="id" value="<?php echo $f['id'];?>"
                               placeholder="Nombre del producto" required> <!--id del producto-->
			
			
			
                <div class="col-12 col-md-4"> <!--div col-4 1er-->
                    <div class="form-group">
                        <label>Nombre del producto: </label>
                        <input class="input" type="text" name="nombre" value="<?php echo $f['nombre'];?>"
                               placeholder="Nombre del producto" required> <!--required-->
                    </div>
					
			
                    <div class="form-group">
                        <label>Categoría: </label>
                        <select class="input" name="categoria"  required>
							
                            <option value="Vehiculos">Vehiculos</option>
                            <option value="Inmuebles">Inmuebles</option>
                            <option value="Servicios">Servicios</option>
                            <option value="Productos y otros">Productos y otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Estado: </label>
                        <select  class="input" name="estado" required> <!--required-->
							<option select="" ></option>
							<option >Nuevo</option>
                            <option >Usado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio: </label>
                        <input class="input" type="number" name="precio" value="<?php echo $f['precio'];?>"
                               placeholder="$1799" required > <!--required-->
                    </div>


                </div> <!-- /div col-4 1er-->

                <div class="col-12 col-md-4"> <!-- div col-4 2do-->
                    <div class="form-group">
                        <label>Stock: </label>
                        <input class="input" type="number" name="stock" value="<?php echo $f['stock'];?>"
                               placeholder="999" required> <!--required-->
                    </div>

                    <div class="form-group">
                        <label>Marca: </label>
                        <input class="input" type="text" name="marca" placeholder="marca" value="<?php echo $f['marca'];?>"
						required> <!--required-->
                    </div>
                    <div class="form-group">
                        <label>Palabras claves: </label>
                        <input class="input" type="text" name="palabras" value="<?php echo $f['palabrasClaves'];?>"
                               placeholder="Ej: Color, Talle...">
                    </div>
                    <div class="form-group">
                        <label>Genero: </label>
                        <select class="input"  name="genero"  required> <!--required-->
                            <option select="" ></option>
                            <option value="Hombre" >Hombre</option>
                            <option value="mujer" >Mujer</option>
                            <option value="Unisex" >Unisex</option>
                            <option value="Infantil">Infantil</option>
							
                        </select>
                    </div>


                </div> <!-- /div col-4 2do-->

                <div class="col-12 col-md-4"> <!-- div col-4 3ro-->
                    <div class="form-group">
                        <label>Formas de pago: </label>
                        <select class="input"  name="formas" required> <!--required-->
                            <option select=""></option>
                            <option >Efectivo</option>
                            <option  >Tarjeta</option>
                            <option  >Mercado de Pago</option>
                            <option  >Transferencia Bancaria</option>
                            <option  >Cualquier forma de pago</option>

                        </select>
                    </div>
					
					
					<div class="form-group" >
                        <label>Tipo de envío: </label>
                        <div class="input-checkbox">
                            <input  style="display:block" type="radio" name="envio"
                                   value="Gratis" required /> <label > Envío gratis</label>
                        </div>
                       
                        <div class="input-checkbox">
                            <input style="display:block" class="input-checkbox" type="radio" name="envio"
                                   value="Domicilio con cargo" /> <label> Envío a domicilio con
                                cargo</label>
                        </div>
                        <div class="input-checkbox">
                            <input style="display:block" class="input-checkbox" type="radio" name="envio"
                                   value="Entrega en local" /> <label> Entrega en local</label>
                        </div>
					
					 </div>
					
					
					
					
          
                    <div class="form-group">
                        <label>Descripción: </label>
                        <textarea style="height: 77px" class="input" 
                                  name="descripcion"><?php echo $f['descripcion'];?></textarea>
								  
                    </div>
<br>
                </div> <!-- /div col-4 3ro-->
                 <?php
                }
				?>

				
				
					<div class="form-group" >
					
                            <label> Imagen principal</label>
								 <br>
								 
					<!--mostrar img principal-->
							
							<?php
                    //Comienzo a rellenar los campos con los datos obtenidos con el select
                    while($f=mysqli_fetch_array($imgPrincipal)){
                    ?>
		 
			
                 
							<img style="height:50px;width:50px;" 
							 src="imgPublicadas/<?php echo $f["nombre"];?>" alt=""/>
							 
					<?php
						}
						?>
						 <br>
							 <br>
							 <label> Modificar</label>
							  <br>
						<div class="col-md-3" >
							 <input class="form-control" type="file"  
                                       name="imgPrincipal"
                                       id="importData"  accept=".jpg,
                                    .png" />
				
						</div>
                            
                        </div>
						
						<br>
					
					
						 <div class="form-group" >
						 		 
					<hr>
                            
							 <label> Imagenes secundarias:</label>
							 <br>
							 <?php
                    //Comienzo a rellenar los campos con los datos obtenidos con el select
                    while($g=mysqli_fetch_array($imgProducto)){
                    ?>
				
				
						<img style="height:50px;width:50px;border:20px" 
							 src="imgPublicadas/<?php echo $g["nombre"];?>" alt=""/> 
					
					
							<input  type="checkbox" name="check_list[]" value="<?php echo $g["id"];?>">
							<label >
								Eliminar
							</label>
							
						<?php
						}
						?>	 
						 		 									
                      						
                        </div>
						
						
						
						
					
						<div class="col-md-3" >
						<label >
							Agregar imagenes
						</label>
						<input class="form-control" type="file"  
                                       name="archivo[]"
                                       id="imgSecundarias"  accept=".jpg,
                                    .png" multiple />	
						</div>
						
					   <div class="form-group">
                    <div class="col-12 col-md-3">
                        <label>Ubicación del producto: </label>
                        <input class="input" type="text" id="direccion">
                    </div>
                </div>
                <div id="map" class="col-12 col-md-6" style="width: 100%; height:
                200px; margin-top: 20px"></div>

                <input style="display: none" name="latitud" id="latitud">
                <input style="display: none" name="longitud" id="longitud">	


			

                <div class="col-md-12" style="text-align: center; padding: 15px" >
                    <button class="primary-btn" type="submit" value="PUBLICAR"
                            name="publicar">Publicar</button>
                    <button class="primary-btn" type="reset" value="CANCELAR"
                            name="cancelar">Cancelar</button>
                </div>
				
				
            </form> <!-- /form-->
			
			
			
					
						
					</div> <!-- /row -->
		<div class="alert alert-warning" style="display:none" id="alerta">
						  <a href="#" class="alert-link" >No se puede subir mas de 10 imagenes </a>
						</div>
		
		
		
		
		

    </div> <!-- /container -->

</div> <!-- /section -->


 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<?php include_once("footer.php"); ?>
<script src="js/localizacion.js"></script>
<script src="js/maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiq3xISXSZYgkd9GDAOdajy4NK2d3L7dY&libraries=places&callback=iniciarMap"></script>


</body>
</html>
