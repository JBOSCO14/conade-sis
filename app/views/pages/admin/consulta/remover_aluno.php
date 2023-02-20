<?php
$id_turma = $_SESSION['idTurma'];
?>
<div class="container">
    <h2>Remover aluno</h2>
    <hr>
    <form action="<?=URL?>/consulta/removerAluno/" method="post">
    <input type="hidden" name="id_turma" value="<?php echo $id_turma; ?>">
    <?php foreach ($dados as $row) { ?>
        <div class="form-group">
        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
            <h3><p>Deseja remover o aluno: <?php echo $row['nome']; ?> desta Turma?</p></h3>
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-danger" type="submit" value="Sim, remover" name="enviar">
            <a class="btn btn-secondary" href="<?=URL?>/consulta/reloadTurma/&id_turma=<?php echo $id_turma; ?>">Não</a>
        </div>
        <?php } ?>
    </form>
</div>