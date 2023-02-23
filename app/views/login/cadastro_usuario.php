<div class="container">
    <h2>Cadastro de usuário</h2>
    <hr>
    <form action="<?=URL?>/Usuario/post/" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome do usuário" required>
        </div>
        <div class="row">
        <div class="col-md-6">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" maxlength="11" placeholder="CPF do usuário" required>
        </div>
        <div class="col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail do usuário" required>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="senha do usuário" required>
        </div>
        <div class="col-md-4">
            <label for="confirmar">Confirmar Senha</label>
            <input type="password" class="form-control" name="confirmar" id="confirmar" placeholder="confirmar senha" required>
        </div>
        <div class="col-md-4">
            <label>Nível de acesso</label>
            <select name="nivel" id="nivel" class="form-control" required>
                <option value="">Selecione...</option>
                <option value="1">ADMINISTRADOR</option>
                <option value="2">OPERADOR</option>
            </select>
        </div>
        </div>
        <div class="form-group mt-2">
            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </div>
    </form>
</div>
<br>
<br>
<br>