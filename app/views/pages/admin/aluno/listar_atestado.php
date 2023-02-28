<div class="container">
    <h2>Atestados - ano letivo: <?php echo date('Y'); ?></h2>
    <hr>
    <div class="form-group">
        <a class="btn btn-dark" href="<?=URL?>/aluno/atestados/">Adicionar atestado</a>
        <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>
        <table class="table table-striped table hover">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Nome</th>
                    <th>Data ini.</th>
                    <th>Dias</th>
                    <th>Data fim </th>
                    <th>Filtrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(!$dados){
                    echo '<tr><td colspan="5">Nenhum dado cadastrado</td></tr>';
                }else{
                foreach ($dados as $row) { ?>
                <tr>
                    <td><?php echo date('d/m/Y', strtotime($row['data_cad'])); ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row['data_ini'])); ?></td>
                    <td><?php echo $row['dias']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row['data_fim'])); ?></td>
                    <td>
                        <a class="btn btn-secondary" href="<?=URL?>/aluno/filtrarAtestado/&id_aluno=<?php echo $row['id_aluno'];?>">Filtrar</a>
                    </td>
                    </td>
                </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>
<br>