<div class="container">
    <h2>Resultado da pesquisa</h2>
    <hr>
    <div class="form-group">
        <table class="table table-striped table table-hover">
            <thead>
                <tr>
                    <th>Id.</th>
                    <th>Nome</th>
                    <th>Data nasc.</th>
                    <th>Ent.</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody
                <?php
                if(!$dados) {
                    echo '<tr><td colspan="5">Nenhum dado cadastrado</td></tr>';
                } else {
                foreach ($dados as $row) { 
                ?>                
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nome']; ?></td>
                    <td><?php echo date('d/m/Y',strtotime($row['datanasc'])); ?></td>
                    <td><?php echo $row['enturmado']; ?></td>
                    <td>
                        <a class="btn btn-outline-dark" href="<?=URL?>/relatorio/printFicha/&id=<?php echo $row['id'];?>">Imprimir</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</div>