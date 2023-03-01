<style>
        table{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            border: solid 1px;
            border-collapse: collapse;
            line-height: 15px;
        }

         thead th{
            border: solid 1px;
            background: #F0FFF0;
            height: 20px;
        }

        tbody td{
            border: solid 1px;
            height: 15px;
            text-align: center;
        }

        .wdt-nome{
            width: 300px;
            text-align: center;
        }

        .wdt-nr{
            width: 25px;
            text-align: center;
        }

        .wdt-fd{
            width: 35px;
            text-align: center;
        }

        .wdt-ft{
            width: 50px;
        }
        .header{
            text-align: center;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            margin-top: 15px;
        }
        .name-class{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            margin-bottom: 25px;
            margin-top: 20px;
            text-align: center;
        }
        .disc{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            font-style: italic;
            margin-bottom: 15px;
            margin-top: 10px;
            text-align: center;
            margin-bottom: 25px;
            margin-top: 20px;
        }
        .td-1{
            text-align: left;
        }
        .info{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 0px;
            margin-top: 15px;
            text-align: center;
        }
        .tb-footer{
            border-collapse: collapse;
            border: 1px solid black;
            width: 710px;
        }
        .td-2{
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php foreach ($dados as $lista) {
        $nome_turma = $lista['nome_turma'];
        $numero = $lista['numero'];
        $turno = $lista['turno'];
        }
    ?>
    <div class="header">
        <span>ESCOLA MUNICIPAL DE ENSINO FUNDAMENTAL SÃO BERNARDO</span>
    </div>
    <div class="header">
        <span>FICHA DE NOTAS - ANO LETIVO 2023</span>
    </div>
    <div class="name-class">
        <span><b>Turma:</b> <?php echo $lista['nome_turma']; ?> | Ensino Fundamental | <b>Turno:</b>  <?php echo $lista['turno']; ?>   -  <b>Período: </b>(    )1º - (    )2º - (    )3º - (    )4º</span>
    </div>
    <div class="disc">
        <span>Componente curricular: _____________________________    Professor: ___________________________</span>
    </div>
    <div class="header">
        <span>ATIVIDADES AVALIATIVAS</span>
    </div>
    <table>
        <thead>
            <tr>
                <th class="wdt-nr" rowspan="2">Nº</th>
                <th class="wdt-nome" rowspan="2">Nome do aluno</th>
                <th class="wdt-fd"></th>
                <th class="wdt-fd"></th>
                <th class="wdt-fd"></th>
                <th class="wdt-fd">NP1</th>
                <th class="wdt-fd"></th>
                <th class="wdt-fd"></th>
                <th class="wdt-fd">NP2</th>
                <th class="wdt-fd">NB</th>
                <th class="wdt-fd">Int.</th>
                <th class="wdt-fd">MF</th>
            </tr>
            <tr>
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
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dados as $row) { ?>
            <tr>
                <td><?php echo $row['numero']; ?></td>
                <td class="td-1"><?php echo $row['nome']; ?></td>
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
    <div class="info">
        <span>OBS: A nota de intervenção substitui a nota de NP1 ou NP2.</span>
    </div>
    <div>
        <table class="tb-footer">
            <tr>
                <td class="td-2">PAR</td>
                <td>Participação</td>
                <td class="td-2">TD</td>
                <td>Trabalho em dupla</td>
                <td class="td-2">AI</td>
                <td>Atividade de intervenção</td>
                <td class="td-2">AP</td>
                <td>Avaliação parcial</td>
                <td class="td-2">AC</td>
                <td>Aula de campo</td>
            </tr>
            <tr>
                <td class="td-2">TI</td>
                <td>Trabalho individual</td>
                <td class="td-2">S</td>
                <td>Simulado</td>
                <td class="td-2">RED</td>
                <td>Redação</td>
                <td class="td-2">SM</td>
                <td>Seminário</td>
                <td class="td-2">AEC</td>
                <td>Atividade extra-classe</td>
            </tr>
            <tr>
                <td class="td-2">TG</td>
                <td>Trabalho em grupo</td>
                <td class="td-2">AR</td>
                <td>Atividades realizadas(sala)</td>
                <td class="td-2">AA</td>
                <td>Atividade avaliativa</td>
                <td class="td-2">AS</td>
                <td>Assiduidade</td>
                <td class="td-2">--</td>
                <td>---</td>
            </tr>
        </table>
    </div>
</body>
</html>