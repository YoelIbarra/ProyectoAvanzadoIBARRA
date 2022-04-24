<?php 

require_once "controladores/login.controlador.php";
require_once "controladores/invitado.controlador.php";
require_once "controladores/usuario.controlador.php";

//Instancio los objetos


$login = new ControladorLogin();



// Metodos

$login -> getLogin();


