<?php
	// Calcul des pourcentages qui serviront pour l'indicateur
	
	// POURCENTAGE DE LECTURE DU COUR (de personnes qui ont lu le cour en entier)
	if($nbAccesCours[0] != 0)
		$pourcentageLecture = ($nbScrollBas[0] * 100) / $nbAccesCours[0];
	else
		$pourcentageLecture = 0;
	
	// POURCENTAGE DE PARTICIPATION (nombre de commentaire en fonction de personne accedant au cour)
	if($nbAccesCours[0] != 0)
		$pourcentageParticipation = ($nbMessages[0] * 100) / $nbAccesCours[0];
	else
		$pourcentageParticipation = 0;
	
	// POURCENTAGE DE COMPLÉMENT DU COURS
	if($nbAccesCours[0] != 0)
		$pourcentageComplement = (($nbFichierDownload[0] * 100 / $nbFichierUpload[0]) * 100) / $nbAccesCours[0];
	else
		$pourcentageComplement = 0;
?>