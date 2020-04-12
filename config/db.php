<?php 

class Database {
    
    public static function connect() {
        try {
            $db = new PDO('mysql:host=localhost;dbname=portafolio', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $db->exec("SET CHARACTER SET utf8");
        } catch (PDOException $ex) {
            die('Error en la conexion: '. $ex->getMessage());        
        }
        return $db;
    }
}