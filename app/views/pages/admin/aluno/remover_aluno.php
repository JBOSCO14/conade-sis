<div class="container">
    <h2>Remover aluno</h2>
    <hr>
    <form action="<?=URL?>/aluno/deletarCadastro/" method="post">
    <?php foreach ($dados as $row) { ?>
        <div class="form-group">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
            <h3><p>Deseja excluir o cadastro do aluno: <?php echo $row['nome']; ?> ?</p></h3>
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-danger" type="submit" value="Sim, excluir" name="enviar">
            <a class="btn btn-secondary" href="<?=URL?>">Não</a>
        </div>
        <?php } ?>
    </form>
</div>
<br>
<br>
<br>