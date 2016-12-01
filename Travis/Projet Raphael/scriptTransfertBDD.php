<?php
	include("./connexionBDD.php"); 
	
	// Remplissage table CMCTool
	$request = $bdd2->query("SELECT * FROM categorie"); 
	$request->execute(array());
	
	while($data=$request->fetch())
	{
		$request5 = $bdd->query("INSERT INTO `cmctool`(`libelle`) VALUES (:libelle)"); 
		$request5->execute(array(
		'libelle' => $data['Titre']
		));
		$request5->closeCursor();
	}
	$request->closeCursor();
	
	// Remplissage table Activite
	$request2 = $bdd2->query("SELECT * FROM activite"); 
	$request2->execute(array());
	
	while($data2=$request2->fetch())
	{
		$request6 = $bdd->query("INSERT INTO `activite`(`libelle`, `idCMCTool`) VALUES (:libelle, :idCMCTool)"); 
		$request6->execute(array(
		'libelle' => $data2['Titre'],
		'idCMCTool' => $data2['IDCat']
		));
		$request6->closeCursor();
	}
	$request2->closeCursor();
	
	// Remplissage table Action
	$request3 = $bdd2->query("SELECT * FROM transition WHERE Titre != 'Poster un nouveau message' OR Titre != 'Répondre à un message'"); 
	$request3->execute(array());
	
	while($data3=$request3->fetch())
	{
		$request7 = $bdd->query("INSERT INTO `action`(`date`, `libelle`) VALUES (:date, :libelle)"); 
		$request7->execute(array(
		'date' => $data3['date'],
		'libelle' => $data3['titre']
		));
		$request7->closeCursor();
	}
	$request3->closeCursor();
	
	// Remplissage table Message
	$request4 = $bdd2->query("SELECT * FROM transition WHERE Titre = 'Poster un nouveau message' OR Titre = 'Répondre à un message'"); 
	$request4->execute(array());
	
	$i = 1;
	
	while($data4=$request4->fetch())
	{
		if($data4)
		$request8 = $bdd->query("INSERT INTO `message`(`date`, `sender`) VALUES (:date, :sender)"); 
		$request8->execute(array(
		'date' => $data4['date'],
		'sender' => $data4['titre'],
		));
		$request8->closeCursor();
	}
	$request4->closeCursor();

	// Remplissage table Attributes
	$request5 = $bdd2->query("SELECT * FROM userfiles WHERE Titre = 'Upload un ficher avec le message'"); 
	$request5->execute(array());

	while($data5=$request5->fetch())
	{
		$request9 = $bdd->query("INSERT INTO `attributes`(`title`, `attachedFile`) VALUES (:title, :attachedFile)"); 
		$request9->execute(array(
		'title' => $data5['Filenameo'],
		'attachedFile' => $data5['Filenamer'],
		));
		$request9->closeCursor();
	}
	$request5->closeCursor();
?>