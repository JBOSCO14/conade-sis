<div class="container">
    <h2>Excluir turma</h2>
    <hr>
    <form action="<?=URL?>/TurmaController/excluirTurma/" method="post">
    <?php foreach ($dados as $row) { ?>
        <div class="form-group">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
            <h3><p>Deseja excluir a turma: <?php echo $row['nome_turma']; ?> ?</p></h3>
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-danger" type="submit" value="Sim, excluir" name="enviar">
            <a class="btn btn-secondary" href="<?=URL?>/turma/listar/">Não</a>
        </div>
        <?php } ?>
    </form>
</div>