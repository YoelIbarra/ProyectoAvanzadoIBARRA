<?php 

Class ControladorInvitado {


    static public function ctrTraerRol($rol){
        $tabla = "rol";
        $item = "id_rol";

        $respuesta = ModeloInvitado::mdlBuscarEnDB($tabla,$item,$rol);

        return $respuesta;

    }

    static public function ctrTraerPersonaRol($rol){
        $tabla = "integrantes";
        $item = "id_rol";

        $respuesta = ModeloInvitado::mdlBuscarEnDB($tabla,$item,$rol);

        return $respuesta;
    }

    static public function ctrRegistrarInscripcion(){
        if(isset($_POST['DNI'])){

        $documento = $_POST['DNI'];
        $consultaDocumento = ModeloInvitado::mdlBuscarEnDB("inscripto","documento",$documento);
        if($consultaDocumento){
            echo '<script>

            if ( window.history.replaceState ) {

                window.history.replaceState( null, null, window.location.href );

            }
            </script>';
            echo '<div class="alerta alerta-error">El número de documento ya se se encuentra inscripto</div>';
        } else {

            $rutaarchivo = "files/inscripcion/".$_POST['nombre'].$_POST['apellido'].$_FILES['archivo']['name'];
            $tmparchivo = $_FILES['archivo']['tmp_name'];

            $rutaImagen = "img/fotoInscripto/".$_POST['nombre'].$_POST['apellido'].$_FILES['imagen']['name'];
            $tmpImagen = $_FILES['imagen']['tmp_name'];

            move_uploaded_file($tmpImagen,$rutaImagen);
            move_uploaded_file($tmparchivo,$rutaarchivo);
            $datos = array (
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "documento" => $documento,
                "telefono" => $_POST['tel'],
                "mail" => $_POST['mail'],
    
                "carrera" => $_POST['carrera'],
                "instituto" => $_POST['institucion'],
                "comprobante" => "files/inscripcion/".$_POST['nombre'].$_POST['apellido'].$_FILES['archivo']['name'],    
                "foto" => "img/fotoInscripto/".$_POST['nombre'].$_POST['apellido'].$_FILES['imagen']['name']
            );
            

            $respuesta = ModeloInvitado::mdlRegistrarInscripto($datos);
            return $respuesta;
        }
    }

    }}