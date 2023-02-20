<?php
$id_turma = $_SESSION['idTurma'];
?>
<div class="container">
    <h2>Visualizar aluno</h2>
    <hr>
    <form action="<?=URL?>/consulta/buscarTurma/" method="post">
    <input type="hidden" name="id_turma" value="<?php echo $id_turma; ?>">
    <?php foreach ($dados as $row) { ?>
    <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
    <div class="row">
        <div class="col-md-8">
            <label>Nome</label>
            <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
        </div>
        <div class="col-md-2">
            <label>Sexo</label>
            <input class="form-control" type="text" name="" id="" value="<?php echo $row['sexo']; ?>">
        </div>
        <div class="col-md-2">
            <label>Data de nascimento</label>
            <input class="form-control" type="date" name="datanasc" id="datanasc" maxlength="10" value="<?php echo $row['datanasc']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label for="">Nacionalidade</label>
            <input class="form-control" type="text" name="" id="" value="<?php echo $row['nacionalidade']; ?>">
        </div>
        <div class="col-md-6">
            <label>Naturalidade</label>
            <input class="form-control" type="text" name="naturalidade" id="naturalidade" value="<?php echo $row['naturalidade']; ?>">
        </div>
        <div class="col-md-2">
            <label>UF</label>
            <input class="form-control" type="text" name="" id="" value="<?php echo $row['uf_nat']; ?>">
        </div>
        <div class="col-md-2">
            <label>Cor/Raça</label>
            <input class="form-control" type="text" name="" id="" value="<?php echo $row['cor_raca']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label>Nome da mãe</label>
            <input class="form-control" type="text" name="nome_mae" id="nome_mae" value="<?php echo $row['nome_mae']; ?>">
        </div>
        <div class="col-md-6">
            <label>Nome do pai</label>
            <input class="form-control" type="text" name="nome_pai" id="nome_pai" value="<?php echo $row['nome_pai']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <label>Atendimento AEE</label>
            <input class="form-control" type="text" name="" id="" value="<?php echo $row['aluno_aee'];?>">
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
            <input class="form-control" type="text" name="uf" id="uf" value="<?php echo $row['uf_cid'];?>">
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
                <label>Identificação Única/Censo Escolar</label>
                <input class="form-control" type="text" name="idcenso" id="idcenso" maxlength="12" value="<?php echo $row['idcenso']; ?>">
            </div>
            <div class="col-md-6">
                <label>Matrícula/Sige Escola</label>
                <input class="form-control" type="text" name="sige" id="sige" maxlength="10" value="<?php echo $row['sige']; ?>">
            </div>
        </div>

    <div class="form-group mt-2">
        <input class="btn btn-secondary" type="submit" value="Voltar" name="enviar" id="enviar"> 
    </div>
    <?php } ?>
    </form>
</div>