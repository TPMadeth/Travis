<?php
	// INDICATEUR DE LECTURE
	if($pourcentageLecture >= 0 && $pourcentageLecture < 40)
	{
		$indicateurLecture = "red";
	}
	else
	{
		if($pourcentageLecture >= 40 && $pourcentageLecture < 60)
		{
			$indicateurLecture = "orange";
		}
		else
		{
			$indicateurLecture = "green";
		}
	}
	
	// INDICATEUR DE PARTICIPATION
	if($pourcentageParticipation >= 0 && $pourcentageParticipation < 40)
	{
		$indicateurParticipation = "red";
	}
	else
	{
		if($pourcentageParticipation >= 40 && $pourcentageParticipation < 60)
		{
			$indicateurParticipation = "orange";
		}
		else
		{
			$indicateurParticipation = "green";
		}
	}
	
	// INDICATEUR DE COMPLÉMENT
	if($pourcentageComplement >= 0 && $pourcentageComplement < 40)
	{
		$indicateurComplement = "red";
	}
	else
	{
		if($pourcentageComplement >= 40 && $pourcentageComplement < 60)
		{
			$indicateurComplement = "orange";
		}
		else
		{
			$indicateurComplement = "green";
		}
	}
?>