<?php
  		include ("jpgraph/jpgraph.php");
        include ("jpgraph/jpgraph_line.php");														//引用3D饼形图所在的文件呢
		$datay = array(8320,9360,14956,17028,13060,15376,25428,16216,28548,18632,22724,28460);		//定义数组   
        $graph = new Graph(600,300,"auto");								
        $graph->img->SetMargin(50,40,30,40);    						
        $graph->img->SetAntiAliasing();									
        $graph->SetScale("textlin");									
        $graph->SetShadow();											
        $graph->title->Set("PHP 2019销量统计");
		$graph->title->SetFont(FF_SIMSUN,FS_BOLD);				
        $graph->SetMarginColor("lightblue");					
        $graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);		
        $graph->xaxis->SetPos("min");
        $graph->yaxis->HideZeroLabel();
        $graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');
        $a=array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
        $graph->xaxis->SetTickLabels($a); 					
        $graph->xaxis->SetFont(FF_SIMSUN); 				
        $graph->yscale->SetGrace(20); 
   
        $p1 = new LinePlot($datay);							
        $p1->mark->SetType(MARK_FILLEDCIRCLE);			
        $p1->mark->SetFillColor("red");					
        $p1->mark->SetWidth(4);							
        $p1->SetColor("blue");							
        $p1->SetCenter();								
        $graph->Add($p1);								
        $graph->Stroke();								
?>
