<?php
namespace app\controllers;

use app\lib\View;
use app\models\EnturmacaoDao;

class Enturmacao {

    public function buscar() {
        $dados = array();
        $dados = EnturmacaoDao::getOferta();
        View::render('pages/admin/enturmacao/buscar_enturmar',$dados);
    }

    public function getOfertaId(){
        if (isset($_GET['search'])) {
            $oferta_id = $_GET['search'];
            $dados = array();
            $dados = EnturmacaoDao::getTurmaOfertaId($oferta_id);
            for ($i = 0; $i < count($dados); $i++) {
            // devolvendo a linha HTML para o javascript e montar no append
                echo "<option value='" . $dados[$i]['id'] . "' >" . $dados[$i]['nome_turma'] . "</option>";
            }
        }
    }

    public function getNaoEnturmados(){
        $oferta_id = filter_input(INPUT_POST,'oferta_id', FILTER_SANITIZE_NUMBER_INT);
        $turma_id = filter_input(INPUT_POST,'turma_id', FILTER_SANITIZE_NUMBER_INT);
        $tipo_mat = filter_input(INPUT_POST,'tipo_matricula', FILTER_SANITIZE_SPECIAL_CHARS);
        $tipo_mov = filter_input(INPUT_POST,'tipo_movimento', FILTER_SANITIZE_SPECIAL_CHARS);
        session_start();
        $_SESSION['turma_cod'] = $turma_id;
        $_SESSION['tipo_mat'] = $tipo_mat;
        $_SESSION['tipo_mov'] = $tipo_mov;
        $dados = array();
        $dados = EnturmacaoDao::buscarNaoEnturmados($oferta_id);
        View::render('pages/admin/enturmacao/listar_enturmar',$dados);
    }

    public function gravarEnturmacao(){
        //echo "<pre>"; print_r($_POST['txtAluno']); echo "</pre>"; exit;
        try {
            $dados = array();
            $dados = $_POST['txtAluno'];
            EnturmacaoDao::createEnturmacao($dados);
            echo '<script>alert("REGISTRO GRAVADO COM SUCESSO!");</script>';
            echo '<script>location.href=" '. URL . '/enturmacao/buscar/"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '.$e->getMessage().' ");</script>';
            echo '<script>location.href="'. URL . '/enturmacao/buscar/"</script>';
        }
    }

    public function pesqTurmaAnoLetivo(){
        if (isset($_GET['search'])) {
            $anoletivo = $_GET['search'];
            $dados = array();
            $dados = EnturmacaoDao::getTurmaAnoLetivo($anoletivo);
            for ($i = 0; $i < count($dados); $i++) {
            // devolvendo a linha HTML para o javascript e montar no append
                echo "<option value='" . $dados[$i]['id'] . "' >" . $dados[$i]['nome_turma'] . "</option>";
            }
        }
    }

    public function buscarTurma(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        Login::requireLogin();
        $dados = array();
        $dados = EnturmacaoDao::buscarTurmaId($_POST);
        View::render('pages/admin/consulta/listar_turmas',$dados);
    }

    public function alterarNumero(){
        //echo "<pre>"; print_r($_GET); echo "</pre>"; exit;
        if(isset($_GET['id_aluno'])){
            $id = $_GET['id_aluno'];
        }
        $dados = array();
        $dados = EnturmacaoDao::findAlunoById($id);
        View::render('pages/admin/consulta/alterar_numero',$dados);
    }

    public function gravarAlteraNumero(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        $id_turma = $_POST['id_turma'];
        try {
            EnturmacaoDao::alteraNumeroId($_POST);
            echo '<script>alert("REGISTRO GRAVADO COM SUCESSO!");</script>';
            echo '<script>location.href=" ' . URL . '/consulta/reloadTurma/&id_turma='.$id_turma.'"</script>';
        } catch (\PDOException $e) {
            echo '<script>alert(" '. $e->getMessage() . ' ");</script>'; 
            echo '<script>location.href=" ' . URL . '/consulta/reloadTurma/&id_turma='.$id_turma.'"</script>'; 
        }
    }

}