<?php 

class Utils {

    public static function sessionDelete($name){
        if(isset($_SESSION[$name])){
            unset($_SESSION[$name]);
            $_SESSION[$name] = null;
        }
        return $name;
    }
}