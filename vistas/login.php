<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("configHead.php"); ?>
    <title>Login</title>
</head>
<?php include("header.php"); ?>
<body>


    <section class="contenedor login-contenido">
        <form class="login-form" method="POST">
            
            <fieldset class="login-field">
                <div class="login-item">
                    
                    <label for="usuario">Usuario</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Su usuario" required>
                </div>
                <div class="login-item">
                    <label for="contrasenia">Contraseña</label>
                    <input type="password" id="contrasenia" name="contrasenia" placeholder="Su contraseña" required>
                </div>    
            </fieldset>
            <?php 
                $login = new ControladorUsuario();
                $login -> ctrValidarLogin();
            ?>
            <div class="login-boton">
                <!--input class="boton" type="submit" value="Enviar"-->
                <button type="submit" class="boton">Ingresar</button>
                <a class="boton" href="index.php?ruta=inscripcion">Quiero ingresar como invitado</a>
            </div>
        </form>
    </section>
    <!--a class="boton" href="index.php?ruta=prueba">PruebaDB</a-->
</body>
</html>
