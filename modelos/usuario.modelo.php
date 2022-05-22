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

    }