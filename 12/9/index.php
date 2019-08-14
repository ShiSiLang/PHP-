<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_pie.php");

$data1 = array(40,21,17,14,23);
$data2 = array(60,54,107,24,83);
$data3 = array(52,151,99,110,223);
$data4 = array(70,181,117,114,33);

$graph = new PieGraph(600,350,"auto");
$graph->SetShadow();

$graph->title->Set("ͳ��2006�ꡢ2007�ꡢ2008�ꡢ2009��ũ��Ʒ�Ĳ�������");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);

$size=0.13;
$p1 = new PiePlot($data1);
$p1->SetLegends(array("��","����","ˮ��","С��","����"));
$p1->SetSize($size);
$p1->SetCenter(0.25,0.32);
$p1->value->SetFont(FF_FONT0);
$p1->title->Set("2006��");
$p1->title->SetFont(FF_SIMSUN,FS_BOLD);

$p2 = new PiePlot($data2);
$p2->SetSize($size);
$p2->SetCenter(0.65,0.32);
$p2->value->SetFont(FF_FONT0);
$p2->title->Set("2007��");
$p2->title->SetFont(FF_SIMSUN,FS_BOLD);

$p3 = new PiePlot($data3);
$p3->SetSize($size);
$p3->SetCenter(0.25,0.75);
$p3->value->SetFont(FF_FONT0);
$p3->title->Set("2008��");
$p3->title->SetFont(FF_SIMSUN,FS_BOLD);

$p4 = new PiePlot($data4);
$p4->SetSize($size);
$p4->SetCenter(0.65,0.75);
$p4->value->SetFont(FF_FONT0);
$p4->title->Set("2009��");
$p4->title->SetFont(FF_SIMSUN,FS_BOLD);

$graph->Add($p1);
$graph->Add($p2);
$graph->Add($p3);
$graph->Add($p4);

$graph->Stroke();

?>



