<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('configHead.php'); ?>
    <title>Contacto</title>
</head>
<body>
    <?php include("header.php");include('navegacionInvitado.php') ?>

    <section class="contenedor">
    <?php
        if(isset($_GET['m'])){
            if($_GET['m']=="ok"){

            
    ?>
              <div class="mensaje under-nav">
                  <h2 class="alerta">Mensaje enviado correctamente</h2>
              </div>
    <?php
            }
        }
    ?>
    <h2>Contacto</h2>
    <form class="form" action="contactoSend.php" method="POST">
            <fieldset class="form-fieldset">
                <div class="form-item">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre maxlength="50" "required>
                </div>
                <div class="form-item">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" maxlength="50" required>
                </div>
            </fieldset>
            <fieldset class="form-fieldset">                
                <div class="form-item">
                    <label for="mail">E-Mail</label>
                    <input type="email" name="mail" id="mail  "required>
                </div>                
            </fieldset>
                    
            <fieldset class="form-fieldset">
                <textarea name="mensaje" id="mensaje" cols="64" rows="10" maxlength="255" placeholder="Por favor, escriba aquí su mensaje" required></textarea>
            </fieldset>
            <div class="form-boton">
                <input class="boton" type="submit" value="Enviar">
            </div>
        </form>
    </section>
    <?php include("footer.php"); ?>
</body>
</html>