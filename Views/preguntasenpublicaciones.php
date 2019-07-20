<?php
require_once("verificacionSesion.php");
include_once("header.php");
include_once("conexionBD/conexion.php");
$conexion = new Conexion();
$id_Usuario=$_SESSION['id'];
$pregunta=$conexion->buscarPreguntasEnMisPublicaciones($id_Usuario);
?>
<div class="container-fluid">


 <?php if($pregunta->num_rows==0){ ?>
   <br><h3 class="text-center"> Aún no hay preguntas en tu publicación </h3><br>






 <?php }else{ ?>
    <table  class="table" >

        <thead>
        <tr>
            <th scope="col">Publicacion</th>
            <th scope="col">Comprador</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Fecha</th>
        </tr>
        <?php
        while($preguntas = $pregunta->fetch_assoc()){
        ?>
        </thead>

        <tbody>
            <tr>
                <?php $producto = $conexion->consultarPublicaciones($preguntas['idProducto']);
                if($producto->num_rows>0){
                    while($productos=$producto->fetch_assoc()){     ?>
                       <form METHOD="get" action="detallesProducto.php?Productoid=<?php echo $f['id'];?>&Nombre=<?php echo $f['nombre'];?>&categoria=<?php echo $f['categoria'];?> ">
						    <input type="hidden" name="ProductoNombre" value="<?php echo $productos['nombre'];?>">
                            <input type="hidden" name="Productoid" value="<?php echo $productos['id'];?>">
                            <input type="hidden" name="Categoria" value="<?php echo $productos['categoria'];?>">
                            <td>
                                <button class="btn-info" type="submit" name="detalles">
                                    <?php echo $productos['nombre'];?>
                            </td>
                        </form>


                 <?php   } //fin while productos
                        } // fin del if prod
                $nombreComprador = $conexion->traerUsuarioQueValora($preguntas['idComprador']);

                ?>
                <td><?php echo $nombreComprador;?></td>
                <td><?php echo $preguntas['texto'];?></td>

                <td><?php echo $preguntas['fecha'];?></td>




                <?php
                }//fin while preguntas
                ?>
            </tr>
        </tbody>



    </table>
    <?php } //fin if pregunta ?>

</div>



<?php include_once("footer.php"); ?>