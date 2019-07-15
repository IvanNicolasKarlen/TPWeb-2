<?php
include_once("verificacionSesion.php");
include_once("header.php");
include_once("conexionBD/conexion.php");
$conexion = new Conexion();
$nombre = $_SESSION['nombre'];
$array=$conexion->traerTransaccion($id_Usuario);
$porcentaje=$conexion->traerPorcentaje($array['idPorcentaje']);
?>
<div class="container-fluid">
   <?php    echo "<h2 class='h-50'>Bienvenido $nombre</h2>";
            echo "<h4>Debes al sistema:</h4>";
            echo "
              <table class='table-responsive'>
                 <thead>
                    <tr>
                      <th>Cantidad de ventas</th>
                      <th>Porcentaje</th>
                      <th>Total</th>
                       </tr>
                 </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
              </table>
            
            ";
   ?>

</div>

<?php
include_once("footer.php");
?>
