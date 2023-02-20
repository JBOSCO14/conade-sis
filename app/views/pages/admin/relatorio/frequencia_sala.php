<div class="container">
<style>
        table{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            border: solid 1px;
            border-collapse: collapse;
        }

        thead th{
            border: solid 1px;
            background: #F0FFF0;
        }

        tbody td{
            border: solid 1px;
        }

        .wdt-nome{
            width: 350px;
        }

        .wdt-nr{
            width: 30px;
            text-align: center;
        }

        .wdt-fd{
            width: 15px;
        }

        .wdt-ft{
            width: 50px;
        }

        .txt1{
            text-align: center;
        }

    </style>
    <h2>Frequência de sala</h2>
    <hr>
    <?php if(!$dados){ ?>
    <div class="alert alert-danger" role="alert">
    <b>REGISTRO NÃO LOCALIZADO!</b>
    <hr>
    <a class="button1" href="<?=URL?>/consulta/consultarTurma/">Voltar</a>
    </div>
    <?php } else { 
        foreach ($dados as $data) { 
            $nomeTurma = $data['nome_turma'];
            $idTurma = $data['id_turma'];
            $turno = $data['turno'];
            $anoletivo = $data['anoletivo'];
        }
    ?>
    <a class="btn btn-dark" href="<?=URL?>/relatorio/print/&id_turma=<?php echo $idTurma; ?>" target="_blank">Gerar PDF</a>
    <a class="btn btn-secondary" href="<?=URL?>/relatorio/selecionaTurma/">Voltar</a>
    <p>Turma: <?php echo $nomeTurma; ?> - Turno: <?php echo $turno; ?> - Ano Letivo: <?php echo $anoletivo; ?></p>
    <table>
        <thead>
           <tr>
            <th class="wdt-nr">Nº</th>
            <th class="wdt-nome">Nome do aluno</th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-fd"></th>
            <th class="wdt-ft">Faltas</th>
           </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $row) { ?>
            <tr>
                <td class="txt1"><?php echo $row['numero']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div>
    <?php } ?>
    <hr>
    </div>
</div>