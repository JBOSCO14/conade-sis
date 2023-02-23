<?php
namespace app\controllers;

use app\lib\View;
use app\models\UsuarioDao;

class Usuario {

    public function cadastrar(){
        View::render('login/cadastro_usuario');
    }

    public function post(){
        try {
            UsuarioDao::create($_POST);
            echo '<script>alert("USUÁRIO GRAVADO COM SUCESSO!");</script>';
            echo '<script>location.href=" '.URL.'/usuario/cadastrar/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href=" '.URL.'/usuario/cadastrar/"</script>';
        }
    }
}