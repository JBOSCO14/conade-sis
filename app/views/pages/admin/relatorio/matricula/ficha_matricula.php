<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
    src:local("Cambria Math"),
    local("Cambria Math"),
    url(http://www.cambria.com/fonts/Cambria%20Math%20v15.8.0.zip) format("embedded");
    unicode-1:1 2 3 4 5;
    unicode-2:1 2 3 4 5;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
    src:local("Calibri"),
    local("Calibri"),
    url(http://www.calibri.com/fonts/calibri%20v15.8.0.zip) format("embedded");
    unicode-1:1 2 3 4 5;
    unicode-2:1 2 3 4 5;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:80%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{margin:0cm;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-size:10.0pt;
	font-family:"Calibri",sans-serif;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:35.45pt 35.35pt 21.3pt 2.0cm;
}

</style>


</head>
<?php
if($dados){
  foreach($dados as $row){
 ?>
<body lang=PT-BR link=blue vlink=purple style='word-wrap:break-word'>

<div class=WordSection1>

<p class=MsoNoSpacing><b><u><span style='font-size:12.0pt;font-family:"Arial",sans-serif'>ESCOLA
MUNICIPAL DE ENSINO FUNDAMENTAL SAO BERNARDO</span></u></b></p>

<p class=MsoNoSpacing><span style='font-size:10.0pt;font-family:"Arial",sans-serif'>Forquilha,
Rodovia BR 304 Km 20 SN – CEP: 62847-000 – Beberibe – CE</span></p>

<p class=MsoNoSpacing><b><span style='font-family:"Arial",sans-serif'>Código
INEP: 23058919</span></b></p>

<p class=MsoNoSpacing><span style='font-size:10.0pt;font-family:"Arial",sans-serif'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></p>

<p class=MsoNoSpacing><b><u><span style='font-size:12.0pt;font-family:"Arial",sans-serif'>FICHA
DE MATRÍCULA</span></u></b></p>

<p class=MsoNoSpacing align=center style='text-align:center'><span
style='font-size:10.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=643
 style='width:482.0pt;margin-left:-.25pt;border-collapse:collapse'>
 <tr style='height:11.35pt'>
  <td width=643 colspan=4 style='width:482.0pt;border:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.35pt'>
  <p class=MsoNoSpacing align=center style='text-align:center;line-height:115%'><b><span
  style='font-size:9.0pt;line-height:115%;font-family:"Arial",sans-serif'>DADOS
  DO ALUNO</span></b></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 colspan=4 style='width:482.0pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Nome do aluno(a): </span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'><?php echo $row['nome']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=302 style='width:226.55pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Data de Nascimento</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>:
    <?php echo date('d/m/Y',strtotime($row['nome'])); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
  </td>
  <td width=198 colspan=2 style='width:148.85pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Raça/Cor: </span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>NÃO
  DECLARADA</span></p>
  </td>
  <td width=142 style='width:106.6pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Sexo: </span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'><?php echo $row['sexo']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=302 style='width:226.55pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Nacionalidade</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>:
    <?php echo $row['nacionalidade']; ?></span></p>
  </td>
  <td width=341 colspan=3 style='width:255.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Naturalidade</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>:
    <?php echo $row['naturalidade']; ?>-<?php echo $row['uf_nat']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 colspan=4 style='width:482.0pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Certidão de
  Nascimento Nº: </span></b><span style='font-size:10.0pt;line-height:115%;
  font-family:"Arial",sans-serif'>--</span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=302 style='width:226.55pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Data da Emissão: </span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>--</span></p>
  </td>
  <td width=341 colspan=3 style='width:255.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>E-mail: </span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'><?php echo $row['email']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=302 style='width:226.55pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>ID. do aluno</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>:
    <?php echo $row['idcenso']; ?></span></p>
  </td>
  <td width=341 colspan=3 style='width:255.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Matrícula Sige</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>:
    <?php echo $row['sige']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=302 style='width:226.55pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>RG</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>.:
    <?php echo $row['rg']; ?></span></p>
  </td>
  <td width=341 colspan=3 style='width:255.45pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>CPF</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>:
    <?php echo $row['cpf']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 colspan=4 style='width:482.0pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Endereço/Localidade:</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>&nbsp;
  <?php echo $row['endereco']; ?>, <?php echo $row['bairro']; ?> - CEP:<?php echo $row['cep']; ?> - <?php echo $row['cidade']; ?>-<?php echo $row['uf_cid']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 colspan=4 style='width:482.0pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Utiliza transporte
  escolar?&nbsp; </span></b><span style='font-size:10.0pt;line-height:115%;
  font-family:"Arial",sans-serif'><?php echo $row['transp']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 colspan=4 style='width:482.0pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Escola anterior: </span></b></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 colspan=4 style='width:482.0pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Beneficiário do Bolsa
  Família? </span></b><span style='font-size:10.0pt;line-height:115%;
  font-family:"Arial",sans-serif'><?php echo $row['bolsa']; ?><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;NIS: </b><?php echo $row['nis']; ?></span></p>
  </td>
 </tr>
 <tr style='height:44.8pt'>
  <td width=643 colspan=4 valign=top style='width:482.0pt;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:44.8pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Matrícula:</span></b></p>
  <p class=MsoNoSpacing style='line-height:150%'><span style='font-size:9.0pt;
  line-height:150%;font-family:"Arial",sans-serif'>(&nbsp;&nbsp;&nbsp; ) 1º Ano
  - (&nbsp;&nbsp;&nbsp; ) 2º Ano&nbsp; (&nbsp;&nbsp;&nbsp; ) 3º Ano&nbsp;
  (&nbsp;&nbsp;&nbsp; ) 4º Ano&nbsp; (&nbsp;&nbsp;&nbsp; ) 5º Ano&nbsp;
  (&nbsp;&nbsp;&nbsp; ) 6º Ano&nbsp; (&nbsp;&nbsp;&nbsp; ) 7º Ano&nbsp;
  (&nbsp;&nbsp;&nbsp; ) 8º Ano&nbsp; (&nbsp;&nbsp;&nbsp; ) 9º Ano</span></p>
  <p class=MsoNoSpacing style='line-height:150%'><span style='font-size:9.0pt;
  line-height:150%;font-family:"Arial",sans-serif'>(&nbsp;&nbsp;&nbsp; ) CBP 3
  anos – (&nbsp;&nbsp;&nbsp; ) CP 4 anos – (&nbsp;&nbsp;&nbsp; ) CP 5 anos</span></p>
  </td>
 </tr>
 <tr>
  <td width=302 style='width:226.55pt;padding:0cm 0cm 0cm 0cm'></td>
  <td width=11 style='width:7.95pt;padding:0cm 0cm 0cm 0cm'></td>
  <td width=188 style='width:140.9pt;padding:0cm 0cm 0cm 0cm'></td>
  <td width=142 style='width:106.6pt;padding:0cm 0cm 0cm 0cm'></td>
 </tr>
 <tr>
  <td width=302 style='width:226.5pt;padding:0cm 0cm 0cm 0cm'></td>
  <td width=11 style='width:8.25pt;padding:0cm 0cm 0cm 0cm'></td>
  <td width=188 style='width:141.0pt;padding:0cm 0cm 0cm 0cm'></td>
  <td width=142 style='width:106.5pt;padding:0cm 0cm 0cm 0cm'></td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:10.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=643
 style='width:17.0cm;margin-left:-.25pt;border-collapse:collapse'>
 <tr style='height:11.35pt'>
  <td width=643 colspan=2 style='width:17.0cm;border:solid black 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:11.35pt'>
  <p class=MsoNoSpacing align=center style='text-align:center;line-height:115%'><b><span
  style='font-size:9.0pt;line-height:115%;font-family:"Arial",sans-serif'>FILIAÇÃO</span></b></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=434 style='width:325.8pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Nome da mãe:</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>
  <?php echo $row['nome_mae']; ?></span></p>
  </td>
  <td width=208 style='width:156.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Contato</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>:
  (<?php echo $row['ddd1']; ?>) <?php echo $row['contato1']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=434 style='width:325.8pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><span style='font-size:10.0pt;
  line-height:115%;font-family:"Arial",sans-serif'>Doc.:______________________
  Profissão: ____________________</span></p>
  </td>
  <td width=208 style='width:156.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><span style='font-size:10.0pt;
  line-height:115%;font-family:"Arial",sans-serif'>Religião: NÃO DECLARADA</span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=434 style='width:325.8pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Nome do pai:</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>
  <?php echo $row['nome_pai']; ?></span></p>
  </td>
  <td width=208 style='width:156.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Contato</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>:
  (<?php echo $row['ddd2']; ?>) <?php echo $row['contato2']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=434 style='width:325.8pt;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><span style='font-size:10.0pt;
  line-height:115%;font-family:"Arial",sans-serif'>Doc.:______________________
  Profissão: ____________________</span></p>
  </td>
  <td width=208 style='width:156.15pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><span style='font-size:10.0pt;
  line-height:115%;font-family:"Arial",sans-serif'>Religião: NÃO DECLARADA</span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 colspan=2 style='width:17.0cm;border:solid black 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Renda Familiar
  declarada</span></b><span style='font-size:10.0pt;line-height:115%;
  font-family:"Arial",sans-serif'>: (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ) Abaixo de
  um salário
  mínimo.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  ) Acima de um salário mínimo.</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing align=center style='text-align:center'><span
style='font-size:10.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>

<p class=MsoNoSpacing><b><span style='font-size:9.0pt;font-family:"Arial",sans-serif'>CONDIÇÃO
DO ALUNO NO ANO ANTERIOR:</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:9.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></b></p>

<p class=MsoNoSpacing><b><span style='font-size:9.0pt;font-family:"Arial",sans-serif'>(</span></b><span
style='font-size:9.0pt;font-family:"Arial",sans-serif'>&nbsp;&nbsp;&nbsp; <b>)
APROVADO (A)                                            (</b>&nbsp;&nbsp;&nbsp;
<b>) REPROVADO (A)                                      (</b>&nbsp;&nbsp;&nbsp;
<b>) CURSANDO</b></span></p>

<p class=MsoNoSpacing><b><span style='font-size:9.0pt;font-family:"Arial",sans-serif'>(</span></b><span
style='font-size:9.0pt;font-family:"Arial",sans-serif'>&nbsp;&nbsp;&nbsp; <b>)
FREQUENTOU A EJA ANO ANTERIOR     (</b>&nbsp;&nbsp;&nbsp; <b>) NÃO
FREQUENTOU A ESCOLA</b></span></p>

<p class=MsoNoSpacing><b><span style='font-size:9.0pt;font-family:"Arial",sans-serif'>(</span></b><span
style='font-size:9.0pt;font-family:"Arial",sans-serif'>&nbsp;&nbsp;&nbsp; <b>)
MATRÍCULA FINAL                                      (&nbsp;&nbsp;&nbsp;
) DEIXOU DE FREQUENTAR</b></span></p>

<p class=MsoNoSpacing><b><span style='font-size:9.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=643
 style='width:18.0cm;margin-left:-.25pt;border-collapse:collapse'>
 <tr style='height:11.35pt'>
  <td width=643 style='width:17.0cm;border:solid black 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.35pt'>
  <p class=MsoNoSpacing align=center style='text-align:center;line-height:115%'><b><span
  style='font-size:9.0pt;line-height:115%;font-family:"Arial",sans-serif'>SAÚDE
  DO ALUNO</span></b></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 style='width:17.0cm;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Tem problemas de
  saúde? (&nbsp; &nbsp;&nbsp;&nbsp;) Sim&nbsp;&nbsp;&nbsp;
  (&nbsp;&nbsp;&nbsp;&nbsp; ) Não &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Descrição:________________________________</span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 style='width:17.0cm;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Faz acompanhamento
  médico? (&nbsp;&nbsp;&nbsp;&nbsp; ) Sim&nbsp;&nbsp;&nbsp;
  (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ) Não&nbsp;&nbsp;&nbsp; </span></b><span
  style='font-size:10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Onde:________________________________</span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 style='width:17.0cm;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Aluno com
  Necessidades Educativas Especiais? (&nbsp;&nbsp;&nbsp;&nbsp; )
  Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (&nbsp;&nbsp;&nbsp;&nbsp; ) Não</span></b></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 style='width:17.0cm;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Tipo de Necessidades Educativas
  Especiais:</span></b><span style='font-size:10.0pt;line-height:115%;
  font-family:"Arial",sans-serif'>&nbsp; </span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 style='width:17.0cm;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Tem acompanhamento
  pedagógico?&nbsp; (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; )
  Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ) Não</span></b></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 style='width:17.0cm;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Cartão Nacional de
  Saúde - SUS: </span></b><span style='font-size:10.0pt;line-height:115%;
  font-family:"Arial",sans-serif'><?php echo $row['sus']; ?></span></p>
  </td>
 </tr>
 <tr style='height:14.2pt'>
  <td width=643 style='width:17.0cm;border:solid black 1.0pt;border-top:none;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.2pt'>
  <p class=MsoNoSpacing style='line-height:115%'><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Arial",sans-serif'>Cartão de Vacina
  Atualizado - LEI 16.929 DE 09/07/2019&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  (&nbsp;&nbsp;&nbsp; )
  Sim&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  (&nbsp;&nbsp;&nbsp;&nbsp; ) Não</span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing><span style='font-size:7.0pt'>&nbsp;</span></p>

<p class=MsoNoSpacing><span style='font-family:"Arial",sans-serif'>BEBERIBE-CE, <?php echo strftime('%d de %B de %Y', strtotime(date('Y-m-d'))); ?>.</span></p>

<p class=MsoNoSpacing><span style='font-size:7.0pt'>&nbsp;</span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=643
 style='width:18.0cm;margin-left:-.25pt;border-collapse:collapse;border:1px solid black;'>
 <tr style='height:45.0pt'>
  <td width=350 valign=top style='width:262.25pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:45.0pt'>
  <p class=MsoNoSpacing><span style='font-size:9.0pt;font-family:"Arial",sans-serif'>Assinatura
  dos pais ou responsáveis:</span></p>
  </td>
  <td width=293 valign=top style='width:219.7pt;border:solid windowtext 1.0pt;
  border-left:1px solid black;padding:0cm 5.4pt 0cm 5.4pt;height:45.0pt'>
  <p class=MsoNoSpacing align=right style='text-align:right'><span
  style='font-size:9.0pt;font-family:"Arial",sans-serif'>Assinatura de quem
  realizou a matrícula:</span></p>
  </td>
 </tr>
</table>

<p class=MsoNoSpacing align=center style='text-align:center'>&nbsp;</p>

<p class=MsoNoSpacing align=center style='text-align:center'><span
style='font-size:10.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>

<p class=MsoNoSpacing align=center style='text-align:center'><span
style='font-size:10.0pt;font-family:"Arial",sans-serif'>Forquilha, Rodovia BR
304 Km 20 sn – CEP: 62840-000 – Beberibe-CE</span></p>

<p class=MsoNoSpacing align=center style='text-align:center'><span
style='font-size:10.0pt;font-family:"Arial",sans-serif'>E-mail: <a
href="mailto:esaobernardo@gmail.com">esaobernardo@gmail.com</a></span></p>

<p class=MsoNoSpacing align=center style='text-align:center'><span
style='font-size:10.0pt;font-family:"Arial",sans-serif'>&nbsp;</span></p>

</div>

</body>

</html>
<?php }} ?>
