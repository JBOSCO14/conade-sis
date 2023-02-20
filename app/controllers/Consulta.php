<?php
namespace app\controllers;

use app\lib\View;
use app\models\ConsultaDao;
use app\models\EnturmacaoDao;

class Consulta{

    public function consultarTurma(){
        View::render('pages/admin/consulta/consultar_turma');
    }

    public function buscarTurma(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        unset($_SESSION['idTurma']);
        $dados = array();
        $dados = ConsultaDao::buscarTurmaId($_POST);
        View::render('pages/admin/consulta/listar_turmas',$dados);
    }

    public function visualizarAluno(){
        if(isset($_GET['id']) and ($_GET['idTurma'])){
            $id = $_GET['id'];
            session_start();
            $_SESSION['idTurma'] = $_GET['idTurma'];
        }
        $dados = array();
        $dados = ConsultaDao::getAlunoId($id);
        View::render('pages/admin/consulta/visualizar_aluno',$dados);
    }

    public function confirmarRemover(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            session_start();
            $_SESSION['idTurma'] = $_GET['idTurma'];
        }
        $dados = array();
        $dados = ConsultaDao::getAlunoId($id);
        View::render('pages/admin/consulta/remover_aluno',$dados);
    }

    public function removerAluno(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        $id_turma = $_POST['id_turma'];
        try {
            ConsultaDao::removeAluno($_POST['id']);
            echo '<script>alert("ALUNO REMOVIDO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/consulta/reloadTurma/&id_turma='.$id_turma.'"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '. $e->getMessage() . ' ");</script>'; 
            echo '<script>location.href=" ' . URL . '/consulta/buscarTurma/";</script>'; 
        }
    }

    public function reloadTurma(){
        //echo "<pre>"; print_r($_GET); echo "</pre>"; exit;
        unset($_SESSION['idTurma']);
        $dados = array();
        $dados = ConsultaDao::reloadTurmaId($_GET['id_turma']);
        View::render('pages/admin/consulta/listar_turmas',$dados);
    }

    public function confirmarDesenturmarTodos(){
        if(isset($_GET['cod'])){
            $id = $_GET['cod'];
        }
        $dados = $id;
        //$dados = (['id' => $id]);
        View::render('pages/admin/consulta/desenturmar_todos',$dados);
    }

    public function desenturmarTodos(){
        //echo "<pre>"; print_r($_GET['cod']); echo "</pre>"; exit;
        if(isset($_GET['cod'])){
            $id = $_GET['cod'];
        }
        try {
            ConsultaDao::desenturmarTodosId($id);
            echo '<script>alert("Todos desenturmados com sucesso!");refreshPage();</script>'; 
        } catch (\PDOException $e) {
            echo '<script>alert(" '. $e->getMessage().'");location.reload();</script>'; 
            echo '<script>location.reload();</script>'; 
        }
        
        $dados = array();
        $dados = ConsultaDao::reloadTurmaId($id);
        View::render('pages/admin/consulta/listar_turmas',$dados);
    }

    public function numerarAuto(){
        $id_turma = $_GET['cod'];
        try {
            EnturmacaoDao::autoNumber($id_turma);
            echo '<script>alert("REGISTRO GRAVADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/consulta/reloadTurma/&id_turma='.$id_turma.'"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '. $e->getMessage() . ' ");</script>'; 
            echo '<script>location.href=" ' . URL . '/consulta/reloadTurma/&id_turma='.$id_turma.'"</script>'; 
        }
    }

}