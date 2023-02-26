<?php
namespace app\models;

use app\lib\Database;

class ProfessorDao {

    public static function getListaProfessor(){
        $sql = "SELECT * FROM professor ORDER BY nome_prof";
        $con = Database::getConnection();
        $query = $con->prepare($sql);
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function getListaProfessorEF(){
        $statusProf = 1;
        $sql = "SELECT * FROM professor WHERE lotacao = :lotacao ORDER BY nome_prof";
        $con = Database::getConnection();
        $query = $con->prepare($sql);
        $query->bindValue(':lotacao', $statusProf);
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }
}