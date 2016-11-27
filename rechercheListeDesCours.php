<?php 
	include("./connexionBDD.php"); 

// Récupération de la liste des cours
$req = $bdd->prepare("SELECT DISTINCT Attribut FROM `transition` WHERE Attribut LIKE 'IDForum=%' AND Attribut NOT LIKE '%,%'");
$req->execute(array());

$cours = $req->fetch();

// Si aucun cours n'est trouvé
if (!$cours)
{
	echo "Il n'y a actuellement aucun cours de posté sur votre forum.";
}
else
{ ?>
	<label for="listeCours">Sélectionnez votre cours<label>
    <select name="listeCours" id="listeCours">
		<?php
		do
		{ 
			$idCours = substr($cours['Attribut'], 8);
		?>
			<option value="monCour"><?php echo $idCours;?></option>
		<?php 
		}
		while ($cours = $req->fetch())
		?>
    </select>
<?php
}
?>
</div>
