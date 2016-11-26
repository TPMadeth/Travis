<?php
// Connexion à la base de donnée
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=microprojet;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur lors de la connexion à la base de données : ' . $e->getMessage());
}
?>