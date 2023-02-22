<div class="container">
    <h2>Pesquisar aluno</h2>
    <hr>
    <form action="<?=URL?>/relatorio/buscarAlunoFichaNome/" method="post">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <input class="form-control me-2" type="search" name="nome" id="nome">
            <div class="form-group mt-2">
            <input class="btn btn-outline-dark"type="submit" value="Pesquisar" name="pesquisar" id="pesquisar">
            <a class="btn btn-outline-secondary" href="<?=URL?>">Voltar</a>
            </div>
        </div>
    </nav>
    </form>
</div>