<?php 
    include("conexionDB.php");

    $query = "SELECT id,nombre,apellido,documento,email FROM Inscripto WHERE activo=1";

    $result = mysqli_query($conexion,$query);

    
?>