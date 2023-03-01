<div class="container">
    <h2>Selecionar turma</h2>
    <hr>
    <form action="<?=URL?>/relatorio/getTurmaSelecionadaFichaNota/" method="post">
       <div class="row">
            <div class="col-md-2">
                <label>Ano letivo</label>
                <select name="cb_anoletivo" id="cb_anoletivo" class="form-control">
                    <option value="0">selecione...</option>
                    <option value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
            <div class="col-md-9">
                <label>Turma</label>
                <select class="form-control" name="id_turma" id="id_turma">
                    <option value="0">selecione...</option>
                </select>
            </div>
       </div>
       <div class="form-group mt-2">
            <input class="btn btn-dark" type="submit" value="Buscar" name="buscar" id="buscar">
            <a class="btn btn-secondary" href="<?=URL?>/site/painelConsulta/">Voltar</a>
       </div>
</form>
<script src="<?=JQUERY?>"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
		
<script type="text/javascript">
//quando o valor da combo de estado alterar ele vai executar essa linha
    $('#cb_anoletivo').change(function () {
	//armazenando o valor do codigo do estado
        var valor = document.getElementById("cb_anoletivo").value;
		//chamada da controller e passando o ID estado via GET
        $.get('<?=URL?>/enturmacao/pesqTurmaAnoLetivo/&search=' + valor, function (data) {
		//procurando a tag OPTION com id da cidade e removendo 
            $('#id_turma').find("option").remove();
			//motando a combo da cidade
            $('#id_turma').append(data);
        });
    });
</script>
</div>
