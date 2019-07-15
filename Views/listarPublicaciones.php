<?php
require_once("verificacionSesion.php");

include_once("header.php");
		//Consultamos los productos a listar
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;
$id = $_SESSION['id'];

 		$consulta="SELECT * FROM producto WHERE idUsuario='$id'";
		

		//ejecutar la consulta
		$resultado = $conexion->realizarConsulta($consulta);
		
		
		
		$modificado=isset($_GET["mensaje"]) ? $_GET["mensaje"] : "";


?>




	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
			<h4 style="text-align:center; color:green; "> <?php echo"$modificado"; ?></h4>
			
			<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Mis publicaciones &nbsp</h2> 
						<div class="header-search">
                    <form>
                        <input class="input search-input" type="text" placeholder="Enter your keyword">
                        <select class="input search-categories">
                            <option value="0">All Categories</option>
                            <option value="1">Category 01</option>
                            <option value="1">Category 02</option>
                        </select>
                        
                    </form>
                </div>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
			
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	
	

	
	
        <div class="panel panel-default" style="padding: 50px">
            <div class="panel-body" >

                <table  class="table" >

                    <thead>
                    <tr>

                        <th scope="col">Imagen</th>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Formas de pago</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Envío</th>
                        <th scope="col">Precio</th>
						<th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                    <?php
                    //Comienzo a rellenar los campos con los datos obtenidos con el select
                    while($f=mysqli_fetch_array($resultado)){
						
						$consulta2="SELECT * FROM imgprincipal WHERE idProducto= '".$f['id']."'";
						$resultado2 = $conexion->realizarConsulta($consulta2);
						
                    ?>
					 <?php
					while($g=mysqli_fetch_array($resultado2)){
					 ?>

                    </thead>
                    <tbody>
                    <tr>
                        <td > <div style="height:100%;width:100%;"><img style="height:50px;width:50px;"  src="imgPublicadas/<?php echo $g["nombre"];?>" alt=""> </div></td>
                        
						
						<?php
					}
					 ?>
						
						<th scope="row"><?php echo $f['id'];?> </th>
                       
                        <td><?php echo $f['nombre'];?></td>
                        <td><?php echo $f['formasdepago'];?></td>
                        <td><?php echo $f['stock'];?></td>
                        <td><?php echo $f['envio'];?></td>
                        <td><?php echo "$".number_format($f['precio'],0,'.','.');?> </td>
						<td><a href="modificarProducto.php?cod=<?php echo $f['id'];?>"><i class="fa fa-edit"></i></a> </td>
						<td><a href="EliminarPublicacion.php?cod=<?php echo $f['id'];?>"><i class="fa fa-trash"></i></a></td>
		        
 
				  
				   
				   
					<?php
                    }//fin while
                    ?>

					 </tbody>
                    </tr>			
                   

                </table>
            </div>
        </div>


<?php require_once("footer.php")?>
