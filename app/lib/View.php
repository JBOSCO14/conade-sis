<?php

namespace app\lib;

class View {

    public static function getHeader(){
        require_once __DIR__ . '/../views/layout/header.php';
    }

    public static function getFooter(){
        require_once __DIR__ . '/../views/layout/footer.php';
    }

    public static function render($view, $dados = []){
        
        self::getHeader();
        $dados;
        require_once __DIR__ . '/../views/' . $view . '.php';
        self::getFooter();
    }

    public static function renderPrinter($view, $dados = []){
        
        $dados;
        require_once __DIR__ . '/../views/' . $view . '.php';
       
    }
}
