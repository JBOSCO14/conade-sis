<?php
namespace app\models;

use app\lib\Database;

class ConsultaDao{

    public static function getAlunoId($id){

        $sql = 'SELECT * FROM cad_aluno WHERE id = :id';

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id',$id);
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

    public static function buscarTurmaId(){

        $id_turma = filter_input(INPUT_POST, 'id_turma', FILTER_SANITIZE_NUMBER_INT);

        $sql = "SELECT
        ent.id_ent,
        ent.id_aluno,
        ent.id_turma,
        ent.numero,
        ent.tipo_matricula,
        ent.tipo_movimento,
        ent.sit_atual,
        ent.data_transf,
        alu.id,
        alu.nome,
        alu.sexo,
        alu.datanasc,
        alu.nome_mae,
        alu.nome_pai,
        alu.nacionalidade,
        alu.naturalidade,
        alu.uf_nat,
        alu.rg,
        alu.cpf,
        alu.aluno_aee,
        alu.tipo_aee,
        alu.endereco,
        alu.bairro,
        alu.cep,
        alu.cidade,
        alu.uf_cid,
        alu.ddd1,
        alu.contato1,
        alu.ddd2,
        alu.contato2,
        alu.idcenso,
        alu.sige,
        alu.transp,
        alu.enturmado,
        alu.datacad,
        alu.sus,
        alu.nis,
        tur.id,
        tur.nome_turma,
        tur.turno,
        tur.nivel,
        tur.etapa,
        ent.anoletivo FROM enturmacao ent
        INNER JOIN cad_aluno alu ON ent.id_aluno = alu.id
        INNER JOIN turma tur ON ent.id_turma = tur.id
        WHERE ent.id_turma = :id_turma ORDER BY ent.numero";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_turma', $id_turma);
        $query->execute();

        $count = $query->rowCount();
        if($count > 0) {
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
        }
    }

    public static function removeAluno($id){

        $sql = 'DELETE FROM enturmacao WHERE id_aluno = :id_aluno';

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_aluno',$id);
        $res = $query->execute();

        if($res) {
            self::alteraStatusAlunos($id);
            return true;
        }else{
            throw new \PDOException("Error Processing Request");
            return false;
        }
    }

    public static function reloadTurmaId($id){

        $sql = "SELECT
        ent.id_ent,
        ent.id_aluno,
        ent.id_turma,
        ent.numero,
        ent.tipo_matricula,
        ent.tipo_movimento,
        ent.sit_atual,
        ent.data_transf,
        alu.id,
        alu.nome,
        alu.sexo,
        alu.datanasc,
        alu.nome_mae,
        alu.nome_pai,
        alu.nacionalidade,
        alu.naturalidade,
        alu.uf_nat,
        alu.rg,
        alu.cpf,
        alu.aluno_aee,
        alu.tipo_aee,
        alu.endereco,
        alu.bairro,
        alu.cep,
        alu.cidade,
        alu.uf_cid,
        alu.ddd1,
        alu.contato1,
        alu.ddd2,
        alu.contato2,
        alu.idcenso,
        alu.sige,
        alu.transp,
        alu.enturmado,
        alu.datacad,
        alu.sus,
        alu.nis,
        tur.id,
        tur.nome_turma,
        tur.turno,
        tur.nivel,
        tur.etapa,
        ent.anoletivo FROM enturmacao ent
        INNER JOIN cad_aluno alu ON ent.id_aluno = alu.id
        INNER JOIN turma tur ON ent.id_turma = tur.id
        WHERE ent.id_turma = :id_turma ORDER BY ent.numero, alu.nome";

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

    public static function desenturmarTodosId($id){

        $sql = "SELECT * FROM enturmacao WHERE id_turma = :id_turma";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_turma',$id);
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($resultado as $row) {
            $idAluno = $row['id_aluno'];
            $anoLetivo = $row['anoletivo'];
            self::deletaRegistro($idAluno,$anoLetivo);
            self::alteraStatusAlunos($idAluno);
        }
        return true;
    }

    private static function deletaRegistro($id,$ano){

        $sql = "DELETE FROM enturmacao WHERE id_aluno = :id_aluno AND anoletivo = :anoletivo";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id_aluno',$id);
        $query->bindValue(':anoletivo',$ano);
        $query->execute();
    }

    private static function alteraStatusAlunos($id){

        $status = "N";

        $sql = 'UPDATE cad_aluno SET enturmado = :enturmado WHERE id = :id';

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':enturmado', $status);
        $query->bindValue(':id', $id);
        $query->execute();
    }

}