<link rel="stylesheet" href="<?=CSS_DOC?>">
<div class="container">
<?php
if($dados){
    foreach($dados as $row){
?>
    <div class="form-group">
        <p class="p-header"><span>ESTADO DO CEARÁ</span></p>
        <p class="p-header"><span>PREFEITURA MUNICIPAL DE BEBERIBE</span></p>
        <p class="p-header"><span>SECRETARIA MUNICIPAL DE EDUCAÇÃO</span></p>
    </div>
    <div class="form-group div0">
        <p class="p-header2"><span>ESCOLA MUNICIPAL DE ENSINO FUNDAMENTAL SÃO BERNARDO</span></p>
        <p class="p-header"><span>Recredenciada pelo Parecer CME nº 038/2018 - Validade: 31/12/2020</span></p>
    </div>
    <div class="form-group">
        <p class="p-header3"><span>CÓDIGO INEP: 23058919</span></p>
    </div>
    <div class="form-group div1">
        <p class="p-header2"><span>DECLARAÇÃO</span></p>
    </div>
    <div class="form-group div2">
        <p class="p-header4">
            <span>Declaramos para os devidos fins que o(a) aluno(a) <b><?php echo $row['nome']; ?></b> matriculado(a) nesta Unidade Escolar, no ano letivo de 2023, no <b><?php echo $row['nome_turma']; ?> | <?php echo $row['nivel']; ?> | Regular | <?php echo $row['turno']; ?></b>, sob número de matrícula: <b><?php echo $row['sige']; ?></b>.
            </span>
        </p>
    </div>
    <div class="form-group">
        <p class="p-header4"><span><b>Finalidade:</b></span></p>
        <div class="div3">
            <div>
                <div class="check"></div><div class="check1">Concluiu o Ensino Fundamental.</div>
            </div>
            <div class="op1">
                <div class="check">....</div><div class="check2">Solicitou nesta data sua transferência para outra Unidade Escolar com direito a matricular-se no(a) ___________________________________________. A transferência será entregue no prazo de 30 dias.</div>
            </div>
            <div>
                <div class="check"></div><div class="check1">Tem frequentado até a presente data.</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <p class="p-header4"><span><b>Foi considerado:</b></span></p>
        <div class="div3">
        <div>
            <div class="check"></div><div class="check3">Aprovado(a)</div>
            <div class="check"></div><div class="check3">Reprovado(a)</div>
            <div class="check"></div><div class="check3">Desistente</div>
            <div class="check"></div><div class="check3">Não se aplica</div>
        </div>
        </div>
    </div>
    <div class="form-group">
        <p class="p-header4"><span><b>Frequência:</b></span></p>
        <div class="div3">
        <div>
            <div class="check"></div><div class="check4">Superior a 75%</div>
            <div class="check"></div><div class="check4">Inferior a 75%</div>
            <div class="check"></div><div class="check4">Sem registro de frequência</div>
            <div class="check"></div><div class="check4">Não se aplica</div>
        </div>
        </div>
    </div>
    <div class="form-group">
        <p class="p-header4"><span><b>Efeitor desta declaração:</b></span></p>
        <div class="div3">
            <div>
                <div class="check"></div><div class="check4">Transferência</div>
                <div class="check"></div><div class="check4">Bolsa Família</div>
                <div class="check"></div><div class="check4">Carteira de Estudante</div>
                <div class="check"></div><div class="check4">Curso, Isenção</div>
            </div>
            <div>
                <div class="check"></div><div class="check4">Emprego, Estágio</div>
                <div class="check"></div><div class="check4">Comprovante de Matrícula</div>
                <div class="check"></div><div class="check4">Outros:___________________________</div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <p class="p-header4"><span><b>Dados adicionais do aluno:</b></span></p>
        <div class="div3">
            <div>
            <table>
                <thead>
                    <tr>
                        <th>Nascimento</th>
                        <th>Filiação</th>
                        <th>ID Censo</th>
                        <th>NIS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo date('d/m/Y', strtotime($row['datanasc'])); ?></td>
                        <td><?php echo $row['nome_mae']; ?>
                            <br />
                            <?php echo $row['nome_pai']; ?>
                        </td>
                        <td><?php echo $row['idcenso']; ?></td>
                        <td><?php echo $row['nis']; ?></td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div>
        <p class="p-header4"><span><b>Obs.:</b></span></p> 
        <div class="obs">____________________________________________________________________________________________________</div>
        <div class="obs">____________________________________________________________________________________________________</div>
        </div>
    </div>

    <div class="form-group">
        <div class="txt-span">
        <span>Pelo que firmamos a presente declaração.</span>
        </div>
    </div>

    <div class="form-group">
        <div class="txt-span-2">
           <p>BEBERIBE-CE, <?php echo strftime('%d de %B de %Y', strtotime(date('Y-m-d'))); ?>.</p> 
        </div>
    </div>

    <div class="form-group">
        <div class="txt-span-3">
           <p class="p-sign">_________________________________________________</p>
           <p class="p-sign">Assinatura do Diretor Escolar ou Sec. Escolar</p>
        </div>
    </div>

    <div class="form-group">
        <footer class="foot">
            <hr>
            <p class="p-sign2">Forquilha, Rodovia BR 304 Km 20 sn - CEP: 62840-000 - Beberibe - CE</p>
            <p class="p-sign2">E-mail: esaobernardo@gmail.com</p>
        </footer>
    </div>
    <?php }} else { 
    echo '<div class="alert alert-danger" role="alert">Registros não localizados!</div>';
    }; ?>
  </div>