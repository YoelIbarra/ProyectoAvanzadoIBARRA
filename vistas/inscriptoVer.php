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
        $email = $resultado['email'];
        $tel = $resultado['telefono'];
        $comprobante = $resultado['comprobante'];
        $foto = $resultado['foto'];
        $activo = $resultado['activo'];
        $fecha = $resultado['fecha'];
        $carrera = $resultado['carrera'];
        $instituto = $resultado['instituto'];


    ?>
    <section class="contenedor under-nav">
        <h1><?php 
            echo $nombre." ".$apellido;
        ?></h1>
        <h2><?php echo $dni; ?></h2>
        <!-- FOTO ACA -->

        <form class="form" action="inscripcionUpdate.php?id=<?php echo $id; ?>" method="POST">
        <fieldset class="form-fieldset">
                <div class="form-item">
                    <label for="tel">Teléfono</label>
                    <input type="text" name="tel" id="tel" pattern="[0-9]+" value="<?php if($tel!=0) echo $tel?>">
                </div>
                <div class="form-item">
                    <label for="mail">E-Mail</label>
                    <input type="email" name="mail" id="mail" value="<?php echo $email?>" required>
                </div>               
            </fieldset>
            <fieldset class="form-fieldset">
                <div class="form-item">
                    <label for="institucion">Universidad/Instituto</label>
                    <input type="text" name="institucion" id="institucion" value="<?php echo $instituto; ?>" required>
                </div>
                <div class="form-item">
                    <label for=carrera">Carrera</label>
                    <input type="text" name="carrera" id="carrera" value="<?php echo $carrera; ?>" required>
                </div>
            </fieldset> 
            <div class="form-boton">
                <input class="boton" type="submit" value="Enviar">
            </div>

        </form>

    </section>
    
</body>
</html>