<?php
namespace app\controllers;

use app\lib\View;

class Site {

    public function home(){
        View::render('pages/home/home');
    }

    public function painelCadastro(){
        View::render('pages/admin/painel/painel_cadastro');
    }

}