<?php
namespace app\models;

use app\controllers\Login;
use app\lib\Database;

class UsuarioDao {

    public static function create(){

        $nome = strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = strtolower(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $confirmar = filter_input(INPUT_POST, 'confirmar', FILTER_SANITIZE_SPECIAL_CHARS);
        $nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_NUMBER_INT);

        if($senha == $confirmar){

            $pass = password_hash($senha, PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuario (nome, cpf, email, senha, nivel) VALUES (:nome, :cpf, :email, :senha, :nivel)";

            $con = Database::getConnection();

            $query = $con->prepare($sql);
            $query->bindValue(':nome', $nome);
            $query->bindValue(':cpf', $cpf);
            $query->bindValue(':email', $email);
            $query->bindValue(':senha', $pass);
            $query->bindValue(':nivel', $nivel);
            $query->execute();

            if ($query->rowCount() == 1) {
                return true;
            }else{
                throw new \PDOException("ERRO: Falha na gravação!");
                return false;
            }
        }else{
            throw new \PDOException("ERRO: As senhas não coincidem!");
            return false;
        }

        
    }

    public static function checkLogin(){

        $emailUsu = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

        $email = mb_strtolower($emailUsu);
        $pass = password_hash($senha, PASSWORD_DEFAULT);
        

        $sql = "SELECT * FROM usuario WHERE email = :email";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':email', $email);
        $query->execute();

        $count = $query->rowCount();
        
        if($count == 1){
            $resultado = $query->fetch(\PDO::FETCH_ASSOC);
            //echo "<pre>"; print_r($resultado['nome']); echo "</pre>"; exit;
            if(password_verify($senha, $resultado['senha']) == true){
                //foreach ($resultado as $row) {
                    //echo "<pre>"; print_r($resultado['senha']); echo "</pre>"; exit;
                    $id = $resultado['id'];
                    $usuario = $resultado['nome'];
                    $email = $resultado['email'];
                    Login::login($id, $usuario, $email);
                //}
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