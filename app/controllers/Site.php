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

    public function painelConsulta(){
        View::render('pages/admin/painel/painel_consulta');
    }

    public function painelRelatorio(){
        View::render('pages/admin/painel/painel_relatorio');
    }

}