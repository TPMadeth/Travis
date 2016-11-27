<?php
	include("./connexionBDD.php"); 

// Nombre de lectures d'un cour
$req = $bdd->query("SELECT COUNT(*) FROM transition WHERE Attribut LIKE '%".$_POST['listeCours']."%' AND Titre LIKE '%structure%'"); 
$req->execute(array());
$nbLecture = $req->fetch();
$req->closeCursor();
// Nombre de messages sur un cour
$req2 = $bdd->query("SELECT COUNT(*) FROM transition WHERE Attribut LIKE '%".$_POST['listeCours']."%' AND Titre = 'Poster un nouveau message' OR Titre = 'Répondre à un message'");
$req2->execute(array());
$nbMessages = $req2->fetch();
$req2->closeCursor();
// Nombre de scroll sur un cour
$req3 = $bdd->query("SELECT COUNT(*) FROM transition WHERE Attribut LIKE '%".$_POST['listeCours']."%' AND Titre = 'Bouger la scrollbar en bas'");
$req3->execute(array());
$nbScroll = $req3->fetch();
$req3->closeCursor();
// Nombre de scroll jusqu'en bas sur un cour
$req4 = $bdd->query("SELECT COUNT(*) FROM transition WHERE Attribut LIKE '%".$_POST['listeCours']."%' AND Titre LIKE '%afficher la fin%'");
$req4->execute(array());
$nbScrollBas = $req4->fetch();
$req4->closeCursor();
// Nombre de fichier upload sur un cour
$req5 = $bdd->query("SELECT COUNT(*) FROM transition WHERE Attribut LIKE '%".$_POST['listeCours']."%' AND Titre LIKE 'Upload%'");
$req5->execute(array());
$nbFichierUpload = $req5->fetch();
$req5->closeCursor();
// Nombre de fichier download sur un cour
$req6 = $bdd->query("SELECT COUNT(*) FROM transition WHERE Attribut LIKE '%".$_POST['listeCours']."%' AND Titre LIKE 'Download%'");
$req6->execute(array());
$nbFichierDownload = $req6->fetch();
$req6->closeCursor();
// Nombre de connexion sur le site
$req7 = $bdd->query("SELECT COUNT(*) FROM transition WHERE Attribut LIKE '%".$_POST['listeCours']."%' AND Titre = 'Connexion'");
$req7->execute(array());
$nbConnexion = $req7->fetch();
$req7->closeCursor();
?>
