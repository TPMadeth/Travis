<?php 
include("./entete.php"); 
?>
<!-- Page d'accueil du site -->
			<p>
				<form method="POST" action="scriptTransfertBDD.php">
					<input type="submit" name="Ok" value="Remplir la BDD" >
				</form>
			</p>
			<p>
				<form method="POST" action="affichageIndicateur.php">
					<input type="submit" name="Ok" value="Afficher un indicateur" >
				</form>
			</p>
		</div>
<?php include("./pieddepage.php"); ?>

