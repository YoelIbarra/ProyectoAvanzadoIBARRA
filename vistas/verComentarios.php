<?php session_start(); 
    if($_SESSION['usuario']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('configHead.php') ?>
    <title>Comentarios</title>
</head>
<body>
    <?php include('header.php'); include('navegacionUsuario.php'); ?>
    
    <section class="contenedor under-nav">
        <!--h2>Seleccione si quiere ver los comentarios</h2-->
        <div class="contenedor">
            <?php include("comentarios-pagina.php") ?>
            
        </div>

    </section>



</body>
</html>
<?php
    }else{
        header('Location: login.php?log');
    }
?>

