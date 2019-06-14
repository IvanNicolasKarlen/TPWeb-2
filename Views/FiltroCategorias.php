<?php

$conexion = new Conexion;
	
$busqueda=("SELECT * FROM producto WHERE categoria LIKE '%".$busca."%' ");

$resultado = $conexion->realizarConsulta($busqueda);
	
	if((mysqli_num_rows($resultado)<=0))
	{?>
	
	<h3 style="text-align:center; color:black; padding-top:20px">No se han encontrado resultados para tu busqueda</h3>
	
	
<?php
	}//fin If 208
	else{
?>

		<div class="panel panel-default" style="padding: 50px">
            <div class="panel-body" >

                <table  class="table" >

                    <thead>
                    
                    <?php
                    //Comienzo a rellenar los campos con los datos obtenidos con el select
                    while($f=mysqli_fetch_array($resultado))
					{
                    ?>

                    </thead>
                    <tbody>
                    <tr>
                
						<!-- Productos -->
				<div class="col-md-3 col-sm-6 col-xs-6" >
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Ver más</button>
							<img style="height:270px;width:247px;margin:auto;margin-left: auto;margin-right: auto;display: block;
							"src="imgPublicadas/<?php echo $f["imgprincipal"];?>"  alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price"><?php echo "$".$f['precio'];?></h3>
							
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div><br>
							<p style="color:green;"><?php echo "<b>Envio: </span></b>". $f['envio'];?></p>
							<h2 class="product-name"><a href="#"><?php echo $f['nombre'];?></a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>
							</div>
						</div>
					</div>
				</div>
						
                    </tr>
                    </tbody>

                    <?php
                    }//fin while 247
                    ?>

                </table>
            </div>
        </div>
	<?php
}//Cierra else

 //cierra iff isset