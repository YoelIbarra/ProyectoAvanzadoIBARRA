<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("configHead.php"); ?>
    <title>Comentarios</title>
</head>
<body>
    <?php 
        include("header.php");
        include("navegacionInvitado.php");
    ?>

    <section class="contenedor under-nav">
        <h2>Comentarios</h2>
        <form class="form" action="comentarioSave.php" method="POST">
            <div>
                <p>En esta sección usted podra hacer un comentario sobre la página o sobre alguna otra inquietud</p>
            </div>
            <fieldset class="form-field">
                <div class="">
                    <label for="seleccion">Tipo de Comentario</label>
                    <select name="seleccion" id="seleccion">
                        <option value="pag" selected>Web</option>
                    </select>
                </div>
                <div class="form-item">
                    <textarea name="comentario" id="comentario" cols="60" rows="10" placeholder="Escriba su comentario"></textarea>
                </div>
                </div>
            </fieldset>
            <div>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </section>
</body>
</html>