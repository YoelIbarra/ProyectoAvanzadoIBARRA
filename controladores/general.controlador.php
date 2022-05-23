<?php 

Class ControladorGeneral{

    public function getLogin(){
        include "vistas/login.php";
    }   
    public function get404(){
        include "vistas/error404.php";
    }
    public function getConstruccion(){
        include "vistas/EnConstruccion.php";
    }


}


