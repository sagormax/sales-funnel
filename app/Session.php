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
}