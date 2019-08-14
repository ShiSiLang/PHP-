<?php
include ("jpgraph/jpgraph.php");
include ("jpgraph/jpgraph_bar.php");

$datay1=array(58,85,65,39,120,91,152,49,97,130,67);
$datay2=array(18,35,101,69,138,131,112,149,88,60,77);

$graph = new Graph(620,300,'auto');	
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->SetMarginColor("yellow");							//设置画布背景色为淡蓝色
$graph->img->SetMargin(40,30,40,40);
$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());

$graph->xaxis->title->Set('');
$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);

$graph->title->Set('应用柱形图依次统计2009年液晶电视、电冰箱的月销量');
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);

$bplot1 = new BarPlot($datay1);
$bplot2 = new BarPlot($datay2);

$bplot1->SetFillColor("orange");
$bplot2->SetFillColor("lightblue");

$bplot1->SetShadow();
$bplot2->SetShadow();

$bplot1->SetShadow();
$bplot2->SetShadow();

$gbarplot = new GroupBarPlot(array($bplot1,$bplot2));
$gbarplot->SetWidth(0.6);
$graph->Add($gbarplot);

$graph->Stroke();
?>

