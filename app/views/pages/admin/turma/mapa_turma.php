<?php
    if($dados){
        foreach ($dados as $lista) {
            $nome_turma = $lista['nome_turma'];
            $turno = $lista['turno'];
        }
    }
?>
<div class="container">
    <h2>Mapa de turma</h2>
    <hr>
    <div class="form-group">
        <h3>Turma: <?php echo $nome_turma . " - " . $turno; ?></h3><a class="btn btn-outline-secondary" href="<?=URL?>/turma/listFindMapTurma/">Voltar</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Id.Disc.</th>
                    <th>Componente curricular</th>
                    <th>Professor</th>
                    <th>C.H.S.</th>
                    <th>Ano Letivo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dados as $row) { ?>
                <tr>
                    <td><?php echo $row['id_disc']; ?></td>
                    <td><?php echo $row['componente_curricular']; ?></td>
                    <td><?php echo $row['nome_prof']; ?></td>
                    <td><?php echo $row['ch_semanal']; ?></td>
                    <td><?php echo $row['anoletivo']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<br>
<br>