<?php 
    session_start();
    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario'])
        header('Location: inscriptos.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("configHead.php"); ?>
    <title>Login</title>
</head>
<?php include("header.php"); ?>
<body>


    <section class="contenedor login-contenido">
        <?php if(isset($_GET['error'])){ ?>
            <div class="mensaje">
                <h2 class="alerta">Su usuario o contraseña son incorrectos</h2>
            </div>
        <?php }?>
        <?php if(isset($_GET['log'])){ ?>
            <div class="login-error">
                <p class="login-error-mensaje">Necestia logearse antes de ingresar a esa ventana</p>
            </div>
        <?php }?>
        <form class="login-form" action="loginControl.php" method="POST">
            
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
            <div class="login-boton">
                <input class="boton" type="submit" value="Enviar">
                <a class="boton" href="inscripcion.php">Quiero ingresar como invitado</a>
            </div>
        </form>
    </section>
    
</body>
</html>
