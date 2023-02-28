<div class="container">
    <h2>Enturmação</h2>
    <hr>
    <form action="<?=URL?>/enturmacao/getNaoEnturmados/" method="post">
        <div class="form-group">
            <label>Oferta</label>
            <select name="oferta_id" id="oferta_id" class="form-control">
            <option value="">selecione</option>
        <?php
        foreach ($dados as $row) { ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['oferta']; ?></option>
        <?php } ?>
            </select> 
        </div>
        <div class="form-group">
            <label>Turma</label>
            <select name="turma_id" id="turma_id" class="form-control">
                <option value="0">selecione...</option>
            </select>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Tipo de matrícula</label>
                <select name="tipo_matricula" id="tipo_matricula" class="form-control" required>
                    <option value="">selecione</option>
                    <option value="MATRICULA INICIAL">MATRÍCULA INICIAL</option>
                    <option value="ADMITIDO">ADMITIDO</option>
                </select>
            </div>
            <div class="col-md-6">
                <label>Tipo de movimento</label>
                <select name="tipo_movimento" id="tipo_movimento" class="form-control" required>
                    <option value="">selecione</option>
                    <option value="NOVATO">NOVATO</option>
                    <option value="VETERANO">VETERANO</option>
                </select>
            </div>
        <div class="form-group mt-2">
            <input class="btn btn-dark" type="submit" value="Buscar não enturmados" name="buscar" id="buscar">
            <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>
        </div>
    </form>
<script src="<?=JQUERY?>"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
		
<script type="text/javascript">
//quando o valor da combo de estado alterar ele vai executar essa linha
    $('#oferta_id').change(function () {
	//armazenando o valor do codigo do estado
        var valor = document.getElementById("oferta_id").value;        
		//chamada da controller e passando o ID estado via GET
        $.get('<?=URL?>/enturmacao/getOfertaId/&search=' + valor, function (data) {
            //procurando a tag OPTION com id da cidade e removendo 
            $('#turma_id').find("option").remove();
			//motando a combo da cidade
            $('#turma_id').append(data);
        });
    });
</script>
</div>
<br>
<br>
<br>