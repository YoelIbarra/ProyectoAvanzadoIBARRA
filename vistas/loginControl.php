<?php
    session_start();
    include('conexionDB.php');


    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $query = "SELECT password,activo FROM Usuario where usuario = '$usuario'; ";

    $result = mysqli_query($conexion,$query);
    if($result->num_rows == 1){
        $fila = $result->fetch_assoc();
        if ( $fila['activo'] && $contrasenia == $fila['password']){
            $_SESSION['usuario'] = $usuario;
            echo "<h1>logeado</h1>";
            header('Location: inscriptos.php');
        }
    }

    
    else{
        header('Location: login.php?error');
    }
?>