<?php
// Connexion à la base de donnée CMCTool
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=tracescmc;charset=utf8', 'VOTRE IDENTIFIANT', 'VOTRE MOT DE PASSE');
	$bdd->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
}
catch (Exception $e)
{
        die('Erreur lors de la connexion à la base de données : ' . $e->getMessage());
}

// Connexion à la base de donnée traceForum
try
{
	$bdd2 = new PDO('mysql:host=localhost;dbname=traceforum;charset=utf8', 'VOTRE IDENTIFIANT', 'VOTRE MOT DE PASSE');
	$bdd2->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
}
catch (Exception $e)
{
        die('Erreur lors de la connexion à la base de données : ' . $e->getMessage());
}
?>