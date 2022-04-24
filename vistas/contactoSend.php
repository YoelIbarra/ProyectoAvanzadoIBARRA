<?php
    include("conexionDB.php");
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $mensaje = $_POST['mensaje'];

    $query= "INSERT INTO Contacto (nombre,apellido,mail,mensaje) VALUES ('$nombre','$apellido','$mail','$mensaje')";

    mysqli_query($conexion,$query);

    mysqli_close($conexion);

    header("Location: contacto.php?m=ok");
?>
