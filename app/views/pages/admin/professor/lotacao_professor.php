<div class="container">
    <h2>Lotação do professor</h2>
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
                    foreach($dados as $row){
                ?>
                <tr>
                    <td><?php echo $row['turno']; ?></td>
                    <td><?php echo $row['nome_turma']; ?></td>
                    <td><?php echo $row['componente_curricular']; ?></td>
                    <td><?php echo $row['ch_sem']; ?></td>
                    <td><?php echo $row['ch_anual']; ?></td>
                    <td>
                        <a href="">Editar</a>
                        <a href="">Deletar</a>
                    </td>
                </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
</div>
