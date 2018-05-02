<?php

namespace App;

class Session {
    public static function sess_start()
    {
        return session_start();
    }

    public static function sess_destroy()
    {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();

        return;
    }

    public static function set_sess()
    {
        return $_SESSION['new_sess'] = time();
    }

    public static function sess_create(Array $attr)
    {
        foreach( $attr as $key => $at ){
            $_SESSION[$key] = $at;
        }
        return;
    }

    public static function sess_get_fullname()
    {
        return isset($_SESSION['f_name']) ? $_SESSION['f_name']." ".$_SESSION['l_name'] : "";
    }

}