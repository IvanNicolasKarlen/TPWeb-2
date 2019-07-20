<?php
require_once("verificacionSesion.php");
include_once("header.php");
include_once("conexionBD/conexion.php");
include_once("insertarRespuesta.php");
$idPregunta=$_POST['idPregunta'];
$conexion = new Conexion();
$respuesta=$conexion->buscarRespuestas($idPregunta);
$pregunta= $conexion->traerPregunta($idPregunta);
?>
<div class="container">
	<h3>Pregunta:</h3>
<?php	echo "<p>$pregunta</p>"; ?>
    <div class="row">
    <?php if($respuesta->num_rows>0){ ?>

        <?php while ($respuestas = $respuesta->fetch_assoc()){ ?>

       <div class="single-review">
           <div class="review-heading">
               <?php $nombreUser = $conexion->traerUsuarioQueValora($respuestas['idUsuario']);
               echo  "<div><i class='fa fa-user-o'></i> $nombreUser</div>";
               echo  "<div><i class='fa fa-clock-o'></i> $respuestas[fecha]</div>
                </div>
                <div class='review-body'>";
               echo "<p>$respuestas[texto]</p>"; ?>
           </div>
       </div>
            <p>----------------------------------</p>


        <?php } //fin while ?>

    </div>
    <?php } //fin if
    else{
        echo "<h2>No hay respuestas </h2>";
    } ?>
    <form class="review-form" method="post" action="mostrarChat.php">
        <div class="form-group">
           <textarea class="input" name="texto" placeholder="Escribe aquí tu respuesta" required></textarea>
        </div>
        <?php echo "<input style='display: none' value='$idPregunta' name='idPregunta'>"; ?>
        <button class='primary-btn'
                name='enviarRespuesta'>Enviar
        </button>
    </form>


</div>







<?php include_once("footer.php"); ?>