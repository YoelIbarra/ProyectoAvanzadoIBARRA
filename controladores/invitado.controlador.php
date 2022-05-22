<?php 

Class ControladorInvitado {


    static public function ctrTraerUsuario($item,$valor){
        $tabla = "usuario";

		$respuesta = ModeloInvitado::mdlSeleccionarusuario($tabla, $item, $valor);

		return $respuesta;
    } 

}