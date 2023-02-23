<style>
    .logo{
        text-align: center;
    }
</style>
<div class="container">
    <div class="logo">
    <img src="<?=LOGO?>" width="400" height="150" alt="">
    </div>
    <hr>
    <form action="<?=URL?>/login/validarLogin" method="post">
        <div class="card">
            <h2 class="card-header">Login</h2>
            <div class="card-body">
                <div class="form-group">
                    <label>Usuário</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <input class="btn btn-dark" type="submit" value="Entrar" id="entrar" name="entrar">
                </div>
            </div>
        </div>
    </form>
</div>