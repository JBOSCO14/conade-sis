<link rel="stylesheet" href="<?=CSS_TABLE?>">
<div class="container">
    <h2>Turmas</h2>
    <hr>
    <a class="btn btn-dark" href="<?=URL?>/turma/cadastrar/">Cadastrar</a>
    <a class="btn btn-dark" href="<?=URL?>/turma/listFindMapTurma/">Mapa de turma</a>
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
                    <a class="button1 m-1" href="<?=URL?>/consulta/reloadTurma/&id_turma=<?php echo $row['id']; ?>">Visualizar</a>
                   <a class="button3 m-1" href="<?=URL?>/turma/editar/&id=<?php echo base64_encode($row['id']); ?>">Editar</a>
                   <a class="button2 m-1" href="<?=URL?>/turma/remover/&id=<?php echo base64_encode($row['id']); ?>">Deletar</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
            <hr>
            <b>Total de registros: <?php echo $total;  ?></b>
            <a class="btn btn-secondary" href="<?=URL?>/turma/listarExcel/">Gerar Excel</a>
            <?php  } ?>
    </div>
</div>
<br>