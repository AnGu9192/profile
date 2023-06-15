<?php
require_once VENDOR . "File.php";
require_once VENDOR . "Request.php";
require_once VENDOR . "Session.php";
require_once dirname(__DIR__) . '/config/config.php';

class App {

    public static $currentController;
    public static $currentAction;

    public static function run(){

        $uri = $_SERVER["REQUEST_URI"];
        $uriArr = explode('/',$uri);
        $controller = DEFAULT_CONTROLLER;
        $action = DEFAULT_ACTION;
        if(!empty($uriArr[1])){
            $controller = $uriArr[1];
        }

        if(!empty($uriArr[2])){
            $action = $uriArr[2];
        }

        if(!empty($uriArr[3]) && is_numeric($uriArr[3])){
            $_GET['id'] = $uriArr[3];
        }

        for($i = 4; $i <= 20; $i+=2){
            if(!empty($uriArr[$i])){
                $_GET[$uriArr[$i-1]] = $uriArr[$i];
            }
        }


        self::$currentController = $controller;
        self::$currentAction = $action;


        $controllerName = ucfirst($controller) . 'Controller';
        $controllerFileName = $controllerName . '.php';
        $actionName = $action . 'Action';

        if(file_exists(CONTROLLERS . $controllerFileName)){
            require_once VENDOR . "Model.php";
            self::loadModels();
            require_once VENDOR . "Controller.php";
            require_once CONTROLLERS . $controllerFileName;
            if(class_exists($controllerName)){
                $conrollerObj = new $controllerName;
                if(method_exists($conrollerObj, $actionName)){
                    $conrollerObj->$actionName();
                }else{
                    throw new Exception("public function $actionName(){} method is not declared in $controllerName class");
                }

            }else{
                throw new Exception("$controllerName class is not declared");
            }
        }else{
            throw new Exception("$controllerFileName Controller class does not exists in " . CONTROLLERS . ' directory');
        }

    }

    public static function asset($filePath){
        echo "/$filePath";
    }

    public static function loadModels(){
        foreach (glob(MODELS . "*.php") as $model){
            include_once $model;
        }
    }

    public static function session(){
        return Session::getInstance();
    }
    public static function request(){
        return new Request();
    }
}