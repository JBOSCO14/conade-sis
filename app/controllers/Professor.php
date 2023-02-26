<?php
namespace app\controllers;

use app\lib\View;
use app\models\LotacaoDao;
use app\models\ProfessorDao;
use app\models\TurmaDao;

class Professor{
    
    public function listarProfessor(){
        Login::requireLogin();
        $dados = array();
        $dados = ProfessorDao::getListaProfessor();
        View::render('pages/admin/professor/listar_professor', $dados);
    }

    public function buscarLotacaoProfessorId(){
        if(isset($_GET['id_prof'])){
            $id_prof = $_GET['id_prof'];
        }
        Login::requireLogin();
        $dados = array();
        $dados = LotacaoDao::selectLotacaoProfessorById($id_prof);
        View::render('pages/admin/professor/lotacao_professor', $dados);
    }

    public function addLotacaoProfessor(){
        Login::requireLogin();
        $dados = array();
        $dados = ProfessorDao::getListaProfessorEF();
        View::render('pages/admin/professor/add_lotacao_professor', $dados);
    }

    public function getDisciplinaProf(){
        if (isset($_GET['search'])) {
            $id_turma = $_GET['search'];
            $dados = array();
            $dados = LotacaoDao::findDisciplinaById($id_turma);
            for ($i = 0; $i < count($dados); $i++) {
            // devolvendo a linha HTML para o javascript e montar no append
                echo "<option value='" . $dados[$i]['id'] . "' >" . $dados[$i]['componente_curricular'] . " (" . $dados[$i]['sigla'] . ") " . "</option>";
            }
        }
    }

    public function addLotacao(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        try {
            LotacaoDao::create($_POST);
            echo '<script>alert("REGISTRO GRAVADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/professor/buscarLotacaoProfessorId/&id_prof='.$_POST['id_prof'].'"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" ' . $e->getMessage() . ' ");</script>';
            echo '<script>location.href=" ' . URL . '/professor/addLotacaoProfessor/"</script>';
        }
    }

    public function removerLotacao(){
        $id = filter_input(INPUT_GET, 'id_disc', FILTER_SANITIZE_NUMBER_INT);
        $id_prof = filter_input(INPUT_GET, 'id_prof', FILTER_SANITIZE_NUMBER_INT);
        try {
            LotacaoDao::deleteLotacaoById($id);
            echo '<script>alert("Lotação removida com sucesso!");</script>';
            echo '<script>location.href=" '. URL. '/professor/buscarLotacaoProfessorId/&id_prof='.$id_prof.'"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '. $e->getMessage() . ' ");</script>'; 
            echo '<script>location.href=" '. URL. '/professor/buscarLotacaoProfessorId/&id_prof='.$id_prof.'"</script>';
        }
    }

}