<?php 

require_once "controladores/general.controlador.php";
require_once "controladores/invitado.controlador.php";
require_once "controladores/usuario.controlador.php";
require_once "modelos/conexionDB.php";

//Instancio los objetos


$general = new ControladorGeneral();
$invitado = new ControladorInvitado();
$db = new Conexion();

// Lógica

    if(isset($_GET['ruta'])){
        switch($_GET['ruta']) {
            case "invitado":
                if(isset($_GET['comision'])){
                    $invitado -> getComision();
                }else {
                    $invitado -> getInvitado();
                }
                break;
            case "usuario":
                $general -> getConstruccion();
                break;
            default:
                $general -> get404();
        }
    } else{
            $general -> getLogin();
            $db::conectar();
            echo '<pre>'; print_r($db);echo '</pre>';
        }






