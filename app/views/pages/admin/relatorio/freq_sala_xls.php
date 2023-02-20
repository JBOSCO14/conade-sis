<?php
header ("Expires: Mon, 18 Nov 1985 18:00:00 GMT");
header ("Last-Modified: ".gmdate("D,d M YH:i:s")." GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=Dados.xls");
header ("Content-Type: text/html; charset=utf-8");
?>
<div class="container">
<style>
        table{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            border: solid 1px;
        }

        thead th{
            border: solid 1px;
            background: #F0FFF0;
        }

        tbody{
            border: solid 1px;
        }

        td{
            border: solid 1px;
        }


        .wdt-nome{
            width: 350px;
            border: solid 1px;
        }

        .wdt-nr{
            width: 35px;
            text-align: center;
        }

        .wdt-fd{
            width: 15px;
            border: solid 1px;
        }

        .wdt-ft{
            width: 50px;
            border: solid 1px;
        }

        .txt1{
            text-align: center;
            border: solid 1px;
        }

    </style>
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
    <br>
    <table>
        <thead>
           <tr>
            <th class="wdt-nr">N</th>
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
    </div>
</div>
