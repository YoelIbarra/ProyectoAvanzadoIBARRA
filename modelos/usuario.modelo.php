<?php
    require_once "conexionDB.php";
    class ModeloUsuario{

        static function mdlBuscarUsuario($tabla, $item, $valor){

            $stmt=NULL;
            if($item==NULL and $valor==NULL){
                $stmt = Conexion::conectar() -> prepare("SELECT * FROM $tabla");
                $stmt->execute();

                return $stmt -> fetchAll();
            }else{
                $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

                $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
    
                $stmt->execute();
                
                if($stmt->rowCount() > 1){
                    return $stmt->fetchAll();
                }else{
                    return $stmt->fetch();
                }
                
            }

            if($stmt){
                $stmt->close();
                $stmt = NULL;
            }
        }
        static function mdlBuscarInscriptos($valor){
            $tabla = "inscripto";
            $stmt = NULL;
            if(!$valor){ /*aca va a entrar solamente si viene desde el inicio de inscriptos*/
                $stmt = Conexion::conectar()-> prepare("SELECT id,nombre,apellido,documento,email FROM Inscripto WHERE activo=1");
                $stmt->execute();
                return $stmt->fetchAll();
            }else{
                $stmt = Conexion::conectar() -> prepare("SELECT nombre, apellido, documento, telefono, email, carrera, instituto, foto, comprobante, activo, fecha FROM $tabla WHERE id = :id;"); 
                $stmt->bindParam(":id", $valor, PDO::PARAM_STR);
                $stmt -> execute();
                return $stmt->fetch();
            }
            $stmt = NULL;
        }

        static public function mdlInactivarInscripcion($id){
            $tabla = "inscripto";
            $stmt = Conexion::conectar()->prepare(
                "UPDATE $tabla
                SET activo=0
                WHERE id=:id;");
            $stmt -> bindParam("id", $id, PDO::PARAM_INT);
            
            if($stmt -> execute()){
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt -> closeCursor();
            $stmt = NULL;
        }

        static public function mdlModificarInscripcion($id, $valores){
            $tabla = "inscripto";
            $stmt = Conexion::conectar()->prepare(
                "UPDATE $tabla
                SET telefono=:telefono , email=:email, carrera=:carrera , instituto=:instituto
                WHERE id=:id;");
            $stmt -> bindParam("id", $id, PDO::PARAM_INT);
            $stmt -> bindParam("telefono", $valores['telefono'], PDO::PARAM_INT);
            $stmt -> bindParam("email", $valores['email'], PDO::PARAM_STR);
            $stmt -> bindParam("carrera", $valores['carrera'], PDO::PARAM_STR);
            $stmt -> bindParam("instituto", $valores['instituto'], PDO::PARAM_STR);
            
            if($stmt -> execute()){
                return "ok";
            }else{
                print_r(Conexion::conectar()->errorInfo());
            }
            $stmt -> closeCursor();
            $stmt = NULL;
        }
    }