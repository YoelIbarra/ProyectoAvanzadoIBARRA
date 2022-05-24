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
                $_GET['ruta'] == "inscriptoVer" ||
                $_GET['ruta'] == "EnConstruccion" ||
                $_GET['ruta'] == "comision" ||
                $_GET['ruta'] == "inscripcion" ||
                $_GET['ruta'] == "comentarios" 
                ) {
                
                    include "vistas/" . $_GET['ruta'] . ".php";
                }else if( $_GET['ruta'] == "logout"){
                    if(!$_SESSION)
                        session_start(); 
                    session_destroy();
                    header("Location: index.php");
                    $general->getLogin();
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



