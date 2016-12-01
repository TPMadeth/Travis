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
	<form action="infosSurLeCour.php" method="post">
		<label for="listeCours">Sélectionnez votre cours<label>
		<select name="listeCours" id="listeCours">
			<?php
			do
			{ 
			?>
				<option value="<?php echo $cours['Attribut']; ?>"><?php echo $cours['Attribut'];?></option>
			<?php 
			}
			while ($cours = $req->fetch())
			?>
		</select>
		<input type="submit" value="valider" name="OK">
	</form>
<?php
}
?>
</div>
