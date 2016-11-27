<?php
	// Calcul des pourcentages qui serviront pour l'indicateur
	if($nbConnexion[0] != 0)
		$poucentageLecture = ($nbLecture[0] * 100) / $nbConnexion[0];
	else
		$poucentageLecture = 0;
	
	if($nbLecture[0] != 0)
		$poucentageMessage = ($nbMessages[0] * 100) / $nbLecture[0];
	else
		$poucentageMessage = 0;
	
	if($nbLecture[0] != 0)
		$poucentageScroll = ($nbScroll[0] * 100) / $nbLecture[0];
	else
		$poucentageScroll = 0;
	
	if($nbScroll[0] != 0)
		$poucentageScrollBas = ($nbScrollBas[0] * 100) / $nbScroll[0];
	else
		$poucentageLecture = 0;

	if($nbFichierUpload[0] != 0)
		$poucentageDownload = ($nbFichierDownload[0] * 100) / $nbFichierUpload[0];
	else
		$poucentageLecture = 0;
?>