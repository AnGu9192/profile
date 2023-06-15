<?php
class Controller{
    public $layout = 'main';

    public function redirect($url){
        header("Location: /$url");die;
    }

    public function render($view,$params = []){
        ob_start();

        $viewFileName = $view . '.php';

        extract($params);

        $viewArr = explode('/',$view);
        if(count($viewArr) == 1){
            $viewFileName = App::$currentController .'/' .$view . '.php';

            if(file_exists(LAYOUTS . $this->layout . '.php')){
                if(file_exists(VIEWS . $viewFileName)){
                    include_once VIEWS . $viewFileName;
                    $content = ob_get_clean();
                    include_once LAYOUTS . $this->layout . '.php';
                }else{
                    throw new Exception("$viewFileName view file doesn't exist in " . VIEWS . "directory");
                }

            }else{
                throw new Exception("$this->layout.php layout file doesn't exist in " . LAYOUTS . "directory");
            }
        }

    }

    public function renderPartial($view,$params = []){

        $viewFileName = $view . '.php';
        extract($params);

        $viewArr = explode('/',$view);
        if(count($viewArr) == 1){
            $viewFileName = App::$currentController .'/' .$view . '.php';
        }

        include_once VIEWS . $viewFileName;
    }

    public function session() : object{
        return App::session();
    }

    public function request() : object{
        return App::request();
    }
}