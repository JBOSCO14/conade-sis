<div class="container">
    <h2>Inserir atestado</h2>
    <hr>
    <form action="<?=URL?>/aluno/inserirAtestado/" method="post">
        <div class="row">
            <div class="col-md-6">
                <label>Turma</label>
                <select name="id_turma" id="id_turma" class="form-control" required>
                    <option value="">selecione a turma...</option>
                    <?php foreach ($dados as $row) {?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nome_turma']; ?></option>
                    <?php }?>
                </select>
            </div>
            <div class="col-md-6">
                <label>Aluno</label>
                <select name="id_aluno" id="id_aluno" class="form-control" required>
                    <option value="">selecione o aluno...</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <label>Data do atestado</label>
                <input type="date" name="data_ini" id="data_ini" maxlength="10" class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>Dias</label>
                <input type="number" name="dias" id="dias" maxlength="2" class="form-control" onchange="calculaDataFin()" required>
            </div>
            <div class="col-md-3">
                <label>Data final</label>
                <input type="date" name="data_fim" id="data_fim" readonly class="form-control" required>
            </div>
            <div class="col-md-3">
                <label>CID</label>
                <input class="form-control" type="text" name="cid" id="cid">
            </div>
            <input type="hidden" onclick="calculaDataFin()">
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-dark" type="submit" value="Enviar" id="enviar" name="enviar">
        </div>
        </div>
    </form>

    <script src="<?=JQUERY?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

    <script>
    //quando o valor da combo de estado alterar ele vai executar essa linha
        $('#id_turma').change(function () {
        //armazenando o valor do codigo do estado
            var valor = document.getElementById("id_turma").value;
            //chamada da controller e passando o ID estado via GET
            $.get('<?=URL?>/aluno/selectTurmasByCod/&search=' + valor, function (data) {
            //procurando a tag OPTION com id da cidade e removendo 
                $('#id_aluno').find("option").remove();
                //motando a combo da cidade
                $('#id_aluno').append(data);
            });
        });
    </script>

<script>
        function calculaDataFin() {
            var datainicial = document.getElementById("data_ini").value;
            var dias = parseInt(document.getElementById("dias").value);
            var partes = datainicial.split("-");
            var ano = partes[0];
            var mes = partes[1]-1;
            var dia = partes[2];

            datainicial = new Date(ano,mes,dia);
            datafinal = new Date(datainicial);
            datafinal.setDate(datafinal.getDate() + dias);

            var dd = ("0" + datafinal.getDate()).slice(-2);
            var mm = ("0" + (datafinal.getMonth()+1)).slice(-2);
            var y = datafinal.getFullYear();

            var dataformatada = y + '-' + mm + '-' + dd;
            document.getElementById('data_fim').value = dataformatada;
        }
    </script>
    
</div>
<br>
<br>
<br>