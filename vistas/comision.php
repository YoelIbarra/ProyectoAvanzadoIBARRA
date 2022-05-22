<?php
    if(isset($_SESSION['usuario']))
        session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("configHead.php"); ?>
    <title>Comision</title>
</head>
<body>
<?php include('header.php'); include("navegacionInvitado.php"); ?>

<div class="contenedor under-nav">
    <h2>Seccion de la Comision</h2>

    <div class="">
        <nav class="navegacion-integrante">
            <a href="index.php?ruta=comision&&rol=0" class="boton-integrante">Presidente</a>
            <a href="index.php?ruta=comision&&rol=1" class="boton-integrante">Tesorero</a>
            <a href="index.php?ruta=comision&&rol=2" class="boton-integrante">Secretario</a>
        </nav>
    </div>
</div>

    <?php 
        //Lleno variables para mostrar a las personas
        if(isset($_GET['rol'])){

            $ctr = new ControladorInvitado();
            $rol = $ctr->ctrTraerRol($_GET['rol']);
            $persona = $ctr->ctrTraerPersonaRol($_GET['rol']);


        }
    ?>

    <main class="contenedor">
    <h2 class="integrantes-media">
            <?php 
                if(!isset($_GET['rol'])){
                    echo "Por favor, haga clic en un boton <br> para poder ver a la persona." ;
                }
                 
            ?>  
                          
     </h2>
            <?php 
                if(isset($_GET['rol']) and $rol['descripcion']){
                    echo "<h2>".$rol['descripcion']."</h2>" ;
                    echo "<h3>Nombre: ".$persona['nombre']."</h3>";
                    echo "<h3>Apellido: ".$persona['apellido']."</h3>";
                    echo "<h3>Carrera: ".$persona['carrera']."</h3>";
                }
            ?>
    </main>
    
</body>
</html>