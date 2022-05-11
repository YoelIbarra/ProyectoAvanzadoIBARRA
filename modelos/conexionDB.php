<?php

    class Conexion{

        public static function conectar(){
            $link = new PDO ("mysql:host=localhost; port=3306; dbname=ibarra-yoel", 
                                "root", 
                                ""
                    );

            $link -> exec("set names utf8");
            return $link; 
        }
    }