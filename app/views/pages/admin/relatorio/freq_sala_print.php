<div class="container">
<style>
        *{
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 20px;
            margin-right: 20px;
        }

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
            width: 35px;
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

        .rodape{
            text-align: center;
            font-size: 10px;
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
    <h3>Escola Municipal de Ensino Fundamental São Bernardo - INEP: 23058919</h3>
    <h3>Frequência de sala - Ano letivo: <?php echo $anoletivo; ?></h3>
    <span>
    Turma: <?php echo $nomeTurma; ?> - Turno: <?php echo $turno; ?> - Nome do professor: _________________________________________________  -  Mês: __________________
    </span>
    <br>
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
    <div class="rodape">
        Forquilha, Rodovia BR 304 Km 20 sn - CEP: 62840-000 - Beberibe - CE <br>
        E-mail: esaobernardo@gmail.com
    </div>
    </div>
</div>