<div class="container">
    <h2>Remover aluno</h2>
    <hr>
    <form action="<?=URL?>/aluno/deletarAtestado/" method="post">
    <?php foreach ($dados as $row) { ?>
        <div class="form-group">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id_doc']; ?>">
            <h3><p>Deseja excluir o atestado do aluno: <?php echo $row['nome']; ?>, referente a data: <?php echo date('d/m/Y', strtotime($row['data_ini'])); ?> ? </p></h3>
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-danger" type="submit" value="Sim, excluir" name="enviar">
            <a class="btn btn-secondary" href="<?=URL?>/aluno/listarAtestados/">Não</a>
        </div>
        <?php } ?>
    </form>
</div>
<br>
<br>
<br>