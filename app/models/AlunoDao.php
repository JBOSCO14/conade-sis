<?php
namespace app\models;

use app\lib\Database;

class AlunoDao{

    public static function create(){

        $nome = mb_strtoupper(filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $sexo = mb_strtoupper(filter_input(INPUT_POST,'sexo', FILTER_SANITIZE_SPECIAL_CHARS));
        $datanasc = filter_input(INPUT_POST,'datanasc', FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_raca = mb_strtoupper(filter_input(INPUT_POST,'cor_raca', FILTER_SANITIZE_SPECIAL_CHARS));
        $nome_mae = mb_strtoupper(filter_input(INPUT_POST,'nome_mae', FILTER_SANITIZE_SPECIAL_CHARS));
        $nome_pai = mb_strtoupper(filter_input(INPUT_POST,'nome_pai', FILTER_SANITIZE_SPECIAL_CHARS));
        $nacionalidade = mb_strtoupper(filter_input(INPUT_POST,'nacionalidade', FILTER_SANITIZE_SPECIAL_CHARS));
        $naturalidade = mb_strtoupper(filter_input(INPUT_POST,'naturalidade', FILTER_SANITIZE_SPECIAL_CHARS));
        $uf_nat = mb_strtoupper(filter_input(INPUT_POST,'uf_nat', FILTER_SANITIZE_SPECIAL_CHARS));
        $aluno_aee = mb_strtoupper(filter_input(INPUT_POST,'aluno_aee', FILTER_SANITIZE_SPECIAL_CHARS));
        $tipo_aee = mb_strtoupper(filter_input(INPUT_POST,'tipo_aee', FILTER_SANITIZE_SPECIAL_CHARS));
        $rg = mb_strtoupper(filter_input(INPUT_POST,'rg', FILTER_SANITIZE_SPECIAL_CHARS));
        $cpf = mb_strtoupper(filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_SPECIAL_CHARS));
        $endereco = mb_strtoupper(filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_SPECIAL_CHARS));
        $bairro = mb_strtoupper(filter_input(INPUT_POST,'bairro', FILTER_SANITIZE_SPECIAL_CHARS));
        $cep = mb_strtoupper(filter_input(INPUT_POST,'cep', FILTER_SANITIZE_SPECIAL_CHARS));
        $cidade = mb_strtoupper(filter_input(INPUT_POST,'cidade', FILTER_SANITIZE_SPECIAL_CHARS));
        $uf_cid = mb_strtoupper(filter_input(INPUT_POST,'uf_cid', FILTER_SANITIZE_SPECIAL_CHARS));
        $ddd1 = mb_strtoupper(filter_input(INPUT_POST,'ddd1', FILTER_SANITIZE_SPECIAL_CHARS));
        $contato1 = mb_strtoupper(filter_input(INPUT_POST,'contato1', FILTER_SANITIZE_SPECIAL_CHARS));
        $ddd2 = mb_strtoupper(filter_input(INPUT_POST,'ddd2', FILTER_SANITIZE_SPECIAL_CHARS));
        $contato2 = mb_strtoupper(filter_input(INPUT_POST,'contato2', FILTER_SANITIZE_SPECIAL_CHARS));
        $email = mb_strtolower(filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS));
        $nis = mb_strtoupper(filter_input(INPUT_POST,'nis', FILTER_SANITIZE_SPECIAL_CHARS));
        $bolsa = mb_strtoupper(filter_input(INPUT_POST,'bolsa', FILTER_SANITIZE_SPECIAL_CHARS));
        $restricao = mb_strtoupper(filter_input(INPUT_POST,'restricao', FILTER_SANITIZE_SPECIAL_CHARS));
        $tipo_rest = mb_strtoupper(filter_input(INPUT_POST,'tipo_rest', FILTER_SANITIZE_SPECIAL_CHARS));
        $sus = mb_strtoupper(filter_input(INPUT_POST,'sus', FILTER_SANITIZE_SPECIAL_CHARS));
        $transp = mb_strtoupper(filter_input(INPUT_POST,'transp', FILTER_SANITIZE_SPECIAL_CHARS));
        $idcenso = mb_strtoupper(filter_input(INPUT_POST,'idcenso', FILTER_SANITIZE_SPECIAL_CHARS));
        $sige = mb_strtoupper(filter_input(INPUT_POST,'sige', FILTER_SANITIZE_SPECIAL_CHARS));
        $res_anterior = mb_strtoupper(filter_input(INPUT_POST,'res_anterior', FILTER_SANITIZE_SPECIAL_CHARS));
        $sit_atual = mb_strtoupper(filter_input(INPUT_POST,'sit_atual', FILTER_SANITIZE_SPECIAL_CHARS));
        $oferta_id = mb_strtoupper(filter_input(INPUT_POST,'oferta', FILTER_SANITIZE_SPECIAL_CHARS));
        $enturmado = "N";
        $anoletivo = date('Y');
        $datacad = date('Y-m-d H:i:s');

        $sql = "INSERT INTO cad_aluno (nome,sexo,datanasc,cor_raca,nome_mae,nome_pai,nacionalidade,naturalidade,uf_nat,aluno_aee,tipo_aee,rg,cpf,endereco,bairro,cep,cidade,uf_cid,ddd1,contato1,ddd2,contato2,email,nis,bolsa,restricao,tipo_rest,sus,transp,idcenso,sige,res_anterior,sit_atual,oferta_id,enturmado,anoletivo,datacad) VALUES (:nome,:sexo,:datanasc,:cor_raca,:nome_mae,:nome_pai,:nacionalidade,:naturalidade,:uf_nat,:aluno_aee,:tipo_aee,:rg,:cpf,:endereco,:bairro,:cep,:cidade,:uf_cid,:ddd1,:contato1,:ddd2,:contato2,:email,:nis,:bolsa,:restricao,:tipo_rest,:sus,:transp,:idcenso,:sige,:res_anterior,:sit_atual,:oferta_id,:enturmado,:anoletivo,:datacad)";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':nome',$nome);
        $query->bindValue(':sexo',$sexo);
        $query->bindValue(':datanasc',$datanasc);
        $query->bindValue(':cor_raca',$cor_raca);
        $query->bindValue(':nome_mae',$nome_mae);
        $query->bindValue(':nome_pai',$nome_pai);
        $query->bindValue(':nacionalidade',$nacionalidade);
        $query->bindValue(':naturalidade',$naturalidade);
        $query->bindValue(':uf_nat',$uf_nat);
        $query->bindValue(':aluno_aee',$aluno_aee);
        $query->bindValue(':tipo_aee',$tipo_aee);
        $query->bindValue(':rg',$rg);
        $query->bindValue(':cpf',$cpf);
        $query->bindValue(':endereco',$endereco);
        $query->bindValue(':bairro',$bairro);
        $query->bindValue(':cep',$cep);
        $query->bindValue(':cidade',$cidade);
        $query->bindValue(':uf_cid',$uf_cid);
        $query->bindValue(':ddd1',$ddd1);
        $query->bindValue(':contato1',$contato1);
        $query->bindValue(':ddd2',$ddd2);
        $query->bindValue(':contato2',$contato2);
        $query->bindValue(':email',$email);
        $query->bindValue(':nis',$nis);
        $query->bindValue(':bolsa',$bolsa);
        $query->bindValue(':restricao',$restricao);
        $query->bindValue(':tipo_rest',$tipo_rest);
        $query->bindValue(':sus',$sus);
        $query->bindValue(':transp',$transp);
        $query->bindValue(':idcenso',$idcenso);
        $query->bindValue(':sige',$sige);
        $query->bindValue(':res_anterior',$res_anterior);
        $query->bindValue(':sit_atual',$sit_atual);
        $query->bindValue(':oferta_id',$oferta_id);
        $query->bindValue(':enturmado',$enturmado);
        $query->bindValue(':anoletivo',$anoletivo);
        $query->bindValue(':datacad',$datacad);
        $res = $query->execute();

        if($res){
            return true;
        }else{
            throw new \PDOException ("FALHA NA GRAVAÇÃO DE DADOS!");
            return false;
        }        
    }

    public static function read(){

        
    }

    public static function update(){

        $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $nome = mb_strtoupper(filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS));
        $sexo = mb_strtoupper(filter_input(INPUT_POST,'sexo', FILTER_SANITIZE_SPECIAL_CHARS));
        $datanasc = filter_input(INPUT_POST,'datanasc', FILTER_SANITIZE_SPECIAL_CHARS);
        $cor_raca = mb_strtoupper(filter_input(INPUT_POST,'cor_raca', FILTER_SANITIZE_SPECIAL_CHARS));
        $nome_mae = mb_strtoupper(filter_input(INPUT_POST,'nome_mae', FILTER_SANITIZE_SPECIAL_CHARS));
        $nome_pai = mb_strtoupper(filter_input(INPUT_POST,'nome_pai', FILTER_SANITIZE_SPECIAL_CHARS));
        $nacionalidade = mb_strtoupper(filter_input(INPUT_POST,'nacionalidade', FILTER_SANITIZE_SPECIAL_CHARS));
        $naturalidade = mb_strtoupper(filter_input(INPUT_POST,'naturalidade', FILTER_SANITIZE_SPECIAL_CHARS));
        $uf_nat = mb_strtoupper(filter_input(INPUT_POST,'uf_nat', FILTER_SANITIZE_SPECIAL_CHARS));
        $aluno_aee = mb_strtoupper(filter_input(INPUT_POST,'aluno_aee', FILTER_SANITIZE_SPECIAL_CHARS));
        $tipo_aee = mb_strtoupper(filter_input(INPUT_POST,'tipo_aee', FILTER_SANITIZE_SPECIAL_CHARS));
        $rg = mb_strtoupper(filter_input(INPUT_POST,'rg', FILTER_SANITIZE_SPECIAL_CHARS));
        $cpf = mb_strtoupper(filter_input(INPUT_POST,'cpf', FILTER_SANITIZE_SPECIAL_CHARS));
        $endereco = mb_strtoupper(filter_input(INPUT_POST,'endereco', FILTER_SANITIZE_SPECIAL_CHARS));
        $bairro = mb_strtoupper(filter_input(INPUT_POST,'bairro', FILTER_SANITIZE_SPECIAL_CHARS));
        $cep = mb_strtoupper(filter_input(INPUT_POST,'cep', FILTER_SANITIZE_SPECIAL_CHARS));
        $cidade = mb_strtoupper(filter_input(INPUT_POST,'cidade', FILTER_SANITIZE_SPECIAL_CHARS));
        $uf_cid = mb_strtoupper(filter_input(INPUT_POST,'uf_cid', FILTER_SANITIZE_SPECIAL_CHARS));
        $ddd1 = mb_strtoupper(filter_input(INPUT_POST,'ddd1', FILTER_SANITIZE_SPECIAL_CHARS));
        $contato1 = mb_strtoupper(filter_input(INPUT_POST,'contato1', FILTER_SANITIZE_SPECIAL_CHARS));
        $ddd2 = mb_strtoupper(filter_input(INPUT_POST,'ddd2', FILTER_SANITIZE_SPECIAL_CHARS));
        $contato2 = mb_strtoupper(filter_input(INPUT_POST,'contato2', FILTER_SANITIZE_SPECIAL_CHARS));
        $email = mb_strtolower(filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS));
        if($email == null){
            $email = str_replace(' ','',mb_strtolower($nome) . rand() . "@". rand(). ".com");
        }else{
            $email = mb_strtolower(filter_input(INPUT_POST,'email', FILTER_SANITIZE_SPECIAL_CHARS));
        }
        $nis = mb_strtoupper(filter_input(INPUT_POST,'nis', FILTER_SANITIZE_SPECIAL_CHARS));
        $bolsa = mb_strtoupper(filter_input(INPUT_POST,'bolsa', FILTER_SANITIZE_SPECIAL_CHARS));
        $restricao = mb_strtoupper(filter_input(INPUT_POST,'restricao', FILTER_SANITIZE_SPECIAL_CHARS));
        $tipo_rest = mb_strtoupper(filter_input(INPUT_POST,'tipo_rest', FILTER_SANITIZE_SPECIAL_CHARS));
        $sus = mb_strtoupper(filter_input(INPUT_POST,'sus', FILTER_SANITIZE_SPECIAL_CHARS));
        $transp = mb_strtoupper(filter_input(INPUT_POST,'transp', FILTER_SANITIZE_SPECIAL_CHARS));
        $idcenso = mb_strtoupper(filter_input(INPUT_POST,'idcenso', FILTER_SANITIZE_SPECIAL_CHARS));
        $sige = mb_strtoupper(filter_input(INPUT_POST,'sige', FILTER_SANITIZE_SPECIAL_CHARS));
        $res_anterior = filter_input(INPUT_POST,'res_anterior', FILTER_SANITIZE_SPECIAL_CHARS);
        $sit_atual = filter_input(INPUT_POST,'sit_atual', FILTER_SANITIZE_SPECIAL_CHARS);
        $oferta_id = mb_strtoupper(filter_input(INPUT_POST,'oferta', FILTER_SANITIZE_SPECIAL_CHARS));
        $enturmado = filter_input(INPUT_POST,'enturmado', FILTER_SANITIZE_SPECIAL_CHARS);
        $anoletivo = date('Y');
        $datacad = date('Y-m-d H:i:s');

        $sql = "UPDATE cad_aluno SET nome = :nome, sexo = :sexo,datanasc = :datanasc,
        cor_raca = :cor_raca, nome_mae = :nome_mae, nome_pai = :nome_pai, nacionalidade = :nacionalidade,
        naturalidade = :naturalidade, uf_nat = :uf_nat, aluno_aee = :aluno_aee, tipo_aee = :tipo_aee,
        rg = :rg, cpf = :cpf, endereco = :endereco, bairro = :bairro, cep = :cep, cidade = :cidade, uf_cid = :uf_cid, ddd1 = :ddd1, contato1 = :contato1, ddd2 = :ddd2, contato2 = :contato2,
        email = :email, nis = :nis, bolsa = :bolsa, restricao = :restricao, tipo_rest = :tipo_rest, sus = :sus,
        transp = :transp, idcenso = :idcenso, sige = :sige, res_anterior = :res_anterior, sit_atual = :sit_atual, oferta_id = :oferta_id, enturmado = :enturmado, anoletivo = :anoletivo, datacad = :datacad WHERE id = :id";

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':nome',$nome);
        $query->bindValue(':sexo',$sexo);
        $query->bindValue(':datanasc',$datanasc);
        $query->bindValue(':cor_raca',$cor_raca);
        $query->bindValue(':nome_mae',$nome_mae);
        $query->bindValue(':nome_pai',$nome_pai);
        $query->bindValue(':nacionalidade',$nacionalidade);
        $query->bindValue(':naturalidade',$naturalidade);
        $query->bindValue(':uf_nat',$uf_nat);
        $query->bindValue(':aluno_aee',$aluno_aee);
        $query->bindValue(':tipo_aee',$tipo_aee);
        $query->bindValue(':rg',$rg);
        $query->bindValue(':cpf',$cpf);
        $query->bindValue(':endereco',$endereco);
        $query->bindValue(':bairro',$bairro);
        $query->bindValue(':cep',$cep);
        $query->bindValue(':cidade',$cidade);
        $query->bindValue(':uf_cid',$uf_cid);
        $query->bindValue(':ddd1',$ddd1);
        $query->bindValue(':contato1',$contato1);
        $query->bindValue(':ddd2',$ddd2);
        $query->bindValue(':contato2',$contato2);
        $query->bindValue(':email',$email);
        $query->bindValue(':nis',$nis);
        $query->bindValue(':bolsa',$bolsa);
        $query->bindValue(':restricao',$restricao);
        $query->bindValue(':tipo_rest',$tipo_rest);
        $query->bindValue(':sus',$sus);
        $query->bindValue(':transp',$transp);
        $query->bindValue(':idcenso',$idcenso);
        $query->bindValue(':sige',$sige);
        $query->bindValue(':res_anterior',$res_anterior);
        $query->bindValue(':sit_atual',$sit_atual);
        $query->bindValue(':oferta_id',$oferta_id);
        $query->bindValue(':enturmado',$enturmado);
        $query->bindValue(':anoletivo',$anoletivo);
        $query->bindValue(':datacad',$datacad);
        $query->bindValue(':id',$id);
        $res = $query->execute();

        if($res){
            return true;
        }else{
            throw new \PDOException ("FALHA NA ALTERAÇÃO DOS DADOS!");
            return false;
        }
    }

    public static function delete(){

        $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
        
        
        $sql = "DELETE FROM cad_aluno WHERE id = :id";
        
        $con = Database::getConnection();
        
        $query = $con->prepare($sql);
        $query->bindValue(':id',$id);
        $res = $query->execute();
        
        if($res){
        return true;
        }else{
        throw new \PDOException ("FALHA NA EXCLUSÃO DE DADOS!");
        return false;
        }    
    }

    public static function buscarAluno(){

        $nome = mb_strtoupper(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));

        $con = Database::getConnection();

        $sql = 'SELECT * FROM cad_aluno WHERE nome LIKE :nome ORDER BY nome';
        $query = $con->prepare($sql);
        $query->bindValue(':nome', "%$nome%", \PDO::PARAM_STR);
        $query->execute();
        $count = $query->rowCount();
        if($count > 0){
            $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public static function getAlunoId($id){

        $sql = 'SELECT * FROM cad_aluno WHERE id = :id';

        $con = Database::getConnection();

        $query = $con->prepare($sql);
        $query->bindValue(':id',$id);
        $query->execute();
        $resultado = $query->fetchAll(\PDO::FETCH_ASSOC);
        return $resultado;
    }

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
}