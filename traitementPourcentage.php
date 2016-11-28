<?php
	// INDICATEUR DE LECTURE
	if($pourcentageLecture >= 0 && $pourcentageLecture < 40)
	{
		$indicateurLecture = "rouge";
	}
	else
	{
		if($pourcentageLecture >= 40 && $pourcentageLecture < 60)
		{
			$indicateurLecture = "orange";
		}
		else
		{
			$indicateurLecture = "vert";
		}
	}
	
	// INDICATEUR DE PARTICIPATION
	if($pourcentageParticipation >= 0 && $pourcentageParticipation < 40)
	{
		$indicateurParticipation = "rouge";
	}
	else
	{
		if($pourcentageParticipation >= 40 && $pourcentageParticipation < 60)
		{
			$indicateurParticipation = "orange";
		}
		else
		{
			$indicateurParticipation = "vert";
		}
	}
	
	// INDICATEUR DE COMPLÉMENT
	if($pourcentageComplement >= 0 && $pourcentageComplement < 40)
	{
		$indicateurComplement = "rouge";
	}
	else
	{
		if($pourcentageComplement >= 40 && $pourcentageComplement < 60)
		{
			$indicateurComplement = "orange";
		}
		else
		{
			$indicateurComplement = "vert";
		}
	}
?>