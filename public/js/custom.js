async function pesquisar() {
    // Recuperar o id da categoria
    var oferta_id = document.getElementById("oferta_id").value;
    //console.log(oferta_id);

    // Fazer a requisição para o arquivo pesquisar.php
    var dados = await fetch("<?=URL?>/AlunoController/listarNaoEnturmados?oferta_id=" + oferta_id);

}