<?php

class Session
{
    public static $instance;
    static public function getInstance(){
        if (!self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function __construct(){
        $this->start();
    }

    public function start()
    {
        session_start();

    }

    public function destroy()
    {
        session_destroy();
    }

    public function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public function get($key){
        if(!empty($_SESSION[$key])){
            return $_SESSION[$key];
        }
        return  false;
    }
}