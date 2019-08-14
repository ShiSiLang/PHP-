<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_line.php");
include ("jpgraph/jpgraph_scatter.php");

$datay1 = array(83,57,93,112,142,112,89,125,69,105,118,75);	

$graph = new Graph(620,260);
$graph->SetMarginColor('red');
$graph->SetScale("textlin");
$graph->SetFrame(false);
$graph->SetMargin(30,5,25,20);

$graph->tabtitle->Set(' 2009��γ���������ͳ��  ' );
$graph->tabtitle->SetFont(FF_SIMSUN,FS_NORMAL,10);
$graph->tabtitle->SetColor('darkred','yellow');

$graph->xgrid->Show();

$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());

$p1 = new LinePlot($datay1);
$p1->SetColor("navy");

$p1->mark->SetType(MARK_IMG,'car.gif',0.8);		

$p1->value->SetFormat('%d');
$p1->value->Show();
$p1->value->SetColor('darkred');
$p1->value->SetFont(FF_ARIAL,FS_BOLD,10);
$p1->value->SetMargin(14);		

$p1->SetCenter();	
$graph->Add($p1);	
$graph->Stroke();	

?>


