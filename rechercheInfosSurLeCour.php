<?php 
	include("./entete.php");
	include("./connexionBDD.php"); 

// Récupération de la liste des cours
$req = $bdd->query("SELECT COUNT(*) FROM transition WHERE Attribut LIKE '%".$_POST['listeCours']."%' AND Titre LIKE '%structure%'"); 
$req->execute(array());

$nbConnexion = $req->fetch();
?>
	<p>
		<?php
		echo("Il y a eu ".$nbConnexion[0]." connexions sur votre cour.");
		?>
	</p>
</div>
<?php include("./pieddepage.php"); ?>