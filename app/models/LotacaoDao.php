<?php
namespace app\models;

use app\lib\Database;

class LotacaoDao {

    public static function create(){

        $id_prof = filter_input(INPUT_POST, 'id_prof', FILTER_SANITIZE_NUMBER_INT);
        $id_turma = filter_input(INPUT_POST, 'id_turma', FILTER_SANITIZE_NUMBER_INT);
        $id_disc = filter_input(INPUT_POST, 'id_disc', FILTER_SANITIZE_NUMBER_INT);

        $professor = self::getRegistroProfId($id_prof);

        foreach ($professor as $prof) {
            $vinculo = $prof['vinculo'];
            $ch_mensal = $prof['ch_mensal'];
            $ch_sem_prof = $prof['ch_semanal'];
            $ch_reg = $prof['ch_reg'];
            $ch_plan = $prof['ch_plan'];
            $ch_total = $prof['ch_total'];
            $ch_comp = $prof['ch_comp'];
        }

        $disciplinas = self::getDiscById($id_disc);

        foreach ($disciplinas as $disciplina) {
            $ch_sem_disc = $disciplina['ch_sem'];
            $ch_anual = $disciplina['ch_anual'];
        }
        
        $anoletivo = date('Y');
        $ident = $id_turma . $id_disc . $anoletivo;
        $data_cad = date('Y-m-d H:i:s');

        $dados = self::getIdentLotacao($ident);

        if(count($dados) == 0){
            $sql = "INSERT INTO lotacao (id_prof, id_turma, id_disc, ch_semanal, anoletivo, ident, data_cad) VALUES (:id_prof, :id_turma, :id_disc, :ch_semanal, :anoletivo, :ident, :data_cad)";

            $con = Database::getConnection();

            $query = $con->prepare($sql);
            $query->bindValue(':id_prof', $id_prof);
            $query->bindValue(':id_turma', $id_turma);
            $query->bindValue(':id_disc', $id_disc);
            $query->bindValue(':ch_semanal', $ch_sem_disc);
            $query->bindValue(':anoletivo', $anoletivo);
            $query->bindValue(':ident', $ident);
            $query->bindValue(':data_cad', $data_cad);
            $query->execute();

            if($vinculo == "TEMPORARIO"){
                $calc_ch = $ch_sem_disc * 5;
                $chSemanal = $ch_sem_prof + $ch_sem_disc;
                $chReg = $chSemanal;
                $chMensal = $ch_mensal + $calc_ch;
                $chTotal = $chMensal;
                self::updateCargaHoraria($id_prof,$chMensal,$chSemanal,$chTotal,$chReg);
            }
            $statusDisc = 1;
            self::statusDisc($id_disc,$statusDisc);
            
            return true;

        }else{
            throw new \PDOException("ERRO: ESSA LOTAÇÃO JÁ FOI INFORMADA!");
            return false;
        }
    }

    private static function getIdentLotacao($ident){
        $sql = "SELECT * FROM lotacao WHERE ident = :ident";
        $con = Database::getConnection();
        $query = $con->prepare($sql);
        $query->bindValue(':ident',$ident);
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function selectTurmaDisciplina(){

        $anoletivo = date('Y');

        $sql = "SELECT
        tur.id,
        tur.nome_turma,
        tur.turno,
        tur.nivel,
        tur.etapa,
        tur.modalidade,
        tur.oferta_id,
        disc.id,
        disc.componente_curricular,
        disc.ch_sem,
        disc.ch_anual,
        disc.oferta_id,
        tur.anoletivo FROM turma tur
        INNER JOIN disciplina disc ON tur.oferta_id = disc.oferta_id
        WHERE tur.anoletivo = :anoletivo";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->execute();

        $count = $query->rowCount();

        if($count > 0){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return false;
        }
    }

    public static function selectLotacaoProfessorById($id){

        $anoletivo = date('Y');

        $sql = "SELECT
        lot.id_lot,
        lot.id_prof,
        lot.id_turma,
        lot.id_disc,
        lot.ch_semanal,
        lot.ident,
        lot.data_cad,
        prof.id,
        prof.nome_prof,
        prof.cpf,
        prof.ch_semanal,
        prof.ch_mensal,
        prof.ch_reg,
        prof.ch_plan,
        tur.id,
        tur.nome_turma,
        tur.turno,
        tur.nivel,
        tur.etapa,
        tur.oferta_id,
        tur.anoletivo,
        disc.id,
        disc.componente_curricular,
        disc.sigla,
        disc.ch_sem,
        disc.ch_anual,
        disc.oferta_id,
        lot.anoletivo FROM lotacao lot
        INNER JOIN professor prof ON lot.id_prof = prof.id
        INNER JOIN turma tur ON lot.id_turma = tur.id
        INNER JOIN disciplina disc ON lot.id_disc = disc.id
        WHERE lot.id_prof = :id_prof AND lot.anoletivo = :anoletivo";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_prof', $id);
        $query->bindValue(':anoletivo', $anoletivo);
        $query->execute();

        $count = $query->rowCount();

        if($count > 0) {
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return false;
        }
    }

    public static function findDisciplinaById($id){
        $status = 0;
        $sql = "SELECT * FROM disciplina WHERE id_turma = :id_turma AND status = :status";
        $con = Database::getConnection();
        $query = $con->prepare($sql);
        $query->bindValue(':id_turma',$id);
        $query->bindValue(':status',$status);
        $res = $query->execute();
        if($res){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return false;
        }
    }

    private static function getDiscById($id){
        $sql = "SELECT * FROM disciplina WHERE id = :id";
        $con = Database::getConnection();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $res = $query->execute();
        if($res){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return false;
        }
    }

    private static function getRegistroProfId($id){
        $sql = "SELECT * FROM professor WHERE id = :id";
        $con = Database::getConnection();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $res = $query->execute();
        if($res){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return false;
        }
    }

    private static function updateCargaHoraria($id_prof,$chMensal,$chSemanal,$chTotal,$chReg){
        $sql = "UPDATE professor SET 
        ch_mensal = :ch_mensal,
        ch_semanal = :ch_semanal,
        ch_reg = :ch_reg,
        ch_total = :ch_total
        WHERE id = :id";
        $con = Database::getConnection();
        $query = $con->prepare($sql);
        $query->bindValue(':ch_mensal', $chMensal);
        $query->bindValue(':ch_semanal', $chSemanal);
        $query->bindValue(':ch_reg', $chReg);
        $query->bindValue(':ch_total', $chTotal);
        $query->bindValue(':id', $id_prof);
        $query->execute();
    }

    public static function deleteLotacaoById($id){

        $sql = "DELETE FROM lotacao WHERE id_disc = :id_disc";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_disc', $id);
        $query->execute();

        $count = $query->rowCount();
        $statusDisc = 0;
        if($count === 1){
            self::statusDisc($id,$statusDisc);
            return true;
        }else{
            return false;
        }

    }

    private static function statusDisc($id,$status){
        $sql = "UPDATE disciplina SET status = :status WHERE id = :id";
        $con = Database::getConnection();
        $query = $con->prepare($sql);
        $query->bindValue(':status', $status);
        $query->bindValue(':id', $id);
        $query->execute();
    }

}