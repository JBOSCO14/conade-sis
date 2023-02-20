<?php

use app\models\AlunoDao;

$oferta = array();
$oferta = AlunoDao::getOferta();

?>
<div class="container">
    <h2>Editar aluno</h2>
    <hr>
    <form action="<?=URL?>/aluno/editarCadastro/" method="post">
    <?php foreach ($dados as $row) { ?>
    <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
    <div class="row">
        <div class="col-md-8">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
        </div>
        <div class="col-md-2">
            <label>Sexo</label>
            <select name="sexo" id="sexo" class="form-control">
                <option value="<?php echo $row['sexo']; ?>"><?php echo $row['sexo']; ?></option>
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMININO">FEMININO</option>
            </select>
        </div>
        <div class="col-md-2">
            <label>Data de nascimento</label>
            <input class="form-control" type="date" name="datanasc" id="datanasc" maxlength="10" value="<?php echo $row['datanasc']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label>Nacionalidade</label>
            <select name="nacionalidade" id="nacionalidade" class="form-control">
                <option value="BRASILEIRA">BRASILEIRA</option>
            </select>
        </div>
        <div class="col-md-6">
            <label>Naturalidade</label>
            <input class="form-control" type="text" name="naturalidade" id="naturalidade" value="<?php echo $row['naturalidade']; ?>">
        </div>
        <div class="col-md-2">
            <label>UF</label>
            <select name="uf_nat" id="uf_nat" class="form-control">
                <option value="<?php echo $row['uf_nat']; ?>"><?php echo $row['uf_nat']; ?></option>
                <option value="CE">CE</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
            </select>
        </div>
        <div class="col-md-2">
            <label>Cor/Raça</label>
            <select name="cor_raca" id="cor_raca" class="form-control">
                <option value="<?php echo $row['cor_raca']; ?>"><?php echo $row['cor_raca']; ?></option>
                <option value="NAO DECLARADA">NAO DECLARADA</option>
                <option value="BRANCA">BRANCA</option>
                <option value="PARDA">PARDA</option>
                <option value="PRETA">PRETA</option>
                <option value="INDIGENA">INDIGENA</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>Nome da mãe(filiação 1)</label>
            <input class="form-control" type="text" name="nome_mae" id="nome_mae" value="<?php echo $row['nome_mae']; ?>">
        </div>
        <div class="col-md-6">
            <label>Nome do pai(filiação 2)</label>
            <input class="form-control" type="text" name="nome_pai" id="nome_pai" value="<?php echo $row['nome_pai']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label>Atendimento AEE</label>
            <select class="form-control" name="aluno_aee" id="aluno_aee">
                <option value="<?php echo $row['aluno_aee']; ?>"><?php echo $row['aluno_aee']; ?></option>
                <option value="NAO">NÃO</option>
                <option value="SIM">SIM</option>
            </select>
        </div>
        <div class="col-md-4">
            <label>Tipo de necessidade especial</label>
            <input class="form-control" type="text" name="tipo_aee" id="tipo_aee" value="<?php echo $row['tipo_aee']; ?>">
        </div>
        <div class="col-md-3">
            <label>RG do aluno</label>
            <input class="form-control" type="text" name="rg" id="rg" value="<?php echo $row['rg']; ?>">
        </div>
        <div class="col-md-3">
            <label>CPF do aluno</label>
            <input class="form-control" type="text" name="cpf" id="cpf" maxlength="11" value="<?php echo $row['cpf']; ?>">
        </div>
    </div>

    <div class="row">
            <div class="col-md-8">
                <label>Endereco</label>
                <input class="form-control" type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']; ?>">
            </div>
            <div class="col-md-4">
                <label>Bairro</label>
                <input class="form-control" type="text" name="bairro" id="bairro" value="<?php echo $row['bairro']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label>CEP</label>
                <input class="form-control" type="text" name="cep" id="cep" maxlength="9" value="<?php echo $row['cep']; ?>">
            </div>
            <div class="col-md-7">
                <label>Cidade</label>
                <input class="form-control" type="text" name="cidade" id="cidade" value="<?php echo $row['cidade']; ?>">
            </div>
            <div class="col-md-2">
            <label>UF</label>
            <select name="uf_cid" id="uf_cid" class="form-control">
                <option value="<?php echo $row['uf_cid']; ?>"><?php echo $row['uf_cid']; ?></option>
                <option value="CE">CE</option>
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AM">AM</option>
                <option value="AP">AP</option>
                <option value="BA">BA</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MG">MG</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="PR">PR</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="RS">RS</option>
                <option value="SC">SC</option>
                <option value="SE">SE</option>
                <option value="SP">SP</option>
                <option value="TO">TO</option>
            </select>
        </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <label>DDD</label>
                <input class="form-control" type="text" name="ddd1" id="ddd1" maxlength="2" value="<?php echo $row['ddd1']; ?>">
            </div>
            <div class="col-md-2">
                <label>Contato 1</label>
                <input class="form-control" type="text" name="contato1" id="contato1" maxlength="10" value="<?php echo $row['contato1']; ?>">
            </div>
            <div class="col-md-1">
                <label>DDD</label>
                <input class="form-control" type="text" name="ddd2" id="ddd2" maxlength="2" value="<?php echo $row['ddd2']; ?>">
            </div>
            <div class="col-md-2">
                <label>Contato 2</label>
                <input class="form-control" type="text" name="contato2" id="contato2" maxlength="10" value="<?php echo $row['contato2']; ?>">
            </div>
            <div class="col-md-6">
                <label>E-mail</label>
                <input class="form-control" type="email" name="email" id="email" value="<?php echo $row['email']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>CadÚnico/NIS</label>
                <input class="form-control" type="text" name="nis" id="nis" maxlength="11" value="<?php echo $row['nis']; ?>">
            </div>
            <div class="col-md-6">
                <label>Recebe Bolsa Família</label>
                <select name="bolsa" id="bolsa" class="form-control">
                    <option value="<?php echo $row['bolsa']; ?>"><?php echo $row['bolsa']; ?></option>
                    <option value="SIM">SIM</option>
                    <option value="NAO">NÃO</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label>Cartão CNS</label>
                <input class="form-control" type="text" name="sus" id="sus" maxlength="15" value="<?php echo $row['sus']; ?>">
            </div>
            <div class="col-md-3">
                <label>Restrição alimentar</label>
                <select name="restricao" id="restricao" class="form-control">
                    <option value="<?php echo $row['restricao']; ?>"><?php echo $row['restricao']; ?></option>
                    <option value="SIM">SIM</option>
                    <option value="NAO">NÃO</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Tipo de restricao</label>
                <input class="form-control" type="text" name="tipo_rest" id="tipo_rest" value="<?php echo $row['tipo_rest']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Identificação Única/Censo Escolar</label>
                <input class="form-control" type="text" name="idcenso" id="idcenso" maxlength="12" value="<?php echo $row['idcenso']; ?>">
            </div>
            <div class="col-md-6">
                <label>Matrícula/Sige Escola</label>
                <input class="form-control" type="text" name="sige" id="sige" maxlength="10" value="<?php echo $row['sige']; ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Resultado anterior</label>
                <select name="res_anterior" id="res_anterior" class="form-control">
                    <option value="<?php echo $row['res_anterior']; ?>"><?php echo $row['res_anterior']; ?></option>
                    <option value="APR">A - APROVADO</option>
                    <option value="REP">R - REPROVADO</option>
                    <option value="TRF">T - TRANSFERIDO</option>
                    <option value="DES">D - DEIXOU DE FREQUENTAR</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Situação atual</label>
                <select name="sit_atual" id="sit_atual" class="form-control">
                <option value="<?php echo $row['sit_atual']; ?>"><?php echo $row['sit_atual']; ?></option>
                <option value="C">C - CURSANDO</option>
                <option value="T">T - TRANSFERIDO</option>
                <option value="D">D - DEIXOU DE FREQUENTAR</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <label>Oferta Escolar</label>
                <select name="oferta" id="oferta" class="form-control">
                <option value="<?php echo $row['oferta_id']; ?>"><?php echo $row['oferta_id']; ?></option>
                <?php foreach ($oferta as $lista) { ?>
                    <option value="<?php echo $lista['id']; ?>"><?php echo $lista['oferta']; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="col-md-4">
                <label>Ano letivo</label>
                <input class="form-control" type="text" name="anoletivo" id="anoletivo" maxlength="4" value="<?php echo date('Y'); ?>" value="<?php echo $row['anoletivo']; ?>">
            </div>
        </div>

    <div class="form-group mt-2">
        <input class="btn btn-dark" type="submit" value="Alterar" name="enviar" id="enviar"> 
        <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>   
    </div>
    <?php } ?>
    </form>
</div>