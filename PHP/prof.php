<!doctype php>
<?php

//Récupération du nom du professeur
			$nom=$Data[0];

			//Récupération du cours de l'utilisateur en fonction de l'heure actuelle
			$hour = date('G:i');
			$Query = "SELECT * FROM $Data[0] WHERE debut < '$hour' and fin > '$hour'";
			$Result = $Connect->query($Query);

			if ($Data = mysqli_fetch_array($Result))
			{
				echo "Prochain cours<br/>";
				echo "$Data[0] - $Data[1]<br/>";
				echo "$Data[2]<br/>$Data[3]<br/>$Data[4]<br/>";
			}
			else
			{
				echo "Pause";
			}

			//Formulaire pour créer un nouveau code et mettre la présence des étudiants à false
			echo "<form action='code.php?nom=$nom&cours=$Data[2]&code=0000' method='post'><p>";
			echo "<input type='submit' value='Creation du code'/></p></form>";

			//Formulaire pour afficher le nombre d'absences de chaque élève au cours actuel 
			echo "<form action='affichageAbsences.php?cours=$Data[2]' method='post'><p>";
			echo "<input type='submit' value='Affichage absences'/></p></form>";

			//Formulaire pour passer en mode appel manuel
			echo "<form action='appelManuel.php?cours=$Data[2]' method='post'><p>";
			echo "<input type='submit' value='Appel manuel'/></p></form>";

?>