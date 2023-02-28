<div class="container">
    <h2>Pesquisar aluno</h2>
    <hr>
    <form action="<?=URL?>/aluno/buscar/" method="post">
        <div class="row">
            <div class="col-md-12">
                <label>Digite o nome do aluno</label>
                <input class="form-control" type="text" class="form-control" id="nome" name="nome">
            </div>
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-dark" type="submit" name="buscar" id="buscar" value="Buscar">
            <a class="btn btn-secondary" href="<?=URL?>">Voltar</a>
        </div>
    </form>
</div>
<br>
<br>
<br>