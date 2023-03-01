<div class="container">
    <h2>Ficha de notas</h2>
    <hr>
    <?php foreach ($dados as $lista) {
        $nome_turma = $lista['nome_turma'];
        $numero = $lista['numero'];
        $turno = $lista['turno'];
        $id_turma = $lista['id_turma'];
        $anoletivo = $lista['anoletivo'];
        }
    ?>
    <div class="form-group">
        <h3>Nome da turma: <?php echo $nome_turma; ?> - Turno: <?php echo $anoletivo; ?></h3>
    </div>
    <div class="form-group">
        <a class="btn btn-dark" href="<?=URL?>/relatorio/printFichaNota/&id_turma=<?php echo $id_turma; ?>" target="_blank">Imprimir</a>
        <a class="btn btn-secondary" href="<?=URL?>/relatorio/selecionaTurmaFichaNota/">Voltar</a>
    </div>
</div>
<br>
<br>
<br>