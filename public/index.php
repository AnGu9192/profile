<?php
ini_set("error_reporting",E_ALL);
ini_set("display_errors",1);
require_once '../Vendor/config/paths.php';
require_once VENDOR . 'App.php';

try {
    App::run();
}catch (Exception $e){

    $message = $e->getMessage();
    echo "<h1 style='color: red'>$message</h1>";
}
