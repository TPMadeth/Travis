<?php 
	include("./entete.php");
	include("./rechercheInfosSurLeCour.php");
	include("./calculPourcentage.php");
	include("./traitementPourcentage.php");
?>


<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_pie.php');
require_once ('./jpgraph/jpgraph.php');
require_once ('./jpgraph/jpgraph_bar.php');
?>


<?php
// Some data
$data = array($pourcentageLecture);

$graph = new PieGraph(200,200);

//$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set("Lecture");
$graph->SetBox(true);

// Create
$p1 = new PiePlot($data);
$p1->value->HideZero(true);
$graph->Add($p1);
$p1->SetSliceColors(array($indicateurLecture));

@unlink("graph.png");
//$graph->Stroke();
$graph->Stroke("graph.png");
echo "<img src='graph.png' />";
?>



<?php // content="text/plain; charset=utf-8"
// Some data
$data = array($pourcentageParticipation);

$graph = new PieGraph(200,200);

$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set("Participation");
$graph->SetBox(true);

// Create
$p1 = new PiePlot($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(array($indicateurParticipation));


@unlink("graph2.png");
//$graph->Stroke();
$graph->Stroke("graph2.png");
echo "<img src='graph2.png' />";
?>

<?php // content="text/plain; charset=utf-8"
// Some data
$data = array($pourcentageParticipation);

$graph = new PieGraph(200,200);

$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set("Complément");
$graph->SetBox(true);

// Create
$p1 = new PiePlot($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->SetSliceColors(array($indicateurComplement));

@unlink("graph3.png");
//$graph->Stroke();
$graph->Stroke("graph3.png");
echo "<img src='graph3.png' />";
?>

<p>
</p>


<?php // content="text/plain; charset=utf-8"
 
//$datay=array($nbConnexion[0],$nbLecture[0],$nbMessages[0],$nbScroll[0],$nbScrollBas[0],$nbFichierUpload[0],$nbFichierDownload[0]);
 $datay=array($nbAccesCours[0],$nbScroll[0],$nbScrollBas[0]);
 
// Size of graph
$width=250;
$height=150;

$barcolors = array($indicateurLecture);
 
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
$lbl = array("nbLecture","nbScroll","nbScrollBas");
$graph->xaxis->SetTickLabels($lbl);
 
// Label align for X-axis
$graph->xaxis->SetLabelAlign('right','center','right');
 
// Label align for Y-axis
$graph->yaxis->SetLabelAlign('center','bottom');
 
// Titles
//$graph->title->Set('Bilan de votre cours');

 
// Create a bar pot
$bplot = new BarPlot($datay);
$graph->Add($bplot);
$bplot->value->Show();
$bplot->value->SetColor('red','darkred');
$bplot->SetColor($indicateurLecture); 
$bplot->SetWidth(0.3);
$bplot->SetYMin(100);
 
$bplot->SetFillColor($indicateurLecture);
 
 @unlink("graph4.png");
//$graph->Stroke();
$graph->Stroke("graph4.png");
echo "<img src='graph4.png' />";
?>

<?php // content="text/plain; charset=utf-8"
 
//$datay=array($nbConnexion[0],$nbLecture[0],$nbMessages[0],$nbScroll[0],$nbScrollBas[0],$nbFichierUpload[0],$nbFichierDownload[0]);
 $datay=array($nbAccesCours[0],$nbMessages[0]);
 
// Size of graph
$width=250;
$height=150;

$barcolors = array($indicateurParticipation);
 
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
$lbl = array("nbLecture","nbMessages");
$graph->xaxis->SetTickLabels($lbl);
 
// Label align for X-axis
$graph->xaxis->SetLabelAlign('right','center','right');
 
// Label align for Y-axis
$graph->yaxis->SetLabelAlign('center','bottom');
 
 
// Create a bar pot
$bplot = new BarPlot($datay);
$graph->Add($bplot);
$bplot->value->Show();
$bplot->value->SetColor($indicateurParticipation,'darkred');
$bplot->SetColor($indicateurParticipation); 
$bplot->SetWidth(0.3);
$bplot->SetYMin(100);
 
$bplot->SetFillColor($indicateurParticipation);
 
 @unlink("graph5.png");
//$graph->Stroke();
$graph->Stroke("graph5.png");
echo "<img src='graph5.png' />";
?>


<?php // content="text/plain; charset=utf-8"
 
//$datay=array($nbConnexion[0],$nbLecture[0],$nbMessages[0],$nbScroll[0],$nbScrollBas[0],$nbFichierUpload[0],$nbFichierDownload[0]);
 $datay=array($nbAccesCours[0],$nbFichierUpload[0],$nbFichierDownload[0]);
 
// Size of graph
$width=250;
$height=150;

$barcolors = array($indicateurComplement);
 
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
$lbl = array("nbLecture","nbFichierDownload","nbFichierUpload");
$graph->xaxis->SetTickLabels($lbl);
 
// Label align for X-axis
$graph->xaxis->SetLabelAlign('right','center','right');
 
// Label align for Y-axis
$graph->yaxis->SetLabelAlign('center','bottom');
 
 
// Create a bar pot
$bplot = new BarPlot($datay);
$graph->Add($bplot);
$bplot->value->Show();
$bplot->value->SetColor($indicateurComplement,'darkred');
$bplot->SetColor($indicateurComplement); 
$bplot->SetWidth(0.3);
$bplot->SetYMin(100);
 
$bplot->SetFillColor($indicateurComplement);
 
 @unlink("graph6.png");
//$graph->Stroke();
$graph->Stroke("graph6.png");
echo "<img src='graph6.png' />";
?>




	<p>
		<?php
		echo("Il y a eu ".$nbConnexion[0]." connexions sur votre site.");
		?>
	</p>
	<p>
		<?php
		echo("Il y a eu ".$nbAccesCours[0]." lectures sur votre cour.");
		echo("Il y a eu ".$nbScroll[0]." scroll sur votre cour.");
		echo("Il y a eu ".$nbScrollBas[0]." scroll jusqu'en bas sur votre cour.");
		echo("POURCENTAGE DE LECTURE : ".$pourcentageLecture."%");
		echo($indicateurLecture);
		?>
	</p>	
	<p>
		<?php
		echo("Il y a eu ".$nbAccesCours[0]." lectures sur votre cour.");
		echo("Il y a eu ".$nbMessages[0]." messages (réponses incluses) postés sur votre cour.");
		echo("POURCENTAGE DE PARTICIPATION : ".$pourcentageParticipation."%");
		echo($indicateurParticipation);
		?>
	</p>
	<p>
		<?php
		echo("Il y a eu ".$nbAccesCours[0]." lectures sur votre cour.");
		echo("Il y a eu ".$nbFichierUpload[0]." fichiers upload sur votre cour.");
		echo("Il y a eu ".$nbFichierDownload[0]." fichiers download sur votre cour.");
		echo("POURCENTAGE DE COMPLÉMENT : ".$pourcentageComplement."%");
		echo($indicateurComplement);
		?>
	</p>
</div>
<?php include("./pieddepage.php"); ?>