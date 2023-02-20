<?php 
$file = "document_" . date('dmY',strtotime(date("Ymd"))) . "_" . date('His') . ".xls";
header("Content-type: application/vnd.ms-excel");
header("Content-type: application/force-download");
header("Content-Disposition: attachment; filename=\"{$file}\"");
header("Pragma: no-cache");
?>
<style>
    table{
        border-collapse: collapse;
        width: 100%;
        border: solid 1px;
    }
    th, td{
        border: solid 1px;
        border-collapse: collapse;
        padding: 5px;
    }
</style>
<div>
    <h2>Turmas</h2>
    <hr>
    <b>Ano Letivo: <?php echo date('Y'); ?></b>
    <div>
    <table>
        <thead>
            <tr>
                <th>Id.</th>
                <th>Nome</th>
                <th>Turno</th>
                <th>Mat.</th>
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
                <td><?= $row['id'] ?></td>
                <td><?= $row['nome_turma'] ?></td>
                <td><?= $row['turno'] ?></td>
                <td><?= $row['enturmados'] ?></td>
            </tr>
            <?php } ?>
            </tbody>
            </table>
            <hr>
            <b>Total de registros: <?php echo $total;  ?></b>
            <?php  } exit; ?>
    </div>
</div>
<br>