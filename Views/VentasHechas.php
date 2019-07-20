<?php
require_once("verificacionSesion.php");

include_once("header.php");
		//Consultamos los productos a listar
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;
$id = $_SESSION['id'];


 		$consulta="SELECT * 
					FROM compra as com
					inner join usuario as user on com.idUsuario = user.id
					inner join producto as prod on com.idProducto = prod.id
					WHERE prod.idUsuario= '".$id."'";

		//ejecutar la consulta
		$resultado = $conexion->realizarConsulta($consulta);
		$CantidadDeResultados = $conexion->cantidadDeFilas($resultado);
		
		
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
						<h2 class="title">Mis Ventas &nbsp</h2> 
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
	
	

		<?php 
						if($CantidadDeResultados==0)
						{
		?>			
		
		<h3 class="text-center mb-8 "> No has realizado ninguna venta aún.</h3><br>
		
		
		<?php			}else {
		?>
	
        <div class="panel panel-default" style="padding: 50px">
            <div class="panel-body" >

			
                <table  class="table" >

                    <thead>
                    <tr>

                        <th scope="col">Imagen</th>
                        <th scope="col">Código</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Forma de pago</th>
                        <th scope="col">Cantidad</th>
                      <!--  <th scope="col">Envío</th>-->
                        <th scope="col">Precio</th>
						<th scope="col">Lo compró</th>
						<th scope="col">Fecha</th>
                        <!--<th scope="col">Eliminar</th>-->
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
                        <td><?php echo $f['cantidad'];?></td>
                        <td><?php echo "$".number_format($f['precio'],0,'.','.');?> </td>
						<td><?php echo $f['Nombre'];?></td>
                        <td><?php echo $f['fecha'];?></td>
						
 
				  
				   
				   
					<?php
                    }//fin while
                    ?>

					 </tbody>
                    </tr>			
                   

                </table>
				
		<?php }//fin del else ?>
				
            </div>
        </div>


<?php require_once("footer.php")?>
