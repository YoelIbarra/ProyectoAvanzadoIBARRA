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
    }else if(
        $_GET['ruta'] == 'usuario'
    ){
        include "vistas/0EnConstruccion.php";
    }
    else{
        include "vistas/error404.php";
    }

}else{
    if(isset($_SESSION['usuario'])){
        
    }else{
        $login -> getLogin();
    }
}





