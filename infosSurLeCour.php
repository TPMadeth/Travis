<?php 
	include("./entete.php");
	include("./rechercheInfosSurLeCour.php");
	include("./calculPourcentage.php");
?>
	<p>
		<?php
		echo("Il y a eu ".$nbConnexion[0]." connexions sur votre site.");
		?>
	</p>
	<p>
		<?php
		echo("Il y a eu ".$nbAccesCours[0]." lectures sur votre cour. \n");
		echo("Il y a eu ".$nbScroll[0]." scroll sur votre cour. \n");
		echo("Il y a eu ".$nbScrollBas[0]." scroll jusqu'en bas sur votre cour. \n");
		echo("POURCENTAGE DE LECTURE : ".$pourcentageLecture."%");
		?>
	</p>	
	<p>
		<?php
		echo("Il y a eu ".$nbAccesCours[0]." lectures sur votre cour. \n");
		echo("Il y a eu ".$nbMessages[0]." messages (réponses incluses) postés sur votre cour.\n");
		echo("POURCENTAGE DE PARTICIPATION : ".$pourcentageParticipation."%");
		?>
	</p>
	<p>
		<?php
		echo("Il y a eu ".$nbAccesCours[0]." lectures sur votre cour. \n");
		echo("Il y a eu ".$nbFichierUpload[0]." fichiers upload sur votre cour.\n");
		echo("Il y a eu ".$nbFichierDownload[0]." fichiers download sur votre cour.\n");
		echo("POURCENTAGE DE COMPLÉMENT : ".$pourcentageComplément."%");
		?>
	</p>
</div>
<?php include("./pieddepage.php"); ?>