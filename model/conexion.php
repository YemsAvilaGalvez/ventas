<?php
class Conexion {
    static public function conectar(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=market-pos","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET names utf8"));
            return $conn;
        }catch(PDOException $e){
            echo 'Fallo la conexión: '.$e->getMessage();
        }
    }
}