<?php 

Class ControladorUsuario {

    public function getUsuario(){
        include "vistas/inicioUsuario.php";
    }   
    /*    - Para un futuro -
    public function controlUsuario($usuario,$contrasenia){
        
        return (
            $usuario == 'test' &&
            $contrasenia == 'test'
        );
    }*/
}