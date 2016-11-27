<?php 
	include("./entete.php");
	include("./rechercheInfosSurLeCour.php");
	include("./calculPourcentage.php");
?>
	
	<p>
		<?php
		echo("Il y a eu ".$nbConnexion[0]." connexions sur votre site.");
		echo("Il y a eu ".$nbLecture[0]." lectures sur votre cour.");
		echo("Il y a eu ".$nbMessages[0]." messages (réponses incluses) postés sur votre cour.");
		echo("Il y a eu ".$nbScroll[0]." scroll sur votre cour.");
		echo("Il y a eu ".$nbScrollBas[0]." scroll sur votre cour.");
		echo("Il y a eu ".$nbFichierUpload[0]." fichiers upload sur votre cour.");
		echo("Il y a eu ".$nbFichierDownload[0]." fichiers download sur votre cour.");
		?>
	</p>
	<p>
		<?php
		echo("Poucentage de lecture : ".$poucentageLecture."%");
		echo("Poucentage de message : ".$poucentageMessage."%");
		echo("Poucentage de scroll : ".$poucentageScroll."%");
		echo("Poucentage de scroll bas : ".$poucentageScrollBas."%");
		echo("Poucentage de download : ".$poucentageDownload."%");
		?>
	</p>
</div>
<?php include("./pieddepage.php"); ?>