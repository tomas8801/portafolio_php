<?php 

class Utils
{

    public static function isAdmin()
    {
        if(isset($_SESSION['admin'])) {
            return true;
        }
        return false;
    }

    public static function sessionDelete($session)
    {
        if(isset($_SESSION[$session])) {
            unset($_SESSION[$session]);
            $_SESSION[$session] = false;
        }
    }

}