<?php 

    include("conexionDB.php");

    $id = $_GET['id'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];

    $carrera = $_POST['carrera'];
    $institucion = $_POST['institucion'];

    $query= "UPDATE Inscripto SET email='$mail', telefono=$tel, carrera='$carrera', instituto='$institucion' where id = $id;";

    mysqli_query($conexion,$query);


    header("Location: inscriptos.php");
?>