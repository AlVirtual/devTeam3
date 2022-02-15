<?php
        
        class Conexio{
            public static function conectar(){
                $conexion=new mysqli("localhost", "root", "", "tododb");
                $conexion->query("SET NAMES 'utf8'");
                if ($mysql->connect_error)
                    die('Error a la connexió de base de dades');

                return $conexion;
            }
        }
    
    ?>