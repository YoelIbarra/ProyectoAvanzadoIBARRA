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
            <a href="comision.php?rol=0" class="boton-integrante">Presidente</a>
            <a href="comision.php?rol=1" class="boton-integrante">Tesorero</a>
            <a href="comision.php?rol=2" class="boton-integrante">Secretario</a>
        </nav>
    </div>
</div>

    <?php 
        //Lleno variables para mostrar a las personas
        if(isset($_GET['rol'])){

            include('comisionTraerDatos.php');

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
        <h2>
            <?php 
                if(isset($_GET['rol'])){
                    echo $rol ;
                } 
            ?>                
        </h2>
        <h3>
            <?php 
                if(isset($_GET['rol'])){
                    echo "Nombre: " . $nombre;
                }
            ?> 
        </h3>
        <h3>
            <?php 
                if(isset($_GET['rol'])){
                    echo "Apellido: " . $apellido;
                }
            ?> 
        </h3>
        <h3>
            <?php 
                if(isset($_GET['rol'])){
                    echo "Carrera: " . $carrera;
                }
            ?>
        </h4>
    </main>
    
</body>
</html>