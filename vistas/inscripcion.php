<?php /*
    $letras = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
        $mezcla1 = rand(0, 25);
        $mezcla2 = rand(0, 25);
        $mezcla3 = rand(0, 25);
        $mezcla4 = rand(0, 25);
        $numero = rand(0,9);

        $_SESSION['codigo_captcha'] = $letras[$mezcla1] . $letras[$mezcla2] . $numero . $letras[$mezcla3] . $letras[$mezcla4];
    */
        ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('configHead.php') ?>
    <title>Inscripcion</title>
</head>
<body>
    <?php include('header.php');include('navegacionInvitado.php') ?>
    
    <section class="contenedor">
    <h2>Inscripcion</h2>
   
    
    <div>
        
        <form class="form" action="" method="POST" enctype="multipart/form-data">
            <fieldset class="form-fieldset">
                <div class="form-item">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre maxlength="50" required>
                </div>
                <div class="form-item">
                    <label for="apellido">Apellido</label>
                    <input type="text" name="apellido" id="apellido" maxlength="50" required>
                </div>
                <div class="form-item">
                    <label for="DNI">Documento</label>
                    <input type="text" name="DNI" id="DNI" maxlength="8" pattern="[0-9]+" placeholder="Solo número" required>
                </div>
            </fieldset>
            <fieldset class="form-fieldset">
                <div class="form-item">
                    <label for="tel">Teléfono</label>
                    <input type="text" name="tel" id="tel" pattern="[0-9]+">
                </div>
                <div class="form-item">
                    <label for="mail">E-Mail</label>
                    <input type="email" name="mail" id="mail" required>
                </div>
                
            </fieldset>
                    
            <fieldset class="form-fieldset">
                <div class="form-item">
                    <label for="institucion">Universidad/Instituto</label>
                    <input type="text" name="institucion" id="institucion" required>
                </div>
                <div class="form-item">
                    <label for=carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera"required>
                </div>
                <div class="form-item">
                    <label for="archivo">Documento que compruebe estudios</label>
                    <input type="file" name="archivo" id="archivo" > 
                </div>                
            </fieldset>
            <fieldset>
                <div class="form-item">
                    <label for="imagen">Foto del Inscripto</label>
                    <input type="file" name="imagen" id="imagen" > 
                </div>
            </fieldset>
            <div class="form-boton">
                <button type="submit" class="boton">Ingresar</button>
            </div>
        </form>
        <?php 
            $ctr = new ControladorInvitado();
            $respuesta = $ctr -> ctrRegistrarInscripcion();
            
            if($respuesta =="ok"){
                
                echo '<script>

                if ( window.history.replaceState ) {
    
                    window.history.replaceState( null, null, window.location.href );
    
                }
                </script>';
                echo '<div class="alerta alerta-error">Inscripcion realizada correctamente</div>';
              }
        ?>
    </div>
    

    </section>

<?php include("footer.php"); ?>
</body>
</html>