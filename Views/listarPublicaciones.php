<?php
require_once("verificacionSesion.php");

		//Consultamos los productos a listar
		require_once("conexionBD/conexion.php");// incluir la configuracion de conexion a la BD
		//Abrir conexion
		$conexion = new Conexion;


 		$consulta="SELECT * FROM producto WHERE idUsuario='$id'";

		//ejecutar la consulta
		$resultado = $conexion->realizarConsulta($consulta);

include_once("header.php");

?>




	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
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
                    </tr>
                    <?php
                    //Comienzo a rellenar los campos con los datos obtenidos con el select
                    while($f=mysqli_fetch_array($resultado)){
                    ?>

                    </thead>
                    <tbody>
                    <tr>
                        <td  > <div style="height:100%;width:100%;"><img style="height:50px;width:50px;"  src="imgPublicadas/<?php echo $f["imgprincipal"];?>" alt=""> </div></td>
                        <th scope="row"><?php echo $f['id'];?></th>
                        <!--<td style="height:2%;width:2%;"><?php// echo $f['nombre'];?></td>-->
                        <td><div><?php echo $f['nombre'];?></div></td>
                        <td><?php echo $f['formasdepago'];?></td>
                        <td><?php echo $f['stock'];?></td>
                        <td><?php echo $f['envio'];?></td>
                        <td><?php echo "$".$f['precio'];?></td>
                    </tr>
                    </tbody>

                    <?php
                    }//fin while
                    ?>

                </table>
            </div>
        </div>


<?php require_once("footer.php")?>

