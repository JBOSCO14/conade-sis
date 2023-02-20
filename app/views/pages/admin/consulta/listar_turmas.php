<style>
    table{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        border: solid 1px;
        border-collapse: collapse;
        line-height: 12px;
    }

    thead th{
        border: solid 1px;
        background: #F0FFF0;
        text-align: center;
    }

    .td-center{
        border: solid 1px;
        text-align: center;
        vertical-align: middle;
    }

    .td-left{
        border: solid 1px;
        text-align: left;
        vertical-align: middle;
    }

    .button1{
        background-color: #1C1C1C;
        border: none;
        border-radius: 3px;
        color: white;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        width: 90px;
    }

    .button2{
        background-color: #800000;
        border: none;
        border-radius: 3px;
        color: white;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
    }

    .button3{
        background-color: #2F4F4F;
        border: none;
        border-radius: 3px;
        color: white;
        padding: 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        width: 70px;
    }


    a:hover {
    color: white;
    }

    .link1 {
        color: #191970;
    }



</style>
<div class="container">
<h3>Resultados</h3>
<hr>
<?php if(!$dados){ ?>
<div class="alert alert-danger" role="alert">
  <b>REGISTRO NÃO LOCALIZADO!</b>
  <hr>
  <a class="button1" href="<?=URL?>/consulta/consultarTurma/">Voltar</a>
</div>
<?php } else { 
    foreach ($dados as $data) { 
        $nomeTurma = $data['nome_turma'];
        $idTurma = $data['id_turma'];
        $idAluno = $data['id_aluno'];
    }
?>
<a class="button1" href="<?=URL?>/consulta/consultarTurma/">Voltar</a>
<a class="button2" href="<?=URL?>/consulta/confirmarDesenturmarTodos/&cod=<?php echo $idTurma; ?>">Desemturmar todos</a>
<a class="button1" href="<?=URL?>/consulta/numerarAuto/&cod=<?php echo $idTurma; ?>">Atualizar</a>
<div class="mt-2">
    <b>Turma: <?php echo $nomeTurma; ?></b>
    <p>Total de registros: <?php echo count($dados); ?></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th width="4%">Turma</th>
                <th width="3%">Id.</th>
                <th width="2%">Nº</th>
                <th width="40%">Nome</th>
                <th class="position" width="2%">Sit.</th>
                <th width="15%">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $row){?>
            <tr>
                <td class="td-center"><?=$row['nome_turma']?></td>
                <td class="td-center"><?=$row['id_aluno']?></td>
                <td class="td-center"><?=$row['numero']?></td>
                <td class="td-left"><?=$row['nome']?></td>
                <td class="td-center"><?=$row['sit_atual']?></td>
                <td class="td-center">
                    <a class="button3" href="<?=URL?>/consulta/VisualizarAluno/&id=<?php echo $row['id_aluno']; ?>&idTurma=<?php echo $row['id_turma']; ?>">Visualizar</a>
                    <a class="button2" href="<?=URL?>/consulta/confirmarRemover/&id=<?php echo $row['id_aluno']; ?>&idTurma=<?php echo $row['id_turma']; ?>">Remover</a>
                    <a class="button3" href="<?=URL?>/enturmacao/alterarNumero/&id_aluno=<?php echo $row['id_aluno']; ?>">Num.</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <?php } ?> 
</div>
<br>
<br>