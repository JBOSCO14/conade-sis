<?php 
if($dados){
    foreach ($dados as $data) { 
        $desc_turma = $data['nome_turma'];
    }
}
$file = "document_" . $desc_turma . "_" . date("Y_m_d_H_i_s") . ".xls";
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"{$file}\"" );
header ("Content-Description: PHP Generated Data" );
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
            text-align: center;
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
    <h3><?php echo utf8_decode("Escola Municipal de Ensino Fundamental São Bernardo - INEP: 23058919"); ?></h3>
    <h3><?php echo utf8_decode("Frequência de sala");?> - Ano letivo: <?php echo $anoletivo; ?></h3>
    <div>
    Turma: <?php echo utf8_decode($nomeTurma); ?> - Turno: <?php echo $turno; ?> - Nome do professor: ______________________________________________  -  <?php echo utf8_decode("Mês:");?> ________________
    </div>
    <br>
    <table>
        <thead>
           <tr>
            <th class="wdt-nr">No</th>
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
    <?php }  exit; ?>
    </div>
</div>