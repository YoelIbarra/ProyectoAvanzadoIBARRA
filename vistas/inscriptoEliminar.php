<?php 
    
    include('conexionDB.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        echo $id;
        $query = "UPDATE Inscripto SET activo=0 WHERE id = '$id';";
        mysqli_query($conexion,$query);
        header("Location: inscriptos.php?el=$id");
        mysqli_close($conexion);

    }
    else{
        header("Location: login.php");
        mysqli_close($conexion);
    }
?>