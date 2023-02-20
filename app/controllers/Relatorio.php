<?php
namespace app\controllers;

use app\lib\View;
use app\models\ConsultaDao;
use app\models\EnturmacaoDao;
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
        $document = new Dompdf();
        $document->loadHtml($page);
        $document->setPaper('A4', 'landscape');
        $document->render();
        $document->stream("Frequencia_de_sala_" . date('Y-m-d-H-i-s') . "-" . rand() . ".pdf", array("Attachment" =>false));
        //$document->stream("About.pdf", array("Attachment"=>0));
        //$fileUpload = $document->output();
        //return $fileUpload;
    }

    public function exportXls(){
        $dados = array();
        $dados = ConsultaDao::reloadTurmaId($_GET['id_turma']);
        View::renderPrinter('pages/admin/relatorio/freq_sala_xls',$dados);
    }


}