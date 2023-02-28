<div class="container">
    <br>
    <h2>Resultado da pesquisa</h2>
    <hr>
    <a class="btn btn-dark" href="<?= URL ?>/aluno/pesquisarAluno/">Nova pesquisa</a>
    <a class="btn btn-dark" href="<?= URL ?>/aluno/cadastrar/">Cadastrar</a>
    <a class="btn btn-secondary" href="<?= URL ?>">Voltar</a>
    <hr>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id.</th>
                <th>Nome</th>
                <th>Data de nasc</th>
                <th>Ent.</th>
                <th>Sit.</th>
                <th width="25%">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 

            if(!$dados){ 
              echo '<tr><td colspan="8">REGISTRO NÃO LOCALIZADO!</td></tr>';    
            }else{
            
            foreach ($dados as $row) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome'] ?></td>
                <td><?= date('d/m/Y', strtotime($row['datanasc'])) ?></td>
                <td><?= $row['enturmado'] ?></td>
                <td><?= $row['sit_atual'] ?></td>
                <td>
                    <a class="btn btn-secondary" href="<?=URL?>/aluno/editar/&id=<?php echo base64_encode($row['id']); ?>">E</a>
                    <a class="btn btn-danger" href="<?=URL?>/aluno/remover/&id=<?php echo base64_encode($row['id']); ?>">X</i></a>
                </td>
            </tr>
            <?php } } ?>
        </tbody>
    </table>

</div>
<br>
<br>
<br>