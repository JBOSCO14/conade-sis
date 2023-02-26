<?php

use app\models\TurmaDao;

    $turmas = array();
    $turmas = TurmaDao::listarTurmaEF();
?>
<div class="container">
    <h2>Adicionar lotação</h2>
    <hr>
    <form action="<?=URL?>/professor/addLotacao/" method="post">
        <b>Ano letivo: <?php echo date('Y'); ?></b>
        <div class="form-group">
            <label>Professor</label>
            <select name="id_prof" id="id_prof" class="form-control" required>
                <option value="0">selecione...</option>
                <?php
                    foreach ($dados as $row) {
                        echo "<option value='".$row['id']."'><label>".$row['nome_prof']."</label></option>";
                    }
                ?>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label>Turma</label>
                <select name="id_turma" id="id_turma" class="form-control" required>
                    <option value="0">selecione...</option>
                    <?php
                        foreach ($turmas as $turma) {
                            echo "<option value='".$turma['id']."'><label>".$turma['nome_turma']."</label></option>";
                        }
                    ?>
                </select>
            </div>
            <div class="col-md-6">
                <label>Componente curricular</label>
                <select name="id_disc" id="id_disc" class="form-control" required>
                    <option value="0">selecione...</option>
                </select>
            </div>
        </div>

        <div class="form-group mt-2">
            <input class="btn btn-dark" type="submit" value="Enviar" name="enviar" id="enviar">  
            <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>          
        </div>

        </div>
    </form>
    <script src="<?=JQUERY?>"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
		
<script type="text/javascript">
//quando o valor da combo de estado alterar ele vai executar essa linha
    $('#id_turma').change(function () {
	//armazenando o valor do codigo do estado
        var valor = document.getElementById("id_turma").value;
		//chamada da controller e passando o ID estado via GET
        $.get('<?=URL?>/professor/getDisciplinaProf/&search=' + valor, function (data) {
		//procurando a tag OPTION com id da cidade e removendo 
            $('#id_disc').find("option").remove();
			//motando a combo da cidade
            $('#id_disc').append(data);
        });
    });
</script>
</div>