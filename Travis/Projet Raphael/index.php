<?php 
include("./entete.php"); 
?>
<!-- Page d'accueil du site -->
			<p>
				Appuyez sur ce bouton pour remplir la BDD générique préalablement installée. A ne faire qu'UNE SEULE fois.
				<form method="POST" action="scriptTransfertBDD.php">
					<input type="submit" name="Ok" value="Remplir la BDD" >
				</form>
			</p>
			<p>
				Accèder à l'affichage d'un exemple d'indicateur calculé à partir de la BDD générique.
				<form method="POST" action="affichageIndicateur.php">
					<input type="submit" name="Ok" value="Afficher un indicateur" >
				</form>
			</p>
		</div>
<?php include("./pieddepage.php"); ?>

