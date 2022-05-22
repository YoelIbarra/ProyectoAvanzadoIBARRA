<?php 
session_Start();

require_once "controladores/general.controlador.php";
require_once "controladores/invitado.controlador.php";
require_once "controladores/usuario.controlador.php";

require_once "modelos/usuario.modelo.php";
require_once "modelos/invitado.modelo.php";

//Instancio los objetos


$general = new ControladorGeneral();

// Lógica
    
    if(isset($_SESSION['usuario'])){
        /*lógica usuario*/
        if(isset($_GET['ruta'])){            
            if( $_GET['ruta'] == "inscriptos" ||
                $_GET['ruta'] == "EnConstruccion" ||
                $_GET['ruta'] == "comision" ||
                $_GET['ruta'] == "inscripcion"
                ) {
                
                    include "vistas/" . $_GET['ruta'] . ".php";
                }else{
                    $general -> get404();
                }   
        } else{
                $general -> getLogin();
        }

    }else{
        /*Logica Invitado*/
        if(isset($_GET['ruta'])){            
            if( $_GET['ruta'] == "comision" ||
                $_GET['ruta'] == "inscripcion" ||
                $_GET['ruta'] == "EnConstruccion") {
                
                    include "vistas/" . $_GET['ruta'] . ".php";
                }else{
                    $general -> get404();
                }   
        } else{
                $general -> getLogin();
        }
    }



