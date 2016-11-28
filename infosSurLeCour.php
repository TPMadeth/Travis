<?php 
	include("./entete.php");
	include("./rechercheInfosSurLeCour.php");
	include("./calculPourcentage.php");
	include("./traitementPourcentage.php");
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