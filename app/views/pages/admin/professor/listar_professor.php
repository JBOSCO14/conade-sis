<style>
    .cont{
        display: flex;
        align-items:flex-end;
        justify-content:end;
        text-align: right;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
    }
</style>
<div class="container">
    <h2>Professor</h2>
    <hr>
    <div class="form-group">
        <a class="btn btn-dark" href="">Cadastrar</a>
        <a class="btn btn-dark" href="<?=URL?>/professor/addLotacaoProfessor/">Lotação</a>
        <a class="btn btn-secondary" href="">Voltar</a>
        <div class="cont mt-2"><span>Total de registros: <?php echo count($dados); ?></span></div>
        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Id.</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!$dados){
                    echo '<tr><td colspan="2">Nenhum professor cadastrado</td></tr>';
                }else{
                    foreach($dados as $row){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome_prof']; ?></td>
                    <td><?php echo $row['cpf']; ?></td>
                    <td width="30%">
                        <a class="btn btn-secondary" href="">E</a>
                        <a class="btn btn-danger" href="">D</a>
                        <a class="btn btn-dark" href="<?=URL?>/professor/buscarLotacaoProfessorId/&id_prof=<?php echo $row['id']; ?>">L</a>
                    </td>
                </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
</div>