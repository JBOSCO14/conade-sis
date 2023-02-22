<link rel="stylesheet" href="<?=CSS_TABLE?>">
<div class="container">
    <h2>Turmas</h2>
    <hr>
    <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>
    <b>Ano Letivo: <?php echo date('Y'); ?></b>
    <div class="fluid-container mt-2">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th width="5%">Id.</th>
                <th>Nome</th>
                <th width="15%">Turno</th>
                <th width="10%">Mat.</th>
                <th width="30%">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 

            if(!$dados){ 
            echo '<tr><td colspan="8">REGISTRO NÃO LOCALIZADO!</td></tr>';    
            }else{
            $total = 0;
            foreach ($dados as $row) { $total += $row['enturmados']; ?>
            <tr>
                <td class="td-center"><?= $row['id'] ?></td>
                <td class="td-left"><?= $row['nome_turma'] ?></td>
                <td class="td-center"><?= $row['turno'] ?></td>
                <td class="td-center"><?= $row['enturmados'] ?></td>
                <td class="td-center">
                    <a class="button1 m-1" href="<?=URL?>/relatorio/carregarListaAluno/&id_turma=<?php echo $row['id']; ?>">Selecionar</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
            <hr>
            <b>Total de registros: <?php echo $total;  ?></b>
            <?php  } ?>
    </div>
</div>
<br>