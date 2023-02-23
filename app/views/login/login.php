<div class="container">
    <h2>Login</h2>
    <hr>
    <form action="<?=URL?>/login/validarLogin" method="post">
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="usuario" id="usuario" class="form-control">
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <div class="form-group mt-2">
            <input class="btn btn-dark" type="submit" value="Entrar" id="entrar" name="entrar">
    </form>
</div>