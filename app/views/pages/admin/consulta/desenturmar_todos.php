<div class="container">
    <h2>Confirmação</h2>
    <?php 
    if(!$dados){ ?>
        <div class="alert alert-danger">
            Nenhum dado cadastrado!
        </div>
    <?php } else { ?>
    <hr>
    <h2>Deseja desenturmar todos?</h2>
    <br>
    <a class="btn btn-danger" href="<?=URL?>/consulta/desenturmarTodos/&cod=<?php echo $dados; ?>">Sim, confirmar</a>
    <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>
    <br>
    <br>
</div>
<?php }?>
