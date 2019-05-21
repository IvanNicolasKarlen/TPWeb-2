<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>E-SHOP HTML Template</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/main.css" />

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

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
<?php include_once("header.php"); ?>

<div class="section"> <!-- section -->

    <div class="container"> <!-- container -->

        <div class="row"> <!-- row -->

            <form id="checkout-form" class="clearfix"> <!--form-->

                <div class="col-12 col-md-4"> <!--div col-4 1er-->
                    <div class="form-group">
                        <label>Nombre del producto: </label>
                        <input class="input" type="text" name="nombre"
                               placeholder="Nombre del producto">
                    </div>
                    <div class="form-group">
                        <label>Estado: </label>
                        <select  class="input" name="estado">
                            <option >Nuevo</option>
                            <option >Usado</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Precio: </label>
                        <input class="input" type="number" name="precio"
                               placeholder="$1799">
                    </div>
                    <div class="form-group">
                        <label>Stock: </label>
                        <input class="input" type="number" name="Cantidad disponible"
                               placeholder="999">
                    </div>

                </div> <!-- /div col-4 1er-->

                <div class="col-12 col-md-4"> <!-- div col-4 2do-->
                    <div class="form-group">
                        <label>Marca: </label>
                        <input class="input" type="text" name="city" placeholder="Marca">
                    </div>
                    <div class="form-group">
                        <label>Teléfono: </label>
                        <input class="input" type="number" name="tel"
                               placeholder="4458-9896">
                    </div>
                    <div class="form-group">
                        <label>WhatsApp: </label>
                        <input class="input" type="number" name="cel"
                               placeholder="11-2345-6789">
                    </div>
                    <div class="form-group">
                        <label>Formas de pago: </label>
                        <select class="input"  name="formas"required>
                            <option >Efectivo</option>
                            <option  >Tarjeta</option>
                            <option  >Mercado de Pago</option>
                            <option  >Transferencia Bancaria</option>
                            <option  >Cualquier forma de pago</option>

                        </select>
                    </div>

                </div> <!-- /div col-4 2do-->

                <div class="col-12 col-md-4"> <!-- div col-4 3ro-->
                    <div class="form-group">
                        <label>Tipo de envío: </label>
                        <div class="input-checkbox">
                            <input type="radio" name="envio"
                                   value="Gratis"> <label> Envío gratis</label>
                        </div>
                        <div class="input-checkbox">
                            <input class="input-checkbox" type="radio" name="envio"
                                   value="Domicilio"> <label> Envío a domicilio</label>
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
                        <textarea style="height: 130px" class="input"
                                  name="descripcion"></textarea>
                    </div>

                </div> <!-- /div col-4 3ro-->
                        <h5 style="text-align: center">Subir imagenes:</h5>
                        <div class="form-group">
                            <div class="col-md-3">
                                <input class="input col-md-3" type="file"
                                       name="archivoA"
                                       id="importData" accept=".jpg,
                                    .png" />
                            </div>
                            <div class="col-md-3">
                                <input class="input col-md-3" type="file"
                                       name="archivoB"
                                       id="importData" accept=".jpg,
                                    .png" />
                            </div>
                            <div class="col-md-3">
                                <input class="input col-md-3" type="file" name="archivoC"
                                       id="importData" accept=".jpg,
                                    .png" />
                            </div>
                            <div class="col-md-3">
                                <input class="input col-md-3" type="file" name="archivoD"
                                       id="importData" accept=".jpg,
                                    .png" />
                            </div>

                        </div>

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



</body>
</html>