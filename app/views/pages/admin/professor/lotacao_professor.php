<div class="container">
    <?php 
            if($dados){
                foreach ($dados as $lista) {
                    $nome = $lista['nome_prof'];
                }
    ?>
    <h2>Lotação do professor: <?php echo $nome; ?></h2>
    <hr>
    <div class="form-group">
        <a class="btn btn-dark" href="<?=URL?>/professor/addLotacaoProfessor/">Adicionar lotação</a>
        <a class="btn btn-secondary" href="<?=URL?>/professor/listarProfessor/">Voltar</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Turno</th>
                    <th>Turma</th>
                    <th>Comp. Curricular</th>
                    <th>C.H.S.</th>
                    <th>C.H.A.</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(!$dados){
                    echo '<tr><td colspan="5">Registro não localizado!</td></tr>';
                }else{
                    $total = 0;
                    foreach ($dados as $row) { $total += $row['ch_sem']; ?>
                <tr>
                    <td><?php echo $row['turno']; ?></td>
                    <td><?php echo $row['nome_turma']; ?></td>
                    <td><?php echo $row['componente_curricular']; ?></td>
                    <td><?php echo $row['ch_sem']; ?></td>
                    <td><?php echo $row['ch_anual']; ?></td>
                    <td>
                        <a class="btn btn-outline-danger" href="<?=URL?>/professor/removerLotacao/&id_disc=<?php echo $row['id_disc']; ?>&id_prof=<?php echo $row['id_prof']; ?>">Deletar</a>
                    </td>
                </tr>
                <?php } }?>
            </tbody>
        </table>
        <?php echo "<b>C.H. Semanal: </b>" . $total; ?>
    </div>
    <?php } else { ?>
    <div class="alert alert-danger">
        Não há lotação informada!
        <a class="btn btn-danger" href="<?=URL?>/professor/listarProfessor/">Voltar</a>
    </div>
    <?php } ?>
</div>
<br>
<br>
<br>
<br>
