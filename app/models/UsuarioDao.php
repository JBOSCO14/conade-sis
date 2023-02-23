<?php
namespace app\models;

use app\controllers\Login;
use app\lib\Database;

class UsuarioDao {

    public static function checkLogin(){

        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $user = strtolower($usuario);
        $pass = password_hash($senha, PASSWORD_DEFAULT);
        

        $sql = "SELECT * FROM usuario WHERE email = :email";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':email', $user);
        $res = $query->execute();

        if($res){
            $resultado = $query->fetch(\PDO::FETCH_ASSOC);
            if(password_verify($resultado['senha'], $pass)){
                foreach ($resultado as $row) {
                    $id = $row['id'];
                    $usuario = $row['nome'];
                    $email = $row['email'];
                    Login::login($id, $usuario, $email);
                }
                return true;
            }else{
                throw new \PDOException("ERRO: Senha inválida");
                return false;
            }
        }else{
            throw new \PDOException("ERRO: email inválido!");
            return false;
        }

    }
}