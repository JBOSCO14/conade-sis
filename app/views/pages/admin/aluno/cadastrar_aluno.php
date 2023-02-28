<?php

use app\models\AlunoDao;

$dados = array();
$dados = AlunoDao::getOferta();

?>
<div class="container">
<h2>Cadastrar Aluno</h2>
    <hr>
    <form action="<?=URL?>" method="post">
    <div class="row">
        <div class="col-md-8">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" id="nome" required>
        </div>
        <div class="col-md-2">
            <label>Sexo</label>
            <select name="sexo" id="sexo" class="form-control" required>
                <option value="">selecione</option>
                <option value="MASCULINO">MASCULINO</option>
                <option value="FEMININO">FEMININO</option>
            </select>
        </div>
        <div class="col-md-2">
            <label>Data de nascimento</label>
            <input class="form-control" type="date" name="datanasc" id="datanasc" maxlength="10" required>
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
            <input class="form-control" type="text" name="naturalidade" id="naturalidade" required>
        </div>
        <div class="col-md-2">
            <label>UF</label>
            <select name="uf_nat" id="uf_nat" class="form-control" required>
                <option value="">selecione</option>
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
            <select name="cor_raca" id="cor_raca" class="form-control" required>
                <option value="">selecione</option>
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
            <input class="form-control" type="text" name="nome_mae" id="nome_mae" required>
        </div>
        <div class="col-md-6">
            <label>Nome do pai(filiação 2)</label>
            <input class="form-control" type="text" name="nome_pai" id="nome_pai">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label>Atendimento AEE</label>
            <select class="form-control" name="aluno_aee" id="aluno_aee" required>
                <option value="">selecione</option>
                <option value="NAO">NÃO</option>
                <option value="SIM">SIM</option>
            </select>
        </div>
        <div class="col-md-4">
            <label>Tipo de necessidade especial</label>
            <input class="form-control" type="text" name="tipo_aee" id="tipo_aee">
        </div>
        <div class="col-md-3">
            <label>RG do aluno</label>
            <input class="form-control" type="text" name="rg" id="rg">
        </div>
        <div class="col-md-3">
            <label>CPF do aluno</label>
            <input class="form-control" type="text" name="cpf" id="cpf" maxlength="11" placeholder="somente números">
        </div>
    </div>

    <div class="row">
            <div class="col-md-8">
                <label>Endereco</label>
                <input class="form-control" type="text" name="endereco" id="endereco" required>
            </div>
            <div class="col-md-4">
                <label>Bairro</label>
                <input class="form-control" type="text" name="bairro" id="bairro" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label>CEP</label>
                <input class="form-control" type="text" name="cep" id="cep" maxlength="9" required>
            </div>
            <div class="col-md-7">
                <label>Cidade</label>
                <input class="form-control" type="text" name="cidade" id="cidade" required>
            </div>
            <div class="col-md-2">
            <label>UF</label>
            <select name="uf_cid" id="uf_cid" class="form-control" required>
                <option value="">selecione</option>
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
                <input class="form-control" type="text" name="ddd1" id="ddd1" maxlength="2" required>
            </div>
            <div class="col-md-2">
                <label>Contato 1</label>
                <input class="form-control" type="text" name="contato1" id="contato1" maxlength="10" required>
            </div>
            <div class="col-md-1">
                <label>DDD</label>
                <input class="form-control" type="text" name="ddd2" id="ddd2" maxlength="2">
            </div>
            <div class="col-md-2">
                <label>Contato 2</label>
                <input class="form-control" type="text" name="contato2" id="contato2" maxlength="10">
            </div>
            <div class="col-md-6">
                <label>E-mail</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>CadÚnico/NIS</label>
                <input class="form-control" type="text" name="nis" id="nis" maxlength="11">
            </div>
            <div class="col-md-6">
                <label>Recebe Bolsa Família</label>
                <select name="bolsa" id="bolsa" class="form-control" required>
                    <option value="">selecione</option>
                    <option value="SIM">SIM</option>
                    <option value="NAO">NÃO</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label>Cartão CNS</label>
                <input class="form-control" type="text" name="sus" id="sus" maxlength="15">
            </div>
            <div class="col-md-3">
                <label>Restrição alimentar</label>
                <select name="restricao" id="restricao" class="form-control" required>
                    <option value="">selecione</option>
                    <option value="SIM">SIM</option>
                    <option value="NAO">NÃO</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Tipo de restricao</label>
                <input class="form-control" type="text" name="tipo_rest" id="tipo_rest">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Identificação Única/Censo Escolar</label>
                <input class="form-control" type="text" name="idcenso" id="idcenso" maxlength="12">
            </div>
            <div class="col-md-6">
                <label>Matrícula/Sige Escola</label>
                <input class="form-control" type="text" name="sige" id="sige" maxlength="10">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Resultado anterior</label>
                <select name="res_anterior" id="res_anterior" class="form-control" required>
                    <option value="">selecione</option>
                    <option value="APR">A - APROVADO</option>
                    <option value="REP">R - REPROVADO</option>
                    <option value="TRF">T - TRANSFERIDO</option>
                    <option value="DES">D - DEIXOU DE FREQUENTAR</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Situação atual</label>
                <select name="sit_atual" id="sit_atual" class="form-control" required>
                <option value="C">C - CURSANDO</option>
                <option value="T">T - TRANSFERIDO</option>
                <option value="D">D - DEIXOU DE FREQUENTAR</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <label>Oferta Escolar</label>
                <select name="oferta" id="oferta" class="form-control" required>
                <option value="">selecione</option>
                <?php foreach ($dados as $row) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['oferta']; ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="col-md-4">
                <label>Ano letivo</label>
                <input class="form-control" type="text" name="anoletivo" id="anoletivo" maxlength="4" value="<?php echo date('Y'); ?>" required>
            </div>
        </div>

    <div class="form-group mt-2">
        <input class="btn btn-dark" type="submit" value="Enviar" name="enviar" id="enviar"> 
        <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>   
    </div>
    </form>
</div>
<br>
<br>
<br>