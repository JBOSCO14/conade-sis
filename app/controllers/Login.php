<?php
namespace app\controllers;

use app\lib\View;
use app\models\UsuarioDao;

class Login {

    private static function init(){
        if(session_start() !== PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    public static function getUsuarioLogado(){
        self::init();
        $usuario = self::isLogged() ? $_SESSION['usuario'] : null;
        return $usuario;
    }

    public static function login($id,$nome,$email){
        self::init();
        $_SESSION['usuario'] = [
            'id' => $id,
            'nome' => $nome,
            'email' => $email
        ];
        View::render('pages/home/home');
        exit;
    }

    public static function logout(){
        self::init();
        unset($_SESSION['usuario']);
        View::renderLogin('login/login');
        exit;
    }

    public static function isLogged(){
        self::init();
        return isset($_SESSION['usuario']['id']);
   }

   public static function requireLogin(){
        if(!self::isLogged()){
            //View::renderLogin('login/login');
            header('Location: '.URL.'/site/login/');
            exit;
        }
   }

   public static function requireLogout(){
        if(self::isLogged()){
            //View::renderLogin('login/login');
            header('Location: '.URL.'/site/login/');
            exit;
        }
   }

   public static function startSession($user){
        self::init();
        $_SESSION['id'] = $user->id;
        $_SESSION['nome'] = $user->nome;
        $_SESSION['email'] = $user->email;
        View::render('pages/home/home');
        exit;
   }

   public function validarLogin(){
    try {
        UsuarioDao::checkLogin($_POST);
        echo '<script>location.href=" ' . URL . '/site/home/"</script>';
    } catch (\PDOException $e) {
        echo '<script>alert("ERRO: USUÁRIO E/OU SENHA INCORRETOS!");</script>';
        echo '<script>location.href=" '. URL. '/login/index/"</script>';
    }
}

    
}