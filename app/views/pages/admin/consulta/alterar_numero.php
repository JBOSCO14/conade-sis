<div class="container">
    <h2>Alterar número</h2>
    <hr>
    <?php
    if(!$dados){
        echo '<div class="alert alert-info">Nenhum dado foi encontrado!</div>';
    } else {
        foreach($dados as $row) { ?>
    <form action="<?=URL?>/enturmacao/gravarAlteraNumero/" method="post">
        <div class="row">
        <div class="col-md-1">
            <label>Id.</label>
            <input class="form-control" type="text" name="id_aluno" id="id_aluno" value="<?php echo $row['id_aluno']; ?>">
        </div>
        <div class="col-md-9">
            <label>Nome do aluno</label>
            <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
        </div>
        <div class="col-md-2">
            <label>Ano letivo</label>
            <input class="form-control" type="text" name="anoletivo" id="anoletivo" value="<?php echo $row['anoletivo']; ?>">
        </div>
        </div>
        <div class="row">
        <div class="col-md-1">
            <label>Id. Turma</label>
            <input class="form-control" type="text" name="id_turma" id="id_turma" value="<?php echo $row['id_turma']; ?>">
        </div>
        <div class="col-md-9">
            <label>Turma</label>
            <input class="form-control" type="text" name="nome_turma" id="nome_turma" value="<?php echo $row['nome_turma']; ?>">
        </div>
        <div class="col-md-2">
            <label>Número</label>
            <input class="form-control" type="text" name="numero" id="numero" maxlength="2" value="<?php echo $row['numero'];?>">
        </div>
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-dark" type="submit" name="enviar" id="enviar" value="Enviar">
            <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>
        </div>
    </form>
    <?php } ?>
</div>
<?php } ?>