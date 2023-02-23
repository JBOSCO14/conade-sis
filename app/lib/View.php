<?php

namespace app\lib;

use app\controllers\Login;

class View {

    public static function getHeader(){
        require_once __DIR__ . '/../views/layout/header.php';
    }

    public static function getFooter(){
        $dados['user'] = array();
        $dados['user'] = Login::getUsuarioLogado();
        require_once __DIR__ . '/../views/layout/footer.php';
    }

    
    public static function render($view, $dados = []){
        self::getHeader();
        $dados;
        require_once __DIR__ . '/../views/' . $view . '.php';
        self::getFooter();
    }




    //Renderiza apenas impressão.
    public static function renderPrinter($view, $dados = []){
        $dados;
        require_once __DIR__ . '/../views/' . $view . '.php';
       
    }



    //Renderiza apenas tela de login.
    public static function getHeaderLogin(){
        require_once __DIR__ . '/../views/layout/header_login.php';
    }

    public static function getFooterLogin(){
        require_once __DIR__ . '/../views/layout/footer_login.php';
    }

    public static function renderLogin($view, $dados = []){
        self::getHeaderLogin();
        $dados;
        require_once __DIR__ . '/../views/' . $view . '.php';
        self::getFooterLogin();
    }
}
