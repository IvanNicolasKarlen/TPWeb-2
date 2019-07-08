<?php
require_once("verificacionSesion.php");
include_once("header.php"); ?>


<?php $error=isset($_GET["error"]) ? $_GET["error"] : ""; ?>
<div class="section"> <!-- section -->

    <div class="container"> <!-- container -->

        <div class="row"> <!-- row -->
			<h4 style="text-align:center; color:#9a2222; background-color:#d0be6547"> <?php echo"$error"; ?></h4>
            <form id="checkout-form" class="clearfix" action="procesaSubirProducto.php" method="post" enctype="multipart/form-data"> <!--form-->

                <div class="col-12 col-md-4"> <!--div col-4 1er-->
                    <div class="form-group">
                        <label>Nombre del producto: </label>
                        <input class="input" type="text" name="nombre"
                               placeholder="Nombre del producto" required> <!--required-->
                    </div>
                    <div class="form-group">
                        <label>Categoría: </label>
                        <select class="input" name="categoria" required>
                            <option value="Vehiculos">Vehiculos</option>
                            <option value="Inmuebles">Inmuebles</option>
                            <option value="Servicios">Servicios</option>
                            <option value="Productos y otros">Productos y otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Estado: </label>
                        <select  class="input" name="estado" required> <!--required-->
                            <option select=""></option>
							<option >Nuevo</option>
                            <option >Usado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio: </label>
                        <input class="input" type="number" name="precio"
                               placeholder="$1799" min="1" pattern="^[0-9]+" required> <!--required-->
                    </div>


                </div> <!-- /div col-4 1er-->

                <div class="col-12 col-md-4"> <!-- div col-4 2do-->
                    <div class="form-group">
                        <label>Stock: </label>
                        <input class="input" type="number" name="stock"
                               placeholder="999" min="1" pattern="^[0-9]+" required> <!--required-->
                    </div>

                    <div class="form-group">
                        <label>Marca: </label>
                        <input class="input" type="text" name="marca" placeholder="marca" required> <!--required-->
                    </div>
                    <div class="form-group">
                        <label>Palabras claves: </label>
                        <input class="input" type="text" name="palabras"
                               placeholder="Ej: Color, Talle...">
                    </div>
                    <div class="form-group">
                        <label>Genero: </label>
                        <select class="input"  name="genero" required> <!--required-->
                            <option select=""></option>
                            <option  >Hombre</option>
                            <option  >Mujer</option>
                            <option  >Unisex</option>
                            <option  >Infantil</option>
							
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
                    <div class="form-group">
                        <label>Tipo de envío: </label>
                        <div class="input-checkbox">
                            <input type="radio" name="envio"
                                   value="Gratis" required> <label> Envío gratis</label>
                        </div>
                       
                        <div class="input-checkbox">
                            <input class="input-checkbox" type="radio" name="envio"
                                   value="Domicilio con cargo"> <label> Envío a domicilio con
                                cargo</label>
                        </div>
                        <div class="input-checkbox">
                            <input class="input-checkbox" type="radio" name="envio"
                                   value="Entrega en local"> <label> Entrega en local</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Descripción: </label>
                        <textarea style="height: 77px" class="input"
                                  name="descripcion"></textarea>
								  
                    </div>
<br>
                </div> <!-- /div col-4 3ro-->
                      
                        <div class="form-group">
                            <div class=" col-12 col-md-3"><label> Imagen principal</label>
                                <input class="input" type="file"
                                       name="archivoA"
                                       id="importData" accept=".jpg,
                                    .png" required />
                            </div>
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

    </div> <!-- /container -->

</div> <!-- /section -->



<?php include_once("footer.php"); ?>

<script src="js/localizacion.js"></script>
<script src="js/maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiq3xISXSZYgkd9GDAOdajy4NK2d3L7dY&libraries=places&callback=iniciarMap"></script>
</body>










</html>