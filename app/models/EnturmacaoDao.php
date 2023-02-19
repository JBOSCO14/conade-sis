<?php
namespace app\models;

use app\lib\Database;

class EnturmacaoDao {

    public static function getOferta(){

        $sql = "SELECT * FROM oferta";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->execute();

        $count = $query->rowCount();

        if($count > 0){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public static function getTurmaOfertaId($id){

        $sql = "SELECT * FROM turma WHERE oferta_id = :oferta_id";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':oferta_id', $id);
        $query->execute();

        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function buscarNaoEnturmados($oferta){

        $status = "N";
        $anoletivo = date('Y');
        $oferta_id = $oferta;


        $sql = "SELECT * FROM cad_aluno WHERE enturmado = :enturmado AND oferta_id = :oferta_id AND anoletivo = :anoletivo ORDER BY nome";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':enturmado', $status);
        $query->bindValue(':oferta_id', $oferta_id);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function createEnturmacao($dados = array()){
        
        $conteudo = array();
        $conteudo = $dados;
        //echo "<pre>"; print_r($conteudo); echo "</pre>"; exit;
        $numero = 1;
        foreach ($conteudo as $row) {
            $id_aluno = $row['id_aluno'];
            if($id_aluno == null) {

            }else{
            $id_turma = $row['id_turma'];
            $tipo_mat = $row['tipoMat'];
            $tipo_mov = $row['tipoMov'];
            $sit_atual = "C";
            $anoletivo = date('Y');
            $data_transf = NULL;
            $data_mat = date('Y-m-d H:i:s');
            $inep = 23058919;

            $sql = "INSERT INTO enturmacao (id_aluno, id_turma, numero, tipo_matricula, tipo_movimento, sit_atual, data_transf, anoletivo, data_mat,inep) VALUES (:id_aluno, :id_turma, :numero, :tipo_matricula, :tipo_movimento, :sit_atual, :data_transf, :anoletivo, :data_mat, :inep)";

            $con = Database::getConnection();

            $query = $con->prepare($sql);
            $query->bindValue(':id_aluno', $id_aluno);
            $query->bindValue(':id_turma', $id_turma);
            $query->bindValue(':numero', $numero);
            $query->bindValue(':tipo_matricula', $tipo_mat);
            $query->bindValue(':tipo_movimento', $tipo_mov);
            $query->bindValue(':sit_atual', $sit_atual);
            $query->bindValue(':data_transf', $data_transf);
            $query->bindValue(':anoletivo', $anoletivo);
            $query->bindValue(':data_mat', $data_mat);
            $query->bindValue(':inep', $inep);
            $query->execute();

            self::alunoEnturmado($id_aluno);
        } $numero++; }

        unset(
            $_SESSION['turma_cod'],
            $_SESSION['tipo_mat'],
            $_SESSION['tipo_mov']
        );
        return true;
    }

    private static function alunoEnturmado($id){

        $status = "S";

        $sql = "UPDATE cad_aluno SET enturmado = :enturmado WHERE id = :id";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':enturmado', $status);
        $query->bindValue(':id', $id);
        $query->execute();

    }
}