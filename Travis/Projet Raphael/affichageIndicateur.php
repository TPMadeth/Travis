<?php // content="text/plain; charset=utf-8"
require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_pie.php');
require_once ('../jpgraph/jpgraph.php');
require_once ('../jpgraph/jpgraph_bar.php');
include("./connexionBDD.php"); 

// Récupération du nombre de messages (réponses comprises) postés sur le forum
$request = $bdd->query("SELECT COUNT(*) FROM message"); 
$request->execute(array());
$result = $request->fetch();
$request->closeCursor();
?>
<p>
<?php
	// Affichage du graphique
	// content="text/plain; charset=utf-8"		 
	//$datay=array($nbConnexion[0],$nbLecture[0],$nbMessages[0],$nbScroll[0],$nbScrollBas[0],$nbFichierUpload[0],$nbFichierDownload[0]);
	$datay=array($result);
	 
	// Size of graph
	$width=350;
	$height=150;

	$barcolors = array('red');
	 
	// Set the basic parameters of the graph
	$graph = new Graph($width,$height);
	$graph->SetScale('textlin');
	 
	$top = 0;
	$bottom = 0;
	$left = 0;
	$right = 0;
	$graph->Set90AndMargin($left,$right,$top,$bottom);
	 
	// Nice shadow
	$graph->SetShadow();
	 
	// Setup labels
	$lbl = array("nbMessages");
	$graph->xaxis->SetTickLabels($lbl);
	 
	// Label align for X-axis
	$graph->xaxis->SetLabelAlign('right','center','right');
	 
	// Label align for Y-axis
	$graph->yaxis->SetLabelAlign('center','bottom');
	 
	// Create a bar pot
	$bplot = new BarPlot($datay);
	$graph->Add($bplot);
	$bplot->value->Show();
	$bplot->value->SetColor('red','darkred');
	$bplot->SetColor('red'); 
	$bplot->SetWidth(0.3);
	$bplot->SetYMin(100);
	 
	$bplot->SetFillColor('red');
	 
	 @unlink("graph4.png");
	//$graph->Stroke();
	$graph->Stroke("graph4.png");
	echo "<img src='graph4.png' />";
?>
</p>