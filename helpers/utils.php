<?php 

class Utils
{

    public static function isAdmin()
    {
        if(!isset($_SESSION['admin'])) return false;
        return true;
    }

    public static function sessionDelete($session)
    {
        if(isset($_SESSION[$session])) {
            unset($_SESSION[$session]);
            $_SESSION[$session] = null;
        }
    }

}