<?php 
Class ControladorUsuario {

    static public function ctrTraerUsuario($item,$valor){
        $tabla = "usuario";

		$respuesta = ModeloUsuario::mdlBuscarUsuario($tabla, $item, $valor);

		return $respuesta;
    }

    static public function ctrValidarLogin(){

        if(isset($_POST['usuario'])){    
            $tabla = "usuario";
            $item = "usuario";
            $valor = $_POST['usuario'];

            $respuesta = ModeloUsuario::mdlBuscarUsuario($tabla, $item, $valor);
            if($respuesta['password'] == $_POST['contrasenia']){

            
				$_SESSION['usuario'] = $valor;

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?ruta=inscriptos";

				</script>';
			} else {

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

				</script>';

				echo '<div class="alert alert-danger">Error al logearse, el usuario o la contraseña no coinciden</div>';
			}
        }
    }

	static public function ctrTraerInscriptos(){
		$resultado = ModeloUsuario::mdlBuscarInscriptos(NULL);
		return $resultado;
	}
	static public function ctrTraerInscripto($id){
		$resultado = ModeloUsuario::mdlBuscarInscriptos($id);
		return $resultado;
	}
}