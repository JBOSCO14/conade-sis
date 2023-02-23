<?php
namespace app\controllers;

use app\lib\View;
use app\controllers\Login;

class Site {

    public function home(){
        Login::requireLogin();
        View::render('pages/home/home');
    }

    public function login(){
        Login::requireLogout();
        View::renderLogin('login/login');
    }

    public function painelCadastro(){
        View::render('pages/admin/painel/painel_cadastro');
    }

    public function painelConsulta(){
        View::render('pages/admin/painel/painel_consulta');
    }

    public function painelRelatorio(){
        View::render('pages/admin/painel/painel_relatorio');
    }

}