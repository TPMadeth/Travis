<?php
// Connexion à la base de donnée CMCTool
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=traceforum;charset=utf8', 'VOTRE IDENTIFIANT', 'VOTRE MOT DE PASSE');
}
catch (Exception $e)
{
        die('Erreur lors de la connexion à la base de données : ' . $e->getMessage());
}
?>