<?php
namespace app\controllers;

use app\lib\View;
use app\models\TurmaDao;

class Turma{

    public function listar(){
        Login::requireLogin();
        $dados = array();
        $dados = TurmaDao::read();
        View::render('pages/admin/turma/listar_turma', $dados);
    }

    public function cadastrar(){
        Login::requireLogin();
        View::render('pages/admin/turma/cadastrar_turma');
    }

    public function gravarCadastro(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            TurmaDao::create($_POST);
            echo '<script>alert("REGISTRO GRAVADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/turma/listar/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" ' . $e->getMessage() . ' ");</script>';
            echo '<script>location.href=" '. URL. '/turma/listar/"</script>';
        }
    }

    public function editarCadastro(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            TurmaDao::update($_POST);
            echo '<script>alert("REGISTRO ALTERADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/turma/listar/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" ' . $e->getMessage() . ' ");</script>';
            echo '<script>location.href=" '. URL. '/turma/listar/"</script>';
        }
    }

    public function deletarCadastro(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            TurmaDao::delete($_POST);
            echo '<script>alert("REGISTRO DELETADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/turma/listar/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" ' . $e->getMessage() . ' ");</script>';
            echo '<script>location.href=" '. URL. '/turma/listar/"</script>';
        }
    }

    public function editar(){
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $dados = TurmaDao::getTurmaId($id);
        View::render('pages/admin/turma/editar_turma',$dados);
    }

    public function remover(){
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));
        $dados = TurmaDao::getTurmaId($id);
        View::render('pages/admin/turma/remover_turma',$dados);
    }

    public function listarExcel(){
        $dados = array();
        $dados = TurmaDao::read();
        View::render('pages/admin/turma/listar_turma_xls', $dados);
    }

    public function listFindMapTurma(){
        Login::requireLogin();
        $dados = array();
        $dados = TurmaDao::listarTurmaEF();
        View::render('pages/admin/turma/list_find_map', $dados);
    }

    public function getMapaTurma(){
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        Login::requireLogin();
        $dados = array();
        $dados = TurmaDao::mapTurma($id);
        View::render('pages/admin/turma/mapa_turma',$dados);
    }
}