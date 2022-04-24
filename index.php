<?php 

require_once "controladores/login.controlador.php";
require_once "controladores/invitado.controlador.php";
require_once "controladores/usuario.controlador.php";

//Instancio los objetos


$login = new ControladorLogin();
$invitado = new ControladorInvitado();


// Lógica

if(isset($_GET['ruta'])){
    if(
        $_GET['ruta'] == 'invitado'
    ){
        if(isset($_GET['comision'])){
           $invitado -> getComision();
        }else {
            $invitado -> getInvitado();
        }
    }else{
        // ERROR 404
    }
}else{
    if(isset($_SESSION['usuario'])){

    }else{
        $login -> getLogin();
    }
}





