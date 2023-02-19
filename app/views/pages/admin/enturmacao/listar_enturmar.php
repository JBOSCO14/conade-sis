<?php
$idturma = $_SESSION['turma_cod'];
$tipoMat = $_SESSION['tipo_mat'];
$tipoMov = $_SESSION['tipo_mov'];

?>
<div class="container">
    <h3>Enturmar aluno</h3>
    <hr>
    <form action="<?=URL?>/enturmar/gravarEnturmacao/" method="post">
    <table class="table table-striped table-hover">
        <tr>
            <th>Id.</th>
            <th>Nome do aluno</th>
            <th>Data de nasc</th>
            <th>Ent.</th>
            <th><input class="btn btn-dark btn-sm" type="button" id="checkTudo" name="checkTudo" value="Todos" onclick="marcardesmarcar();"></th>
        </tr>
        <tbody>
            <?php

             if(!$dados){ 
                echo '<tr><td colspan="8">REGISTRO NÃO LOCALIZADO!</td></tr>';    
              }else{
                $count = 0;
                foreach ($dados as $lista) { ?>
            <tr>
                <td><?php echo $lista['id']; ?></td>             
                <td><?php echo $lista['nome']; ?></td>             
                <td><?= date('d/m/Y', strtotime($lista['datanasc'])) ?></td>             
                <td><?php echo $lista['enturmado']; ?></td>                         
                <td>
                <input class="form-check-input mt-0 marcar" type="checkbox" name="txtAluno[<?= $count ?>][id_aluno]" id="id_aluno" value="<?php echo $lista['id']; ?>" aria-label="Checkbox for following text input">
       </div>
            <input type="hidden" name="txtAluno[<?= $count ?>][id_turma]" id="id_turma" value="<?php echo $idturma; ?>">
            <input type="hidden" name="txtAluno[<?= $count ?>][tipoMat]" id="id_turma" value="<?php echo $tipoMat; ?>">
            <input type="hidden" name="txtAluno[<?= $count ?>][tipoMov]" id="id_turma" value="<?php echo $tipoMov; ?>">
            </td>
            </tr>
            <?php $count++; } ?>
        </tbody>
    </table>
    
    <hr>
    <input class="btn btn-dark" type="submit" name="enviar" value="Enturmar">  
    <?php } ?>
    <a class="btn btn-secondary" href="<?=URL?>/site/painelCadastro/">Voltar</a>
    </form>
    <script src="<?=JQUERY?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   
    <script>
        function marcardesmarcar(){
    $(".marcar").each(
        function() {
            if ($(this).prop("checked")) {
                $(this).prop("checked", false);
            } else {
                $(this).prop("checked", true);
            }
        }
    );
    }
    </script>
</div>