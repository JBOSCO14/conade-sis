<?php
namespace app\controllers;

use app\lib\View;
use app\models\AlunoDao;
use app\models\TurmaDao;

class Aluno{

    public function pesquisarAluno(){
        Login::requireLogin();
        View::render('pages/admin/aluno/pesquisar_aluno');
    }

    public function buscar(){
        Login::requireLogin();
        $dados = array();
        $dados = AlunoDao::buscarAluno($_POST);
        View::render('pages/admin/aluno/listar_resultado',$dados);
    }
    
    public function cadastrar(){
        Login::requireLogin();
        $check = Login::getLevelUser();
        if($check == 1){
        View::render('pages/admin/aluno/cadastrar_aluno');
        }else{
            echo '<script>alert("ERRO: SEU NÍVEL DE ACESSO NÃO PERMITE ESSA OPERAÇÃO!");</script>';
            echo '<script>location.href=" '.URL.'/site/home/"</script>';
        }
    }

    public function gravarCadastro(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunoDao::create($_POST);
            echo '<script>alert("REGISTRO GRAVADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/aluno/pesquisarAluno/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" ' . $e->getMessage() . ' ");</script>';
            echo '<script>location.href=" '. URL. '/aluno/pesquisarAluno/"</script>';
        }
    }

    public function editarCadastro(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunoDao::update($_POST);
            echo '<script>alert("REGISTRO ALTERADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/aluno/pesquisarAluno/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" ' . $e->getMessage() . ' ");</script>';
            echo '<script>location.href=" '. URL. '/aluno/pesquisarAluno/"</script>';
        }
    }

    public function deletarCadastro(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunoDao::delete($_POST);
            echo '<script>alert("REGISTRO DELETADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/aluno/pesquisarAluno/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" ' . $e->getMessage() . ' ");</script>';
            echo '<script>location.href=" '. URL. '/aluno/pesquisarAluno/"</script>';
        }
    }

    public function editar(){
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $dados = AlunoDao::getAlunoId($id);
        View::render('pages/admin/aluno/editar_aluno',$dados);
    }

    public function remover(){
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $dados = AlunoDao::getAlunoId($id);
        View::render('pages/admin/aluno/remover_aluno',$dados);
    }

    public function atestados(){
        Login::requireLogin();
        $dados = array();
        $dados = TurmaDao::read();
        //echo "<pre>"; print_r($dados); echo "</pre>"; exit;
        View::render('pages/admin/aluno/controle_atestado',$dados);
    }

    public function selectTurmasByCod(){
        if (isset($_GET['search'])) {
            $id = $_GET['search'];
            $dados = array();
            $dados = TurmaDao::getTurmasByCod($id);
            for ($i = 0; $i < count($dados); $i++) {
            // devolvendo a linha HTML para o javascript e montar no append
                echo "<option value='" . $dados[$i]['id_aluno'] . "' >" . $dados[$i]['nome'] . "</option>";
            }
        }
    }

    public function inserirAtestado(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunoDao::insertAtestado($_POST);
            echo '<script>alert("REGISTRO GRAVADO COM SUCESSO!");</script>';
            echo '<script>location.href=" '. URL. '/aluno/listarAtestados/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '. $e->getMessage().'");</script>';
            echo '<script>location.href=" '. URL. '/aluno/atestados/"</script>';
        }
    }

    public function listarAtestados() {
        Login::requireLogin();
        $dados = array();
        $dados = AlunoDao::buscarAtestados();
        //echo "<pre>"; print_r($dados); echo "</pre>"; exit;
        View::render('pages/admin/aluno/listar_atestado',$dados);
    }

    public function filtrarAtestado(){
        //echo "<pre>"; print_r($_GET); echo "</pre>"; exit;
        if(isset($_GET['id_aluno'])){
            $id = $_GET['id_aluno'];
        }
        Login::requireLogin();
        $dados = array();
        $dados = AlunoDao::buscarAtestadoByIdAluno($id);
        View::render('pages/admin/aluno/filtrar_atestado_aluno',$dados);
    }

    public function excluirAtestado(){
        //echo "<pre>"; print_r($_GET); echo "</pre>"; exit;
        if(isset($_GET['id_doc'])){
            $id = $_GET['id_doc'];
        }
        Login::requireLogin();
        $dados = array();
        $dados = AlunoDao::buscarAtestadoByIdDoc($id);
        View::render('pages/admin/aluno/deletar_atestado_aluno',$dados);
    }

    public function deletarAtestado(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            AlunoDao::deletarAtestadoById($_POST);
            echo '<script>alert("REGISTRO DELETADO COM SUCESSO!");</script>';
            echo '<script>location.href=" '. URL. '/aluno/listarAtestados/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '. $e->getMessage().'");</script>';
            echo '<script>location.href=" '. URL. '/aluno/listarAtestados/"</script>';
        }
    }


}