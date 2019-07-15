<?php
include_once("verificacionSesion.php");
include_once("header.php");
include_once("conexionBD/conexion.php");
$conexion = new Conexion();
$nombre = $_SESSION['nombre'];
$array=$conexion->traerTransaccion($id_Usuario);
$porcentaje=$conexion->traerPorcentaje($array['idPorcentaje']);
$ventas=$conexion->ventasTotales($id_Usuario);

?>
<div class="container">
    <div class="text-center" style="padding: 20px">
        <h2>Bienvenido <?php echo "$nombre" ?></h2>
        <h4>Debes pagar al sistema: </h4>
    </div>

    <div class="row">
        <div class="span5 justify-content-center">
            <table class="table table-striped table-condensed">
                <thead>
                <tr>
                    <th>Ventas totales</th>
                    <th>Comisión</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
            <?php
              echo  "<tr>
                    <td>$ventas</td>
                    <td>$porcentaje</td>
                    <td>$array[total]</td>
                </tr>";

             ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include_once("footer.php");
?>
