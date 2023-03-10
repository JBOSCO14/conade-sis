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
            foreach ($resultado as $row) {
                $id_turma = $row['id'];
                self::selectTurmaById($id_turma);
            }
            return $resultado;
        }
    }

    private static function selectTurmaById($id_turma){

        $sql = "SELECT * FROM enturmacao WHERE id_turma = :id_turma";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_turma', $id_turma);
        $query->execute();
        $count = $query->rowCount();
        if($count > 0){
            self::updateCountTurma($id_turma,$count);
        }
    }

    private static function updateCountTurma($id_turma, $count){

        $sql = "UPDATE turma SET enturmados = :enturmados WHERE id = :id";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':enturmados', $count);
        $query->bindValue(':id', $id_turma);
        $query->execute();
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
            throw new \PDOException("FALHA NA GRAVA????O DO CADASTRO!");
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
            throw new \PDOException("FALHA NA GRAVA????O DO CADASTRO!");
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
            throw new \PDOException("FALHA NA GRAVA????O DO CADASTRO!");
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

    public static function mapTurma($id){

        $sql = "SELECT
        lot.id_lot,
        lot.id_turma,
        lot.id_prof,
        lot.id_disc,
        lot.ch_semanal,
        tur.id,
        tur.nome_turma,
        tur.turno,
        tur.nivel,
        tur.etapa,
        tur.modalidade,
        tur.oferta_id,
        tur.anoletivo,
        prof.id,
        prof.nome_prof,
        disc.id,
        disc.componente_curricular,
        lot.anoletivo FROM lotacao lot
        INNER JOIN turma tur ON lot.id_turma = tur.id
        INNER JOIN professor prof ON lot.id_prof = prof.id
        INNER JOIN disciplina disc ON lot.id_disc = disc.id
        WHERE lot.id_turma = :id_turma ORDER BY disc.componente_curricular ASC";


        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_turma', $id);
        $query->execute();

        $count = $query->rowCount();

        if($count > 0){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            throw new \PDOException("ERRO: Mapa de turma n??o encontrado!");
            return false;          
        }
    }

    public static function listarTurmaEF(){

        $anoletivo = date('Y');
        $nivel = "ENSINO FUNDAMENTAL";
        
        $sql = "SELECT * FROM turma WHERE anoletivo = :anoletivo AND nivel = :nivel ORDER BY nome_turma";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->bindValue(':nivel', $nivel);
        $query->execute();
        $count = $query->rowCount();
        if($count > 0){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($resultado as $row) {
                $id_turma = $row['id'];
                self::selectTurmaById($id_turma);
            }
            return $resultado;
        }
    }

    public static function getTurmasByCod($id){
        
        $sql = "SELECT
        ent.id_ent,
        ent.id_aluno,
        ent.id_turma,
        ent.numero,
        alu.id,
        alu.nome,
        tur.id,
        tur.nome_turma,
        tur.turno,
        tur.nivel,
        tur.etapa,
        ent.anoletivo FROM enturmacao ent
        INNER JOIN cad_aluno alu ON ent.id_aluno = alu.id
        INNER JOIN turma tur ON ent.id_turma = tur.id
        WHERE ent.id_turma = :id_turma ORDER BY alu.nome, ent.numero";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_turma', $id);
        $query->execute();

        $count = $query->rowCount();
        if($count > 0) {
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
        }
    }
}