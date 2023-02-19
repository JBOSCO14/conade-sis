<div class="container">
    <h2>Editar turma</h2>
    <hr>
    <form action="<?=URL?>/TurmaController/editarTurma/" method="post">
    <?php foreach ($dados as $row) { ?>
        <div class="row">
        <div class="col-md-9">
            <label for="nome">Nome</label>
            <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row['nome_turma']; ?>">
        </div>
        <div class="col-md-3">
            <label for="turno">Turno</label>
            <select name="turno" id="turno" class="form-control">
                <option value="<?php echo $row['turno']; ?>"><?php echo $row['turno']; ?></option>
                <option value="MANHA">MANHÃ</option>
                <option value="TARDE">TARDE</option>
            </select>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4">
            <label for="nivel">Nível</label>
            <select name="nivel" id="nivel" class="form-control">
                <option value="<?php echo $row['nivel']; ?>"><?php echo $row['nivel']; ?></option>
                <option value="EDUCACAO INFANTIL">EDUCAÇÃO INFANTIL</option>
                <option value="ENSINO FUNDAMENTAL">ENSINO FUNDAMENTAL</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="etapa">Etapa</label>
            <select name="etapa" id="etapa" class="form-control">
                <option value="<?php echo $row['etapa']; ?>"><?php echo $row['etapa']; ?></option>
                <option value="EDUCACAO INFANTIL">EDUCAÇÃO INFANTIL</option>
                <option value="ANOS INICIAIS">ANOS INICIAIS</option>
                <option value="ANOS FINAIS">ANOS FINAIS</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="modalidade">Modalidade</label>
            <select name="modalidade" id="modalidade" class="form-control">
                <option value="ENSINO REGULAR">ENSINO REGULAR</option>
            </select>
        </div>
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-dark" type="submit" value="Alterar" name="enviar">
            <a class="btn btn-secondary" href="<?=URL?>/turma/listar/">Voltar</a>
        </div>
        <?php } ?>
    </form>
</div>