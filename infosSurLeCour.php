<?php 
	include("./entete.php");
	include("./rechercheInfosSurLeCour.php");
?>
	
	<p>
		<?php
		echo("Il y a eu ".$nbConnexion[0]." connexions sur votre cour.");
		echo("Il y a eu ".$nbMessages[0]." messages (réponses incluses) postés sur votre cour.");
		echo("Il y a eu ".$nbScroll[0]." scroll sur votre cour.");
		echo("Il y a eu ".$nbScrollBas[0]." scroll sur votre cour.");
		echo("Il y a eu ".$nbFichierUpload[0]." fichiers upload sur votre cour.");
		echo("Il y a eu ".$nbFichierDownload[0]." fichiers download sur votre cour.");
		?>
	</p>
</div>
<?php include("./pieddepage.php"); ?>