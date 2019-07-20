<div id="tab4" class="tab-pane fade in">
<?php
if($id_Usuario==$idU){
    $pregunta = $conexion->buscarPreguntasVendedor($id_Usuario,$idProducto);
}else{
    $pregunta = $conexion->buscarPreguntasComprador($id_Usuario, $idU, $idProducto);
}


if(($pregunta->num_rows>0)){
    echo "<h4 class='text-uppercase'>Preguntas: </h4>";
    ?>

    <div class="row">
        <div class="col-md-6">
         <?php   while($preguntas = $pregunta->fetch_assoc()) {
              ?>
            <div class="single-review">
                <div class="review-heading">
                    <?php $nombreDeComprador = $conexion->traerUsuarioQueValora($preguntas['idComprador']);
                    echo  "<div><i class='fa fa-user-o'></i> $nombreDeComprador</div>";
                    echo  "<div><i class='fa fa-clock-o'></i> $preguntas[fecha]</div>
                </div>
                <div class='review-body'>";
                    echo "<p>$preguntas[texto]</p>"; ?>
                </div>
                <form action="mostrarChat.php" method="post">
                    <?php
                    echo "<input type='text' value='$preguntas[idComprador]' style='display: none'>";
                    echo "<button value='$preguntas[id]' type='submit' name='idPregunta'>Responder</button>"; ?>
                </form>

            </div>
         <?php   } //fin del while de preguntas ?>
        </div> <!--/col-md-4-->


        <?php
        } /*fin del if de pregunta*/
        else {

            echo "<h4 class='text-uppercase'>Aún no hay preguntas :(</h4>";

        }; ?>


        <div class="col-md-6">
            <h4 class="text-uppercase">Escribe tu pregunta</h4>
            <form class="review-form" method="post" action="insertarPregunta.php">
                <div class="form-group" >
                    <textarea class="input" name="texto" placeholder="Escribe tu pregunta"></textarea>
                </div>
                <?php echo "<input style='display: none' value='$idU' name='idVendedor'>"; ?>
                <?php echo "<input style='display: none' value='$idProducto' name='idProducto'>"; ?>
                <button class="primary-btn" name="enviarPregunta">Preguntar</button>
            </form>
        </div>
    </div>
</div>

