<?php
namespace app\lib;

class Router {

    private $controller = null;
    private $method = null;
    private $params = array();

    public function __construct(){
        
        $url = $this->getUrl();
        //echo "<pre>"; print_r($url); echo "</pre>"; exit;

        if($url){
            $caminho = "../app/controllers/";
            $file = ucfirst($url[0].'.php');
            if(is_dir($caminho)){
                if(file_exists($caminho.$file)){
                    $this->controller = $url[0];
                    $this->method = $url[1];
                }else{
                    $this->controller = 'Site';
                    $this->method = 'home';
                }
            }
        }
        
        $class = "\\app\\controllers\\". ucfirst($this->controller);
        $object = new $class();

        unset($url[0]);
        unset($url[1]);          
                    
        $this->params = $url ? array_values($url): [];

        call_user_func_array([$object, $this->method], $this->params);
        
    }

    
    public function getUrl(){
        $url = explode('/', filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $url;
    }

}