<?php
namespace app\models;

use app\lib\Database;

class TurmaDao{

    public static function read(){

        $anoletivo = date('Y');

        $sql = "SELECT * FROM turma WHERE anoletivo = :anoletivo ORDER BY nome_turma";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->execute();
        $count = $query->rowCount();
        if($count > 0){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public static function create(){

        $nome = mb_strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $turno = filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_SPECIAL_CHARS);
        $nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_SPECIAL_CHARS);
        $etapa = mb_strtoupper(filter_input(INPUT_POST, 'etapa', FILTER_SANITIZE_SPECIAL_CHARS));
        $modalidade = mb_strtoupper(filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_SPECIAL_CHARS));
        $anoletivo = date('Y');
        $data_cad = date('Y-m-d H:i:s');

        $con = Database::getConnection();

        $sql = 'INSERT INTO turma (nome_turma,turno,nivel,etapa,modalidade,anoletivo,data_cad) VALUES (:nome_turma,:turno,:nivel,:etapa,:modalidade,:anoletivo,:data_cad)';

        $query = $con->prepare($sql);
        $query->bindValue(':nome_turma', $nome);
        $query->bindValue(':turno', $turno);
        $query->bindValue(':nivel', $nivel);
        $query->bindValue(':etapa', $etapa);
        $query->bindValue(':modalidade', $modalidade);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->bindValue(':data_cad', $data_cad);
        $res = $query->execute();

        if($res){
            return true;
        }else{
            throw new \PDOException("FALHA NA GRAVAÇÃO DO CADASTRO!");
            return false;
        }
    }

    public static function update(){

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = mb_strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $turno = filter_input(INPUT_POST, 'turno', FILTER_SANITIZE_SPECIAL_CHARS);
        $nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_SPECIAL_CHARS);
        $etapa = mb_strtoupper(filter_input(INPUT_POST, 'etapa', FILTER_SANITIZE_SPECIAL_CHARS));
        $modalidade = mb_strtoupper(filter_input(INPUT_POST, 'modalidade', FILTER_SANITIZE_SPECIAL_CHARS));
        $anoletivo = date('Y');
        $data_cad = date('Y-m-d H:i:s');

        $con = Database::getConnection();

        $sql = 'UPDATE turma SET nome_turma = :nome_turma, turno = :turno, nivel = :nivel, etapa = :etapa, modalidade = :modalidade, anoletivo = :anoletivo, data_cad = :data_cad WHERE id = :id';

        $query = $con->prepare($sql);
        $query->bindValue(':nome', $nome);
        $query->bindValue(':turno', $turno);
        $query->bindValue(':nivel', $nivel);
        $query->bindValue(':etapa', $etapa);
        $query->bindValue(':modalidade', $modalidade);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->bindValue(':data_cad', $data_cad);
        $query->bindValue(':id', $id);
        $res = $query->execute();

        if($res){
            return true;
        }else{
            throw new \PDOException("FALHA NA GRAVAÇÃO DO CADASTRO!");
            return false;
        }
    }

    public static function delete(){

        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $con = Database::getConnection();

        $sql = 'DELETE FROM turma WHERE id = :id';

        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $res = $query->execute();

        if($res){
            return true;
        }else{
            throw new \PDOException("FALHA NA GRAVAÇÃO DO CADASTRO!");
            return false;
        }
    }

    public static function getTurmaId($id){

        $sql = "SELECT * FROM turma WHERE id = :id";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();

        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

}