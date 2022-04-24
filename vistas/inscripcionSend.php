<?php 
    session_start();
    $captcha = $_POST['captcha'];
    if($_SESSION['codigo_captcha'] == $captcha){
        include("conexionDB.php");

        $dni = $_POST['DNI'];
        $select = "SELECT documento FROM Inscripto where documento = '$dni'";
        $resultSelect = mysqli_query($conexion,$select);
        if($resultSelect->num_rows > 0){
            header("Location: inscripcion.php?dup");

        }
        else{

        
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            
            $tel = $_POST['tel'];
            $mail = $_POST['mail'];

            $carrera = $_POST['carrera'];
            $institucion = $_POST['institucion'];
            $rutaarchivo = "files/inscripcion/".$nombre.$apellido.$_FILES['archivo']['name'];
            $tmparchivo = $_FILES['archivo']['tmp_name'];

            $rutaImagen = "img/fotoInscripto/".$nombre.$apellido.$_FILES['imagen']['name'];
            $tmpImagen = $_FILES['imagen']['tmp_name'];

            
            $query= "INSERT INTO inscripto(nombre, apellido, documento, email, telefono, carrera, instituto, foto, comprobante) VALUES ('$nombre','$apellido','$dni','$mail','$tel','$carrera','$institucion','$rutaImagen','$rutaarchivo')";

            mysqli_query($conexion,$query);

            move_uploaded_file($tmpImagen,$rutaImagen);
            move_uploaded_file($tmparchivo,$rutaarchivo);
            /*
            Para validaciones de imagenes
            $nombre_img = $_FILES['imagen']['name'];
            $tamanio_img = $_FILES['imagen']['size'];
            $tipo_img = $_FILES['imagen']['type'];
            $tmp_img = $_FILES['imagen']['tmp_name'];
            */

            header("Location: inscripcion.php?ok");
        }
    }
        
    else{
        header("Location: inscripcion.php?cap");
    }
?>