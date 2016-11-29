<?php
	// INDICATEUR DE LECTURE
	if($pourcentageLecture >= 0 && $pourcentageLecture < 40)
	{
		$indicateurLecture = "red";
		$x=1;
	}
	else
	{
		if($pourcentageLecture >= 40 && $pourcentageLecture < 60)
		{
			$indicateurLecture = "orange";
			$x=5;
		}
		else
		{
			$indicateurLecture = "green";
			$x=10;
		}
	}
	
	// INDICATEUR DE PARTICIPATION
	if($pourcentageParticipation >= 0 && $pourcentageParticipation < 40)
	{
		$indicateurParticipation = "red";
		$y=1;
	}
	else
	{
		if($pourcentageParticipation >= 40 && $pourcentageParticipation < 60)
		{
			$indicateurParticipation = "orange";
			$y=5;
		}
		else
		{
			$indicateurParticipation = "green";
			$y=10;
		}
	}
	
	// INDICATEUR DE COMPLÉMENT
	if($pourcentageComplement >= 0 && $pourcentageComplement < 40)
	{
		$indicateurComplement = "red";
		$z=1;
	}
	else
	{
		if($pourcentageComplement >= 40 && $pourcentageComplement < 60)
		{
			$indicateurComplement = "orange";
			$z=5;
		}
		else
		{
			$indicateurComplement = "green";
			$z=10;
		}
	}

	//Calcul Total
	
	$Total = $x + $y + $z;

	
	
	// INDICATEUR DE TOTAL
	if($Total < 10)
	{
		$indicateurTotal = "red";
	}
	else
	{
		if($Total >= 10 && $Total < 25)
		{
			$indicateurTotal = "orange";
		}
		else
		{
			$indicateurTotal = "green";
		}
	}
	
	

?>


