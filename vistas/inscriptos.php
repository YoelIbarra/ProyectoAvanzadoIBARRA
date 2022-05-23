<!DOCTYPE html>
<html lang="es">
<head>
    <?php include('configHead.php') ?>
    <title>Inscriptos</title>
</head>
<body>
    <?php include('header.php'); include('navegacionUsuario.php'); ?>

    <table class="table">
            <tr>
                <td class="bold">Nombre</td>
                <td class="bold">Apellido</td>
                <td class="bold">Documento</td>
                <td class="bold">Mail</td>
                <td class="bold"></td>
                <td class="bold"></td>
            </tr>
            <?php
                include("inscriptosTraerDatos.php"); 
                if($result->num_rows > 0){
                    while($datos = $result->fetch_assoc()){
                        $id = $datos['id'];
                        $nombre = $datos['nombre'];
                        $apellido = $datos['apellido'];
                        $dni = $datos['documento'];
                        $mail = $datos['email'];

            ?>
                            <tr>
                                <td class="bold"><?php echo $nombre;?></td>
                                <td class="bold"><?php echo $apellido;?></td>
                                <td class="bold"><?php echo $dni;?></td>
                                <td class="bold"><?php echo $mail;?></td>
                                <td class="bold"><a href="inscriptoVer.php?id=<?php echo $id;?>">Modificar</a></td>
                                <td class="bold"><a href="inscriptoEliminar.php?id=<?php echo $id;?>" >Eliminar</a></td>
                            </tr>
            <?php
                    }
                }
                mysqli_close($conexion);
            ?>
    </section>

    
</body>
</html>