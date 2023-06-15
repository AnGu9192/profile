<?php

class Request
{
    public function get($key){

        if(!empty($_GET[$key])){
            return $this->sanitise($_GET[$key]);
        }
       return false;
    }

    public function post($key){
        if(!empty($_POST[$key])){
            return $this->sanitise($_POST[$key]);
        }
        return false;
    }

    public function sanitise($str){
        $str = trim($str);
        $str = htmlspecialchars($str);
        return $str;
    }


}

