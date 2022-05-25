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
	static public function ctrEliminarInscripto($id){
		$resultado =ModeloUsuario::mdlInactivarInscripcion($id);
		return $resultado;
	}
	static public function ctrActualizarUsuario($id,$resultado){

		if(isset($_POST['email'])){
			if($_POST['telefono'] != ""){
				$telefono = $_POST['telefono'];
			}else{
				$telefono = $resultado['telefono'];
			}
			if($_POST['email'] != ""){
				$email = $_POST['email'];
			}else{
				$email = $resultado['email'];
			}
			if($_POST['carrera'] != ""){
				$carrera = $_POST['carrera'];
			}else{
				$carrera = $resultado['carrera'];
			}
			if($_POST['instituto'] != ""){
				$instituto = $_POST['instituto'];
			}else{
				$instituto = $resultado['instituto'];
			}
			$valores = array (
				"id" => $id,
				"telefono" => $_POST['telefono'],
				"email" => $_POST['email'],
				"instituto" => $_POST['instituto'],
				"carrera" => $_POST['carrera']
			);
			$respuesta = ModeloUsuario::mdlModificarInscripcion($id, $valores);
			return $respuesta;
		}
		else{return null;}
	}
}