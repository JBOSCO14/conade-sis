<?php
namespace app\controllers;

use app\lib\View;
use app\models\UsuarioDao;

class Login {

    private static function init(){
        
        if(session_status() !== PHP_SESSION_ACTIVE){
			//inicia a sessão.
			session_start();
		}
        
    }

    public static function getUsuarioLogado(){
        self::init();
        $usuario = self::isLogged() ? $_SESSION['usuario'] : null;
        return $usuario;
    }

    public static function login($id,$nome,$email,$nivel){
        self::init();
        $_SESSION['usuario'] = [
            'id' => $id,
            'nome' => $nome,
            'email' => $email,
            'nivel' => $nivel
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
            View::renderLogin('login/login');
            //header('Location: '.URL.'/site/login/');
            exit;
        }
   }

   public static function requireLogout(){
        if(self::isLogged()){
            View::renderLogin('login/login');
            //header('Location: '.URL.'/site/login/');
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
    //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
    try {
        UsuarioDao::checkLogin($_POST);
        echo '<script>location.href=" ' . URL . '/site/home/"</script>';
    } catch (\PDOException $e) {
        echo '<script>alert(" ' . $e->getMessage() . ' ");</script>';
        echo '<script>location.href=" '. URL. '/site/login/"</script>';
    }

    }

    public static function getLevelUser(){
        $dados['user'] = array();
        $dados['user'] = self::getUsuarioLogado();
        return $dados['user']['nivel'];
    }

    
}