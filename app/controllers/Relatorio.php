<?php
namespace app\controllers;

use app\lib\View;
use app\models\ConsultaDao;
use app\models\EnturmacaoDao;
use app\models\TurmaDao;
use Dompdf\Dompdf;

class Relatorio{

    public function selecionaTurma(){
        View::render('pages/admin/relatorio/seleciona_turma');
    }

    public function buscarTurma(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        $dados = array();
        $dados = ConsultaDao::buscarTurmaId($_POST);
        View::render('pages/admin/consulta/listar_turmas',$dados);
    }

    public function getTurmaSelecionada(){
        //echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
        $dados = array();
        $dados = EnturmacaoDao::buscarTurmaId($_POST);
        View::render('pages/admin/relatorio/frequencia_sala',$dados);
    }

    public function print(){
        $dados = array();
        $dados = ConsultaDao::reloadTurmaId($_GET['id_turma']);
        ob_start();
        View::renderPrinter('pages/admin/relatorio/freq_sala_print',$dados);
        $page = ob_get_contents();
        ob_end_clean();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($page);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("Frequencia_de_sala_" . date('Y-m-d-H-i-s') . "-" . rand() . ".pdf", array("Attachment" =>false));
        //$dompdf->stream("About.pdf", array("Attachment"=>0));
        //$fileUpload = $dompdf->output();
        //return $fileUpload;
    }

    public function exportXls(){
        $dados = array();
        $dados = ConsultaDao::reloadTurmaId($_GET['id_turma']);
        View::renderPrinter('pages/admin/relatorio/freq_sala_xls',$dados);
    }

    public function listarTurma(){
        $dados = array();
        $dados = TurmaDao::read();
        View::render('pages/admin/relatorio/listar_turma_dec', $dados);
    }

    //Métodos para declarações.

    public function carregarListaAluno(){
        //echo "<pre>"; print_r($_GET); echo "</pre>"; exit;
        //unset($_SESSION['idTurma']);
        $dados = array();
        $dados = ConsultaDao::reloadTurmaId($_GET['id_turma']);
        View::render('pages/admin/relatorio/listar_aluno_dec',$dados);
    }

    public function selectAluno(){
        //echo "<pre>"; print_r($_GET); echo "</pre>"; exit;
        $dados = array();
        $dados = EnturmacaoDao::selectAlunoById($_GET['id']);
        View::render('pages/admin/relatorio/select_aluno_dec',$dados);
    }

    public function printDec(){
        $dados = array();
        $dados = EnturmacaoDao::selectAlunoById($_GET['id']);
        $dompdf = new Dompdf();
        $options = $dompdf->getOptions();
        $options->set(array('isRemoteEnabled' => true));
        $options->set(array('allow_url_fopen' => true));
        $options->set('chroot', realpath($_SERVER['DOCUMENT_ROOT']));
        $dompdf->setOptions($options);
        ob_start();
        View::renderPrinter('pages/admin/relatorio/print',$dados);
        $page = ob_get_contents();
        ob_end_clean();
        $dompdf->loadHtml($page);
        $dompdf->setPaper('A4', 'portait');
        $dompdf->render();
        $dompdf->stream("document_" . date('Y-m-d-H-i-s') . "-" . rand() . ".pdf", array("Attachment" =>true));
        //$dompdf->stream("About.pdf", array("Attachment"=>0));
        //$fileUpload = $dompdf->output();
        //return $fileUpload;
    }


}