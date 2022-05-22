<?php 

    require_once "conexionDB.php";

    class ModeloInvitado{

        static function mdlBuscarEnDB($tabla, $item, $valor){

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

        static public function mdlRegistrarInscripto($datos){
    
    
            $stmt = Conexion::conectar()->prepare(
                "INSERT INTO inscripto 
                (nombre, apellido, documento, email, telefono, carrera, instituto, foto, comprobante) VALUES (:nombre, :apellido, :documento, :email, :telefono, :carrera, :instituto, :foto, :comprobante);
                "
            );
    
    
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
            $stmt->bindParam(":documento", $datos["documento"], PDO::PARAM_INT);
            $stmt->bindParam(":email", $datos["mail"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_INT);
            $stmt->bindParam(":carrera", $datos["carrera"], PDO::PARAM_STR);
            $stmt->bindParam(":instituto", $datos["instituto"], PDO::PARAM_STR);
            $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
            $stmt->bindParam(":comprobante", $datos["comprobante"], PDO::PARAM_STR);
    
            if ($stmt->execute()) {
                return "ok";
            } else {
                print_r(Conexion::conectar()->errorInfo());
            }
    
            $stmt->closeCursor();
    
            $stmt = null;
        }
    }
