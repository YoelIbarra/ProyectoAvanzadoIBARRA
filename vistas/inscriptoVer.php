<!DOCTYPE html>
<html lang="es">
<head>
    <?php include("configHead.php"); ?>
    <title>Inscripto</title>
</head>
<body>
    <?php
        include("header.php");
        include("navegacionUsuario.php");

        $id = $_GET['id'];
        $ctrUsuario = new ControladorUsuario();
        
        $resultado = $ctrUsuario->ctrTraerInscripto($id);

        $nombre = $resultado['nombre'];
        $apellido = $resultado['apellido'];
        $dni = $resultado['documento'];
        $telefono = $resultado['telefono'];
        $email = $resultado['email'];
        $instituto = $resultado['instituto'];
        $carrera = $resultado['carrera'];


    ?>
    <section class="contenedor under-nav">
        <h1><?php 
            echo $nombre." ".$apellido;
        ?></h1>
        <h2><?php echo $dni; ?></h2>

        <?php 
            $respuesta = $ctrUsuario -> ctrActualizarUsuario($id, $resultado);
            
            if($respuesta =="ok"){

                header("refresh:0.5");
              }
        ?>

        <form class="form" method="POST">
        <fieldset class="form-fieldset">
                <div class="form-item">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" pattern="[0-9]+" value="<?php echo $telefono?>">
                </div>
                <div class="form-item">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="email" value="<?php echo $email?>" required>
                </div>               
            </fieldset>
            <fieldset class="form-fieldset">
                <div class="form-item">
                    <label for="instituto">Universidad/Instituto</label>
                    <input type="text" name="instituto" id="instituto" value="<?php echo $instituto?>" required>
                </div>
                <div class="form-item">
                    <label for=carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera" value="<?php echo $carrera?>" required>
                </div>
            </fieldset> 
            <div class="form-boton">
                <button class="boton" type="submit">Actualizar</button>
                <a href="index.php?ruta=inscriptos" class="boton">Volver</a>
            </div>

        </form>

    </section>
    
</body>
</html>