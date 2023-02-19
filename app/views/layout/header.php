<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=APP_NAME?></title>

    <link rel="stylesheet" href="<?=CSS?>">

    <script type="text/javascript">

    window.history.forward();

    function noBack() { window.history.forward(); }

    </script>  

</head>
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=URL?>">Início</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="<?=URL?>/site/painelCadastro/">Cadastro</a>
                    <a class="nav-link active" aria-current="page" href="">Consulta</a>
                    <a class="nav-link active" aria-current="page" href="#">Acadêmico</a>
                    <a class="nav-link active" aria-current="page" href="#">Relatório</a>
                    <a class="nav-link active" aria-current="page" href="#">Sair</a>
                </div>
                </div>
            </div>
        </nav>
    </div>
    
