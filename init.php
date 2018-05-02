<?php
require "vendor/autoload.php";

/**
 * Display Error reporting
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Session;

Session::sess_start();
Session::set_sess();