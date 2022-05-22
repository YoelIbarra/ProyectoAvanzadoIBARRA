<?php

    class Conexion{

        public static function conectar(){
            $link = new PDO ("mysql:host=localhost; port=3306; dbname=ibarra-stevenyoel", 
                                "root", 
                                ""
                    );

            $link -> exec("set names utf8");
            return $link; 
        }
    }