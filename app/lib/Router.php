<?php
namespace app\lib;

class Router {

    private $controller = 'Site';
    private $method = 'home';
    private $param = array();

    public function __construct(){

        $router = $this->url();

        $caminho = "../app/controllers/";
        $file = ucfirst($router[0]).'.php';
        //echo $caminho.$file;

        if(is_dir($caminho)){
            if(file_exists($caminho.$file)){
               $this->controller = $router[0];
               unset($router[0]);
            }
        }

        $class = "\\app\\controllers\\" . ucfirst($this->controller);
        $object = new $class;

        if(isset($router[1]) and method_exists($class, $router[1])){
            $this->method = $router[1];
            unset($router[1]);
        }

        $this->param = $router ? array_values($router): [];

        call_user_func_array([$object, $this->method], $this->param);

    }

    public function url(){

        $parse_url = explode('/', filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));

        return $parse_url;
    }

}