<?php
namespace app\controllers;

use app\lib\View;
use app\models\AlunoDao;

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
}