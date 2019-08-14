<?php
include_once ("jpgraph/jpgraph.php");
include_once ("jpgraph/jpgraph_pie.php");
include_once ("jpgraph/jpgraph_pie3d.php");	

$data = array(266036,295621,335851,254256,254254,685425);
$graph = new PieGraph(540,260,'auto');
$graph->SetShadow();				

$graph->title->Set("2009年液晶电视电冰箱月销量");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);

$p1 = new PiePlot3D($data);				
$p1->SetLegends(array("IT����","�ҵ�ͨѶ","�Ҿ�����","��װЬñ","��������","ʳƷ�̾�"));
$targ=array("pie3d_csimex1.php?v=1","pie3d_csimex1.php?v=2","pie3d_csimex1.php?v=3",
			"pie3d_csimex1.php?v=4","pie3d_csimex1.php?v=5","pie3d_csimex1.php?v=6");
$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
$p1->SetCSIMTargets($targ,$alts);

$p1->SetCenter(0.4,0.5);		
$graph->Add($p1);				
$graph->StrokeCSIM();			

?>

